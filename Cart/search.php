<?php
session_start();
?>
<?php
// Include products data
include 'products.php';

// Get search query from URL parameter
$search_query = isset($_GET['q']) ? trim($_GET['q']) : '';

// Default values for filters
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = isset($_GET['show']) ? (int)$_GET['show'] : 6;
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'featured';

// Search products
$search_results = [];
if (!empty($search_query)) {
    $search_results = array_filter($products, function($product) use ($search_query) {
        // Search in product name
        if (stripos($product['name'], $search_query) !== false) {
            return true;
        }
        
        // Search in product category
        if (stripos($product['category'], $search_query) !== false) {
            return true;
        }
        
        // Search in product tags
        if (!empty($product['tags'])) {
            foreach ($product['tags'] as $tag) {
                if (stripos($tag, $search_query) !== false) {
                    return true;
                }
            }
        }
        
        // Search in product description (if available)
        if (isset($product['description']) && stripos($product['description'], $search_query) !== false) {
            return true;
        }
        
        return false;
    });
}

// Sort search results
if (!empty($search_results) && !empty($sort)) {
    switch ($sort) {
        case 'price_low_high':
            usort($search_results, function($a, $b) {
                return $a['price'] - $b['price'];
            });
            break;
        case 'price_high_low':
            usort($search_results, function($a, $b) {
                return $b['price'] - $a['price'];
            });
            break;
        case 'newest':
            usort($search_results, function($a, $b) {
                return strtotime($b['date_added']) - strtotime($a['date_added']);
            });
            break;
        case 'bestselling':
            usort($search_results, function($a, $b) {
                return (in_array('bestseller', $b['tags'] ?? []) ? 1 : 0) - (in_array('bestseller', $a['tags'] ?? []) ? 1 : 0);
            });
            break;
        default: // featured - default sorting
            // No specific sorting
            break;
    }
}

// Paginate search results
$total_results = count($search_results);
$total_pages = ceil($total_results / $per_page);

// Ensure current page is valid
if ($current_page < 1) $current_page = 1;
if ($current_page > $total_pages && $total_pages > 0) $current_page = $total_pages;

// Get products for current page
$current_results = array_slice($search_results, ($current_page - 1) * $per_page, $per_page);

