<?php
session_start();
?>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");
  let animated = false;

  function animateCounter(counter) {
    const target = +counter.dataset.target;
    const speed = 50; // Lower = faster

    const update = () => {
      const current = +counter.textContent.replace(/\D/g, '');
      const increment = Math.ceil(target / speed);

      if (current < target) {
        counter.textContent = current + increment + (target >= 1000 ? '+' : '');
        setTimeout(update, 20);
      } else {
        counter.textContent = target + (target >= 1000 ? '+' : '');
      }
    };

    update();
  }

  function triggerAnimation() {
    const section = document.querySelector(".py-16.bg-white");
    const sectionTop = section.getBoundingClientRect().top;
    const screenHeight = window.innerHeight;

    if (sectionTop < screenHeight && !animated) {
      counters.forEach(animateCounter);
      animated = true;
    }
  }

  window.addEventListener("scroll", triggerAnimation);
});
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const testimonials = document.querySelector(".testimonials");
  const indicators = document.querySelectorAll(".testimonial-indicator");
  const prevBtn = document.getElementById("prev-testimonial");
  const nextBtn = document.getElementById("next-testimonial");

  let currentSlide = 0;
  const totalSlides = indicators.length;
  let slideInterval;

  function updateSlider() {
    const slideWidth = testimonials.querySelector(".testimonial").clientWidth;
    testimonials.style.transform = `translateX(-${currentSlide * slideWidth}px)`;

    indicators.forEach((dot, idx) => {
      dot.classList.toggle("bg-amber-600", idx === currentSlide);
      dot.classList.toggle("bg-amber-300", idx !== currentSlide);
    });
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlider();
  }

  function prevSlideFunc() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateSlider();
  }

  // Auto-slide every 5 seconds
  function startAutoSlide() {
    slideInterval = setInterval(nextSlide, 5000);
  }

  function stopAutoSlide() {
    clearInterval(slideInterval);
  }

  // Button click events
  if (prevBtn && nextBtn) {
    prevBtn.addEventListener("click", () => {
      stopAutoSlide();
      prevSlideFunc();
      startAutoSlide();
    });

    nextBtn.addEventListener("click", () => {
      stopAutoSlide();
      nextSlide();
      startAutoSlide();
    });
  }

  // Indicator dot click
  indicators.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      stopAutoSlide();
      currentSlide = index;
      updateSlider();
      startAutoSlide();
    });
  });

  // Initialize slider
  updateSlider();
  startAutoSlide();

  // Update slider on window resize
  window.addEventListener("resize", updateSlider);
});
</script>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sweet Delights | Premium Sri Lankan Bakery</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body class="font-sans bg-gray-50">

<!-- Load header using JS -->
 <?php include '../Components/header.php'; ?>



  <script>
