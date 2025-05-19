<?php
session_start();
?>
<?php
// Include products data
include '../Cart/products.php';

// Get filter parameters
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = isset($_GET['show']) ? (int)$_GET['show'] : 6;
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'featured';
$category = isset($_GET['category']) ? $_GET['category'] : '';
$min_price = isset($_GET['min_price']) ? (int)$_GET['min_price'] : 500;
$max_price = isset($_GET['max_price']) ? (int)$_GET['max_price'] : 10000;

// Special offers
$special_offers = [];
if (isset($_GET['on_sale']) && $_GET['on_sale'] === 'on') {
    $special_offers[] = 'sale';
}
if (isset($_GET['new_arrivals']) && $_GET['new_arrivals'] === 'on') {
    $special_offers[] = 'new';
}
if (isset($_GET['bestsellers']) && $_GET['bestsellers'] === 'on') {
    $special_offers[] = 'bestseller';
}

// Apply filters
$filters = [
    'category' => $category,
    'min_price' => $min_price,
    'max_price' => $max_price,
    'sort' => $sort
];

if (!empty($special_offers)) {
    $filters['special_offers'] = $special_offers;
}

$filtered_products = filterProducts($products, $filters);
$total_products = count($filtered_products);
$total_pages = ceil($total_products / $per_page);

// Ensure current page is valid
if ($current_page < 1) $current_page = 1;
if ($current_page > $total_pages && $total_pages > 0) $current_page = $total_pages;

// Get products for current page
$current_products = paginateProducts($filtered_products, $current_page, $per_page);

// Get all categories with counts
$categories = getCategoriesWithCount($products);

