CREATE DATABASE IF NOT EXISTS sweet_delights;
USE sweet_delights;

-- Products table
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    rating DECIMAL(3, 1) DEFAULT 0,
    reviews INT DEFAULT 0,
    badge VARCHAR(50) DEFAULT NULL
);

-- Cart table (for logged-in users, optional)
CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    eMail VARCHAR(50),
    password VARCHAR(500),
    PRIMARY KEY (id)
);

INSERT INTO products (name, description, price, image, category, rating, reviews, badge) VALUES
('Chocolate Truffle Cake', 'Rich and indulgent chocolate truffle cake, perfect for birthdays.', 3500.00, '../main/images/categories/truffle cake.jpg', 'Birthday Cakes', 4.5, 42, 'Best Seller'),
('Red Velvet Cake', 'Classic red velvet cake with cream cheese frosting.', 3800.00, '../main/images/categories/red velvet cake.jpg', 'Birthday Cakes', 5.0, 38, 'New'),
('Vanilla Buttercream Cake', 'Light and fluffy vanilla cake with buttercream frosting.', 3200.00, '../main/images/categories/buttercream cake.jpg', 'Birthday Cakes', 4.5, 31, 'Top Rated'),
('Elegant Tiered Wedding Cake', 'Multi-tiered cake for your special day.', 25000.00, '../main/images/categories/tiered cake.jpg', 'Wedding Cakes', 5.0, 52, 'Limited Edition'),
('Assorted Cupcakes (Box of 6)', 'A delightful mix of flavored cupcakes.', 1800.00, '../main/images/categories/assorted cupcake.jpg', 'Cupcakes', 5.0, 64, 'Popular'),
('Chocolate Eclairs (Box of 4)', 'Creamy chocolate-filled eclairs.', 1200.00, '../main/images/categories/eclairs.jpg', 'Pastries', 4.5, 41, 'Seasonal'),
('Floral Wedding Cake', 'An elegant wedding centerpiece adorned with delicate edible flowers. Perfectly crafted to add romance and charm to your special day.', 22000.00, '../main/images/categories/floral cake.jpg', 'Wedding', 4.8, 45, 'bestseller'),
('Rustic Wedding Cake', 'A charming wedding cake with a natural, earthy design. Decorated with fresh blooms and textured buttercream for a cozy countryside vibe.', 18500.00, '../main/images/categories/rustic cake.jpg', 'Wedding', 4.7, 38, 'popular'),
('Chocolate Cupcakes (Box of 6)', 'Delicious chocolate cupcakes, perfect for any occasion. Moist, rich, and topped with creamy frosting.', 1600.00, '../main/images/categories/c cupcakes.jpg', 'cupcakes', 4.7, 15, 'New Arrival'),
('Red Velvet Cupcakes (Box of 6)', 'Classic red velvet cupcakes with a smooth cream cheese frosting. Perfectly moist and rich for any celebration.', 1500.00, '../main/images/categories/red velvet cupcake.jpg', 'cupcakes', 4.8, 29, 'Sale'),
('Fruit Tarts (Box of 4)', 'Fresh and colorful fruit tarts with a buttery crust, creamy filling, and topped with seasonal fruits. A delightful treat for any occasion.', 1400.00, '../main/images/categories/fruit tarts.jpg', 'tarts', 4.7, 22, 'New Arrival'),
('Butter Croissants (Box of 6)', 'Freshly baked buttery croissants, flaky and golden brown, perfect for breakfast or a delightful snack. Comes in a convenient box of 6 to share or enjoy throughout the week.', 1100.00, '../main/images/categories/butter.jpg', 'pastries', 4.6, 56, 'Bestseller'),
('Strawberry Shortcake', 'Light sponge cake layered with whipped cream and fresh strawberries. A fruity, creamy delight for any sweet craving.', 3200.00, '../main/images/shop/strawberry shortcake.jpg', 'Cakes', 4.6, 29, 'Best Seller'),
('Black Forest Cake', 'Classic German chocolate cake with layers of whipped cream, cherries, and chocolate shavings. Rich, moist, and perfectly sweet.', 3700.00, '../main/images/shop/black forest cake.jpg', 'Cakes', 4.8, 52, 'Top Rated'),
('Tiramisu Cake', 'An Italian favorite made with espresso-soaked sponge, mascarpone cream, and a dusting of cocoa. A coffee-lover’s dream dessert.', 4100.00, '../main/images/shop/tiramisu cake.jpg', 'Cakes', 4.7, 34, 'Popular'),
('Carrot Cake', 'Moist spiced cake made with fresh carrots and nuts, layered with smooth cream cheese frosting. Comforting and wholesome.', 3400.00, '../main/images/shop/carrot cake.jpg', 'Cakes', 4.5, 27, NULL),
('Lemon Drizzle Cake', 'Zesty lemon sponge topped with a tangy lemon glaze. Refreshing, light, and perfect for summer days.', 2800.00, '../main/images/shop/lemon drizzle cake.jpg', 'Cakes', 4.3, 23, NULL),
('Coffee Walnut Cake', 'A rich coffee-flavored sponge with crunchy walnuts, layered with coffee buttercream. A classic with a nutty kick.', 3600.00, '../main/images/shop/coffee cake.jpg', 'Cakes', 4.4, 31, NULL),
('Mango Passion Cake', 'Tropical delight made with mango puree and passion fruit layers for a fruity, refreshing taste in every bite.', 4500.00, '../main/images/shop/mango cake.jpg', 'Cakes', 4.6, 18, 'Seasonal'),
('Chocolate Cupcakes (6 pcs)', 'A pack of six moist chocolate cupcakes topped with chocolate frosting and sprinkles. Perfect for sharing or indulging!', 1800.00, '../main/images/shop/c cupcakes.jpg', 'Cupcakes', 4.8, 45, 'Best Seller'),
('Vanilla Cupcakes (6 pcs)', 'Soft vanilla cupcakes with creamy vanilla buttercream frosting. Classic and crowd-pleasing.', 1600.00, '../main/images/shop/vanila cupcake.jpg', 'Cupcakes', 4.5, 37, NULL),
('Rainbow Layer Cake', 'Bright and colorful layers of vanilla sponge stacked with frosting. Fun, festive, and perfect for birthdays or parties!', 4800.00, '../main/images/shop/rainbow cake.jpg', 'Cakes', 4.9, 56, 'Top Rated'),
('Assorted Macarons (12 pcs)', 'Elegant and colorful French macarons in a variety of flavors like raspberry, pistachio, lemon, and chocolate.', 2400.00, '../main/images/shop/assorted macarons.jpg', 'Desserts', 4.7, 42, NULL),
('Cinnamon Rolls (4 pcs)', 'Soft and gooey cinnamon rolls baked fresh and topped with creamy icing. Comfort food at its best.', 1600.00, '../main/images/shop/cinnamon rolls.jpg', 'Desserts', 4.6, 48, NULL),
('Apple Pie', 'Golden crust filled with spiced apples and baked to perfection. Served warm for a true homemade taste.', 2200.00, '../main/images/shop/apple pie.jpg', 'Pies', 4.4, 39, NULL),
('Chocolate Chip Cookies', 'Freshly baked cookies with gooey chocolate chips in every bite. Crispy outside, chewy inside.', 1400.00, '../main/images/shop/cookies.jpg', 'Cookies', 4.5, 41, NULL),
('Assorted Donuts (6 pcs)', 'A mix of frosted, glazed, and filled donuts in a 6-piece box. Perfect for breakfast, snacks, or parties.', 1800.00, '../main/images/categories/eclairs.jpg', 'Donuts', 4.3, 22, 'Popular'),
('Chocolate Brownies (8 pcs)', 'Fudgy, rich brownies with a crispy top and gooey center. A true chocolate lover''s treat.', 1900.00, '../main/images/categories/brownies.jpg', 'Brownies', 4.8, 36, 'Best Seller'),
('Assorted Donuts', 'A fun box of donuts in different flavors and styles – classic glaze, chocolate, cream-filled, and more!', 1800.00, '../main/images/shop/donuts.jpg', 'Donuts', 4.2, 22, NULL),
('Custom Design Cake', 'Designed just for you! Share your theme or idea and we’ll create a one-of-a-kind cake for any occasion.', 6500.00, '../main/images/shop/custom cake.jpg', 'Cakes', 5.0, 32, 'Custom'),
('Luxury Chocolate Gift Box', 'A premium selection of handcrafted chocolates in elegant packaging. Ideal for gifting and celebrations.', 2800.00, '../main/images/shop/gift box.jpg', 'Chocolates', 4.9, 27, 'Gift'),
('Dessert Platter', 'A party-ready mix of mini desserts including brownies, tarts, cupcakes, and more. Great for events or gatherings.', 5200.00, '../main/images/shop/dessert platter.jpg', 'Desserts', 4.6, 23, 'Party Pack'),
('Anniversary Celebration Cake', 'A romantic and elegant cake perfect for anniversaries, made with your choice of flavors and designs.', 5200.00, '../main/images/categories/eclairs.jpg', 'Cakes', 4.8, 19, 'Anniversary'),
('Deluxe Birthday Cake', 'A grand birthday cake with vibrant decorations and customizable flavors. Guaranteed to wow any party crowd!', 4800.00, '../main/images/shop/deluxe cake.jpg', 'Cakes', 4.9, 15, 'Birthday');




