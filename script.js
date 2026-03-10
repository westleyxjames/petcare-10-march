// Mobile Menu Toggle
function toggleMobileMenu() {
  const mobileNav = document.getElementById('mobile-nav');
  mobileNav.classList.toggle('hidden');
}

// Lead Popup
function openLeadPopup() {
  const popup = document.getElementById('lead-popup');
  if (popup) {
    popup.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}

function closeLeadPopup() {
  const popup = document.getElementById('lead-popup');
  if (popup) {
    popup.classList.remove('active');
    document.body.style.overflow = '';
  }
}

// Lead Form Submission
function submitLeadForm(event) {
  event.preventDefault();
  const form = event.target;
  const formData = new FormData(form);
  
  // Here you would normally send data to a server
  console.log('Form submitted:', Object.fromEntries(formData));
  
  alert('Thank you for your interest! We will contact you soon.');
  closeLeadPopup();
  form.reset();
}

// Cookie Banner
function initCookieBanner() {
  const cookieBanner = document.getElementById('cookie-banner');
  const cookieAccepted = localStorage.getItem('cookieAccepted');
  
  if (!cookieAccepted && cookieBanner) {
    setTimeout(() => {
      cookieBanner.classList.add('active');
    }, 2000);
  }
}

function acceptCookies() {
  localStorage.setItem('cookieAccepted', 'true');
  const cookieBanner = document.getElementById('cookie-banner');
  if (cookieBanner) {
    cookieBanner.classList.remove('active');
  }
}

function declineCookies() {
  localStorage.setItem('cookieAccepted', 'declined');
  const cookieBanner = document.getElementById('cookie-banner');
  if (cookieBanner) {
    cookieBanner.classList.remove('active');
  }
}

// FAQ Accordion
function toggleAccordion(button) {
  const content = button.nextElementSibling;
  const allContents = document.querySelectorAll('.accordion-content');
  const allButtons = document.querySelectorAll('.accordion-header');
  
  // Close all other accordions
  allContents.forEach(item => {
    if (item !== content) {
      item.classList.remove('active');
    }
  });
  
  allButtons.forEach(btn => {
    if (btn !== button) {
      const icon = btn.querySelector('.accordion-icon');
      if (icon) icon.textContent = '+';
    }
  });
  
  // Toggle current accordion
  content.classList.toggle('active');
  const icon = button.querySelector('.accordion-icon');
  if (icon) {
    icon.textContent = content.classList.contains('active') ? '−' : '+';
  }
}

// Set Active Navigation Link
function setActiveNavLink() {
  const currentPage = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-link');
  
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (href !== '/' && currentPage.startsWith(href))) {
      link.classList.add('active');
    } else if (href === '/' && currentPage === '/') {
      link.classList.add('active');
    }
  });
}

// Contact Form Submission
function submitContactForm(event) {
  event.preventDefault();
  const form = event.target;
  const formData = new FormData(form);
  
  // Here you would normally send data to a server
  console.log('Contact form submitted:', Object.fromEntries(formData));
  
  alert('Thank you for contacting us! We will get back to you soon.');
  form.reset();
}

// Smooth Scroll
function smoothScroll(target) {
  const element = document.querySelector(target);
  if (element) {
    element.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

// Show Lead Popup on Exit Intent (optional)
let exitIntentShown = false;
function handleExitIntent(event) {
  if (!exitIntentShown && event.clientY <= 0) {
    exitIntentShown = true;
    openLeadPopup();
  }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
  setActiveNavLink();
  initCookieBanner();
  
  // Optional: Show popup on exit intent
  // document.addEventListener('mouseout', handleExitIntent);
  
  // Auto-open popup after 30 seconds (optional)
  // setTimeout(openLeadPopup, 30000);
});

// Close modals on escape key
document.addEventListener('keydown', function(event) {
  if (event.key === 'Escape') {
    closeLeadPopup();
  }
});

// Close modal when clicking outside
document.addEventListener('click', function(event) {
  const popup = document.getElementById('lead-popup');
  if (event.target === popup) {
    closeLeadPopup();
  }
});

// Lucide Icons Integration
function loadLucideIcons() {
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }
}

// Call after DOM loaded
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', loadLucideIcons);
} else {
  loadLucideIcons();
}
