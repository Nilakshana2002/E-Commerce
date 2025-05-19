<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Sweet Delights</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="font-sans bg-gray-50">

    <!-- Header -->
     <?php include '../Components/header.php'; ?>

    <!-- Page Header -->
    <section class="bg-amber-600 py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-white text-center">Shop</h1>
            <div class="flex justify-center mt-4">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2 text-white">
                        <li><a href="index.html" class="hover:text-amber-200 transition">Home</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li class="font-medium">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Shop Content -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar Filters -->
                <div class="lg:w-1/4">
                    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                        <h3 class="text-xl font-bold mb-4">Categories</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="#" class="flex items-center justify-between text-gray-700 hover:text-amber-600 transition">
                                    <span>Birthday Cakes</span>
                                    <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">24</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between text-gray-700 hover:text-amber-600 transition">
                                    <span>Wedding Cakes</span>
                                    <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">18</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between text-gray-700 hover:text-amber-600 transition">
                                    <span>Cupcakes</span>
                                    <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">32</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between text-gray-700 hover:text-amber-600 transition">
                                    <span>Pastries</span>
                                    <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">16</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between text-gray-700 hover:text-amber-600 transition">
                                    <span>Custom Cakes</span>
                                    <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">9</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                        <h3 class="text-xl font-bold mb-4">Price Range</h3>
                        <div class="space-y-4">
                            <input type="range" min="500" max="10000" value="5000" class="w-full" id="price-range">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Rs. 500</span>
                                <span class="text-gray-600">Rs. 10,000</span>
                            </div>
                            <div class="text-center text-amber-600 font-medium" id="price-display">Rs. 5,000</div>
                            <button class="bg-amber-600 hover:bg-amber-700 text-white font-medium py-2 px-4 rounded-lg w-full transition">Apply Filter</button>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                        <h3 class="text-xl font-bold mb-4">Special Offers</h3>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-amber-600 mr-2">
                                <span class="text-gray-700">On Sale</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-amber-600 mr-2">
                                <span class="text-gray-700">New Arrivals</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-amber-600 mr-2">
                                <span class="text-gray-700">Bestsellers</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="lg:w-3/4">
                    <div class="flex justify-between items-center mb-8">
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Sort by:</span>
                            <select class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                                <option>Featured</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                                <option>Newest</option>
                                <option>Best Selling</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Show:</span>
                            <select class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                                <option>12</option>
                                <option>24</option>
                                <option>36</option>
                                <option>48</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Product 1 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/croissants.jpg" alt="Butter Croissants (6 pcs)" class="w-full h-64 object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Butter Croissants (6 pcs)</h3>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="text-gray-600 text-sm ml-2">(33 reviews)</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold">Rs. 1,200</span>
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition" 
                                            data-id="19" 
                                            data-name="Butter Croissants (6 pcs)" 
                                            data-price="1200"
                                            data-image="images/products/croissants.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 2 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/cinnamon-rolls.jpg" alt="Cinnamon Rolls (4 pcs)" class="w-full h-64 object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-amber-600 text-white text-sm font-medium px-3 py-1 rounded-full">Bestseller</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Cinnamon Rolls (4 pcs)</h3>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="text-gray-600 text-sm ml-2">(48 reviews)</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold">Rs. 1,600</span>
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition"
                                            data-id="20"
                                            data-name="Cinnamon Rolls (4 pcs)"
                                            data-price="1600"
                                            data-image="images/products/cinnamon-rolls.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 3 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/apple-pie.jpg" alt="Apple Pie" class="w-full h-64 object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Apple Pie</h3>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-gray-600 text-sm ml-2">(39 reviews)</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold">Rs. 2,200</span>
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition"
                                            data-id="21"
                                            data-name="Apple Pie"
                                            data-price="2200"
                                            data-image="images/products/apple-pie.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 4 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/chocolate-cookies.jpg" alt="Chocolate Chip Cookies (12 pcs)" class="w-full h-64 object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-red-600 text-white text-sm font-medium px-3 py-1 rounded-full">Sale</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Chocolate Chip Cookies (12 pcs)</h3>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="text-gray-600 text-sm ml-2">(41 reviews)</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-xl font-bold">Rs. 1,400</span>
                                        <span class="text-gray-500 line-through ml-2">Rs. 1,800</span>
                                    </div>
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition"
                                            data-id="22"
                                            data-name="Chocolate Chip Cookies (12 pcs)"
                                            data-price="1400"
                                            data-image="images/products/chocolate-cookies.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 5 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/donuts.jpg" alt="Assorted Donuts (6 pcs)" class="w-full h-64 object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-green-600 text-white text-sm font-medium px-3 py-1 rounded-full">New</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Assorted Donuts (6 pcs)</h3>
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
                                    <span class="text-xl font-bold">Rs. 1,800</span>
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition"
                                            data-id="23"
                                            data-name="Assorted Donuts (6 pcs)"
                                            data-price="1800"
                                            data-image="images/products/donuts.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 6 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/brownies.jpg" alt="Chocolate Brownies (8 pcs)" class="w-full h-64 object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Chocolate Brownies (8 pcs)</h3>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-gray-600 text-sm ml-2">(36 reviews)</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold">Rs. 1,900</span>
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition"
                                            data-id="24"
                                            data-name="Chocolate Brownies (8 pcs)"
                                            data-price="1900"
                                            data-image="images/products/brownies.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center mt-12">
                       <?php
