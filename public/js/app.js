// Admin Dashboard JavaScript

document.addEventListener("DOMContentLoaded", () => {
  // Sidebar Toggle Functionality
  const sidebarToggle = document.getElementById("sidebar-toggle")
  const sidebar = document.getElementById("sidebar")
  const overlay = document.getElementById("sidebar-overlay")
  const closeSidebar = document.getElementById("close-sidebar")

  // Toggle sidebar on mobile
  if (sidebarToggle && sidebar) {
    sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("open")
      if (overlay) {
        overlay.classList.toggle("hidden")
      }
    })
  }

  // Close sidebar when clicking overlay
  if (overlay) {
    overlay.addEventListener("click", () => {
      sidebar.classList.remove("open")
      overlay.classList.add("hidden")
    })
  }

  // Close sidebar button
  if (closeSidebar) {
    closeSidebar.addEventListener("click", () => {
      sidebar.classList.remove("open")
      if (overlay) {
        overlay.classList.add("hidden")
      }
    })
  }

  // Profile Dropdown
  const profileButton = document.getElementById("profile-button")
  const profileDropdown = document.getElementById("profile-dropdown")

  if (profileButton && profileDropdown) {
    profileButton.addEventListener("click", (e) => {
      e.stopPropagation()
      profileDropdown.classList.toggle("hidden")
    })

    // Close dropdown when clicking outside
    document.addEventListener("click", () => {
      profileDropdown.classList.add("hidden")
    })
  }

  // Form Validation
  const forms = document.querySelectorAll("form[data-validate]")
  forms.forEach((form) => {
    form.addEventListener("submit", (e) => {
      const requiredFields = form.querySelectorAll("[required]")
      let isValid = true

      requiredFields.forEach((field) => {
        if (!field.value.trim()) {
          isValid = false
          field.classList.add("border-red-500")
          showFieldError(field, "هذا الحقل مطلوب")
        } else {
          field.classList.remove("border-red-500")
          hideFieldError(field)
        }
      })

      if (!isValid) {
        e.preventDefault()
      }
    })
  })

  // Show field error
  function showFieldError(field, message) {
    let errorElement = field.parentNode.querySelector(".field-error")
    if (!errorElement) {
      errorElement = document.createElement("div")
      errorElement.className = "field-error text-red-500 text-sm mt-1"
      field.parentNode.appendChild(errorElement)
    }
    errorElement.textContent = message
  }

  // Hide field error
  function hideFieldError(field) {
    const errorElement = field.parentNode.querySelector(".field-error")
    if (errorElement) {
      errorElement.remove()
    }
  }

  // Table Actions
  const deleteButtons = document.querySelectorAll("[data-delete]")
  deleteButtons.forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault()
      const confirmMessage = this.getAttribute("data-confirm") || "هل أنت متأكد من الحذف؟"

      if (confirm(confirmMessage)) {
        const form = document.createElement("form")
        form.method = "POST"
        form.action = this.getAttribute("data-delete")

        const methodField = document.createElement("input")
        methodField.type = "hidden"
        methodField.name = "_method"
        methodField.value = "DELETE"

        const tokenField = document.createElement("input")
        tokenField.type = "hidden"
        tokenField.name = "_token"
        tokenField.value = document.querySelector('meta[name="csrf-token"]').getAttribute("content")

        form.appendChild(methodField)
        form.appendChild(tokenField)
        document.body.appendChild(form)
        form.submit()
      }
    })
  })

  // Search Functionality
  const searchInputs = document.querySelectorAll("[data-search]")
  searchInputs.forEach((input) => {
    input.addEventListener("input", function () {
      const searchTerm = this.value.toLowerCase()
      const targetSelector = this.getAttribute("data-search")
      const targets = document.querySelectorAll(targetSelector)

      targets.forEach((target) => {
        const text = target.textContent.toLowerCase()
        if (text.includes(searchTerm)) {
          target.style.display = ""
        } else {
          target.style.display = "none"
        }
      })
    })
  })

  // Auto-hide alerts
  const alerts = document.querySelectorAll(".alert[data-auto-hide]")
  alerts.forEach((alert) => {
    const delay = Number.parseInt(alert.getAttribute("data-auto-hide")) || 5000
    setTimeout(() => {
      alert.style.opacity = "0"
      setTimeout(() => {
        alert.remove()
      }, 300)
    }, delay)
  })

  // Image Preview
  const imageInputs = document.querySelectorAll('input[type="file"][data-preview]')
  imageInputs.forEach((input) => {
    input.addEventListener("change", function () {
      const previewId = this.getAttribute("data-preview")
      const preview = document.getElementById(previewId)

      if (preview && this.files && this.files[0]) {
        const reader = new FileReader()
        reader.onload = (e) => {
          preview.src = e.target.result
          preview.classList.remove("hidden")
        }
        reader.readAsDataURL(this.files[0])
      }
    })
  })

  // Statistics Counter Animation
  const counters = document.querySelectorAll("[data-counter]")
  counters.forEach((counter) => {
    const target = Number.parseInt(counter.getAttribute("data-counter"))
    const duration = 2000 // 2 seconds
    const increment = target / (duration / 16) // 60fps
    let current = 0

    const updateCounter = () => {
      current += increment
      if (current < target) {
        counter.textContent = Math.floor(current)
        requestAnimationFrame(updateCounter)
      } else {
        counter.textContent = target
      }
    }

    // Start animation when element is visible
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          updateCounter()
          observer.unobserve(entry.target)
        }
      })
    })

    observer.observe(counter)
  })

  // Tooltip functionality
  const tooltips = document.querySelectorAll("[data-tooltip]")
  tooltips.forEach((element) => {
    element.addEventListener("mouseenter", function () {
      const tooltipText = this.getAttribute("data-tooltip")
      const tooltip = document.createElement("div")
      tooltip.className = "absolute bg-gray-800 text-white text-sm px-2 py-1 rounded shadow-lg z-50"
      tooltip.textContent = tooltipText
      tooltip.id = "tooltip-" + Date.now()

      document.body.appendChild(tooltip)

      const rect = this.getBoundingClientRect()
      tooltip.style.left = rect.left + rect.width / 2 - tooltip.offsetWidth / 2 + "px"
      tooltip.style.top = rect.top - tooltip.offsetHeight - 5 + "px"
    })

    element.addEventListener("mouseleave", () => {
      const tooltips = document.querySelectorAll('[id^="tooltip-"]')
      tooltips.forEach((tooltip) => tooltip.remove())
    })
  })
})

// Utility Functions
function showNotification(message, type = "info") {
  const notification = document.createElement("div")
  notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${getNotificationClass(type)}`
  notification.textContent = message

  document.body.appendChild(notification)

  setTimeout(() => {
    notification.style.opacity = "0"
    setTimeout(() => {
      notification.remove()
    }, 300)
  }, 3000)
}

function getNotificationClass(type) {
  switch (type) {
    case "success":
      return "bg-green-500 text-white"
    case "error":
      return "bg-red-500 text-white"
    case "warning":
      return "bg-yellow-500 text-white"
    default:
      return "bg-blue-500 text-white"
  }
}

function confirmAction(message, callback) {
  if (confirm(message)) {
    callback()
  }
}

// Export functions for global use
window.showNotification = showNotification
window.confirmAction = confirmAction
