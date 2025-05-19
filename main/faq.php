<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs | Sweet Delights</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body class="font-sans bg-gray-50">
  <!-- Announcement Bar -->


<?php include '../Components/header.php'; ?>

  <!-- Page Header -->
  <section class="bg-amber-600 py-8">
      <div class="container mx-auto px-4">
          <h1 class="text-3xl font-bold text-white text-center">Frequently Asked Questions</h1>
          <div class="flex justify-center mt-2">
              <nav class="flex" aria-label="Breadcrumb">
                  <ol class="flex items-center space-x-2 text-white">
                      <li><a href="index.html" class="hover:text-amber-200 transition">Home</a></li>
                      <li><span class="mx-2">/</span></li>
                      <li class="font-medium">FAQs</li>
                  </ol>
              </nav>
          </div>
      </div>
  </section>

  <!-- FAQ Categories -->
  <section class="py-8 bg-white">
      <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center gap-4">
              <a href="#ordering" class="px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition">Ordering</a>
              <a href="#delivery" class="px-6 py-3 bg-gray-200 text-gray-800 rounded-full hover:bg-amber-600 hover:text-white transition">Delivery</a>
              <a href="#payment" class="px-6 py-3 bg-gray-200 text-gray-800 rounded-full hover:bg-amber-600 hover:text-white transition">Payment</a>
              <a href="#products" class="px-6 py-3 bg-gray-200 text-gray-800 rounded-full hover:bg-amber-600 hover:text-white transition">Products</a>
              <a href="#custom" class="px-6 py-3 bg-gray-200 text-gray-800 rounded-full hover:bg-amber-600 hover:text-white transition">Custom Orders</a>
          </div>
      </div>
  </section>

  <!-- FAQ Content -->
  <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4 max-w-4xl">
          <!-- Ordering FAQs -->
          <div id="ordering" class="mb-12">
              <h2 class="text-2xl font-bold mb-6 pb-2 border-b border-gray-200">Ordering</h2>
              
              <div class="space-y-6">
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">How do I place an order?</h3>
                      <p class="text-gray-600">You can place an order through our website by selecting the desired products and proceeding to checkout. Alternatively, you can call us at +94 11 234 5678 or visit our store in person.</p>
                  </div>
                  
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">How far in advance should I place my order?</h3>
                      <p class="text-gray-600">For regular cakes and pastries, we recommend placing your order at least 24 hours in advance. For custom cakes and large orders, please allow 3-5 days. Wedding cakes should be ordered at least 2-4 weeks in advance.</p>
                  </div>
                  
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">Can I modify or cancel my order?</h3>
                      <p class="text-gray-600">Orders can be modified or canceled up to 48 hours before the scheduled delivery or pickup time. Please contact our customer service team for assistance. Please note that custom cake orders that have already been started cannot be canceled or refunded.</p>
                  </div>
              </div>
          </div>
          
          <!-- Delivery FAQs -->
          <div id="delivery" class="mb-12">
              <h2 class="text-2xl font-bold mb-6 pb-2 border-b border-gray-200">Delivery</h2>
              
              <div class="space-y-6">
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">Do you offer delivery?</h3>
                      <p class="text-gray-600">Yes, we offer delivery services in Colombo, Kandy, Galle, and Negombo. Delivery to other areas may be available upon request with additional charges.</p>
                  </div>
                  
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">What are your delivery charges?</h3>
                      <p class="text-gray-600">Delivery charges vary based on location. Within Colombo city limits, delivery is free for orders above Rs. 5,000. For other areas, charges range from Rs. 300 to Rs. 1,000 depending on the distance.</p>
                  </div>
                  
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">Do you offer same-day delivery?</h3>
                      <p class="text-gray-600">Yes, we offer same-day delivery for orders placed before 12 PM, subject to availability. Please note that same-day delivery may not be available for custom cakes or during peak seasons.</p>
                  </div>
              </div>
          </div>
          
          <!-- Payment FAQs -->
          <div id="payment" class="mb-12">
              <h2 class="text-2xl font-bold mb-6 pb-2 border-b border-gray-200">Payment</h2>
              
              <div class="space-y-6">
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">What payment methods do you accept?</h3>
                      <p class="text-gray-600">We accept cash, credit/debit cards (Visa, Mastercard, American Express), online bank transfers, and mobile payment apps like FriMi and HNB SOLO.</p>
                  </div>
                  
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">Do I need to pay in advance?</h3>
                      <p class="text-gray-600">For standard orders, we require a 50% advance payment to confirm your order. For custom cakes and large orders, we require full payment in advance. The remaining balance for standard orders can be paid upon delivery or pickup.</p>
                  </div>
                  
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">Are there any additional charges?</h3>
                      <p class="text-gray-600">All our prices are inclusive of taxes. Additional charges may apply for special decorations, premium ingredients, or delivery to locations outside our standard delivery areas.</p>
                  </div>
              </div>
          </div>
          
          <!-- Products FAQs -->
          <div id="products" class="mb-12">
              <h2 class="text-2xl font-bold mb-6 pb-2 border-b border-gray-200">Products</h2>
              
              <div class="space-y-6">
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">What ingredients do you use?</h3>
                      <p class="text-gray-600">We use premium quality ingredients including real butter, fresh eggs, high-quality flour, and natural flavorings. We source local ingredients whenever possible to ensure freshness and support local farmers.</p>
                  </div>
                  
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">Do you offer eggless or vegan options?</h3>
                      <p class="text-gray-600">Yes, we offer eggless cakes and pastries. We also have a limited selection of vegan options. Please specify your dietary requirements when placing your order.</p>
                  </div>
                  
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">How should I store my cake?</h3>
                      <p class="text-gray-600">Our cakes are best consumed on the day of delivery or pickup. If you need to store it, keep it in a cool, dry place away from direct sunlight. Refrigerate cream-based cakes, but allow them to come to room temperature for about 30 minutes before serving for the best taste and texture.</p>
                  </div>
              </div>
          </div>
          
          <!-- Custom Orders FAQs -->
          <div id="custom" class="mb-12">
              <h2 class="text-2xl font-bold mb-6 pb-2 border-b border-gray-200">Custom Orders</h2>
              
              <div class="space-y-6">
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">Can I order a custom cake?</h3>
                      <p class="text-gray-600">Yes, we specialize in custom cakes for all occasions. You can provide us with your design ideas, theme, or reference images, and our cake designers will create a unique cake for you.</p>
                  </div>
                  
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">How much do custom cakes cost?</h3>
                      <p class="text-gray-600">The cost of custom cakes varies depending on the design complexity, size, flavors, and special decorations. We provide a detailed quote after discussing your requirements. Custom cakes typically start from Rs. 5,000.</p>
                  </div>
                  
                  <div class="bg-white p-6 rounded-lg shadow-md">
                      <h3 class="text-xl font-bold mb-3">Can you recreate a cake from a photo?</h3>
                      <p class="text-gray-600">Yes, we can recreate cakes based on photos or references you provide. While we strive to match the design as closely as possible, please note that there may be slight variations due to our unique baking style and available ingredients.</p>
                  </div>
              </div>
          </div>
          
          <!-- Still Have Questions -->
          <div class="bg-amber-50 p-8 rounded-lg shadow-md text-center">
              <h2 class="text-2xl font-bold mb-4">Still Have Questions?</h2>
              <p class="text-gray-600 mb-6">We're here to help! Contact our customer service team for any additional questions or concerns.</p>
              <div class="flex flex-col sm:flex-row justify-center gap-4">
                  <a href="contact.html" class="bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-6 rounded-md transition">Contact Us</a>
                  <a href="tel:+94112345678" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-3 px-6 rounded-md transition flex items-center justify-center">
                      <i class="fas fa-phone-alt mr-2"></i>
                      <span>+94 11 234 5678</span>
                  </a>
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
    document.addEventListener("DOMContentLoaded", () => {
      const mobileMenuButton = document.getElementById("mobile-menu-button");
      const mobileMenu = document.getElementById("mobile-menu");

      mobileMenuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });
      
      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          
          const targetId = this.getAttribute('href');
          const targetElement = document.querySelector(targetId);
          
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop - 100,
              behavior: 'smooth'
            });
            
            // Update active category button
            document.querySelectorAll('.py-8.bg-white .px-6.py-3').forEach(btn => {
              if (btn.getAttribute('href') === targetId) {
                btn.classList.remove('bg-gray-200', 'text-gray-800');
                btn.classList.add('bg-amber-600', 'text-white');
              } else {
                btn.classList.remove('bg-amber-600', 'text-white');
                btn.classList.add('bg-gray-200', 'text-gray-800');
              }
            });
          }
        });
      });
    });
  </script>
</body>
</html>
