 <?php
    $cart_count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>
<!-- Top Banner -->
<!--<div class="bg-amber-800 text-white text-center py-2 text-sm">
    <p>Free delivery on orders above Rs. 5000 in Colombo | Same day delivery for orders before 12 PM</p>
</div>> -->

<!-- Main Header -->
<header class="bg-white shadow-sm sticky top-0 z-50">
      <div class="container mx-auto px-4">
          <div class="flex justify-between items-center py-4">
              <!-- Logo -->
              <a href="../main/index.html" class="flex items-center">
                    <svg width="180" height="60" viewBox="0 0 180 60" xmlns="http://www.w3.org/2000/svg" class="h-12">
                        <rect width="180" height="60" rx="8" fill="white"/>
                        <circle cx="30" cy="20" r="20" fill="#fef3c7" opacity="0.8"/>
                        <circle cx="150" cy="40" r="15" fill="#fef3c7" opacity="0.8"/>
                        <text x="50" y="35" font-family="Arial" font-size="20" font-weight="bold" fill="#d97706">Sweet Delights</text>
                        <text x="30" y="35" font-family="Arial" font-size="24" fill="#d97706">🍰</text>
                    </svg>
                </a>

              <!-- Desktop Navigation - Stylish Version -->


<nav class="hidden md:block">
    <ul class="flex space-x-1">
        <li class="nav-item">
            <a href="../main/index.php" class="nav-link <?= $current_page == 'index.html' ? 'text-amber-600 font-semibold' : 'text-gray-700' ?>">Home</a>
        </li>
        <li class="nav-item">
            <a href="../Cart/shop-template.php" class="nav-link <?= $current_page == 'shop-template.php' ? 'text-amber-600 font-semibold' : 'text-gray-700' ?>">Shop</a>
        </li>
        <li class="nav-item dropdown">
            <a href="../Cart/categories.php" class="nav-link flex items-center <?= $current_page == 'categories.php' ? 'text-amber-600 font-semibold' : 'text-gray-700' ?>">
                Categories <i class="fas fa-chevron-down ml-1 text-xs"></i>
            </a>
            <div class="dropdown-menu">
                <a href="../Cart/categories.php#birthday" class="dropdown-item">Birthday Cakes</a>
                <a href="../Cart/categories.php#wedding" class="dropdown-item">Wedding Cakes</a>
                <a href="../Cart/categories.php#cupcakes" class="dropdown-item">Cupcakes</a>
                <a href="../Cart/categories.php#pastries" class="dropdown-item">Pastries</a>
            </div>
        </li>
        <li class="nav-item">
            <a href="../main/about.php" class="nav-link <?= $current_page == 'about.html' ? 'text-amber-600 font-semibold' : 'text-gray-700' ?>">About Us</a>
        </li>
        <li class="nav-item">
            <a href="../main/contact.php" class="nav-link <?= $current_page == 'contact.html' ? 'text-amber-600 font-semibold' : 'text-gray-700' ?>">Contact</a>
        </li>
    </ul>
</nav>



              <!-- Header Icons -->
              <div class="flex items-center space-x-4">
                  <a href="../Cart/search.php" class="text-gray-700 hover:text-amber-600 transition">
                      <i class="fas fa-search text-xl"></i>
                  </a>
                  <a href="../Login_SignUp/login.php" class="text-gray-700 hover:text-amber-600 transition">
                      <i class="fas fa-user text-xl"></i>
                  </a>
                  <a href="../Cart/cart.php" class="text-gray-700 hover:text-amber-600 transition relative">
                      <i class="fas fa-shopping-bag text-xl"></i>
                      <span class="absolute -top-3 -right-2 bg-amber-600 text-black text-xs rounded-full h-5 w-5 flex items-center justify-center"><?php echo $cart_count; ?></span>
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
                  <a href="index.php" class="text-gray-800 hover:text-amber-600 font-medium transition py-2 border-b border-gray-100">Home</a>
                  <a href="../Cart/shop-template.php" class="text-gray-800 hover:text-amber-600 font-medium transition py-2 border-b border-gray-100">Shop</a>
                  <a href="../Cart/categories.php" class="text-gray-800 hover:text-amber-600 font-medium transition py-2 border-b border-gray-100">Categories</a>
                  <a href="../main/about.php" class="text-gray-800 hover:text-amber-600 font-medium transition py-2 border-b border-gray-100">About Us</a>
                  <a href="../main/contact.php" class="text-gray-800 hover:text-amber-600 font-medium transition py-2">Contact</a>
              </nav>
          </div>
      </div>
  </header>

<!-- Mobile Menu Toggle Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    mobileMenuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
});
</script>
