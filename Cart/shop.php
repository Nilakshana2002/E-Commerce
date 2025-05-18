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
    <!-- Announcement Bar -->
    <div class="bg-amber-800 text-white text-center py-2 text-sm">
        <p>Free delivery on orders above Rs. 5000 in Colombo | Same day delivery for orders before 12 PM</p>
    </div>

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
                         <a href = "product-details.php?id=1">
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/truffle cake.jpg" alt="Chocolate Truffle Cake" class="w-full h-64 object-cover">
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
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition" 
                                            data-id="1" 
                                            data-name="Chocolate Truffle Cake" 
                                            data-price="3500"
                                            data-image="images/products/product-1.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </a>
                        
                        <!-- Product 2 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/red velvet cake.jpg" alt="Red Velvet Cake" class="w-full h-64 object-cover">
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
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition"
                                            data-id="2"
                                            data-name="Red Velvet Cake"
                                            data-price="3800"
                                            data-image="images/products/product-2.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 3 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/cheese cake.jpg" alt="Blueberry Cheesecake" class="w-full h-64 object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-green-600 text-white text-sm font-medium px-3 py-1 rounded-full">New</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Blueberry Cheesecake</h3>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="text-gray-600 text-sm ml-2">(24 reviews)</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold">Rs. 4,200</span>
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition"
                                            data-id="3"
                                            data-name="Blueberry Cheesecake"
                                            data-price="4200"
                                            data-image="images/products/product-3.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 4 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/buttercream cake.jpg" alt="Vanilla Buttercream Cake" class="w-full h-64 object-cover">
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
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition"
                                            data-id="4"
                                            data-name="Vanilla Buttercream Cake"
                                            data-price="3200"
                                            data-image="images/products/product-4.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 5 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/fruite gateau.jpg" alt="Fruit Gateau" class="w-full h-64 object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Fruit Gateau</h3>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="text-gray-600 text-sm ml-2">(19 reviews)</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold">Rs. 3,900</span>
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition"
                                            data-id="5"
                                            data-name="Fruit Gateau"
                                            data-price="3900"
                                            data-image="images/products/product-5.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 6 -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="../cart/images/products/chocolate mousse cake.jpg" alt="Chocolate Mousse Cake" class="w-full h-64 object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-red-600 text-white text-sm font-medium px-3 py-1 rounded-full">Sale</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Chocolate Mousse Cake</h3>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-amber-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="text-gray-600 text-sm ml-2">(47 reviews)</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-xl font-bold">Rs. 3,600</span>
                                        <span class="text-gray-500 line-through ml-2">Rs. 4,200</span>
                                    </div>
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition"
                                            data-id="6"
                                            data-name="Chocolate Mousse Cake"
                                            data-price="3600"
                                            data-image="images/products/product-6.jpg">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center mt-12">
                        <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="inline-flex items-center px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                <i class="fas fa-chevron-left text-xs"></i>
                            </a>
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 bg-amber-600 text-white hover:bg-amber-700">
                                1
                            </a>
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                2
                            </a>
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                3
                            </a>
                            <span class="inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-gray-700">
                                ...
                            </span>
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                8
                            </a>
                            <a href="#" class="inline-flex items-center px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
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