INSERT INTO products (name, description, price, image, category, rating, reviews)
VALUES 
('Cake Name','Delicious cake description.',3500.00,'main/images/products/product-1.jpg','Birthday Cakes',4.5,42);


INSERT INTO products (name, description, price, image, category, rating, reviews, badge)
VALUES (
    'Rustic Wedding Cake',
    'A charming wedding cake with a natural, earthy design. Decorated with fresh blooms and textured buttercream for a cozy countryside vibe.',
    18500,
    '../main/images/categories/rustic cake.jpg',
    'Wedding',
    4.7,
    38,
    'popular'
);


INSERT INTO products (name, description, price, image, category, rating, reviews, badge)
VALUES (
  'Chocolate Cupcakes (Box of 6)',
  'Delicious chocolate cupcakes, perfect for any occasion. Moist, rich, and topped with creamy frosting.',
  1600,
  '../main/images/categories/c cupcakes.jpg',
  'cupcakes',
  4.7,
  15,
  'New Arrival'
);

INSERT INTO products (name, description, price, image, category, rating, reviews, badge)
VALUES (
  'Red Velvet Cupcakes (Box of 6)',
  'Classic red velvet cupcakes with a smooth cream cheese frosting. Perfectly moist and rich for any celebration.',
  19.00,
  '../main/images/categories/red velvet cupcake.jpg',
  'cupcakes',
  4.8,
  29,
  'Sale'
);

