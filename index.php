<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creative Startup NZ | Websites and Support for Local Founders</title>
  <meta name="description" content="Creative Startup NZ provides clean, fast websites and honest business support for New Zealand founders. Custom-built, affordable, and easy to use.">
  
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.creativestartupnz.com/">
  <meta property="og:title" content="Creative Startup NZ | Websites & Support for Local Founders">
  <meta property="og:description" content="Clean, fast websites and honest business support for New Zealand founders. Custom-built, affordable, and easy to use.">
  <meta property="og:image" content="https://www.creativestartupnz.com/images/top-header-landscape.png">
  
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.creativestartupnz.com/">
  <meta property="twitter:title" content="Creative Startup NZ | Websites & Support for Local Founders">
  <meta property="twitter:description" content="Clean, fast websites and honest business support for New Zealand founders. Custom-built, affordable, and easy to use.">
  <meta property="twitter:image" content="https://www.creativestartupnz.com/images/top-header-landscape.png">

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FD71NEPQS0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-FD71NEPQS0');
  </script>

  <script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init', '3454542104667432');fbq('track', 'PageView');</script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=3454542104667432&ev=PageView&noscript=1"/></noscript>
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">

  <style>
    /* RESET & CORE STYLES */
    * { box-sizing: border-box; margin: 0; padding: 0; }
    
    body {
      background-color: var(--void);
      color: var(--signal-med);
      font-family: var(--font-brief);
      line-height: 1.6;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
      transition: background-color 0.3s ease, color 0.3s ease; 
    }

    h1, h2, h3, h4 {
      font-family: var(--font-cmd);
      color: var(--signal-high);
      line-height: 1.2;
      transition: color 0.3s ease;
      font-weight: 800;
    }
    
    p { margin-bottom: 1rem; }
    a { text-decoration: none; color: inherit; transition: 0.2s ease-in-out; }

    .mainframe { max-width: 1280px; margin: 0 auto; min-height: 100vh; background-color: var(--void); }

    /* HERO SLIDER SECTION */
    .hero-section {
      position: relative;
      width: 100%;
      height: 80vh;
      min-height: 600px;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .hero-slider {
      position: absolute;
      top: 0; left: 0; width: 100%; height: 100%;
      z-index: 1;
      background-color: var(--deep-black);
    }

    .slide {
      position: absolute;
      top: 0; left: 0; width: 100%; height: 100%;
      object-fit: cover;
      opacity: 0;
      transition: opacity 1.5s ease-in-out;
    }

    .slide.active { opacity: 0.4; } /* Dimmed to ensure text readability */

    .hero-content {
      position: relative;
      z-index: 10;
      text-align: center;
      padding: 2rem;
      max-width: 800px;
    }

    .hero-badge {
      display: inline-block;
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(5px);
      border: 1px solid var(--phoenix);
      color: var(--phoenix);
      font-family: var(--font-cmd);
      font-weight: 700;
      font-size: 0.85rem;
      text-transform: uppercase;
      padding: 0.5rem 1rem;
      border-radius: 50px;
      margin-bottom: 1.5rem;
    }

    .hero-headline {
      font-size: clamp(2.5rem, 6vw, 4rem);
      color: #FFFFFF; /* Forced white for contrast against slider */
      margin-bottom: 1.5rem;
      text-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .hero-subheadline {
      font-size: 1.2rem;
      color: #E4E5E7;
      margin-bottom: 2.5rem;
      font-weight: 400;
      text-shadow: 0 2px 5px rgba(0,0,0,0.5);
    }

    .btn-primary {
      background-color: var(--phoenix);
      color: #000000;
      font-family: var(--font-cmd);
      font-weight: 700;
      font-size: 1.1rem;
      padding: 1.2rem 2.5rem;
      border-radius: 8px;
      display: inline-block;
      text-transform: uppercase;
      letter-spacing: 1px;
      box-shadow: 0 4px 15px rgba(255, 106, 0, 0.3);
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(255, 106, 0, 0.5);
    }

    /* EMPATHY SECTION */
    .empathy-section {
      background-color: var(--surface);
      padding: 6rem 2rem;
      text-align: center;
    }

    .empathy-container { max-width: 800px; margin: 0 auto; }

    .empathy-title {
      font-size: 2.2rem;
      margin-bottom: 1.5rem;
      color: var(--signal-high);
    }

    .empathy-text {
      font-size: 1.1rem;
      color: var(--signal-med);
      margin-bottom: 2rem;
    }

    /* SERVICES SECTION */
    .services-section {
      padding: 6rem 2rem;
      background-color: var(--void);
    }

    .section-header {
      text-align: center;
      margin-bottom: 4rem;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2.5rem;
      max-width: 1100px;
      margin: 0 auto;
    }

    .service-card {
      background-color: var(--surface);
      border-radius: 12px;
      overflow: hidden;
      border: 1px solid var(--structure);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      flex-direction: column;
    }

    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
      border-color: var(--phoenix);
    }

    .card-featured {
      transform: scale(1.05);
      border: 2px solid var(--phoenix);
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
      z-index: 2;
    }

    .card-featured:hover { transform: scale(1.05) translateY(-8px); }

    .card-img-wrapper {
      width: 100%;
      height: 220px;
      overflow: hidden;
    }

    .card-img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .service-card:hover .card-img-wrapper img { transform: scale(1.05); }

    .card-content { padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; }
    
    .card-badge {
      color: var(--phoenix);
      font-family: var(--font-cmd);
      font-size: 0.8rem;
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 0.5rem;
    }

    .card-title { font-size: 1.4rem; margin-bottom: 0.5rem; }
    .card-price { font-family: var(--font-cmd); font-weight: 700; color: var(--signal-high); margin-bottom: 1rem; }
    
    .card-desc { color: var(--signal-med); font-size: 0.95rem; flex-grow: 1; margin-bottom: 1.5rem; }

    .btn-outline {
      border: 2px solid var(--structure);
      color: var(--signal-high);
      font-family: var(--font-cmd);
      font-weight: 700;
      text-align: center;
      padding: 0.8rem;
      border-radius: 6px;
      text-transform: uppercase;
      font-size: 0.9rem;
    }

    .btn-outline:hover { background-color: var(--structure); }
    
    .btn-featured {
      background-color: var(--phoenix);
      color: #000;
      border: none;
    }
    .btn-featured:hover { background-color: #e55e00; color: #000; }

    /* TRUST/OWNERSHIP SECTION */
    .trust-section {
      background-color: var(--surface);
      padding: 6rem 2rem;
      border-top: 1px solid var(--structure);
      border-bottom: 1px solid var(--structure);
    }

    .trust-container {
      max-width: 1000px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      gap: 4rem;
    }

    .trust-image { flex: 1; border-radius: 12px; overflow: hidden; }
    .trust-image img { width: 100%; height: auto; display: block; border-radius: 12px; }
    
    .trust-content { flex: 1.2; }
    
    .trust-list { list-style: none; margin-top: 1.5rem; }
    .trust-list li {
      display: flex;
      align-items: flex-start;
      margin-bottom: 1rem;
      color: var(--signal-high);
      font-weight: 500;
    }
    .trust-list li span {
      color: var(--phoenix);
      margin-right: 12px;
      font-weight: bold;
      font-size: 1.2rem;
    }

    /* FOUNDER SECTION */
    .founder-section {
      padding: 6rem 2rem;
      background-color: var(--void);
      text-align: center;
    }
    .founder-container { max-width: 700px; margin: 0 auto; }
    
    .founder-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1.5rem;
      border: 3px solid var(--phoenix);
    }

    /* MOBILE RESPONSIVENESS */
    @media (max-width: 900px) {
      .card-featured { transform: scale(1); }
      .card-featured:hover { transform: translateY(-8px); }
      .trust-container { flex-direction: column; text-align: center; }
      .trust-list li { justify-content: center; text-align: left; }
    }
  </style>
</head>
<body>

  <div class="mainframe">
    <?php include 'header.php'; ?>

    <main>
      <section class="hero-section">
        <div class="hero-slider" id="heroSlider">
          <img src="images/hero1.jpg" alt="Creative Startup NZ Website Design" class="slide active">
          <img src="images/hero2.jpg" alt="Small Business Web Design" class="slide">
          <img src="images/hero3.jpg" alt="Local NZ Founder Support" class="slide">
          <img src="images/hero4.jpg" alt="Affordable Websites" class="slide">
          <img src="images/hero5.jpg" alt="Creative Startup Work Space" class="slide">
          <img src="images/hero6.jpg" alt="Website Launching" class="slide">
        </div>
        
        <div class="hero-content">
          <div class="hero-badge">Websites for Everyday Kiwis</div>
          <h1 class="hero-headline">Your First Website, <br>Made Simple.</h1>
          <p class="hero-subheadline">You focus on building your business. We'll build you a clean, affordable website that actually brings in customers—with zero technical headaches.</p>
          <a href="#services" class="btn-primary">See Our Web Packages</a>
        </div>
      </section>

      <section class="empathy-section">
        <div class="empathy-container">
          <h2 class="empathy-title">Starting a business is exciting. The tech side? Not so much.</h2>
          <p class="empathy-text">We know exactly how it feels. You have a great idea and you're ready to launch, but the thought of coding, expensive monthly retainers, and confusing jargon is holding you back.</p>
          <p class="empathy-text"><strong>You don't need a $5,000 website to succeed.</strong> You need a professional, reliable digital storefront that your local customers can trust. We keep things straightforward so you can launch with confidence.</p>
        </div>
      </section>

      <section id="services" class="services-section">
        <div class="section-header">
          <h2>Clear Pricing. Zero Hidden Fees.</h2>
          <p style="color: var(--signal-med); margin-top: 1rem;">Everything you need to get your business off the ground.</p>
        </div>

        <div class="services-grid">
          
          <article class="service-card">
            <div class="card-img-wrapper">
              <img src="images/logo-home.jpg" alt="Custom Logo Design">
            </div>
            <div class="card-content">
              <span class="card-badge">Branding</span>
              <h3 class="card-title">Custom Logo Design</h3>
              <div class="card-price">$49.95 NZD</div>
              <p class="card-desc">A clean, professional logo that helps you look established and builds instant trust with your local customers. No generic clip art, just design that works.</p>
              <a href="service-logo.php" class="btn-outline">View Details</a>
            </div>
          </article>

          <article class="service-card card-featured">
            <div class="card-img-wrapper">
              <img src="images/5-page-hero.jpg" alt="5 Page Custom Website">
            </div>
            <div class="card-content">
              <span class="card-badge">Web Development</span>
              <h3 class="card-title">5-Page Custom Website</h3>
              <div class="card-price">Starts at $650.00 NZD</div>
              <div style="background-color: var(--void); padding: 0.8rem; border-radius: 6px; margin-bottom: 1rem;">
                <p style="font-size: 0.8rem; font-weight: 600; margin-bottom: 0;">Friendly Payment Split:</p>
                <p style="font-size: 0.8rem; color: var(--signal-low); margin-bottom: 0;">Start: 33% | Launch: 33% | +30 Days: 33%</p>
              </div>
              <p class="card-desc">A lightning-fast, custom-built website designed specifically to capture leads and grow your business. Designed for you, owned entirely by you.</p>
              <a href="service-5-page-html-website.php" class="btn-outline btn-featured">Start Your Project</a>
            </div>
          </article>

          <article class="service-card">
            <div class="card-img-wrapper">
              <img src="images/service-seo-alt.jpg" alt="Website SEO Audit">
            </div>
            <div class="card-content">
              <span class="card-badge">Visibility</span>
              <h3 class="card-title">Website SEO Audit</h3>
              <div class="card-price">$49.99 NZD</div>
              <p class="card-desc">Wondering why your website isn't showing up on Google? We'll find out why and give you a plain-English, step-by-step plan to fix it.</p>
              <a href="service-seo.php" class="btn-outline">View Details</a>
            </div>
          </article>

        </div>
      </section>

      <section class="trust-section">
        <div class="trust-container">
          <div class="trust-image">
            <img src="images/youdontownyourbiz.jpg" alt="Website Ownership Guarantee">
          </div>
          <div class="trust-content">
            <h2 style="font-size: 2.2rem; margin-bottom: 1rem;">Your Website.<br>Your Rules.</h2>
            <p style="font-size: 1.1rem; color: var(--signal-med);">Have you ever heard stories of business owners getting locked out of their own websites by an agency? We think that's incredibly unfair.</p>
            <p style="font-size: 1.1rem; color: var(--signal-med);">When we build your site, we hand over the keys. You are always in control of your digital storefront.</p>
            
            <ul class="trust-list">
              <li><span>✓</span> 100% ownership of your domain and code from day one.</li>
              <li><span>✓</span> Zero mandatory ongoing monthly fees or tricky contracts.</li>
              <li><span>✓</span> Full handover process so you know exactly how things work.</li>
            </ul>
            
            <a href="service-consult.php" style="display: inline-block; margin-top: 1.5rem; color: var(--phoenix); font-weight: 700; text-decoration: underline; text-underline-offset: 4px;">Book a free, no-pressure chat about your idea ➔</a>
          </div>
        </div>
      </section>

      <section class="founder-section">
        <div class="founder-container">
          <img src="images/startup-consult.png" alt="Russell Oliver" class="founder-img">
          <h2 style="margin-bottom: 1rem;">Built by a Local Founder</h2>
          <p style="font-size: 1.1rem; color: var(--signal-med); margin-bottom: 1.5rem;">Hi, I'm Russell. Creative Startup NZ was born out of my own real-world experience. I know firsthand what it's like to build a business from the ground up, make expensive mistakes, and learn the hard way.</p>
          <p style="font-size: 1.1rem; color: var(--signal-med);">I'm not here to sell you a get-rich-quick dream. I'm here to give you honest advice, save you from wasting money, and build digital tools that genuinely help your New Zealand business succeed.</p>
        </div>
      </section>

    </main>

    <?php include 'footer.php'; ?>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const slides = document.querySelectorAll('#heroSlider .slide');
      let currentSlide = 0;
      
      if(slides.length > 0) {
        setInterval(() => {
          slides[currentSlide].classList.remove('active');
          currentSlide = (currentSlide + 1) % slides.length;
          slides[currentSlide].classList.add('active');
        }, 5000); // Change image every 5 seconds
      }
    });
  </script>

  <script>
    window.addEventListener('load', function() {
      const yearSpan = document.getElementById('tactical-year');
      if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
      }
    });
  </script>
  
  </script>
</body>
</html>