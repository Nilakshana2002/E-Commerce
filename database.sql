CREATE DATABASE sweet_delights;
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

-- Sample product data (based on your HTML)
INSERT INTO products (name, description, price, image, category, rating, reviews, badge) VALUES
('Chocolate Truffle Cake', 'Rich and indulgent chocolate truffle cake, perfect for birthdays.', 3500.00, 'images/products/product-1.jpg', 'Birthday Cakes', 4.5, 42, 'Bestseller'),
('Red Velvet Cake', 'Classic red velvet cake with cream cheese frosting.', 3800.00, 'images/products/product-2.jpg', 'Birthday Cakes', 5.0, 38, NULL),
('Vanilla Buttercream Cake', 'Light and fluffy vanilla cake with buttercream frosting.', 3200.00, 'images/products/product-4.jpg', 'Birthday Cakes', 4.5, 31, NULL),
('Elegant Tiered Wedding Cake', 'Multi-tiered cake for your special day.', 25000.00, 'images/categories/wedding.jpg', 'Wedding Cakes', 5.0, 52, NULL),
('Assorted Cupcakes (Box of 6)', 'A delightful mix of flavored cupcakes.', 1800.00, 'images/categories/cupcakes.jpg', 'Cupcakes', 5.0, 64, 'Bestseller'),
('Chocolate Eclairs (Box of 4)', 'Creamy chocolate-filled eclairs.', 1200.00, 'images/categories/pastries.jpg', 'Pastries', 4.5, 41, NULL);