document.addEventListener("DOMContentLoaded", () => {
  const slidesContainer = document.querySelector(".hero-slider .slides");
  const slides = document.querySelectorAll(".hero-slider .slide");
  const indicators = document.querySelectorAll(".slider-indicator");
  const prevBtn = document.getElementById("prev-slide");
  const nextBtn = document.getElementById("next-slide");

  let currentIndex = 0;
  const totalSlides = slides.length;

  function showSlide(index) {
    slidesContainer.style.transform = `translateX(-${index * 100}%)`;
    indicators.forEach(btn => btn.classList.remove("bg-white", "opacity-100", "active"));
    indicators[index].classList.add("bg-white", "opacity-100", "active");
    currentIndex = index;
  }

  // Auto Slide
  let slideInterval = setInterval(() => {
    let nextIndex = (currentIndex + 1) % totalSlides;
    showSlide(nextIndex);
  }, 5000); // 5 seconds

  // Controls
  nextBtn.addEventListener("click", () => {
    clearInterval(slideInterval);
    showSlide((currentIndex + 1) % totalSlides);
  });

  prevBtn.addEventListener("click", () => {
    clearInterval(slideInterval);
    showSlide((currentIndex - 1 + totalSlides) % totalSlides);
  });

  // Indicator click
  indicators.forEach(btn => {
    btn.addEventListener("click", () => {
      clearInterval(slideInterval);
      const index = parseInt(btn.getAttribute("data-slide"));
      showSlide(index);
    });
  });

  // Initialize
  showSlide(0);
});
</script>

  <!-- Quick Links Section (Added between navigation and hero) -->
  <section class="py-6 bg-gray-100">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap justify-center gap-4 md:gap-8">
        <a href="../Cart/categories.php#birthday" class="flex items-center px-4 py-2 bg-white rounded-full shadow-sm hover:shadow-md transition">
          <i class="fas fa-birthday-cake text-amber-600 mr-2"></i>
          <span>Birthday Cakes</span>
        </a>
        <a href="../Cart/categories.php#wedding" class="flex items-center px-4 py-2 bg-white rounded-full shadow-sm hover:shadow-md transition">
          <i class="fas fa-ring text-amber-600 mr-2"></i>
          <span>Wedding Cakes</span>
        </a>
        <a href="../Cart/categories.php#cupcakes" class="flex items-center px-4 py-2 bg-white rounded-full shadow-sm hover:shadow-md transition">
          <i class="fas fa-cookie text-amber-600 mr-2"></i>
          <span>Cupcakes</span>
        </a>
        <a href="../Cart/categories.php#pastries" class="flex items-center px-4 py-2 bg-white rounded-full shadow-sm hover:shadow-md transition">
          <i class="fas fa-bread-slice text-amber-600 mr-2"></i>
          <span>Pastries</span>
        </a>
        <a href="../Cart/categories.php#offers" class="flex items-center px-4 py-2 bg-white rounded-full shadow-sm hover:shadow-md transition">
          <i class="fas fa-tags text-amber-600 mr-2"></i>
          <span>Special Offers</span>
        </a>
      </div>
    </div>
  </section>

    <!-- Hero Slider -->
    <section class="relative">
        <div class="hero-slider overflow-hidden">
            <div class="slides flex transition-transform duration-500">
                <!-- Slide 1 -->
                <div class="slide min-w-full relative">
                    <img src="../main/images/hero/hero2.jpg" alt="Delicious Cakes" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <div class="text-center text-white px-4">
                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Exquisite Cakes for Every Occasion</h1>
                            <p class="text-xl mb-8 max-w-2xl mx-auto">Handcrafted with love using premium ingredients</p>
                            <a href="../Cart/shop-template.php" class="bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-8 rounded-full transition inline-block">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="slide min-w-full relative">
                    <img src="../main/images/hero/hero3.jpg" alt="Delicious Cakes" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <div class="text-center text-white px-4">
                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Special Offers This Month</h1>
                            <p class="text-xl mb-8 max-w-2xl mx-auto">20% off on all birthday cakes</p>
                            <a href="../Cart/shop-template.php#offers" class="bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-8 rounded-full transition inline-block">View Offers</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="slide min-w-full relative">
                    <img src="../main/images/hero/hero.jpg" alt="Delicious Cakes" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <div class="text-center text-white px-4">
                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Wedding Cake Specialists</h1>
                            <p class="text-xl mb-8 max-w-2xl mx-auto">Make your special day even more memorable</p>
                            <a href="../Cart/categories.php#wedding" class="bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-8 rounded-full transition inline-block">Explore Collection</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Controls -->
            <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 rounded-full p-2 text-gray-800 hover:text-amber-600 transition" id="prev-slide">
                <i class="fas fa-chevron-left text-sm"></i>
            </button>
            <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 rounded-full p-2 text-gray-800 hover:text-amber-600 transition" id="next-slide">
                <i class="fas fa-chevron-right text-sm"></i>
            </button>
            <!-- Slider Indicators -->
            <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="h-2 w-2 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 slider-indicator active" data-slide="0"></button>
                <button class="h-2 w-2 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 slider-indicator" data-slide="1"></button>
                <button class="h-2 w-2 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 slider-indicator" data-slide="2"></button>
            </div>
        </div>
      </div>
  </section>


  <!-- Categories Section -->
  <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold text-center mb-8">Browse By Category</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
              <!-- Category 1 -->
              <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition">
                  <img src="../main/images/categories/stephen-wheeler-LRIQuZyxKRM-unsplash.jpg" alt="Birthday Cakes" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                  <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                  <div class="absolute bottom-0 left-0 p-6">
                      <h3 class="text-xl font-bold text-white mb-2">Birthday Cakes</h3>
                      <a href="../Cart/categories.php#birthday" class="text-amber-300 hover:text-amber-100 transition flex items-center">
                          <span>View Collection</span>
                          <i class="fas fa-arrow-right ml-2"></i>
                      </a>
                  </div>
              </div>
              <!-- Category 2 -->
              <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition">
                  <img src="../main/images/categories/mads-eneqvist-Xb5c2x6wJPc-unsplash.jpg" alt="Wedding Cakes" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                  <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                  <div class="absolute bottom-0 left-0 p-6">
                      <h3 class="text-xl font-bold text-white mb-2">Wedding Cakes</h3>
                      <a href="../Cart/categories.php#wedding" class="text-amber-300 hover:text-amber-100 transition flex items-center">
                          <span>View Collection</span>
                          <i class="fas fa-arrow-right ml-2"></i>
                      </a>
                  </div>
              </div>
              <!-- Category 3 -->
              <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition">
                  <img src="../main/images/categories/michaela-baum-VnM6_liIRJ0-unsplash.jpg" alt="Cupcakes" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                  <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                  <div class="absolute bottom-0 left-0 p-6">
                      <h3 class="text-xl font-bold text-white mb-2">Cupcakes</h3>
                      <a href="../Cart/categories.php#cupcakes" class="text-amber-300 hover:text-amber-100 transition flex items-center">
                          <span>View Collection</span>
                          <i class="fas fa-arrow-right ml-2"></i>
                      </a>
                  </div>
              </div>
              <!-- Category 4 -->
              <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition">
                  <img src="../main/images/categories/geri-chapple-fXdoHjQ2Pyg-unsplash.jpg" alt="Pastries" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                  <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                  <div class="absolute bottom-0 left-0 p-6">
                      <h3 class="text-xl font-bold text-white mb-2">Pastries</h3>
                      <a href="../Cart/categories.php#pastries" class="text-amber-300 hover:text-amber-100 transition flex items-center">
                          <span>View Collection</span>
                          <i class="fas fa-arrow-right ml-2"></i>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </section>



