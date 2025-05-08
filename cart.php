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
        </script><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="GALAXY A51/71, initial-scale=1.0">
  <title>Cart | Sweet Delights</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="font-sans bg-gray-50">
  <!-- Header (same as categories.html, omitted for brevity) -->
  <?php include 'header.php'; ?>

  <!-- Cart Section -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
      <h1 class="text-3xl font-bold mb-8">Your Cart</h1>
      <?php
      //session_start();
      if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])):
      ?>
      <div class="bg-white rounded-lg shadow-md p-6">
        <table class="w-full text-left">
          <thead>
            <tr class="border-b border-gray-200">
              <th class="py-3">Product</th>
              <th class="py-3">Price</th>
              <th class="py-3">Quantity</th>
              <th class="py-3">Total</th>
              <th class="py-3"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $total = 0;
            foreach ($_SESSION['cart'] as $id => $item):
              $subtotal = $item['price'] * $item['quantity'];
              $total += $subtotal;
            ?>
            <tr class="border-b border-gray-100">
              <td class="py-4 flex items-center">
                <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" class="w-16 h-16 object-cover rounded-md mr-4">
                <span><?php echo htmlspecialchars($item['name']); ?></span>
              </td>
              <td class="py-4">Rs. <?php echo number_format($item['price'], 2); ?></td>
              <td class="py-4">
                <form action="update-cart.php" method="POST">
                  <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                  <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1" class="w-16 px-2 py-1 border border-gray-300 rounded-md">
                  <button type="submit" class="text-amber-600 hover:text-amber-700 ml-2"><i class="fas fa-sync-alt"></i></button>
                </form>
              </td>
              <td class="py-4">Rs. <?php echo number_format($subtotal, 2); ?></td>
              <td class="py-4">
                <form action="remove-from-cart.php" method="POST">
                  <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                  <button type="submit" class="text-red-600 hover:text-red-700"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="mt-6 flex justify-between items-center">
          <div>
            <p class="text-xl font-bold">Total: Rs. <?php echo number_format($total, 2); ?></p>
          </div>
          <a href="checkout.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Proceed to Checkout</a>
        </div>
      </div>
      <?php else: ?>
      <p class="text-center text-gray-600">Your cart is empty.</p>
      <div class="text-center mt-6">
        <a href="categories.html" class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-medium py-2 px-6 rounded-md transition">Continue Shopping</a>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- Footer (same as categories.html, omitted for brevity) -->
  <?php include 'footer.php'; ?>
</body>
</html>