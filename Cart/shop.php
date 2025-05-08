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
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="index.html" class="flex items-center">
                    <svg width="180" height="60" viewBox="0 0 180 60" xmlns="http://www.w3.org/2000/svg" class="h-12">
                        <rect width="180" height="60" rx="8" fill="white"/>
                        <circle cx="30" cy="20" r="20" fill="#fef3c7" opacity="0.8"/>
                        <circle cx="150" cy="40" r="15" fill="#fef3c7" opacity="0.8"/>
                        <text x="50" y="35" font-family="Arial" font-size="20" font-weight="bold" fill="#d97706">Sweet Delights</text>
                        <text x="30" y="35" font-family="Arial" font-size="24" fill="#d97706">🍰</text>
                    </svg>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:block">
                    <ul class="flex space-x-1">
                        <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="shop.html" class="nav-link">Shop</a></li>
                        <li class="nav-item dropdown">
                            <a href="categories.html" class="nav-link flex items-center">
                                Categories <i class="fas fa-chevron-down ml-1 text-xs"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a href="categories.html#birthday" class="dropdown-item">Birthday Cakes</a>
                                <a href="categories.html#wedding" class="dropdown-item">Wedding Cakes</a>
                                <a href="categories.html#cupcakes" class="dropdown-item">Cupcakes</a>
                                <a href="categories.html#pastries" class="dropdown-item">Pastries</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                </nav>

                <!-- Header Icons -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-700 hover:text-amber-600 transition">
                        <i class="fas fa-search text-xl"></i>
                    </a>
                    <a href="account.html" class="text-gray-700 hover:text-amber-600 transition">
                        <i class="fas fa-user text-xl"></i>
                    </a>
                    <a href="cart.html" class="text-gray-700 hover:text-amber-600 transition relative">
                        <i class="fas fa-shopping-bag text-xl"></i>
                        <span id="cart-count" class="absolute -top-2 -right-2 bg-amber-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                    </a>
                    <button id="mobile-menu-button" class="md:hidden text-gray-700 hover:text-amber-600 transition">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden bg-white shadow-md hidden">
            <div class="container mx-auto px-4 py-3">
                <nav class="flex flex-col space-y-3">
                    <a href="index.html" class="text-gray-800 hover:text-amber-600 font-medium transition py-2 border-b border-gray-100">Home</a>
                    <a href="shop.html" class="text-gray-800 hover:text-amber-600 font-medium transition py-2 border-b border-gray-100">Shop</a>
                    <a href="categories.html" class="text-gray-800 hover:text-amber-600 font-medium transition py-2 border-b border-gray-100">Categories</a>
                    <a href="about.html" class="text-gray-800 hover:text-amber-600 font-medium transition py-2 border-b border-gray-100">About Us</a>
                    <a href="contact.html" class="text-gray-800 hover:text-amber-600 font-medium transition py-2">Contact</a>
                </nav>
            </div>
        </div>
    </header>

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
                                <img src="images/products/product-1.jpg" alt="Chocolate Truffle Cake" class="w-full h-64 object-cover">
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
                                <img src="images/products/product-2.jpg" alt="Red Velvet Cake" class="w-full h-64 object-cover">
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
                                <img src="images/products/product-3.jpg" alt="Blueberry Cheesecake" class="w-full h-64 object-cover">
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
                                <img src="images/products/product-4.jpg" alt="Vanilla Buttercream Cake" class="w-full h-64 object-cover">
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
                                <img src="images/products/product-5.jpg" alt="Fruit Gateau" class="w-full h-64 object-cover">
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
                                <img src="images/products/product-6.jpg" alt="Chocolate Mousse Cake" class="w-full h-64 object-cover">
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
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- About -->
                <div>
                    <svg width="180" height="60" viewBox="0 0 180 60" xmlns="http://www.w3.org/2000/svg" class="h-12 mb-6">
                        <rect width="180" height="60" rx="8" fill="#111827"/>
                        <circle cx="30" cy="20" r="20" fill="#374151" opacity="0.8"/>
                        <circle cx="150" cy="40" r="15" fill="#374151" opacity="0.8"/>
                        <text x="50" y="35" font-family="Arial" font-size="20" font-weight="bold" fill="white">Sweet Delights</text>
                        <text x="30" y="35" font-family="Arial" font-size="24" fill="white">🍰</text>
                    </svg>
                    <p class="text-gray-400 mb-6">Sweet Delights is a premium bakery in Sri Lanka, specializing in custom cakes, pastries, and desserts for all occasions.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="index.html" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="shop.html" class="text-gray-400 hover:text-white transition">Shop</a></li>
                        <li><a href="about.html" class="text-gray-400 hover:text-white transition">About Us</a></li>
                        <li><a href="contact.html" class="text-gray-400 hover:text-white transition">Contact</a></li>
                        <li><a href="faq.html" class="text-gray-400 hover:text-white transition">FAQs</a></li>
                    </ul>
                </div>
                
                <!-- Categories -->
                <div>
                    <h3 class="text-xl font-bold mb-6">Categories</h3>
                    <ul class="space-y-3">
                        <li><a href="categories.html#birthday" class="text-gray-400 hover:text-white transition">Birthday Cakes</a></li>
                        <li><a href="categories.html#wedding" class="text-gray-400 hover:text-white transition">Wedding Cakes</a></li>
                        <li><a href="categories.html#cupcakes" class="text-gray-400 hover:text-white transition">Cupcakes</a></li>
                        <li><a href="categories.html#pastries" class="text-gray-400 hover:text-white transition">Pastries</a></li>
                        <li><a href="categories.html#custom" class="text-gray-400 hover:text-white transition">Custom Cakes</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="text-xl font-bold mb-6">Contact Us</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                            <span>123 Galle Road, Colombo 03, Sri Lanka</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3"></i>
                            <span>+94 11 234 5678</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3"></i>
                            <span>info@sweetdelights.lk</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock mr-3"></i>
                            <span>Mon-Sat: 9AM - 7PM</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <hr class="border-gray-800 mb-8">
            
            <!-- Bottom Footer -->
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 mb-4 md:mb-0">© 2025 Sweet Delights. All rights reserved.</p>
                <div class="flex space-x-4">
                    <a href="privacy-policy.html" class="text-gray-500 hover:text-white transition">Privacy Policy</a>
                    <a href="terms.html" class="text-gray-500 hover:text-white transition">Terms of Service</a>
                    <a href="shipping.html" class="text-gray-500 hover:text-white transition">Shipping Policy</a>
                </div>
            </div>
        </div>
    </footer>

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