<!-- Our Achievements Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Our Achievements</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Achievement 1 -->
                <div class="text-center">
                    <div class="text-5xl font-bold text-amber-600 mb-2 counter" data-target="10">0+</div>
                    <p class="text-xl font-medium">Years of Experience</p>
                </div>
                
                <!-- Achievement 2 -->
                <div class="text-center">
                    <div class="text-5xl font-bold text-amber-600 mb-2 counter" data-target="10000">0+</div>
                    <p class="text-xl font-medium">Happy Customers</p>
                </div>
                
                <!-- Achievement 3 -->
                <div class="text-center">
                    <div class="text-5xl font-bold text-amber-600 mb-2 counter" data-target="300">0+</div>
                    <p class="text-xl font-medium">Award-Winning Recipes</p>
                </div>
                
                <!-- Achievement 4 -->
                <div class="text-center">
                    <div class="text-5xl font-bold text-amber-600 mb-2 counter" data-target="10">0+</div>
                    <p class="text-xl font-medium">Locations in Sri Lanka</p>
                </div>
            </div>
        </div>
    </section>

  <!-- Rest of the content remains the same -->
  <!-- Bestsellers Section -->
  <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
          <div class="flex justify-between items-center mb-8">
              <h2 class="text-3xl font-bold">Our Bestsellers</h2>
              <a href="../Cart/shop-template.php" class="text-amber-600 hover:text-amber-800 transition flex items-center">
                  <span>View All Products</span>
                  <i class="fas fa-arrow-right ml-2"></i>
              </a>
          </div>
          
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
              <!-- Product 1 -->
              <?php /* This section will be dynamically generated from database */ ?>
              <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                  <div class="relative">
                      <img src="../main/images/products/truffle cake.jpg" alt="Chocolate Truffle Cake" class="w-full h-64 object-cover">
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
                          <button class="bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition">
                              <i class="fas fa-shopping-cart"></i>
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product 2 -->
              <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                  <div class="relative">
                      <img src="../main/images/products/red velvet cake.jpg" alt="Red Velvet Cake" class="w-full h-64 object-cover">
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
                          <button class="bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition">
                              <i class="fas fa-shopping-cart"></i>
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product 3 -->
              <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                  <div class="relative">
                      <img src="../main/images/products/cheese cake.jpg" alt="Blueberry Cheesecake" class="w-full h-64 object-cover">
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
                          <button class="bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition">
                              <i class="fas fa-shopping-cart"></i>
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product 4 -->
              <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                  <div class="relative">
                      <img src="../main/images/products/buttercream cake.jpg" alt="Vanilla Buttercream Cake" class="w-full h-64 object-cover">
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
                          <button class="bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition">
                              <i class="fas fa-shopping-cart"></i>
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product 5 -->
              <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                  <div class="relative">
                      <img src="../main/images/products/fruite gateau.jpg" alt="Fruit Gateau" class="w-full h-64 object-cover">
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
                          <button class="bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition">
                              <i class="fas fa-shopping-cart"></i>
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product 6 -->
              <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                  <div class="relative">
                      <img src="../main/images/products/chocolate mousse cake.jpg" alt="Chocolate Mousse Cake" class="w-full h-64 object-cover">
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
                          <button class="bg-amber-600 hover:bg-amber-700 text-white rounded-full p-2 transition">
                              <i class="fas fa-shopping-cart"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>



  
  <!-- Why Choose Us Section -->
  <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold text-center mb-8">Why Choose Us</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
              <!-- Feature 1 -->
              <div class="text-center">
                  <div class="bg-amber-100 rounded-full p-6 inline-block mb-4">
                      <i class="fas fa-birthday-cake text-amber-600 text-3xl"></i>
                  </div>
                  <h3 class="text-xl font-bold mb-3">Premium Ingredients</h3>
                  <p class="text-gray-600">We use only the finest quality ingredients to ensure exceptional taste and quality in every bite.</p>
              </div>
              
              <!-- Feature 2 -->
              <div class="text-center">
                  <div class="bg-amber-100 rounded-full p-6 inline-block mb-4">
                      <i class="fas fa-truck text-amber-600 text-3xl"></i>
                  </div>
                  <h3 class="text-xl font-bold mb-3">Fast Delivery</h3>
                  <p class="text-gray-600">Same-day delivery available for orders placed before noon, ensuring your cake arrives fresh.</p>
              </div>
              
              <!-- Feature 3 -->
              <div class="text-center">
                  <div class="bg-amber-100 rounded-full p-6 inline-block mb-4">
                      <i class="fas fa-medal text-amber-600 text-3xl"></i>
                  </div>
                  <h3 class="text-xl font-bold mb-3">Award-Winning</h3>
                  <p class="text-gray-600">Our master bakers have won multiple awards for their exceptional cake designs and flavors.</p>
              </div>
              
              <!-- Feature 4 -->
              <div class="text-center">
                  <div class="bg-amber-100 rounded-full p-6 inline-block mb-4">
                      <i class="fas fa-heart text-amber-600 text-3xl"></i>
                  </div>
                  <h3 class="text-xl font-bold mb-3">Customized Designs</h3>
                  <p class="text-gray-600">We create personalized cakes tailored to your specific requirements and special occasions.</p>
              </div>
          </div>
      </div>
  </section>

 <!-- Testimonials Section -->
  <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold text-center mb-8">What Our Customers Say</h2>
          
          <div class="testimonial-slider relative">
              <div class="testimonials-container overflow-hidden">
                  <div class="testimonials flex transition-transform duration-500">
                      <!-- Testimonial 1 -->
                      <div class="testimonial min-w-full md:min-w-[50%] lg:min-w-[33.333%] px-4">
                          <div class="bg-white p-8 rounded-lg shadow-md">
                              <div class="flex text-amber-400 mb-4">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                              </div>
                              <p class="text-gray-600 mb-6">"The birthday cake I ordered was absolutely stunning and delicious! Everyone at the party was impressed. Will definitely order again."</p>
                              <div class="flex items-center">
                                  <img src="images/testimonials/customer-1.jpeg" alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                                  <div>
                                      <h4 class="font-bold">Samantha Perera</h4>
                                      <p class="text-gray-500 text-sm">Colombo</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <!-- Testimonial 2 -->
                      <div class="testimonial min-w-full md:min-w-[50%] lg:min-w-[33.333%] px-4">
                          <div class="bg-white p-8 rounded-lg shadow-md">
                              <div class="flex text-amber-400 mb-4">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                              </div>
                              <p class="text-gray-600 mb-6">"Our wedding cake was a dream come true! Not only was it visually stunning, but it tasted amazing too. Thank you for making our special day even more memorable."</p>
                              <div class="flex items-center">
                                  <img src="images/testimonials/customer-2.jpg" alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                                  <div>
                                      <h4 class="font-bold">Rajiv & Priya Fernando</h4>
                                      <p class="text-gray-500 text-sm">Kandy</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <!-- Testimonial 3 -->
                      <div class="testimonial min-w-full md:min-w-[50%] lg:min-w-[33.333%] px-4">
                          <div class="bg-white p-8 rounded-lg shadow-md">
                              <div class="flex text-amber-400 mb-4">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                              </div>
                              <p class="text-gray-600 mb-6">"I ordered cupcakes for a corporate event and they were a huge hit! The presentation was professional and the taste was exceptional. Will be our go-to bakery for all future events."</p>
                              <div class="flex items-center">
                                  <img src="images/testimonials/customer-3.jpeg" alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                                  <div>
                                      <h4 class="font-bold">Dinesh Jayawardena</h4>
                                      <p class="text-gray-500 text-sm">Galle</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Testimonial Controls -->
              <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-md text-amber-600 hover:text-amber-800 transition z-10 -ml-4 hidden md:block" id="prev-testimonial">
                  <i class="fas fa-chevron-left"></i>
              </button>
              <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-md text-amber-600 hover:text-amber-800 transition z-10 -mr-4 hidden md:block" id="next-testimonial">
                  <i class="fas fa-chevron-right"></i>
              </button>
              
              <!-- Testimonial Indicators -->
              <div class="flex justify-center mt-8 space-x-2">
                  <button class="h-3 w-3 rounded-full bg-amber-600 testimonial-indicator active" data-slide="0"></button>
                  <button class="h-3 w-3 rounded-full bg-amber-300 hover:bg-amber-600 transition testimonial-indicator" data-slide="1"></button>
                  <button class="h-3 w-3 rounded-full bg-amber-300 hover:bg-amber-600 transition testimonial-indicator" data-slide="2"></button>
              </div>
          </div>
      </div>
  </section>






  <!-- Newsletter Section -->
  <section class="py-12 bg-amber-700 text-black">
      <div class="container mx-auto px-4">
          <div class="max-w-3xl mx-auto text-center">
              <h2 class="text-3xl font-bold mb-4">Subscribe to Our Newsletter</h2>
              <p class="mb-6">Stay updated with our latest products, special offers, and baking tips.</p>
              
              <form action="#" method="POST" class="flex flex-col md:flex-row gap-4">
                <input 
                type="email" 
                name="email" 
                placeholder="Your email address" 
                required 
                class="flex-grow px-4 py-3 rounded-l-lg text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-600"
              />              
                  <button type="submit" class="bg-gray-300 hover:bg-gray-400 text-black px-6 py-3 rounded-r-lg font-medium transition">Subscribe</button>

              </form>
          </div>
      </div>
  </section>

  <!-- Instagram Feed Section -->
  <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
          <div class="text-center mb-8">
              <h2 class="text-3xl font-bold mb-4">Follow Us on Instagram</h2>
              <p class="text-gray-600 max-w-2xl mx-auto">Tag us in your photos with #SweetDelightsSL for a chance to be featured on our page.</p>
          </div>
          
          <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
              <?php /* This section will be dynamically generated from Instagram API */ ?>
              <a href="#" class="block overflow-hidden group">
                  <img src="images/instagram/hero-1.jpg" alt="Instagram Post" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
              </a>
              <a href="#" class="block overflow-hidden group">
                  <img src="images/instagram/hero (1).jpg" alt="Instagram Post" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
              </a>
              <a href="#" class="block overflow-hidden group">
                  <img src="images/instagram/hero-2.jpg" alt="Instagram Post" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
              </a>
              <a href="#" class="block overflow-hidden group">
                  <img src="images/instagram/hero-3.jpg" alt="Instagram Post" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
              </a>
              <a href="#" class="block overflow-hidden group hidden md:block">
                  <img src="images/instagram/hero4.jpg" alt="Instagram Post" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
              </a>
              <a href="#" class="block overflow-hidden group hidden md:block">
                  <img src="images/instagram/hero5.jpg" alt="Instagram Post" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
              </a>
          </div>
          
          <div class="text-center mt-8">
              <a href="#" class="inline-flex items-center text-amber-600 hover:text-amber-800 transition font-medium">
                  <i class="fab fa-instagram mr-2"></i>
                  <span>@SweetDelightsSL</span>
              </a>
          </div>
      </div>
  </section>