// Determine current file name for pagination
$currentFile = basename($_SERVER['PHP_SELF']);
?>

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
                    <form id="filter-form" action="" method="GET">
                        <!-- Keep current page and sort when changing filters -->
                        <input type="hidden" name="page" value="1">
                        <input type="hidden" name="sort" value="<?php echo htmlspecialchars($sort); ?>">
                        <input type="hidden" name="show" value="<?php echo htmlspecialchars($per_page); ?>">
                        
                        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                            <h3 class="text-xl font-bold mb-4">Categories</h3>
                            <ul class="space-y-2">
                                <li>
                                    <a href="?page=1" class="flex items-center justify-between text-gray-700 hover:text-amber-600 transition <?php echo empty($category) ? 'text-amber-600 font-medium' : ''; ?>">
                                        <span>All Categories</span>
                                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full"><?php echo count($products); ?></span>
                                    </a>
                                </li>
                                <?php foreach ($categories as $cat_name => $count): ?>
                                <li>
                                    <a href="?category=<?php echo urlencode($cat_name); ?>&page=1" class="flex items-center justify-between text-gray-700 hover:text-amber-600 transition <?php echo $category === $cat_name ? 'text-amber-600 font-medium' : ''; ?>">
                                        <span><?php echo htmlspecialchars($cat_name); ?></span>
                                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full"><?php echo $count; ?></span>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                            <h3 class="text-xl font-bold mb-4">Price Range</h3>
                            <div class="space-y-4">
                                <input type="range" min="500" max="10000" value="<?php echo htmlspecialchars($max_price); ?>" class="w-full" id="price-range" name="max_price">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Rs. 500</span>
                                    <span class="text-gray-600">Rs. 10,000</span>
                                </div>
                                <div class="text-center text-amber-600 font-medium" id="price-display">Rs. <?php echo htmlspecialchars($max_price); ?></div>
                                <input type="hidden" name="min_price" value="500">
                                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-medium py-2 px-4 rounded-lg w-full transition">Apply Filter</button>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                            <h3 class="text-xl font-bold mb-4">Special Offers</h3>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" name="on_sale" <?php echo in_array('sale', $special_offers) ? 'checked' : ''; ?> class="form-checkbox text-amber-600 mr-2 filter-checkbox">
                                    <span class="text-gray-700">On Sale</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="new_arrivals" <?php echo in_array('new', $special_offers) ? 'checked' : ''; ?> class="form-checkbox text-amber-600 mr-2 filter-checkbox">
                                    <span class="text-gray-700">New Arrivals</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="bestsellers" <?php echo in_array('bestseller', $special_offers) ? 'checked' : ''; ?> class="form-checkbox text-amber-600 mr-2 filter-checkbox">
                                    <span class="text-gray-700">Bestsellers</span>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Products Grid -->
                <div class="lg:w-3/4">
                    <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                        <div class="flex items-center mb-4 md:mb-0">
                            <span class="text-gray-600 mr-2">Sort by:</span>
                            <select id="sort-select" class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                                <option value="featured" <?php echo $sort === 'featured' ? 'selected' : ''; ?>>Featured</option>
                                <option value="price_low_high" <?php echo $sort === 'price_low_high' ? 'selected' : ''; ?>>Price: Low to High</option>
                                <option value="price_high_low" <?php echo $sort === 'price_high_low' ? 'selected' : ''; ?>>Price: High to Low</option>
                                <option value="newest" <?php echo $sort === 'newest' ? 'selected' : ''; ?>>Newest</option>
                                <option value="bestselling" <?php echo $sort === 'bestselling' ? 'selected' : ''; ?>>Best Selling</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Show:</span>
                            <select id="show-select" class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                                <option value="6" <?php echo $per_page === 6 ? 'selected' : ''; ?>>6</option>
                                <option value="12" <?php echo $per_page === 12 ? 'selected' : ''; ?>>12</option>
                                <option value="24" <?php echo $per_page === 24 ? 'selected' : ''; ?>>24</option>
                                <option value="30" <?php echo $per_page === 30 ? 'selected' : ''; ?>>30</option>
                            </select>
                        </div>
                    </div>

                    <?php if (empty($current_products)): ?>
                    <div class="text-center py-12">
                        <h3 class="text-2xl font-bold text-gray-700 mb-4">No products found</h3>
                        <p class="text-gray-600">Try adjusting your filters to find what you're looking for.</p>
                        <a href="?page=1" class="inline-block mt-6 bg-amber-600 hover:bg-amber-700 text-white font-medium py-2 px-6 rounded-lg transition">
                            Reset Filters
                        </a>
                    </div>
                    <?php else: ?>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php foreach ($current_products as $product): ?>
                        <!-- Product -->
                        <?php 
                        $productLink = isset($product['product_url']) ? $product['product_url'] : '#';
                        $hasLink = isset($product['product_url']);
                        ?>
                        <?php if ($hasLink): ?>
                        <a href="<?php echo htmlspecialchars($productLink); ?>">
                        <?php endif; ?>
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                            <div class="relative">
                                <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="w-full h-64 object-cover">
                                <?php if (!empty($product['tags'])): ?>
                                <div class="absolute top-4 right-4">
                                    <?php if (in_array('bestseller', $product['tags'])): ?>
                                    <span class="bg-amber-600 text-white text-sm font-medium px-3 py-1 rounded-full">Bestseller</span>
                                    <?php elseif (in_array('new', $product['tags'])): ?>
                                    <span class="bg-green-600 text-white text-sm font-medium px-3 py-1 rounded-full">New</span>
                                    <?php elseif (in_array('sale', $product['tags'])): ?>
                                    <span class="bg-red-600 text-white text-sm font-medium px-3 py-1 rounded-full">Sale</span>
                                    <?php elseif (in_array('premium', $product['tags'])): ?>
                                    <span class="bg-amber-600 text-white text-sm font-medium px-3 py-1 rounded-full">Premium</span>
                                    <?php elseif (in_array('custom', $product['tags'])): ?>
                                    <span class="bg-purple-600 text-white text-sm font-medium px-3 py-1 rounded-full">Custom</span>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2"><?php echo htmlspecialchars($product['name']); ?></h3>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-amber-400">
                                        <?php 
                                        $full_stars = floor($product['rating']);
                                        $half_star = $product['rating'] - $full_stars >= 0.5;
                                        $empty_stars = 5 - $full_stars - ($half_star ? 1 : 0);
                                        
                                        for ($i = 0; $i < $full_stars; $i++): ?>
                                            <i class="fas fa-star"></i>
                                        <?php endfor; ?>
                                        
                                        <?php if ($half_star): ?>
                                            <i class="fas fa-star-half-alt"></i>
                                        <?php endif; ?>
                                        
                                        <?php for ($i = 0; $i < $empty_stars; $i++): ?>
                                            <i class="far fa-star"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <span class="text-gray-600 text-sm ml-2">(<?php echo $product['reviews']; ?> reviews)</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <?php if (isset($product['original_price'])): ?>
                                    <div>
                                        <span class="text-xl font-bold">Rs. <?php echo number_format($product['price']); ?></span>
                                        <span class="text-gray-500 line-through ml-2">Rs. <?php echo number_format($product['original_price']); ?></span>
                                    </div>
                                    <?php else: ?>
                                    <span class="text-xl font-bold">Rs. <?php echo number_format($product['price']); ?></span>
                                    <?php endif; ?>
                                    <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition"
                                            data-id="<?php echo $product['id']; ?>"
                                            data-name="<?php echo htmlspecialchars($product['name']); ?>"
                                            data-price="<?php echo $product['price']; ?>"
                                            data-image="<?php echo htmlspecialchars($product['image']); ?>">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php if ($hasLink): ?>
                        </a>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination -->
                    <?php if ($total_pages > 1): ?>
                    <div class="flex justify-center mt-12">
                        <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="?<?php echo http_build_query(array_merge($_GET, ['page' => max(1, $current_page - 1)])); ?>" class="inline-flex items-center px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                <i class="fas fa-chevron-left text-xs"></i>
                            </a>
                            
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <a href="?<?php echo http_build_query(array_merge($_GET, ['page' => $i])); ?>" class="inline-flex items-center px-4 py-2 border border-gray-300 <?php echo $i === $current_page ? 'bg-amber-600 text-white hover:bg-amber-700' : 'bg-white text-gray-700 hover:bg-gray-50'; ?>">
                                <?php echo $i; ?>
                            </a>
                            <?php endfor; ?>
                            
                            <a href="?<?php echo http_build_query(array_merge($_GET, ['page' => min($total_pages, $current_page + 1)])); ?>" class="inline-flex items-center px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                <i class="fas fa-chevron-right text-xs"></i>
                            </a>
                        </nav>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
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
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation(); // Prevent triggering parent link if inside <a> tag
                    
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
                if (cartCount) {
                    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
                    cartCount.textContent = totalItems;
                }
            }

            // Price range slider functionality
            const priceRange = document.getElementById('price-range');
            const priceDisplay = document.getElementById('price-display');
            
            if (priceRange && priceDisplay) {
                priceRange.addEventListener('input', function() {
                    priceDisplay.textContent = `Rs. ${this.value}`;
                });
            }

            // Sort and show select functionality
            const sortSelect = document.getElementById('sort-select');
            const showSelect = document.getElementById('show-select');
            
            if (sortSelect) {
                sortSelect.addEventListener('change', function() {
                    const urlParams = new URLSearchParams(window.location.search);
                    urlParams.set('sort', this.value);
                    urlParams.set('page', '1'); // Reset to page 1 when sorting changes
                    window.location.search = urlParams.toString();
                });
            }
            
            if (showSelect) {
                showSelect.addEventListener('change', function() {
                    const urlParams = new URLSearchParams(window.location.search);
                    urlParams.set('show', this.value);
                    urlParams.set('page', '1'); // Reset to page 1 when items per page changes
                    window.location.search = urlParams.toString();
                });
            }

            // Auto-submit form when checkboxes change
            const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
            filterCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    document.getElementById('filter-form').submit();
                });
            });

            // Mobile menu
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
