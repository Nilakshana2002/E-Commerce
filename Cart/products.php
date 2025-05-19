<?php
// This file simulates a database of products

$products = [
    // Page 1 Products (Main Shop Page)
    [
        'id' => 1,
        'name' => 'Chocolate Truffle Cake',
        'price' => 3500,
        'image' => '../cart/images/products/truffle cake.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 4.5,
        'reviews' => 42,
        'tags' => ['bestseller'],
        'date_added' => '2023-10-15',
        'product_url' => 'product-details.php?id=1'
    ],
    [
        'id' => 2,
        'name' => 'Red Velvet Cake',
        'price' => 3800,
        'image' => '../cart/images/products/red velvet cake.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 5.0,
        'reviews' => 38,
        'tags' => [],
        'date_added' => '2023-09-20'
    ],
    [
        'id' => 3,
        'name' => 'Blueberry Cheesecake',
        'price' => 4200,
        'image' => '../cart/images/products/cheese cake.jpg',
        'category' => 'Pastries',
        'rating' => 4.0,
        'reviews' => 24,
        'tags' => ['new'],
        'date_added' => '2023-12-05'
    ],
    [
        'id' => 4,
        'name' => 'Vanilla Buttercream Cake',
        'price' => 3200,
        'image' => '../cart/images/products/buttercream cake.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 4.5,
        'reviews' => 31,
        'tags' => [],
        'date_added' => '2023-08-12'
    ],
    [
        'id' => 5,
        'name' => 'Fruit Gateau',
        'price' => 3900,
        'image' => '../cart/images/products/fruite gateau.jpg',
        'category' => 'Pastries',
        'rating' => 4.0,
        'reviews' => 19,
        'tags' => [],
        'date_added' => '2023-11-03'
    ],
    [
        'id' => 6,
        'name' => 'Chocolate Mousse Cake',
        'price' => 3600,
        'image' => '../cart/images/products/chocolate mousse cake.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 5.0,
        'reviews' => 47,
        'tags' => ['sale'],
        'original_price' => 4200,
        'date_added' => '2023-07-25'
    ],
    
    // Page 2 Products
    [
        'id' => 7,
        'name' => 'Strawberry Shortcake',
        'price' => 3200,
        'image' => '../cart/images/products/strawberry-shortcake.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 4.5,
        'reviews' => 29,
        'tags' => ['new'],
        'date_added' => '2023-12-10'
    ],
    [
        'id' => 8,
        'name' => 'Tiramisu Cake',
        'price' => 4100,
        'image' => '../cart/images/products/tiramisu.jpg',
        'category' => 'Pastries',
        'rating' => 4.0,
        'reviews' => 34,
        'tags' => [],
        'date_added' => '2023-09-15'
    ],
    [
        'id' => 9,
        'name' => 'Black Forest Cake',
        'price' => 3700,
        'image' => '../cart/images/products/black-forest.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 5.0,
        'reviews' => 52,
        'tags' => ['bestseller'],
        'date_added' => '2023-08-05'
    ],
    [
        'id' => 10,
        'name' => 'Carrot Cake',
        'price' => 3400,
        'image' => '../cart/images/products/carrot-cake.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 3.5,
        'reviews' => 27,
        'tags' => [],
        'date_added' => '2023-10-20'
    ],
    [
        'id' => 11,
        'name' => 'Lemon Drizzle Cake',
        'price' => 2800,
        'image' => '../cart/images/products/lemon-cake.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 4.0,
        'reviews' => 23,
        'tags' => ['sale'],
        'original_price' => 3500,
        'date_added' => '2023-07-15'
    ],
    [
        'id' => 12,
        'name' => 'Coffee Walnut Cake',
        'price' => 3600,
        'image' => '../cart/images/products/coffee-cake.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 4.5,
        'reviews' => 31,
        'tags' => [],
        'date_added' => '2023-11-12'
    ],
    
    // Page 3 Products
    [
        'id' => 13,
        'name' => 'Mango Passion Cake',
        'price' => 4500,
        'image' => '../cart/images/products/mango-cake.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 4.0,
        'reviews' => 18,
        'tags' => ['new'],
        'date_added' => '2023-12-15'
    ],
    [
        'id' => 14,
        'name' => 'Chocolate Cupcakes (6 pcs)',
        'price' => 1800,
        'image' => '../cart/images/products/chocolate-cupcakes.jpg',
        'category' => 'Cupcakes',
        'rating' => 4.5,
        'reviews' => 45,
        'tags' => [],
        'date_added' => '2023-09-25'
    ],
    [
        'id' => 15,
        'name' => 'Vanilla Cupcakes (6 pcs)',
        'price' => 1600,
        'image' => '../cart/images/products/vanilla-cupcakes.jpg',
        'category' => 'Cupcakes',
        'rating' => 4.0,
        'reviews' => 37,
        'tags' => [],
        'date_added' => '2023-10-05'
    ],
    [
        'id' => 16,
        'name' => 'Rainbow Layer Cake',
        'price' => 4800,
        'image' => '../cart/images/products/rainbow-cake.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 5.0,
        'reviews' => 56,
        'tags' => ['bestseller'],
        'date_added' => '2023-08-18'
    ],
    [
        'id' => 17,
        'name' => 'Chocolate Eclairs (4 pcs)',
        'price' => 1400,
        'image' => '../cart/images/products/chocolate-eclairs.jpg',
        'category' => 'Pastries',
        'rating' => 3.5,
        'reviews' => 29,
        'tags' => ['sale'],
        'original_price' => 1800,
        'date_added' => '2023-07-30'
    ],
    [
        'id' => 18,
        'name' => 'Assorted Macarons (12 pcs)',
        'price' => 2400,
        'image' => '../cart/images/products/macarons.jpg',
        'category' => 'Pastries',
        'rating' => 4.5,
        'reviews' => 42,
        'tags' => [],
        'date_added' => '2023-11-20'
    ],
    
    // Page 4 Products
    [
        'id' => 19,
        'name' => 'Butter Croissants (6 pcs)',
        'price' => 1200,
        'image' => '../cart/images/products/croissants.jpg',
        'category' => 'Pastries',
        'rating' => 4.0,
        'reviews' => 33,
        'tags' => [],
        'date_added' => '2023-09-10'
    ],
    [
        'id' => 20,
        'name' => 'Cinnamon Rolls (4 pcs)',
        'price' => 1600,
        'image' => '../cart/images/products/cinnamon-rolls.jpg',
        'category' => 'Pastries',
        'rating' => 5.0,
        'reviews' => 48,
        'tags' => ['bestseller'],
        'date_added' => '2023-08-25'
    ],
    [
        'id' => 21,
        'name' => 'Apple Pie',
        'price' => 2200,
        'image' => '../cart/images/products/apple-pie.jpg',
        'category' => 'Pastries',
        'rating' => 4.5,
        'reviews' => 39,
        'tags' => [],
        'date_added' => '2023-10-30'
    ],
    [
        'id' => 22,
        'name' => 'Chocolate Chip Cookies (12 pcs)',
        'price' => 1400,
        'image' => '../cart/images/products/chocolate-cookies.jpg',
        'category' => 'Pastries',
        'rating' => 4.0,
        'reviews' => 41,
        'tags' => ['sale'],
        'original_price' => 1800,
        'date_added' => '2023-07-20'
    ],
    [
        'id' => 23,
        'name' => 'Assorted Donuts (6 pcs)',
        'price' => 1800,
        'image' => '../cart/images/products/donuts.jpg',
        'category' => 'Pastries',
        'rating' => 4.0,
        'reviews' => 22,
        'tags' => ['new'],
        'date_added' => '2023-12-01'
    ],
    [
        'id' => 24,
        'name' => 'Chocolate Brownies (8 pcs)',
        'price' => 1900,
        'image' => '../cart/images/products/brownies.jpg',
        'category' => 'Pastries',
        'rating' => 4.5,
        'reviews' => 36,
        'tags' => [],
        'date_added' => '2023-11-05'
    ],
    
    // Page 5 Products
    [
        'id' => 25,
        'name' => 'Elegant Wedding Cake',
        'price' => 8500,
        'image' => '../cart/images/products/wedding-cake.jpg',
        'category' => 'Wedding Cakes',
        'rating' => 5.0,
        'reviews' => 28,
        'tags' => ['premium'],
        'date_added' => '2023-09-05'
    ],
    [
        'id' => 26,
        'name' => 'Anniversary Celebration Cake',
        'price' => 5200,
        'image' => '../cart/images/products/anniversary-cake.jpg',
        'category' => 'Custom Cakes',
        'rating' => 4.5,
        'reviews' => 19,
        'tags' => [],
        'date_added' => '2023-10-25'
    ],
    [
        'id' => 27,
        'name' => 'Deluxe Birthday Cake',
        'price' => 4800,
        'image' => '../cart/images/products/birthday-cake.jpg',
        'category' => 'Birthday Cakes',
        'rating' => 4.0,
        'reviews' => 15,
        'tags' => ['new'],
        'date_added' => '2023-12-08'
    ],
    [
        'id' => 28,
        'name' => 'Custom Design Cake',
        'price' => 6500,
        'image' => '../cart/images/products/custom-cake.jpg',
        'category' => 'Custom Cakes',
        'rating' => 5.0,
        'reviews' => 32,
        'tags' => ['custom'],
        'date_added' => '2023-11-15'
    ],
    [
        'id' => 29,
        'name' => 'Luxury Chocolate Gift Box',
        'price' => 2800,
        'image' => '../cart/images/products/chocolate-gift-box.jpg',
        'category' => 'Pastries',
        'rating' => 4.5,
        'reviews' => 27,
        'tags' => ['sale'],
        'original_price' => 3500,
        'date_added' => '2023-08-10'
    ],
    [
        'id' => 30,
        'name' => 'Dessert Platter',
        'price' => 5200,
        'image' => '../cart/images/products/dessert-platter.jpg',
        'category' => 'Custom Cakes',
        'rating' => 4.0,
        'reviews' => 23,
        'tags' => [],
        'date_added' => '2023-09-30'
    ]
];