<!-- Promo Banners (Tailwind) -->
<section class="py-5">
  <div class="max-w-6xl mx-auto">
    <div id="promoCarousel" class="relative overflow-hidden">

      <!-- Slides wrapper -->
      <div class="flex transition-transform duration-700 ease-in-out" data-slides>
        <!-- Slide 1 -->
        <div class="min-w-full flex gap-2" data-slide>
          <div class="flex-1 rounded overflow-hidden shadow promo-banner">
            <img src="../main/images/assets/1.jpg" alt="Promo 1" class="w-full h-full object-cover">
          </div>
          <div class="flex-1 rounded overflow-hidden shadow promo-banner">
            <img src="../main/images/assets/2.jpg" alt="Promo 2" class="w-full h-full object-cover">
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="min-w-full flex gap-4" data-slide>
          <div class="flex-1 rounded overflow-hidden shadow promo-banner">
            <img src="../main/images/assets/3.jpg" alt="Promo 3" class="w-full h-full object-cover">
          </div>
          <div class="flex-1 rounded overflow-hidden shadow promo-banner">
            <img src="../main/images/assets/1.jpg" alt="Promo 4" class="w-full h-full object-cover">
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="min-w-full flex gap-4" data-slide>
          <div class="flex-1 rounded overflow-hidden shadow promo-banner">
            <img src="../main/images/assets/2.jpg" alt="Promo 5" class="w-full h-full object-cover">
          </div>
          <div class="flex-1 rounded overflow-hidden shadow promo-banner">
            <img src="../main/images/assets/3.jpg" alt="Promo 1" class="w-full h-full object-cover">
          </div>
        </div>
      </div>

      <!-- Prev / Next controls -->
      <button class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 p-3 rounded-full text-white"
              data-prev>
        &#10094;
      </button>
      <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 p-3 rounded-full text-white"
              data-next>
        &#10095;
      </button>

      <!-- Indicators -->
      <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2" data-dots>
        <button class="h-2 w-2 rounded-full bg-white/80 ring-1 ring-white data-[active=true]:bg-amber-600"
                data-dot="0"></button>
        <button class="h-2 w-2 rounded-full bg-white/80 ring-1 ring-white data-[active=true]:bg-amber-600"
                data-dot="1"></button>
        <button class="h-2 w-2 rounded-full bg-white/80 ring-1 ring-white data-[active=true]:bg-amber-600"
                data-dot="2"></button>
      </div>
    </div>
  </div>
