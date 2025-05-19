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
                <?php
// Include the shop template which has all the filtering logic
include 'shop-template.php';
?>
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
</body>
</html>