// Get all unique categories and count products in each
function getCategoriesWithCount($products) {
    $categories = [];
    foreach ($products as $product) {
        if (!isset($categories[$product['category']])) {
            $categories[$product['category']] = 0;
        }
        $categories[$product['category']]++;
    }
    return $categories;
}

// Filter products based on criteria
function filterProducts($products, $filters = []) {
    $filtered = $products;
    
    // Filter by category
    if (!empty($filters['category'])) {
        $filtered = array_filter($filtered, function($product) use ($filters) {
            return $product['category'] === $filters['category'];
        });
    }
    
    // Filter by price range
    if (!empty($filters['min_price']) && !empty($filters['max_price'])) {
        $filtered = array_filter($filtered, function($product) use ($filters) {
            return $product['price'] >= $filters['min_price'] && $product['price'] <= $filters['max_price'];
        });
    }
    
    // Filter by special offers
    if (!empty($filters['special_offers'])) {
        $filtered = array_filter($filtered, function($product) use ($filters) {
            foreach ($filters['special_offers'] as $offer) {
                if (in_array($offer, $product['tags'])) {
                    return true;
                }
            }
            return false;
        });
    }
    
    // Sort products
    if (!empty($filters['sort'])) {
        switch ($filters['sort']) {
            case 'price_low_high':
                usort($filtered, function($a, $b) {
                    return $a['price'] - $b['price'];
                });
                break;
            case 'price_high_low':
                usort($filtered, function($a, $b) {
                    return $b['price'] - $a['price'];
                });
                break;
            case 'newest':
                usort($filtered, function($a, $b) {
                    return strtotime($b['date_added']) - strtotime($a['date_added']);
                });
                break;
            case 'bestselling':
                usort($filtered, function($a, $b) {
                    return (in_array('bestseller', $b['tags']) ? 1 : 0) - (in_array('bestseller', $a['tags']) ? 1 : 0);
                });
                break;
            default: // featured - default sorting
                // No specific sorting
                break;
        }
    }
    
    return array_values($filtered); // Reset array keys
}

// Paginate products
function paginateProducts($products, $page = 1, $per_page = 6) {
    $offset = ($page - 1) * $per_page;
    return array_slice($products, $offset, $per_page);
}
?>
