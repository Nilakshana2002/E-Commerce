<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Sweet Delights</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
        
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(251, 191, 36, 0.3);
        }
        
        .carousel-item {
            transition: opacity 0.6s ease-in-out;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .carousel-item.active {
            opacity: 1;
            position: relative;
        }
        
        .btn-primary {
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(251, 191, 36, 0.3);
        }
    </style>
</head>
<body class="font-sans bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8 md:py-8">
        <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-xl overflow-hidden max-w-6xl mx-auto">
            <!-- Left column (Carousel) -->
            <div class="md:w-1/2 bg-gray-100 relative">
                <div id="carousel" class="w-full h-full overflow-hidden">
                    <div class="carousel-item active">
                        <img src="../main/images/hero/hero.jpg" class="w-full h-full object-cover" alt="Delicious cake">
                    </div>
                    <div class="carousel-item">
                        <img src="../main/images/hero/hero2.jpg" class="w-full h-full object-cover" alt="Sweet treats">
                    </div>
                    <div class="carousel-item">
                        <img src="../main/images/hero/hero3.jpg" class="w-full h-full object-cover" alt="Bakery items">
                    </div>
                </div>
                
                <!-- Carousel controls -->
                <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
                    <button class="w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none carousel-indicator active" data-index="0"></button>
                    <button class="w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none carousel-indicator" data-index="1"></button>
                    <button class="w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none carousel-indicator" data-index="2"></button>
                </div>
                
                <!-- Overlay with text -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-8 text-white">
                    <h2 class="text-3xl font-bold mb-2">Welcome to Sweet Delights</h2>
                    <p class="text-lg opacity-90">Create an account to order our delicious cakes and pastries</p>
                </div>
            </div>

            <!-- Right column (Form) -->
            <div class="md:w-1/2 p-8 md:p-12 fade-in">
                <div class="flex items-center justify-between mb-8">
                    <a href="../main/index.php" class="flex items-center">
                        <img src="../main/images/logo.png" alt="Sweet Delights Logo" class="w-12 h-12 mr-3">
                        <span class="text-2xl font-bold text-amber-600">Sweet Delights</span>
                    </a>
                    <a href="login.php" class="text-amber-600 hover:text-amber-700 font-medium">Sign In</a>
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-6">Create Your Account</h2>
                
                <form action="store.php" method="post" class="space-y-6" id="signup-form" novalidate>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                            <input 
                                type="text" 
                                id="firstName" 
                                name="fName" 
                                class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" 
                                placeholder="Enter your first name"
                                required
                            >
                            <p class="mt-1 text-sm text-red-600 hidden" id="firstName-error">Please enter your first name</p>
                        </div>
                        
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                            <input 
                                type="text" 
                                id="lastName" 
                                name="lName" 
                                class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" 
                                placeholder="Enter your last name"
                                required
                            >
                            <p class="mt-1 text-sm text-red-600 hidden" id="lastName-error">Please enter your last name</p>
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="mail" 
                            class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" 
                            placeholder="Enter your email address"
                            required
                        >
                        <p class="mt-1 text-sm text-red-600 hidden" id="email-error">Please enter a valid email address</p>
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="password" 
                                name="pass" 
                                class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" 
                                placeholder="Create a password"
                                required
                            >
                            <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 focus:outline-none" id="toggle-password">
                                <i class="far fa-eye"></i>
                            </button>
                        </div>
                        <p class="mt-1 text-sm text-red-600 hidden" id="password-error">Password is required</p>
                    </div>
                    
                    <div>
                        <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="confirmPassword" 
                                name="repass" 
                                class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" 
                                placeholder="Confirm your password"
                                required
                            >
                            <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 focus:outline-none" id="toggle-confirm-password">
                                <i class="far fa-eye"></i>
                            </button>
                        </div>
                        <p class="mt-1 text-sm text-red-600 hidden" id="confirmPassword-error">Passwords must match</p>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input 
                                type="checkbox" 
                                id="terms" 
                                name="terms" 
                                class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded"
                                required
                            >
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-medium text-gray-700">I agree to the <a href="#" class="text-amber-600 hover:text-amber-500">Terms and Conditions</a></label>
                            <p class="mt-1 text-sm text-red-600 hidden" id="terms-error">You must agree to the terms and conditions</p>
                        </div>
                    </div>
                    
                    <div>
                        <button 
                            type="submit" 
                            name="submit" 
                            class="btn-primary w-full bg-amber-600 hover:bg-amber-700  font-bold py-3 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition-all"
                        >
                            Create Account
                        </button>
                    </div>
                    
                    <div class="text-center">
                        <p class="text-sm text-gray-600">
                            Already have an account? 
                            <a href="login.php" class="font-medium text-amber-600 hover:text-amber-500">Sign In</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Carousel functionality
            const carousel = document.getElementById('carousel');
            const carouselItems = document.querySelectorAll('.carousel-item');
            const indicators = document.querySelectorAll('.carousel-indicator');
            let currentIndex = 0;
            
            function showSlide(index) {
                // Hide all slides
                carouselItems.forEach(item => {
                    item.classList.remove('active');
                });
                
                // Show the selected slide
                carouselItems[index].classList.add('active');
                
                // Update indicators
                indicators.forEach(indicator => {
                    indicator.classList.remove('active', 'opacity-100');
                    indicator.classList.add('opacity-50');
                });
                indicators[index].classList.add('active', 'opacity-100');
                indicators[index].classList.remove('opacity-50');
                
                currentIndex = index;
            }
            
            // Auto-advance carousel
            setInterval(() => {
                let nextIndex = (currentIndex + 1) % carouselItems.length;
                showSlide(nextIndex);
            }, 5000);
            
            // Click handlers for indicators
            indicators.forEach(indicator => {
                indicator.addEventListener('click', () => {
                    const index = parseInt(indicator.getAttribute('data-index'));
                    showSlide(index);
                });
            });
            
            // Form validation
            const form = document.getElementById('signup-form');
            const firstName = document.getElementById('firstName');
            const lastName = document.getElementById('lastName');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');
            const terms = document.getElementById('terms');
            
            // Toggle password visibility
            const togglePassword = document.getElementById('toggle-password');
            const toggleConfirmPassword = document.getElementById('toggle-confirm-password');
            
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.querySelector('i').classList.toggle('fa-eye');
                this.querySelector('i').classList.toggle('fa-eye-slash');
            });
            
            toggleConfirmPassword.addEventListener('click', function() {
                const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPassword.setAttribute('type', type);
                this.querySelector('i').classList.toggle('fa-eye');
                this.querySelector('i').classList.toggle('fa-eye-slash');
            });
            
            // Form validation
            form.addEventListener('submit', function(event) {
                let isValid = true;
                
                // First Name validation
                if (!firstName.value.trim()) {
                    document.getElementById('firstName-error').classList.remove('hidden');
                    firstName.classList.add('border-red-500');
                    isValid = false;
                } else {
                    document.getElementById('firstName-error').classList.add('hidden');
                    firstName.classList.remove('border-red-500');
                }
                
                // Last Name validation
                if (!lastName.value.trim()) {
                    document.getElementById('lastName-error').classList.remove('hidden');
                    lastName.classList.add('border-red-500');
                    isValid = false;
                } else {
                    document.getElementById('lastName-error').classList.add('hidden');
                    lastName.classList.remove('border-red-500');
                }
                
                // Email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email.value.trim() || !emailRegex.test(email.value.trim())) {
                    document.getElementById('email-error').classList.remove('hidden');
                    email.classList.add('border-red-500');
                    isValid = false;
                } else {
                    document.getElementById('email-error').classList.add('hidden');
                    email.classList.remove('border-red-500');
                }
                
                // Password validation
                if (!password.value) {
                    document.getElementById('password-error').classList.remove('hidden');
                    password.classList.add('border-red-500');
                    isValid = false;
                } else {
                    document.getElementById('password-error').classList.add('hidden');
                    password.classList.remove('border-red-500');
                }
                
                // Confirm Password validation
                if (password.value !== confirmPassword.value) {
                    document.getElementById('confirmPassword-error').classList.remove('hidden');
                    confirmPassword.classList.add('border-red-500');
                    isValid = false;
                } else {
                    document.getElementById('confirmPassword-error').classList.add('hidden');
                    confirmPassword.classList.remove('border-red-500');
                }
                
                // Terms validation
                if (!terms.checked) {
                    document.getElementById('terms-error').classList.remove('hidden');
                    isValid = false;
                } else {
                    document.getElementById('terms-error').classList.add('hidden');
                }
                
                if (!isValid) {
                    event.preventDefault();
                }
            });
            
            // Input event listeners to clear errors on typing
            const inputs = [firstName, lastName, email, password, confirmPassword];
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    const errorId = this.id + '-error';
                    document.getElementById(errorId).classList.add('hidden');
                    this.classList.remove('border-red-500');
                });
            });
            
            terms.addEventListener('change', function() {
                if (this.checked) {
                    document.getElementById('terms-error').classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>
