<?php
session_start();
?>
<script type="text/javascript">
        var gk_isXlsx = false;
        var gk_xlsxFileLookup = {};
        var gk_fileData = {};
        function filledCell(cell) {
          return cell !== '' && cell != null;
        }
        function loadFileData(filename) {
        if (gk_isXlsx && gk_xlsxFileLookup[filename]) {
            try {
                var workbook = XLSX.read(gk_fileData[filename], { type: 'base64' });
                var firstSheetName = workbook.SheetNames[0];
                var worksheet = workbook.Sheets[firstSheetName];

                // Convert sheet to JSON to filter blank rows
                var jsonData = XLSX.utils.sheet_to_json(worksheet, { header: 1, blankrows: false, defval: '' });
                // Filter out blank rows (rows where all cells are empty, null, or undefined)
                var filteredData = jsonData.filter(row => row.some(filledCell));

                // Heuristic to find the header row by ignoring rows with fewer filled cells than the next row
                var headerRowIndex = filteredData.findIndex((row, index) =>
                  row.filter(filledCell).length >= filteredData[index + 1]?.filter(filledCell).length
                );
                // Fallback
                if (headerRowIndex === -1 || headerRowIndex > 25) {
                  headerRowIndex = 0;
                }

                // Convert filtered JSON back to CSV
                var csv = XLSX.utils.aoa_to_sheet(filteredData.slice(headerRowIndex)); // Create a new sheet from filtered array of arrays
                csv = XLSX.utils.sheet_to_csv(csv, { header: 1 });
                return csv;
            } catch (e) {
                console.error(e);
                return "";
            }
        }
        return gk_fileData[filename] || "";
        }
        </script><?php
//session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Redirect to cart if empty
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit;
}

// Calculate total
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Sweet Delights</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body class="font-sans bg-gray-50">
    <?php include '../Components/header.php'; ?>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold mb-8">Checkout</h1>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Order Summary -->
                <div class="lg:col-span-2 bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-bold mb-4">Order Summary</h2>
                    <div class="divide-y divide-gray-200">
                        <?php foreach ($_SESSION['cart'] as $item): ?>
                            <?php
                            $subtotal = $item['price'] * $item['quantity'];
                            ?>
                            <div class="flex items-center py-4">
                                <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" class="w-16 h-16 object-cover rounded-md mr-4">
                                <div class="flex-1">
                                    <h3 class="text-lg font-medium"><?php echo htmlspecialchars($item['name']); ?></h3>
                                    <p class="text-gray-600">Rs. <?php echo number_format($item['price'], 2); ?> x <?php echo $item['quantity']; ?></p>
                                </div>
                                <p class="text-lg font-bold">Rs. <?php echo number_format($subtotal, 2); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-6 border-t border-gray-200 pt-4">
                        <div class="flex justify-between text-xl font-bold">
                            <span>Total</span>
                            <span>Rs. <?php echo number_format($total, 2); ?></span>
                        </div>
                    </div>
                </div>
                <!-- Payment Form -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-bold mb-4">Payment Details</h2>
                    <form id="payment-form" action="process-payment.php" method="POST">
                        <div class="mb-4">
                            <label for="card-element" class="block text-gray-700 font-medium mb-2">Credit or Debit Card</label>
                            <div id="card-element" class="border border-gray-300 rounded-md p-3"></div>
                            <div id="card-errors" class="text-red-600 text-sm mt-2" role="alert"></div>
                        </div>
                        <input type="hidden" name="amount" value="<?php echo $total * 100; ?>">
                        <button type="submit" id="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Pay Rs. <?php echo number_format($total, 2); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include '../Components/footer.php'; ?>

    <script>
    const stripe = Stripe('pk_test_your_publishable_key');
    const elements = stripe.elements();
    const card = elements.create('card');
    card.mount('#card-element');

    card.on('change', ({error}) => {
        const displayError = document.getElementById('card-errors');
        if (error) {
            displayError.textContent = error.message;
        } else {
            displayError.textContent = '';
        }
    });

    const form = document.getElementById('payment-form');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        const submitButton = document.getElementById('submit');
        submitButton.disabled = true;

        const {paymentIntent, error} = await stripe.confirmCardPayment(
            '<?php echo isset($_SESSION['client_secret']) ? $_SESSION['client_secret'] : ''; ?>',
            {
                payment_method: {
                    card: card,
                }
            }
        );

        if (error) {
            document.getElementById('card-errors').textContent = error.message;
            submitButton.disabled = false;
        } else if (paymentIntent.status === 'succeeded') {
            // Submit form to process-payment.php
            form.submit();
        }
    });
    </script>
    <script src="script.js"></script>
</body>
</html>