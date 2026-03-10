<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,5013621,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?5013621&101" alt="site stats" border="0"></a></noscript>
<!-- Histats.com  END  -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FurryFriends CareServices - Professional Pet Care Services</title>
  <meta name="description" content="Professional pet care services including dog walking, pet sitting, daycare, grooming, training, and veterinary care.">
  <link rel="stylesheet" href="./styles.css">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-content">
        <a href="index.html" class="logo">
          <div class="logo-icon">
            <i data-lucide="paw-print"></i>
          </div>
          <span class="logo-text">FurryFriends <span class="highlight">CareServices</span></span>
        </a>

        <nav class="desktop-nav">
          <a href="index.html" class="nav-link">Home</a>
          <a href="about.html" class="nav-link">About</a>
          <a href="services.html" class="nav-link">Services</a>
          <a href="vet-care.html" class="nav-link">Vet Care</a>
          <a href="blog.html" class="nav-link">Blog</a>
          <a href="faq.html" class="nav-link">FAQ</a>
          <a href="contact.html" class="nav-link">Contact</a>
          <a href="tel:1-888-332-7387" class="call-button">Call Us</a>
        </nav>

        <button class="mobile-menu-button" onclick="toggleMobileMenu()" aria-label="Toggle menu">
          <i data-lucide="menu" class="icon"></i>
        </button>
      </div>

      <nav id="mobile-nav" class="mobile-nav hidden">
        <a href="index.html" class="nav-link">Home</a>
        <a href="about.html" class="nav-link">About</a>
        <a href="services.html" class="nav-link">Services</a>
        <a href="vet-care.html" class="nav-link">Vet Care</a>
        <a href="blog.html" class="nav-link">Blog</a>
        <a href="faq.html" class="nav-link">FAQ</a>
        <a href="contact.html" class="nav-link">Contact</a>
        <a href="tel:1-888-332-7387" class="call-button">Call Us</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-background-circles">
      <div class="circle circle-1"></div>
      <div class="circle circle-2"></div>
      <div class="circle circle-3"></div>
    </div>
    
    <div class="hero-container">
      <div class="hero-left">
        <h1>Trusted Pet Care Services for Your Beloved Pets</h1>
        <p>Professional and reliable pet care services designed to keep your pets happy, safe, and well cared for when you need support.</p>
        <div class="hero-buttons">
          <button onclick="openLeadPopup()" class="btn btn-primary">Get a Free Quote</button>
          <button onclick="openLeadPopup()" class="btn btn-secondary">Book Pet Care</button>
        </div>
      </div>
      
      <div class="hero-right">
        <div class="hero-images-grid">
          <img src="https://images.unsplash.com/photo-1555325084-b068599743c9?w=400" alt="Cute poodle puppy" class="hero-pet-image">
          <img src="https://images.unsplash.com/photo-1772389378565-c4b6cde60783?w=400" alt="Tabby cat" class="hero-pet-image">
          <img src="https://images.unsplash.com/photo-1695949862204-a1dde9993067?w=400" alt="Happy golden retriever" class="hero-pet-image">
          <img src="https://images.unsplash.com/photo-1755977683857-dffb9a09fc5e?w=400" alt="Orange fluffy cat" class="hero-pet-image">
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section>
    <div class="section-container">
      <h2 class="section-title">Our Services</h2>
      <p class="section-subtitle">Comprehensive pet care solutions tailored to your pet's unique needs</p>
      
      <div class="grid grid-3">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1760908626856-0171e55b4160?w=1080" alt="Dog Walking" class="card-image">
          <div class="card-content">
            <h3 class="card-title">Dog Walking</h3>
            <p class="card-text">Daily exercise and companionship for your dogs.</p>
          </div>
        </div>

        <div class="card">
          <img src="https://images.unsplash.com/photo-1728055977876-c214b0ddf5e7?w=1080" alt="Pet Sitting" class="card-image">
          <div class="card-content">
            <h3 class="card-title">Pet Sitting</h3>
            <p class="card-text">Reliable in-home care while you are away.</p>
          </div>
        </div>

        <div class="card">
          <img src="https://images.unsplash.com/photo-1758426156451-0d05400ecd8e?w=1080" alt="Pet Day Care" class="card-image">
          <div class="card-content">
            <h3 class="card-title">Pet Day Care</h3>
            <p class="card-text">Supervised playtime and care during the day.</p>
          </div>
        </div>

        <div class="card">
          <img src="https://images.unsplash.com/photo-1554530699-505410e7bd20?w=1080" alt="Overnight Pet Care" class="card-image">
          <div class="card-content">
            <h3 class="card-title">Overnight Pet Care</h3>
            <p class="card-text">Comfortable care for pets needing attention overnight.</p>
          </div>
        </div>

        <div class="card">
          <img src="https://images.unsplash.com/photo-1730403257848-a38a393f1b60?w=1080" alt="Pet Grooming" class="card-image">
          <div class="card-content">
            <h3 class="card-title">Pet Grooming</h3>
            <p class="card-text">Professional grooming to keep your pets looking their best.</p>
          </div>
        </div>

        <div class="card">
          <img src="https://images.unsplash.com/photo-1544456948-c7ba22fe7111?w=1080" alt="Pet Training" class="card-image">
          <div class="card-content">
            <h3 class="card-title">Pet Training</h3>
            <p class="card-text">Basic obedience and behavioral training support.</p>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="services.html" class="btn btn-secondary">Learn More About Our Services</a>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="wave-bg" style="position: relative;">
    <div class="section-container">
      <h2 class="section-title">Trusted by Pet Owners Everywhere</h2>
      <div class="stats-grid">
        <div>
          <span class="stat-number">15,000+</span>
          <span class="stat-label">Happy Pets</span>
        </div>
        <div>
          <span class="stat-number">8,500+</span>
          <span class="stat-label">Satisfied Clients</span>
        </div>
        <div>
          <span class="stat-number">50+</span>
          <span class="stat-label">Expert Caregivers</span>
        </div>
        <div>
          <span class="stat-number">10+</span>
          <span class="stat-label">Years Experience</span>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="wave-bg">
    <svg style="position: absolute; bottom: 0; left: 0; right: 0;" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,60 C300,120 500,0 800,60 C1000,100 1100,40 1200,60 L1200,120 L0,120 Z" fill="white" />
    </svg>
    
    <div class="section-container" style="position: relative; z-index: 10;">
      <h2 class="section-title">How It Works</h2>
      <p class="section-subtitle">Getting started with FurryFriends CareServices is simple and straightforward</p>
      
      <div class="grid grid-3">
        <div class="process-step">
          <div class="step-number">1</div>
          <div class="step-icon bg-light-blue">
            <i data-lucide="calendar" class="icon-large text-teal"></i>
          </div>
          <h3 class="card-title">Book Your Service</h3>
          <p class="card-text">Choose your preferred service and schedule a convenient time for your pet care needs.</p>
        </div>

        <div class="process-step">
          <div class="step-number">2</div>
          <div class="step-icon" style="background: #FFE0B2;">
            <i data-lucide="users" class="icon-large text-orange"></i>
          </div>
          <h3 class="card-title">Meet Your Caregiver</h3>
          <p class="card-text">We'll match you with an experienced pet care professional who's perfect for your pet.</p>
        </div>

        <div class="process-step">
          <div class="step-number">3</div>
          <div class="step-icon bg-light-blue">
            <i data-lucide="heart" class="icon-large text-teal"></i>
          </div>
          <h3 class="card-title">Enjoy Peace of Mind</h3>
          <p class="card-text">Relax knowing your pet is receiving loving, professional care with regular updates.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Daily Camp Activities Section -->
  <section>
    <div class="section-container">
      <h2 class="section-title">Daily Camp Activities</h2>
      
      <div class="activity-grid">
        <div class="activity-item">
          <i data-lucide="megaphone" style="width: 3rem; height: 3rem; color: #FF7043;"></i>
          <h3>Meet & Greet</h3>
          <p>Socialization & introduction of "leader of the pack" skills</p>
        </div>

        <div class="activity-item">
          <i data-lucide="bone" style="width: 3rem; height: 3rem; color: #FF7043;"></i>
          <h3>Fun & Games</h3>
          <p>Physical & cognitive playtime with toys & activities like hide & seek</p>
        </div>

        <div class="activity-item">
          <i data-lucide="lightbulb" style="width: 3rem; height: 3rem; color: #FF7043;"></i>
          <h3>Skill Enrichment</h3>
          <p>Practicing skills & tricks like "spin" & "group sit"</p>
        </div>

        <div class="activity-item">
          <i data-lucide="sun" style="width: 3rem; height: 3rem; color: #FF7043;"></i>
          <h3>Lunch & Treats</h3>
          <p>Break for meal or snack (optional)</p>
        </div>

        <div class="activity-item">
          <i data-lucide="sparkles" style="width: 3rem; height: 3rem; color: #FF7043;"></i>
          <h3>Bubbles</h3>
          <p>Sensory stimulation with a room full of bubbles</p>
        </div>

        <div class="activity-item">
          <i data-lucide="book" style="width: 3rem; height: 3rem; color: #FF7043;"></i>
          <h3>Storytime</h3>
          <p>Quiet reading time to calm the group</p>
        </div>

        <div class="activity-item">
          <i data-lucide="moon" style="width: 3rem; height: 3rem; color: #FF7043;"></i>
          <h3>Rest & Relaxation</h3>
          <p>Naptime with calming music</p>
        </div>

        <div class="activity-item">
          <i data-lucide="dumbbell" style="width: 3rem; height: 3rem; color: #FF7043;"></i>
          <h3>Recess</h3>
          <p>Exercise with play equipment like tunnels & hula hoops</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="bg-light-blue">
    <div class="section-container">
      <h2 class="section-title">What Pet Owners Say</h2>
      
      <div class="grid grid-3">
        <div class="testimonial">
          <p class="testimonial-text">"FurryFriends CareServices made it easy to ensure our dog was cared for while we were traveling. Highly recommend!"</p>
          <p class="testimonial-author">Jessica M.</p>
          <p style="color: #6b7280; font-size: 0.875rem;">California</p>
        </div>

        <div class="testimonial">
          <p class="testimonial-text">"The staff is incredibly professional and caring. My cat has never been happier!"</p>
          <p class="testimonial-author">Michael T.</p>
          <p style="color: #6b7280; font-size: 0.875rem;">Texas</p>
        </div>

        <div class="testimonial">
          <p class="testimonial-text">"I love receiving photo updates throughout the day. It's clear they truly love what they do."</p>
          <p class="testimonial-author">Sarah L.</p>
          <p style="color: #6b7280; font-size: 0.875rem;">Florida</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section style="background: linear-gradient(to bottom right, #0288D1, #0277BD); position: relative; overflow: hidden;">
    <svg style="position: absolute; top: 0; left: 0; right: 0;" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,60 C300,0 500,120 800,60 C1000,20 1100,80 1200,60 L1200,0 L0,0 Z" fill="white" />
    </svg>
    
    <div class="section-container text-center" style="position: relative; z-index: 10; color: white;">
      <h2 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1rem;">Ready to Give Your Pet the Best Care?</h2>
      <p style="font-size: 1.125rem; margin-bottom: 2rem; opacity: 0.9;">Join thousands of satisfied pet owners who trust us with their furry family members.</p>
      <button onclick="openLeadPopup()" class="btn btn-primary">Get Started Today</button>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="footer-grid">
        <div class="footer-section">
          <h3>FurryFriends CareServices</h3>
          <p>Professional pet care services you can trust. We treat your pets like family.</p>
        </div>

        <div class="footer-section">
          <h3>Quick Links</h3>
          <a href="about.html">About Us</a>
          <a href="services.html">Services</a>
          <a href="vet-care.html">Vet Care</a>
          <a href="blog.html">Blog</a>
          <a href="faq.html">FAQ</a>
          <a href="contact.html">Contact</a>
        </div>

        <div class="footer-section">
          <h3>Legal</h3>
          <a href="privacy-policy.html">Privacy Policy</a>
          <a href="terms-conditions.html">Terms & Conditions</a>
          <a href="disclaimer.html">Disclaimer</a>
          <a href="cookie-policy.html">Cookie Policy</a>
        </div>

        <div class="footer-section">
          <h3>Contact Us</h3>
          <p>Email: info@furryfriends.com</p>
          <p>Phone: 1-888-332-7387</p>
          <p>Available 24/7</p>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2026 FurryFriends CareServices. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Lead Popup -->
  <div id="lead-popup" class="modal">
    <div class="modal-content">
      <button class="modal-close" onclick="closeLeadPopup()" aria-label="Close">&times;</button>
      <h2 style="margin-bottom: 1rem; color: #1f2937;">Get Started with FurryFriends</h2>
      <p style="margin-bottom: 1.5rem; color: #6b7280;">Fill out the form below and we'll get back to you within 24 hours.</p>
      
      <form onsubmit="submitLeadForm(event)">
        <div class="form-group">
          <label class="form-label">Your Name *</label>
          <input type="text" name="name" class="form-input" required>
        </div>

        <div class="form-group">
          <label class="form-label">Email Address *</label>
          <input type="email" name="email" class="form-input" required>
        </div>

        <div class="form-group">
          <label class="form-label">Phone Number</label>
          <input type="tel" name="phone" class="form-input">
        </div>

        <div class="form-group">
          <label class="form-label">Pet Type</label>
          <select name="petType" class="form-select">
            <option value="">Select pet type</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label class="form-label">Service Interested In</label>
          <select name="service" class="form-select">
            <option value="">Select a service</option>
            <option value="walking">Dog Walking</option>
            <option value="sitting">Pet Sitting</option>
            <option value="daycare">Pet Day Care</option>
            <option value="overnight">Overnight Care</option>
            <option value="grooming">Pet Grooming</option>
            <option value="training">Pet Training</option>
          </select>
        </div>

        <div class="form-group">
          <label class="form-label">Additional Information</label>
          <textarea name="message" class="form-textarea" placeholder="Tell us about your pet's needs..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
      </form>
    </div>
  </div>

  <!-- Cookie Banner -->
  <div id="cookie-banner" class="cookie-banner">
    <div class="cookie-content">
      <div>
        <p style="font-weight: 600; margin-bottom: 0.5rem;">We use cookies</p>
        <p style="color: #6b7280; font-size: 0.875rem;">We use cookies to enhance your browsing experience and analyze our traffic. By clicking "Accept", you consent to our use of cookies.</p>
      </div>
      <div class="cookie-buttons">
        <button onclick="acceptCookies()" class="btn btn-primary">Accept</button>
        <button onclick="declineCookies()" class="btn" style="background: #e5e7eb; color: #374151;">Decline</button>
        <a href="cookie-policy.html" style="color: #0288D1; text-decoration: none; padding: 0.75rem;">Learn More</a>
      </div>
    </div>
  </div>

  <script src="./script.js"></script>
  <script>
    // Initialize Lucide Icons
    if (typeof lucide !== 'undefined') {
      lucide.createIcons();
    }
  </script>
</body>
</html>
