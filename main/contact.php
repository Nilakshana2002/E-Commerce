<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Sweet Delights</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body class="font-sans bg-gray-50">

   <?php include '../Components/header.php'; ?>

  <!-- Page Header -->
  <section class="bg-amber-600 py-8">
      <div class="container mx-auto px-4">
          <h1 class="text-3xl font-bold text-white text-center">Contact Us</h1>
          <div class="flex justify-center mt-2">
              <nav class="flex" aria-label="Breadcrumb">
                  <ol class="flex items-center space-x-2 text-white">
                      <li><a href="index.html" class="hover:text-amber-200 transition">Home</a></li>
                      <li><span class="mx-2">/</span></li>
                      <li class="font-medium">Contact</li>
                  </ol>
              </nav>
          </div>
      </div>
  </section>

  <!-- Contact Info Section -->
  <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <!-- Contact Card 1 -->
              <div class="bg-gray-50 p-8 rounded-lg shadow-md text-center">
                  <div class="bg-amber-100 rounded-full p-6 inline-block mb-4">
                      <i class="fas fa-map-marker-alt text-amber-600 text-3xl"></i>
                  </div>
                  <h3 class="text-xl font-bold mb-3">Visit Our Store</h3>
                  <p class="text-gray-600 mb-2">123 Galle Road, Colombo 03</p>
                  <p class="text-gray-600">Sri Lanka</p>
              </div>
              
              <!-- Contact Card 2 -->
              <div class="bg-gray-50 p-8 rounded-lg shadow-md text-center">
                  <div class="bg-amber-100 rounded-full p-6 inline-block mb-4">
                      <i class="fas fa-phone-alt text-amber-600 text-3xl"></i>
                  </div>
                  <h3 class="text-xl font-bold mb-3">Call Us</h3>
                  <p class="text-gray-600 mb-2">+94 11 234 5678</p>
                  <p class="text-gray-600">Mon-Sat: 9AM - 7PM</p>
              </div>
              
              <!-- Contact Card 3 -->
              <div class="bg-gray-50 p-8 rounded-lg shadow-md text-center">
                  <div class="bg-amber-100 rounded-full p-6 inline-block mb-4">
                      <i class="fas fa-envelope text-amber-600 text-3xl"></i>
                  </div>
                  <h3 class="text-xl font-bold mb-3">Email Us</h3>
                  <p class="text-gray-600 mb-2">info@sweetdelights.lk</p>
                  <p class="text-gray-600">We'll respond within 24 hours</p>
              </div>
          </div>
      </div>
  </section>

  <!-- Contact Form Section -->
  <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
          <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
              <h2 class="text-3xl font-bold text-center mb-8">Send Us a Message</h2>
              <form action="#" method="POST">
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                      <div>
                          <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                          <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                      </div>
                      <div>
                          <label for="email" class="block text-gray-700 font-medium mb-2">Your Email</label>
                          <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                      </div>
                  </div>
                  <div class="mb-6">
                      <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                      <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500">
                  </div>
                  <div class="mb-6">
                      <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                      <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500" required>
                  </div>
                  <div class="mb-6">
                      <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
                      <textarea id="message" name="message" rows="6" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500" required></textarea>
                  </div>
                  <div class="mb-6">
                      <div class="flex items-center">
                          <input type="checkbox" id="privacy" name="privacy" class="mr-2" required>
                          <label for="privacy" class="text-gray-600">I agree to the <a href="privacy-policy.html" class="text-amber-600 hover:text-amber-800 transition">Privacy Policy</a></label>
                      </div>
                  </div>
                  <div class="text-center">
                      <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-8 rounded-md transition">Send Message</button>
                  </div>
              </form>
          </div>
      </div>
  </section>

<!-- Map Section -->
<section class="py-12 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">Find Us</h2>
    <div class="bg-gray-200 rounded-lg overflow-hidden h-96">
      <!-- Embedded Google Map for Colombo, Sri Lanka -->
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.376611283148!2d79.8410024!3d6.9270786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25948c25dd2df%3A0xc5d07181a94be6b4!2sColombo!5e0!3m2!1sen!2slk!4v1715859063005!5m2!1sen!2slk" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
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