$currentPage = basename($_SERVER['PHP_SELF']); // e.g., shop-2.php
?>

<nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
    <!-- Previous -->
    <a href="../Cart/shop.php" class="inline-flex items-center px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
        <i class="fas fa-chevron-left text-xs"></i>
    </a>

    <!-- Page 1 -->
    <a href="../Cart/shop.php" class="inline-flex items-center px-4 py-2 border border-gray-300 
        <?= ($currentPage == 'shop.php') ? 'bg-amber-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-50' ?>">
        1
    </a>

    <!-- Page 2 -->
    <a href="../Cart/shop-2.php" class="inline-flex items-center px-4 py-2 border border-gray-300 
        <?= ($currentPage == 'shop-2.php') ? 'bg-amber-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-50' ?>">
        2
    </a>

    <!-- Page 3 -->
    <a href="../Cart/shop-3.php" class="inline-flex items-center px-4 py-2 border border-gray-300 
        <?= ($currentPage == 'shop-3.php') ? 'bg-amber-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-50' ?>">
        3
    </a>

    <!-- Page 4 -->
    <a href="../Cart/shop-4.php" class="inline-flex items-center px-4 py-2 border border-gray-300 
        <?= ($currentPage == 'shop-4.php') ? 'bg-amber-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-50' ?>">
        4
    </a>

    <!-- Next -->
    <a href="../Cart/shop-4.php" class="inline-flex items-center px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
        <i class="fas fa-chevron-right text-xs"></i>
    </a>
</nav>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
     <?php include '../Components/footer.php'; ?>

    <script src="script.js"></script>
    <script>
        // Cart functionality
        document.addEventListener('DOMContentLoaded', () => {
            const cartButtons = document.querySelectorAll('.add-to-cart');
            const cartCount = document.getElementById('cart-count');

            // Initialize cart from session storage
            let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
            updateCartCount();

            // Add to cart event listeners
            cartButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const product = {
                        id: button.dataset.id,
                        name: button.dataset.name,
                        price: parseFloat(button.dataset.price),
                        image: button.dataset.image,
                        quantity: 1
                    };

                    // Check if product already exists in cart
                    const existingItem = cart.find(item => item.id === product.id);
                    if (existingItem) {
                        existingItem.quantity += 1;
                    } else {
                        cart.push(product);
                    }

                    // Save cart to session storage
                    sessionStorage.setItem('cart', JSON.stringify(cart));
                    updateCartCount();

                    // Optional: Show confirmation
                    alert(`${product.name} added to cart!`);
                });
            });

            // Update cart count display
            function updateCartCount() {
                const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
                cartCount.textContent = totalItems;
            }

            // Price range slider functionality
            const priceRange = document.getElementById('price-range');
            const priceDisplay = document.getElementById('price-display');
            
            priceRange.addEventListener('input', function() {
                priceDisplay.textContent = `Rs. ${this.value}`;
            });

            // Mobile menu
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
          <?php include '../Cart/shop-template.php'; ?>
</body>
</html>