</section>

<style>
/* Fixed height for all promo banners */
.promo-banner { height: 200px; }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const carousel   = document.getElementById('promoCarousel');
  const track      = carousel.querySelector('[data-slides]');
  const slides     = [...track.querySelectorAll('[data-slide]')];
  const dots       = [...carousel.querySelectorAll('[data-dot]')];
  const prevBtn    = carousel.querySelector('[data-prev]');
  const nextBtn    = carousel.querySelector('[data-next]');
  let index = 0, interval;

  const goTo = i => {
    index = (i + slides.length) % slides.length;
    track.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach((d, k) => d.dataset.active = k === index);
  };

  const next = () => goTo(index + 1);
  const start = () => interval = setInterval(next, 2000);
  const stop  = () => clearInterval(interval);

  nextBtn.onclick = () => { stop(); next(); start(); };
  prevBtn.onclick = () => { stop(); goTo(index - 1); start(); };
  dots.forEach((d, i) => d.onclick = () => { stop(); goTo(i); start(); });

  carousel.addEventListener('mouseenter', stop);
  carousel.addEventListener('mouseleave', start);

  goTo(0);
  start();
});
</script>

  



<div id="footer"></div>

<script>
  fetch('../Components/footer.php')
    .then(res => res.text())
    .then(data => {
      document.getElementById('footer').innerHTML = data;
    });
</script>
<script src="https://cdn.botpress.cloud/webchat/v2.5/inject.js"></script>
<script src="https://files.bpcontent.cloud/2025/05/21/06/20250521060615-UDQI6H73.js"></script>
</body>
</html>
<?php //include '../Cart/popup-advertisement.php'; ?>