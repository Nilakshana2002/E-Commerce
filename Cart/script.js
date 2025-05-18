document.addEventListener("DOMContentLoaded", () => {
  // Mobile Menu Toggle
  const mobileMenuButton = document.getElementById("mobile-menu-button")
  const mobileMenu = document.getElementById("mobile-menu")

  mobileMenuButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden")
  })

  // Hero Slider
  const slides = document.querySelector(".slides")
  const slideIndicators = document.querySelectorAll(".slider-indicator")
  const prevSlideBtn = document.getElementById("prev-slide")
  const nextSlideBtn = document.getElementById("next-slide")
  let currentSlide = 0
  const totalSlides = slideIndicators.length

  function goToSlide(slideIndex) {
    if (slideIndex < 0) {
      slideIndex = totalSlides - 1
    } else if (slideIndex >= totalSlides) {
      slideIndex = 0
    }

    currentSlide = slideIndex
    slides.style.transform = `translateX(-${currentSlide * 100}%)`

    // Update indicators
    slideIndicators.forEach((indicator, index) => {
      if (index === currentSlide) {
        indicator.classList.add("active")
      } else {
        indicator.classList.remove("active")
      }
    })
  }

  // Set up event listeners for slide controls
  prevSlideBtn.addEventListener("click", () => goToSlide(currentSlide - 1))
  nextSlideBtn.addEventListener("click", () => goToSlide(currentSlide + 1))

  // Set up event listeners for slide indicators
  slideIndicators.forEach((indicator, index) => {
    indicator.addEventListener("click", () => goToSlide(index))
  })

  // Auto-advance slides
  let slideInterval = setInterval(() => goToSlide(currentSlide + 1), 5000)

  // Pause auto-advance on hover
  const heroSlider = document.querySelector(".hero-slider")
  heroSlider.addEventListener("mouseenter", () => clearInterval(slideInterval))
  heroSlider.addEventListener("mouseleave", () => {
    clearInterval(slideInterval)
    slideInterval = setInterval(() => goToSlide(currentSlide + 1), 5000)
  })

  // Testimonial Slider
  const testimonials = document.querySelector(".testimonials")
  const testimonialIndicators = document.querySelectorAll(".testimonial-indicator")
  const prevTestimonialBtn = document.getElementById("prev-testimonial")
  const nextTestimonialBtn = document.getElementById("next-testimonial")
  let currentTestimonial = 0
  const totalTestimonials = testimonialIndicators.length

  function updateTestimonialSlideWidth() {
    const testimonialItems = document.querySelectorAll(".testimonial")
    let slideWidth = 100

    if (window.innerWidth >= 1024) {
      // lg breakpoint
      slideWidth = 33.333
    } else if (window.innerWidth >= 768) {
      // md breakpoint
      slideWidth = 50
    }

    testimonialItems.forEach((item) => {
      item.style.minWidth = `${slideWidth}%`
    })

    goToTestimonial(currentTestimonial)
  }

  function goToTestimonial(testimonialIndex) {
    if (testimonialIndex < 0) {
      testimonialIndex = totalTestimonials - 1
    } else if (testimonialIndex >= totalTestimonials) {
      testimonialIndex = 0
    }

    currentTestimonial = testimonialIndex

    let slideWidth = 100
    if (window.innerWidth >= 1024) {
      // lg breakpoint
      slideWidth = 33.333
    } else if (window.innerWidth >= 768) {
      // md breakpoint
      slideWidth = 50
    }

    testimonials.style.transform = `translateX(-${currentTestimonial * slideWidth}%)`

    // Update indicators
    testimonialIndicators.forEach((indicator, index) => {
      if (index === currentTestimonial) {
        indicator.classList.add("active")
      } else {
        indicator.classList.remove("active")
      }
    })
  }

  // Set up event listeners for testimonial controls
  prevTestimonialBtn.addEventListener("click", () => goToTestimonial(currentTestimonial - 1))
  nextTestimonialBtn.addEventListener("click", () => goToTestimonial(currentTestimonial + 1))

  // Set up event listeners for testimonial indicators
  testimonialIndicators.forEach((indicator, index) => {
    indicator.addEventListener("click", () => goToTestimonial(index))
  })

  // Update testimonial slide width on window resize
  window.addEventListener("resize", updateTestimonialSlideWidth)

  // Initialize testimonial slider
  updateTestimonialSlideWidth()

  // Add to cart animation
  const addToCartButtons = document.querySelectorAll(".bg-amber-600.rounded-full")

  addToCartButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault()

      // Update cart count
      const cartCount = document.querySelector(".fa-shopping-bag + span")
      const count = Number.parseInt(cartCount.textContent)
      cartCount.textContent = count + 1

      // Add animation class
      cartCount.classList.add("fade-in")

      // Remove animation class after animation completes
      setTimeout(() => {
        cartCount.classList.remove("fade-in")
      }, 500)
    })
  })

  // Newsletter form validation
  const newsletterForm = document.querySelector('form[action*="newsletter"]')

  if (newsletterForm) {
    newsletterForm.addEventListener("submit", function (e) {
      e.preventDefault()

      const emailInput = this.querySelector('input[type="email"]')
      const email = emailInput.value.trim()

      if (email === "") {
        alert("Please enter your email address.")
        return
      }

      // Here you would typically send the form data to your server
      // For demonstration, we'll just show a success message
      alert("Thank you for subscribing to our newsletter!")
      emailInput.value = ""
    })
  }
})