INSERT INTO products (name, description, price, image, category, rating, reviews, badge)
VALUES (
  'Fruit Tarts (Box of 4)',
  'Fresh and colorful fruit tarts with a buttery crust, creamy filling, and topped with seasonal fruits. A delightful treat for any occasion.',
  22.00,
  '../main/images/categories/fruit tarts.jpg',
  'tarts',
  4.7,
  22,
  'New Arrival'
);


UPDATE products
SET price = 1500
WHERE id =11;


INSERT INTO products (name, description, price, image, category, rating, reviews, badge)
VALUES (
  'Butter Croissants (Box of 6)',
  'Freshly baked buttery croissants, flaky and golden brown, perfect for breakfast or a delightful snack. Comes in a convenient box of 6 to share or enjoy throughout the week.',
  1100.00,
  '../main/images/categories/butter.jpg',
  'pastries',
  4.6,
  56,
  'Bestseller'
);



-- Insert Blueberry Cheesecake
INSERT INTO products (name, description, price, image, category, rating, reviews, badge)
VALUES (
    'Blueberry Cheesecake',
    'A creamy, melt-in-your-mouth cheesecake topped with a luscious blueberry glaze. Perfectly balanced for every dessert lover!',
    4200.00,
    '../main/images/shop/cheese cake.jpg',
    'cheesecake',
    4.7,
    24,
    'popular'
);

INSERT INTO products (name, description, price, image, category, rating, reviews, badge)
VALUES (
    'Chocolate Mousse Cake',
    'An indulgent, rich chocolate cake layered with silky mousse and topped with chocolate shavings. A chocoholic’s dream!',
    3600.00,
    '../main/images/shop/chocolate mousse cake.jpg',
    'chocolate',
    4.9,
    47,
    'featured'
);

INSERT INTO products (name, description, price, image, category, rating, reviews, badge)
VALUES (
    'Fruit Gateau',
    'A light and fluffy sponge cake layered with whipped cream and topped with a medley of fresh seasonal fruits. Refreshing and elegant!',
    3900.00,
    '../main/images/shop/fruite gateau.jpg',
    'fruit',
    4.6,
    19,
    'new'
);


INSERT INTO products (name, description, price, image, category, rating, reviews, badge)
VALUES (
    'Elegant Wedding Cake',
    'A stunning multi-tiered wedding cake designed with elegance and precision. Customizable flavors and decorations to match your dream celebration.',
    8500.00,
    '../main/images/shop/elegent cake.jpg',
    'wedding',
    4.9,
    28,
    'premium'
);

INSERT INTO products (name, description, price, image, category, rating, reviews, badge)
VALUES (
    'Anniversary Layer Cake',
    'A beautifully layered cake crafted for memorable anniversaries. Rich in flavor, elegant in design, and perfect for celebrating love.',
    5200.00,
    '../main/images/shop/anniversary cake.jpg',
    'anniversary',
    4.7,
    19,
    'special'
);