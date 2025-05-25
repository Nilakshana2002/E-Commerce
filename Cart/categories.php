<?php
session_start();
?>
<?php
// Show errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

// DB connection
$host = "localhost";
$username = "root";
$password = "Nilakshana_123@";
$database = "sweet_delights";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle custom cake form submission
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['custom_submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    $stmt = $conn->prepare("INSERT INTO custom_cake_requests (name, email, phone, cake_type, size, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $cake_type, $size, $message);

    if ($stmt->execute()) {
        echo "<p style='color: green;'>Custom cake request submitted successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

$conn->close();
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories | Sweet Delights</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body class="font-sans bg-gray-50">
  <!-- Header -->
  <?php include '../Components/header.php'; ?>

  
   

  <!-- Categories Navigation -->
  <section class="py-8 bg-white">
      <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center gap-4">
              <a href="#birthday" class="px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition">Birthday Cakes</a>
              <a href="#wedding" class="px-6 py-3 bg-gray-200 text-gray-800 rounded-full hover:bg-amber-600 hover:text-white transition">Wedding Cakes</a>
              <a href="#cupcakes" class="px-6 py-3 bg-gray-200 text-gray-800 rounded-full hover:bg-amber-600 hover:text-white transition">Cupcakes</a>
              <a href="#pastries" class="px-6 py-3 bg-gray-200 text-gray-800 rounded-full hover:bg-amber-600 hover:text-white transition">Pastries</a>
              <a href="#custom" class="px-6 py-3 bg-gray-200 text-gray-800 rounded-full hover:bg-amber-600 hover:text-white transition">Custom Cakes</a>
          </div>
      </div>
  </section>

  <!-- Birthday Cakes Section -->
  <section id="birthday" class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold mb-8">Birthday Cakes</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
              <!-- Product 1 -->
              <a href="product-details.php?id=1">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                      <div class="relative">
                          <img src="../main/images/categories/truffle cake.jpg" alt="Chocolate Truffle Cake" class="w-full h-64 object-cover">
                          <div class="absolute top-4 right-4">
                              <span class="bg-amber-600 text-white text-sm font-medium px-3 py-1 rounded-full">Bestseller</span>
                          </div>
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Chocolate Truffle Cake</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(42 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <span class="text-xl font-bold">Rs. 3,500</span>
                          </div>
                      </div>
                  </div>
              </a>
              
              <!-- Product 2 -->
              <a href="product-details.php?id=2">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                      <div class="relative">
                          <img src="../main/images/categories/red velvet cake.jpg" alt="Red Velvet Cake" class="w-full h-64 object-cover">
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Red Velvet Cake</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(38 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <span class="text-xl font-bold">Rs. 3,800</span>
                          </div>
                      </div>
                  </div>
              </a>
              
              <!-- Product 3 -->
              <a href="product-details.php?id=3">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                      <div class="relative">
                          <img src="../main/images/categories/buttercream cake.jpg" alt="Vanilla Buttercream Cake" class="w-full h-64 object-cover">
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Vanilla Buttercream Cake</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(31 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <span class="text-xl font-bold">Rs. 3,200</span>
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="text-center mt-8">
              <a href="shop-template.php" class="inline-block bg-amber-600 hover:bg-amber-700 text-gray-600 font-medium py-3 px-8 rounded-full transition">View All Birthday Cakes</a>
          </div>
      </div>
  </section>

  <!-- Wedding Cakes Section -->
  <section id="wedding" class="py-12 bg-white">
      <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold mb-8">Wedding Cakes</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
              <!-- Wedding Cake 1 -->
              <a href="product-details.php?id=4">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-200">
                      <div class="relative">
                          <img src="../main/images/categories/tiered cake.jpg" alt="Elegant Tiered Wedding Cake" class="w-full h-64 object-cover">
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Elegant Tiered Wedding Cake</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(52 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <span class="text-xl font-bold">Rs. 25,000</span>
                          </div>
                      </div>
                  </div>
              </a>
              
              <!-- Wedding Cake 2 -->
              <a href="product-details.php?id=7">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-200">
                      <div class="relative">
                          <img src="../main/images/categories/floral cake.jpg" alt="Floral Wedding Cake" class="w-full h-64 object-cover">
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Floral Wedding Cake</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(28 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <span class="text-xl font-bold">Rs. 22,000</span>
                          </div>
                      </div>
                  </div>
              </a>
              
              <!-- Wedding Cake 3 -->
              <a href="product-details.php?id=8">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-200">
                      <div class="relative">
                          <img src="../main/images/categories/rustic cake.jpg" alt="Rustic Wedding Cake" class="w-full h-64 object-cover">
                          <div class="absolute top-4 right-4">
                              <span class="bg-green-600 text-white text-sm font-medium px-3 py-1 rounded-full">New</span>
                          </div>
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Rustic Wedding Cake</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="far fa-star"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(15 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <span class="text-xl font-bold">Rs. 18,500</span>
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="text-center mt-8">
              <a href="shop-template.php" class="inline-block bg-amber-600 hover:bg-amber-700 text-gray-600 font-medium py-3 px-8 rounded-full transition">View All Wedding Cakes</a>
          </div>
      </div>
  </section>

  <!-- Cupcakes Section -->
  <section id="cupcakes" class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold mb-8">Cupcakes</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
              <!-- Cupcake 1 -->
              <a href="product-details.php?id=5">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                      <div class="relative">
                          <img src="../main/images/categories/assorted cupcake.jpg" alt="Assorted Cupcakes" class="w-full h-64 object-cover">
                          <div class="absolute top-4 right-4">
                              <span class="bg-amber-600 text-white text-sm font-medium px-3 py-1 rounded-full">Bestseller</span>
                          </div>
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Assorted Cupcakes (Box of 6)</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(64 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <span class="text-xl font-bold">Rs. 1,800</span>
                          </div>
                      </div>
                  </div>
              </a>
              
              <!-- Cupcake 2 -->
              <a href="product-details.php?id=9">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                      <div class="relative">
                          <img src="../main/images/categories/c cupcakes.jpg" alt="Chocolate Cupcakes" class="w-full h-64 object-cover">
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Chocolate Cupcakes (Box of 6)</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(37 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <span class="text-xl font-bold">Rs. 1,600</span>
                          </div>
                      </div>
                  </div>
              </a>
              
              <!-- Cupcake 3 -->
              <a href="product-details.php?id=10">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                      <div class="relative">
                          <img src="../main/images/categories/red velvet cupcake.jpg" alt="Red Velvet Cupcakes" class="w-full h-64 object-cover">
                          <div class="absolute top-4 right-4">
                              <span class="bg-red-600 text-white text-sm font-medium px-3 py-1 rounded-full">Sale</span>
                          </div>
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Red Velvet Cupcakes (Box of 6)</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="far fa-star"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(29 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <div>
                                  <span class="text-xl font-bold">Rs. 1,500</span>
                                  <span class="text-gray-500 line-through ml-2">Rs. 1,800</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="text-center mt-8">
              <a href="shop-template.php" class="inline-block bg-amber-600 hover:bg-amber-700 text-gray-600 font-medium py-3 px-8 rounded-full transition">View All Cupcakes</a>
          </div>
      </div>
  </section>

  <!-- Pastries Section -->
  <section id="pastries" class="py-12 bg-white">
      <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold mb-8">Pastries</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
              <!-- Pastry 1 -->
              <a href="product-details.php?id=6">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-200">
                      <div class="relative">
                          <img src="../main/images/categories/eclairs.jpg" alt="Chocolate Eclairs" class="w-full h-64 object-cover">
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Chocolate Eclairs (Box of 4)</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(41 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <span class="text-xl font-bold">Rs. 1,200</span>
                          </div>
                      </div>
                  </div>
              </a>
              
              <!-- Pastry 2 -->
              <a href="product-details.php?id=11">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-200">
                      <div class="relative">
                          <img src="../main/images/categories/fruit tarts.jpg" alt="Fruit Tarts" class="w-full h-64 object-cover">
                          <div class="absolute top-4 right-4">
                              <span class="bg-green-600 text-white text-sm font-medium px-3 py-1 rounded-full">New</span>
                          </div>
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Fruit Tarts (Box of 4)</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="far fa-star"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(22 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <span class="text-xl font-bold">Rs. 1,400</span>
                          </div>
                      </div>
                  </div>
              </a>
              
              <!-- Pastry 3 -->
              <a href="product-details.php?id=12">
                  <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-200">
                      <div class="relative">
                          <img src="../main/images/categories/butter.jpg" alt="Croissants" class="w-full h-64 object-cover">
                          <div class="absolute top-4 right-4">
                              <span class="bg-amber-600 text-white text-sm font-medium px-3 py-1 rounded-full">Bestseller</span>
                          </div>
                      </div>
                      <div class="p-6">
                          <h3 class="text-xl font-bold mb-2">Butter Croissants (Box of 6)</h3>
                          <div class="flex items-center mb-4">
                              <div class="flex text-amber-400">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                              </div>
                              <span class="text-gray-600 text-sm ml-2">(56 reviews)</span>
                          </div>
                          <div class="flex justify-between items-center">
                              <span class="text-xl font-bold">Rs. 1,100</span>
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="text-center mt-8">
              <a href="shop-template.php" class="inline-block bg-amber-600 hover:bg-amber-700 text-gray-600 font-medium py-3 px-8 rounded-full transition">View All Pastries</a>
          </div>
      </div>
  </section>

  <!-- Custom Cakes Section -->
  <section id="custom" class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold mb-4">Custom Cakes</h2>
          <p class="text-gray-600 mb-8 max-w-3xl mx-auto text-center">We specialize in creating personalized cakes for any occasion. Share your ideas with us, and our expert bakers will bring your vision to life.</p>
          
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <div class="grid grid-cols-1 md:grid-cols-2">
                  <div class="p-8">
                      <h3 class="text-2xl font-bold mb-4">Request a Custom Cake</h3>
                      <p class="text-gray-600 mb-6">Fill out the form below to start your custom cake order. Our team will contact you within 24 hours to discuss your requirements in detail.</p>
                      
                      <form action="#" method="POST">
                          <div class="mb-4">
                              <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                              <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                          </div>
                          <div class="mb-4">
                              <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                              <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                          </div>
                          <div class="mb-4">
                              <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                              <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                          </div>
                          <div class="mb-4">
                              <label for="occasion" class="block text-gray-700 font-medium mb-2">Occasion</label>
                              <select id="occasion" name="occasion" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                                  <option value="">Select an occasion</option>
                                  <option value="birthday">Birthday</option>
                                  <option value="wedding">Wedding</option>
                                  <option value="anniversary">Anniversary</option>
                                  <option value="corporate">Corporate Event</option>
                                  <option value="other">Other</option>
                              </select>
                          </div>
                          <div class="mb-6">
                              <label for="message" class="block text-gray-700 font-medium mb-2">Your Cake Idea</label>
                              <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500" required></textarea>
                          </div>
                          <!--<button type="submit" class="w-full bg-green-600 hover:bg-amber-700 text-white font-medium py-2 px-4 rounded-md transition">Submit Request</button>-->
                          <button type="submit" name="custom_submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
    Submit Request
  </button>
                      </form>
                  </div>
                  <div class="bg-amber-50 p-8 flex flex-col justify-center">
                      <h3 class="text-2xl font-bold mb-6">Why Choose Our Custom Cakes?</h3>
                      <ul class="space-y-4">
                          <li class="flex items-start">
                              <i class="fas fa-check-circle text-amber-600 mt-1 mr-3"></i>
                              <span>Personalized designs tailored to your specific requirements</span>
                          </li>
                          <li class="flex items-start">
                              <i class="fas fa-check-circle text-amber-600 mt-1 mr-3"></i>
                              <span>Premium ingredients for exceptional taste and quality</span>
                          </li>
                          <li class="flex items-start">
                              <i class="fas fa-check-circle text-amber-600 mt-1 mr-3"></i>
                              <span>Expert cake designers with years of experience</span>
                          </li>
                          <li class="flex items-start">
                              <i class="fas fa-check-circle text-amber-600 mt-1 mr-3"></i>
                              <span>Wide range of flavors, fillings, and decorations</span>
                          </li>
                          <li class="flex items-start">
                              <i class="fas fa-check-circle text-amber-600 mt-1 mr-3"></i>
                              <span>Flexible pricing options to suit different budgets</span>
                          </li>
                      </ul>
                      <div class="mt-8">
                          <p class="text-gray-600 mb-4">Need inspiration? Check out some of our previous custom cake designs:</p>
                          <div class="grid grid-cols-3 gap-2">
                              <img src="../main/images/shop/rainbow cake.jpg" alt="Custom Cake Example" class="rounded-md">
                              <img src="../main/images/shop/elegent cake.jpg" alt="Custom Cake Example" class="rounded-md">
                              <img src="../main/images/shop/black forest cake.jpg" alt="Custom Cake Example" class="rounded-md">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Footer -->
  <?php include '../Components/footer.php'; ?>

  <script src="script.js"></script>
  <script src="https://cdn.botpress.cloud/webchat/v2.5/inject.js"></script>
<script src="https://files.bpcontent.cloud/2025/05/21/06/20250521060615-UDQI6H73.js"></script>
</body>
</html>