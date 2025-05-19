document.addEventListener("DOMContentLoaded", () => {
  // Get the search form in the header
  const headerSearchForm = document.getElementById("header-search-form")
  const headerSearchInput = document.getElementById("header-search-input")

  if (headerSearchForm && headerSearchInput) {
    // Add focus effect
    headerSearchInput.addEventListener("focus", () => {
      headerSearchForm.classList.add("ring-2", "ring-amber-300", "ring-opacity-50")
    })

    headerSearchInput.addEventListener("blur", () => {
      headerSearchForm.classList.remove("ring-2", "ring-amber-300", "ring-opacity-50")
    })

    // Prevent empty searches
    headerSearchForm.addEventListener("submit", (e) => {
      if (headerSearchInput.value.trim() === "") {
        e.preventDefault()

        // Add shake animation for empty search
        headerSearchForm.classList.add("animate-shake")
        setTimeout(() => {
          headerSearchForm.classList.remove("animate-shake")
        }, 500)

        headerSearchInput.focus()
      }
    })

    // Add auto-suggest functionality (optional enhancement)
    headerSearchInput.addEventListener(
      "input",
      debounce(() => {
        const searchTerm = headerSearchInput.value.trim()
        if (searchTerm.length >= 2) {
          // You could implement AJAX search suggestions here
          // For now, we'll just focus on the basic search functionality
        }
      }, 300),
    )
  }

  // Helper function to debounce input events
  function debounce(func, wait) {
    let timeout
    return function () {
      const args = arguments
      clearTimeout(timeout)
      timeout = setTimeout(() => {
        func.apply(this, args)
      }, wait)
    }
  }

  // Add this to your CSS or in a style tag in your header
  const style = document.createElement("style")
  style.textContent = `
    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      50% { transform: translateX(5px); }
      75% { transform: translateX(-5px); }
    }
    .animate-shake {
      animation: shake 0.5s ease-in-out;
    }
  `
  document.head.appendChild(style)
})
