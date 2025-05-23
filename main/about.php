<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Sweet Delights</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="font-sans bg-gray-50">

     

<?php include '../Components/header.php'; ?>

    <!-- Page Header -->
    <section class="bg-amber-600 py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-white text-center">About Us</h1>
            <div class="flex justify-center mt-4">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2 text-white">
                        <li><a href="../main/index.html" class="hover:text-amber-200 transition">Home</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li class="font-medium">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <img src="../main/images/testimonials/chef-decorating-cake-stockcake.jpg" alt="Our Bakery Story" class="rounded-lg shadow-lg w-full h-auto">
                </div>
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-bold mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-4">Sweet Delights was founded in 2010 by master baker Priya Fernando with a simple mission: to create delicious, handcrafted cakes and pastries that bring joy to every celebration.</p>
                    <p class="text-gray-600 mb-4">What started as a small home-based bakery has grown into one of Sri Lanka's most beloved cake shops, serving thousands of customers across Colombo and beyond.</p>
                    <p class="text-gray-600 mb-4">Our journey has been filled with flour, sugar, and lots of love. We've baked for birthdays, weddings, anniversaries, and countless special moments, creating sweet memories that last a lifetime.</p>
                    <p class="text-gray-600">Today, we continue to uphold our commitment to quality, using only the finest ingredients and traditional baking methods, while also embracing innovation to create unique and memorable desserts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Our Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="bg-amber-100 rounded-full p-6 inline-block mb-4">
                        <i class="fas fa-heart text-amber-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Passion</h3>
                    <p class="text-gray-600">We pour our hearts into every creation, ensuring each cake is made with love and attention to detail.</p>
                </div>
                
                <!-- Value 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="bg-amber-100 rounded-full p-6 inline-block mb-4">
                        <i class="fas fa-star text-amber-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Quality</h3>
                    <p class="text-gray-600">We use only premium ingredients and never compromise on taste or freshness.</p>
                </div>
                
                <!-- Value 3 -->
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="bg-amber-100 rounded-full p-6 inline-block mb-4">
                        <i class="fas fa-users text-amber-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Community</h3>
                    <p class="text-gray-600">We believe in building relationships with our customers and giving back to the community that supports us.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Our Team Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Meet Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="text-center">
                    <div class="mb-4 relative overflow-hidden rounded-full">
                        <img src="../main/images/testimonials/download (1).jpeg" alt="Priya Fernando" class="w-48 h-48 object-cover mx-auto rounded-full">
                    </div>
                    <h3 class="text-xl font-bold mb-1">Priya Fernando</h3>
                    <p class="text-amber-600 mb-3">Founder & Head Baker</p>
                    <p class="text-gray-600">With over 20 years of baking experience, Priya leads our team with creativity and passion.</p>
                </div>
                
                <!-- Team Member 2 -->
                <div class="text-center">
                    <div class="mb-4 relative overflow-hidden rounded-full">
                        <img src="../main/images/testimonials/download (3).jpeg" alt="Amal Perera" class="w-48 h-48 object-cover mx-auto rounded-full">
                    </div>
                    <h3 class="text-xl font-bold mb-1">Amal Perera</h3>
                    <p class="text-amber-600 mb-3">Executive Pastry Chef</p>
                    <p class="text-gray-600">Amal brings French pastry techniques and local flavors together to create unique desserts.</p>
                </div>
                
                <!-- Team Member 3 -->
                <div class="text-center">
                    <div class="mb-4 relative overflow-hidden rounded-full">
                        <img src="../main/images/testimonials/download (2).jpeg" alt="Nisha Jayawardena" class="w-48 h-48 object-cover mx-auto rounded-full">
                    </div>
                    <h3 class="text-xl font-bold mb-1">Nisha Jayawardena</h3>
                    <p class="text-amber-600 mb-3">Cake Designer</p>
                    <p class="text-gray-600">Nisha's artistic talent turns simple cakes into stunning masterpieces for special occasions.</p>
                </div>
                
                <!-- Team Member 4 -->
                <div class="text-center">
                    <div class="mb-4 relative overflow-hidden rounded-full">
                        <img src="../main/images/testimonials/download (4).jpeg" alt="Dinesh Silva" class="w-48 h-48 object-cover mx-auto rounded-full">
                    </div>
                    <h3 class="text-xl font-bold mb-1">Dinesh Silva</h3>
                    <p class="text-amber-600 mb-3">Customer Experience Manager</p>
                    <p class="text-gray-600">Dinesh ensures every customer receives exceptional service from order to delivery.</p>
                </div>
            </div>
        </div>
    </section>

    
    
<div id="footer"></div>

<script>
  fetch('../Components/footer.php')
    .then(res => res.text())
    .then(data => {
      document.getElementById('footer').innerHTML = data;
    });
</script>
    

    <script src="script.js"></script>
    <script>
        // Mobile menu for this page
        document.addEventListener("DOMContentLoaded", () => {
            const mobileMenuButton = document.getElementById("mobile-menu-button");
            const mobileMenu = document.getElementById("mobile-menu");

            mobileMenuButton.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });
        });
    </script>
</body>
</html>