// Get popular search terms (this would typically come from a database)
$popular_searches = ['Chocolate Cake', 'Birthday Cake', 'Cupcakes', 'Wedding Cake', 'Pastries'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results | Sweet Delights</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Custom animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
        
        .product-card {
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
        }
        
        .search-highlight {
            background: linear-gradient(to right, rgba(251, 191, 36, 0.2), rgba(251, 191, 36, 0));
            padding: 0 4px;
            border-radius: 4px;
        }
        
        .search-button {
            transition: all 0.3s ease;
        }
        
        .search-button:hover {
            transform: scale(1.05);
        }
        
        .search-input:focus {
            box-shadow: 0 0 0 3px rgba(218, 173, 61, 0.3);
        }
    </style>
</head>
<body class="font-sans bg-gray-50">

    <!-- Header -->
    <?php include '../Components/header.php'; ?>

    <!-- Page Header -->
    <section class="bg-gradient-to-r from-amber-600 to-amber-500 py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold  text-center mb-6">
                <?php if (empty($search_query)): ?>
                    Find Your Perfect Treat
                <?php else: ?>
                    Search Results
                <?php endif; ?>
            </h1>
            
            <?php if (!empty($search_query)): ?>
            <p class="text-xl text-grey-600 text-center mb-8 opacity-90">
                Showing results for "<?php echo htmlspecialchars($search_query); ?>"
            </p>
            <?php else: ?>
            <p class="text-xl text-white text-center mb-8 opacity-90">
                Discover our delicious range of cakes and pastries
            </p>
            <?php endif; ?>
            
            <!-- Enhanced Search Form -->
            <div class="max-w-3xl mx-auto">
                <form action="search.php" method="GET" class="relative flex items-center">
                    <div class="relative flex-1">
                        <input 
                            type="text" 
                            name="q" 
                            value="<?php echo htmlspecialchars($search_query); ?>" 
                            placeholder="Search for cakes, pastries, and more..." 
                            class="search-input w-full px-6 py-4 pr-12 text-lg rounded-l-full border-0 focus:outline-none focus:ring-0 shadow-lg"
                        >
                        <div class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <button 
                        type="submit" 
                        class="search-button bg-amber-800 hover:bg-amber-900  font-bold py-4 px-8 rounded-r-full shadow-lg transition-all"
                    >
                        Search
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Search Results Content -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <?php if (empty($search_query)): ?>
            <!-- No search query provided -->
            <div class="text-center py-8 fade-in">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">Popular Searches</h2>
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <?php foreach ($popular_searches as $term): ?>
                    <a href="?q=<?php echo urlencode($term); ?>" class="bg-white hover:bg-amber-50 text-amber-800 font-medium py-2 px-6 rounded-full shadow-md transition-all hover:shadow-lg">
                        <?php echo htmlspecialchars($term); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                
            
            <?php elseif (empty($search_results)): ?>
            <!-- No results found -->
            <div class="text-center py-12 fade-in">
                <div class="w-24 h-24 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-search text-3xl text-amber-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">No results found for "<?php echo htmlspecialchars($search_query); ?>"</h3>
                <p class="text-gray-600 max-w-lg mx-auto mb-8">Try different keywords or check out our product categories.</p>
                
                <h4 class="text-xl font-bold text-gray-800 mb-4">Popular Searches</h4>
                <div class="flex flex-wrap justify-center gap-3 mb-8">
                    <?php foreach ($popular_searches as $term): ?>
                    <a href="?q=<?php echo urlencode($term); ?>" class="bg-white hover:bg-amber-50 text-amber-800 font-medium py-2 px-6 rounded-full shadow-md transition-all hover:shadow-lg">
                        <?php echo htmlspecialchars($term); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <?php else: ?>
            <!-- Search results found -->
            <div class="mb-8 fade-in">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">
                        Found <span class="text-amber-600"><?php echo $total_results; ?></span> results for "<?php echo htmlspecialchars($search_query); ?>"
                    </h2>
                </div>
                
                <!-- Filter Bar -->
                <div class="bg-white rounded-xl shadow-md p-4 mt-6 mb-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="flex items-center mb-4 md:mb-0">
                            <span class="text-gray-600 mr-3 font-medium">Sort by:</span>
                            <select id="sort-select" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent bg-gray-50">
                                <option value="featured" <?php echo $sort === 'featured' ? 'selected' : ''; ?>>Featured</option>
                                <option value="price_low_high" <?php echo $sort === 'price_low_high' ? 'selected' : ''; ?>>Price: Low to High</option>
                                <option value="price_high_low" <?php echo $sort === 'price_high_low' ? 'selected' : ''; ?>>Price: High to Low</option>
                                <option value="newest" <?php echo $sort === 'newest' ? 'selected' : ''; ?>>Newest</option>
                                <option value="bestselling" <?php echo $sort === 'bestselling' ? 'selected' : ''; ?>>Best Selling</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-3 font-medium">Show:</span>
                            <select id="show-select" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent bg-gray-50">
                                <option value="6" <?php echo $per_page === 6 ? 'selected' : ''; ?>>6 items</option>
                                <option value="12" <?php echo $per_page === 12 ? 'selected' : ''; ?>>12 items</option>
                                <option value="24" <?php echo $per_page === 24 ? 'selected' : ''; ?>>24 items</option>
                                <option value="30" <?php echo $per_page === 30 ? 'selected' : ''; ?>>30 items</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php 
                $delay = 0;
                foreach ($current_results as $product): 
                $delay += 0.1;
                ?>
                <!-- Product -->
                <div class="product-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all" style="animation: fadeIn 0.5s ease-out <?php echo $delay; ?>s forwards; opacity: 0;">
                    <div class="relative">
                        <a href="product-details.php?id=<?php echo $product['id']; ?>">
                            <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="w-full h-64 object-cover">
                            <?php if (!empty($product['tags'])): ?>
                            <div class="absolute top-4 right-4">
                                <?php if (in_array('bestseller', $product['tags'])): ?>
                                <span class="bg-yellow-600 text-white text-sm font-medium px-3 py-1 rounded-full shadow-md">Bestseller</span>
                                <?php elseif (in_array('new', $product['tags'])): ?>
                                <span class="bg-green-600 text-white text-sm font-medium px-3 py-1 rounded-full shadow-md">New</span>
                                <?php elseif (in_array('sale', $product['tags'])): ?>
                                <span class="bg-red-600 text-white text-sm font-medium px-3 py-1 rounded-full shadow-md">Sale</span>
                                <?php elseif (in_array('premium', $product['tags'])): ?>
                                <span class="bg-amber-600 text-white text-sm font-medium px-3 py-1 rounded-full shadow-md">Premium</span>
                                <?php elseif (in_array('custom', $product['tags'])): ?>
                                <span class="bg-purple-600 text-white text-sm font-medium px-3 py-1 rounded-full shadow-md">Custom</span>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="p-6">
                        <a href="product-details.php?id=<?php echo $product['id']; ?>">
                            <h3 class="text-xl font-bold mb-2 text-gray-800 hover:text-amber-600 transition-colors">
                                <?php 
                                // Highlight the search term in the product name
                                $highlighted_name = preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<span class="search-highlight">$1</span>', htmlspecialchars($product['name']));
                                echo $highlighted_name;
                                ?>
                            </h3>
                        </a>
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
                                <span class="text-xl font-bold text-amber-600">Rs. <?php echo number_format($product['price']); ?></span>
                                <span class="text-gray-500 line-through ml-2">Rs. <?php echo number_format($product['original_price']); ?></span>
                            </div>
                            <?php else: ?>
                            <span class="text-xl font-bold text-amber-600">Rs. <?php echo number_format($product['price']); ?></span>
                            <?php endif; ?>
                            <button class="add-to-cart bg-amber-600 hover:bg-amber-700 text-green-600 rounded-full p-3 transition-all shadow-md hover:shadow-lg"
                                    data-id="<?php echo $product['id']; ?>"
                                    data-name="<?php echo htmlspecialchars($product['name']); ?>"
                                    data-price="<?php echo $product['price']; ?>"
                                    data-image="<?php echo htmlspecialchars($product['image']); ?>">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($total_pages > 1): ?>
            <div class="flex justify-center mt-12">
                <nav class="inline-flex rounded-xl shadow-md overflow-hidden" aria-label="Pagination">
                    <a href="?q=<?php echo urlencode($search_query); ?>&page=<?php echo max(1, $current_page - 1); ?>&sort=<?php echo urlencode($sort); ?>&show=<?php echo $per_page; ?>" class="inline-flex items-center px-4 py-3 bg-white text-gray-700 hover:bg-gray-50 border-r border-gray-200">
                        <i class="fas fa-chevron-left text-xs mr-2"></i> Previous
                    </a>
                    
                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <a href="?q=<?php echo urlencode($search_query); ?>&page=<?php echo $i; ?>&sort=<?php echo urlencode($sort); ?>&show=<?php echo $per_page; ?>" class="hidden md:inline-flex items-center px-4 py-3 border-r border-gray-200 <?php echo $i === $current_page ? 'bg-amber-600 text-white hover:bg-amber-700' : 'bg-white text-gray-700 hover:bg-gray-50'; ?>">
                        <?php echo $i; ?>
                    </a>
                    <?php endfor; ?>
                    
                    <a href="?q=<?php echo urlencode($search_query); ?>&page=<?php echo min($total_pages, $current_page + 1); ?>&sort=<?php echo urlencode($sort); ?>&show=<?php echo $per_page; ?>" class="inline-flex items-center px-4 py-3 bg-white text-gray-700 hover:bg-gray-50">
                        Next <i class="fas fa-chevron-right text-xs ml-2"></i>
                    </a>
                </nav>
            </div>
            
            <div class="text-center text-gray-600 mt-4">
                Page <?php echo $current_page; ?> of <?php echo $total_pages; ?>
            </div>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>

    <!-- Footer -->
    <?php include '../Components/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Cart functionality
            const cartButtons = document.querySelectorAll('.add-to-cart');
            const cartCount = document.getElementById('cart-count');

            // Initialize cart from session storage
            let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
            updateCartCount();

            // Add to cart event listeners
            cartButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    // Add a small animation effect
                    button.classList.add('animate-pulse');
                    setTimeout(() => {
                        button.classList.remove('animate-pulse');
                    }, 300);
                    
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

                    // Show confirmation with a nicer notification
                    showNotification(`${product.name} added to cart!`);
                });
            });

            // Update cart count display
            function updateCartCount() {
                if (cartCount) {
                    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
                    cartCount.textContent = totalItems;
                    
                    // Add a small animation when count changes
                    cartCount.classList.add('animate-pulse');
                    setTimeout(() => {
                        cartCount.classList.remove('animate-pulse');
                    }, 300);
                }
            }
            
            // Custom notification function
            function showNotification(message) {
                // Check if a notification container already exists
                let notificationContainer = document.getElementById('notification-container');
                
                // If not, create one
                if (!notificationContainer) {
                    notificationContainer = document.createElement('div');
                    notificationContainer.id = 'notification-container';
                    notificationContainer.className = 'fixed bottom-4 right-4 z-50 flex flex-col items-end space-y-2';
                    document.body.appendChild(notificationContainer);
                }
                
                // Create the notification
                const notification = document.createElement('div');
                notification.className = 'bg-amber-600 text-white px-4 py-3 rounded-lg shadow-lg flex items-center transform translate-x-full transition-transform duration-300 ease-out';
                notification.innerHTML = `
                    <i class="fas fa-shopping-cart mr-2"></i>
                    <span>${message}</span>
                    <button class="ml-4 text-white focus:outline-none">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                
                // Add to container
                notificationContainer.appendChild(notification);
                
                // Animate in
                setTimeout(() => {
                    notification.classList.remove('translate-x-full');
                }, 10);
                
                // Set up close button
                const closeButton = notification.querySelector('button');
                closeButton.addEventListener('click', () => {
                    notification.classList.add('translate-x-full');
                    setTimeout(() => {
                        notification.remove();
                    }, 300);
                });
                
                // Auto remove after 3 seconds
                setTimeout(() => {
                    notification.classList.add('translate-x-full');
                    setTimeout(() => {
                        notification.remove();
                    }, 300);
                }, 3000);
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
        });
    </script>
</body>
</html>
