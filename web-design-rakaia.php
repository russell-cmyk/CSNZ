<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Web Design & CRM in Rakaia | Creative Startup NZ</title>
  <meta name="description" content="Stop paying monthly agency fees. Get a lightning-fast, custom-coded 5-Page website built locally for Rakaia small businesses.">
  
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.creativestartupnz.com/web-design-rakaia.php">
  <meta property="og:title" content="Custom Web Design & CRM in Rakaia | Creative Startup NZ">
  <meta property="og:description" content="Stop paying monthly agency fees. Get a lightning-fast, custom-coded 5-Page website built locally for Rakaia small businesses.">
  <meta property="og:image" content="https://www.creativestartupnz.com/images/5-page-html.jpg">
 
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.creativestartupnz.com/web-design-rakaia.php">
  <meta property="twitter:title" content="Custom Web Design & CRM in Rakaia | Creative Startup NZ">
  <meta property="twitter:description" content="Stop paying monthly agency fees. Get a lightning-fast, custom-coded 5-Page website built locally for Rakaia small businesses.">
  <meta property="twitter:image" content="https://www.creativestartupnz.com/images/5-page-html.jpg">
 
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
 
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FD71NEPQS0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-FD71NEPQS0');
  </script>
 
  <script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "Service",
    "serviceType": "Web Design and CRM Development",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Creative Startup NZ",
      "image": "https://www.creativestartupnz.com/images/5-page-html.jpg",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "NZ",
        "addressRegion": "Canterbury",
        "addressLocality": "Rakaia"
      },
      "priceRange": "$$"
    },
    "areaServed": {
      "@type": "City",
      "name": "Rakaia"
    },
    "offers": {
      "@type": "Offer",
      "priceCurrency": "NZD",
      "price": "650.00",
      "availability": "https://schema.org/InStock",
      "description": "High-performance, custom-coded 5-page HTML websites with a fully integrated, zero-subscription CRM. Built explicitly for New Zealand founders."
    },
    "description": "Custom 5-Page website design combined with a zero-subscription CRM. We build reliable digital foundations that convert traffic into clients for Rakaia businesses."
  }
  </script>
 
  <style>
    /* CORE & RESET */
    * { box-sizing: border-box; margin: 0; padding: 0; }
    
    body {
      background-color: var(--void);
      color: var(--signal-med);
      font-family: var(--font-brief);
      line-height: 1.6;
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
 
    a { text-decoration: none; color: inherit; transition: 0.2s ease-in-out; }
 
    .mainframe { max-width: 1280px; margin: 0 auto; min-height: 100vh; background-color: var(--void); }
 
    /* HERO SECTION */
    .service-hero {
      display: grid;
      grid-template-columns: 1fr 1fr;
      background-color: var(--surface);
      border-bottom: 1px solid var(--structure);
    }
 
    .hero-image-wrapper {
      position: relative;
      overflow: hidden;
      min-height: 500px;
    }
 
    .hero-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0; left: 0;
    }
 
    .hero-content {
      padding: 5rem 3rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
 
    .hero-badge {
      display: inline-block;
      background-color: rgba(255, 106, 0, 0.1);
      color: var(--phoenix);
      font-family: var(--font-cmd);
      font-weight: 700;
      font-size: 0.85rem;
      text-transform: uppercase;
      padding: 0.4rem 1rem;
      border-radius: 50px;
      margin-bottom: 1.5rem;
      align-self: flex-start;
    }
 
    .hero-title {
      font-size: clamp(2.5rem, 4vw, 3.5rem);
      margin-bottom: 1rem;
    }
 
    .hero-price-block {
      margin-bottom: 1.5rem;
    }
 
    .hero-price {
      font-size: 2.5rem;
      font-family: var(--font-cmd);
      font-weight: 800;
      color: var(--signal-high);
      line-height: 1;
    }
 
    .hero-price-sub {
      font-size: 1rem;
      color: var(--signal-low);
      font-weight: 500;
      display: block;
      margin-top: 0.3rem;
    }
 
    .hero-desc {
      font-size: 1.1rem;
      color: var(--signal-med);
      margin-bottom: 2.5rem;
      max-width: 90%;
    }
 
    .btn-primary {
      background-color: var(--phoenix);
      color: #000;
      font-family: var(--font-cmd);
      font-weight: 700;
      font-size: 1.1rem;
      padding: 1.2rem 2.5rem;
      border-radius: 8px;
      display: inline-block;
      text-transform: uppercase;
      letter-spacing: 1px;
      text-align: center;
      box-shadow: 0 4px 15px rgba(255, 106, 0, 0.2);
      border: none;
      cursor: pointer;
    }
 
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(255, 106, 0, 0.3);
    }

    .btn-secondary {
      background-color: var(--structure);
      color: var(--signal-high);
      font-family: var(--font-cmd);
      font-weight: 700;
      font-size: 1.1rem;
      padding: 1.2rem 2.5rem;
      border-radius: 8px;
      display: inline-block;
      text-transform: uppercase;
      letter-spacing: 1px;
      text-align: center;
      border: none;
      cursor: pointer;
    }
    .btn-secondary:hover { filter: brightness(95%); }
 
    /* FEATURE BLOCKS (Z-PATTERN) */
    .features-section {
      padding: 6rem 2rem;
      background-color: var(--void);
    }
 
    .section-header {
      text-align: center;
      max-width: 800px;
      margin: 0 auto 4rem auto;
    }
 
    .section-title {
      font-size: 2.2rem;
      margin-bottom: 1rem;
    }
 
    .feature-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      max-width: 1000px;
      margin: 0 auto 5rem auto;
      align-items: center;
    }
 
    .feature-row.reverse { direction: rtl; }
    .feature-row.reverse > * { direction: ltr; }
 
    .feature-text h3 {
      font-size: 1.6rem;
      margin-bottom: 1rem;
    }
 
    .feature-text p {
      font-size: 1.05rem;
      margin-bottom: 1rem;
      color: var(--signal-med);
    }
 
    .feature-card {
      background-color: var(--surface);
      padding: 3rem;
      border-radius: 12px;
      border: 1px solid var(--structure);
      text-align: center;
      box-shadow: 0 5px 20px rgba(0,0,0,0.03);
      transition: transform 0.3s ease;
    }
 
    .feature-card:hover { transform: translateY(-5px); border-color: var(--phoenix); }
 
    .feature-icon {
      font-size: 3rem;
      color: var(--phoenix);
      margin-bottom: 1rem;
    }
 
    /* CRM & VIDEO SECTION */
    .crm-section {
      padding: 6rem 2rem;
      background-color: var(--surface);
      text-align: center;
      border-top: 1px solid var(--structure);
      border-bottom: 1px solid var(--structure);
    }
 
    .video-container {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      max-width: 900px;
      margin: 3rem auto 2rem auto;
      border-radius: 12px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      background-color: #000;
      cursor: pointer;
      border: 1px solid var(--structure);
    }
 
    .video-thumbnail {
      position: absolute; top: 0; left: 0; width: 100%; height: 100%;
      object-fit: cover; opacity: 0.8; transition: opacity 0.3s ease;
    }
 
    .video-container:hover .video-thumbnail { opacity: 1; }
 
    .play-btn {
      position: absolute; top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      width: 80px; height: 80px;
      background-color: var(--phoenix);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      transition: transform 0.2s ease;
      z-index: 2;
    }
 
    .video-container:hover .play-btn { transform: translate(-50%, -50%) scale(1.1); }
    .play-btn::before {
      content: ''; border-style: solid; border-width: 12px 0 12px 20px;
      border-color: transparent transparent transparent #000; margin-left: 5px;
    }
 
    .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 3; }
 
    .testimonial {
      max-width: 800px;
      margin: 3rem auto 0 auto;
      background-color: var(--void);
      padding: 2.5rem;
      border-radius: 12px;
      border-left: 4px solid var(--phoenix);
      text-align: left;
    }
 
    .testimonial-text { font-size: 1.1rem; color: var(--signal-high); font-style: italic; margin-bottom: 1rem; }
    .testimonial-author { font-family: var(--font-cmd); font-weight: 700; color: var(--signal-med); font-size: 0.9rem; }
 
    /* PROMISE & OWNERSHIP */
    .promise-section {
      padding: 6rem 2rem;
      background-color: var(--void);
      text-align: center;
    }
 
    .promise-content {
      max-width: 800px;
      margin: 0 auto;
      text-align: left;
      font-size: 1.1rem;
    }
 
    .promise-content p { margin-bottom: 1.5rem; }
 
    .check-list { list-style: none; margin: 2rem 0; padding: 2rem; background-color: var(--surface); border-radius: 12px; border: 1px solid var(--structure); }
    .check-list li { margin-bottom: 1rem; display: flex; align-items: flex-start; color: var(--signal-high); font-weight: 500; }
    .check-list li:last-child { margin-bottom: 0; }
    .check-list li span { color: var(--phoenix); font-weight: bold; margin-right: 12px; font-size: 1.2rem; }
 
    /* PRICING & PAYMENT PLAN */
    .pricing-section {
      padding: 6rem 2rem;
      background-color: var(--surface);
      border-top: 1px solid var(--structure);
    }
 
    .pricing-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
      max-width: 1000px;
      margin: 3rem auto 0 auto;
    }
 
    .price-card {
      background-color: var(--void);
      padding: 3rem 2rem;
      border-radius: 12px;
      border: 1px solid var(--structure);
      text-align: center;
      transition: transform 0.3s ease;
    }
 
    .price-card:hover { transform: translateY(-5px); border-color: var(--phoenix); box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
    .price-card.highlight { border: 2px solid var(--phoenix); position: relative; }
    
    .step-badge {
      font-family: var(--font-cmd);
      font-size: 0.8rem;
      color: var(--phoenix);
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 1rem;
      display: block;
    }
 
    .step-title { font-size: 1.4rem; margin-bottom: 0.5rem; }
    .step-amount { font-family: var(--font-cmd); font-size: 1.5rem; font-weight: 800; color: var(--signal-high); margin-bottom: 1rem; }
    .step-desc { font-size: 0.95rem; color: var(--signal-med); }
 
    /* CONTACT FORM */
    .contact-section {
      padding: 6rem 2rem;
      background-color: var(--void);
    }
 
    .form-container {
      max-width: 650px;
      margin: 0 auto;
      background-color: var(--surface);
      padding: 3rem;
      border-radius: 12px;
      border: 1px solid var(--structure);
      box-shadow: 0 10px 30px rgba(0,0,0,0.03);
    }
 
    .form-group { margin-bottom: 1.5rem; }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }
    
    .form-label {
      display: block;
      font-family: var(--font-cmd);
      font-weight: 700;
      font-size: 0.85rem;
      color: var(--signal-high);
      margin-bottom: 0.5rem;
    }
 
    .form-input, .form-textarea, .form-select {
      width: 100%;
      padding: 1rem;
      background-color: var(--void);
      border: 1px solid var(--structure);
      color: var(--signal-high);
      font-family: var(--font-brief);
      font-size: 1rem;
      border-radius: 6px;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
 
    .form-input:focus, .form-textarea:focus, .form-select:focus {
      outline: none;
      border-color: var(--phoenix);
      box-shadow: 0 0 0 3px rgba(255, 106, 0, 0.1);
    }
 
    .form-select {
      appearance: none;
      background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23FF6A00' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right 1rem center;
      background-size: 1em;
    }
 
    .quote-box {
      background-color: var(--void);
      border: 1px solid var(--structure);
      padding: 2rem;
      border-radius: 8px;
      margin: 2rem 0;
    }
 
    .quote-title { font-family: var(--font-cmd); font-weight: 700; font-size: 0.9rem; margin-bottom: 1rem; text-transform: uppercase; border-bottom: 1px solid var(--structure); padding-bottom: 0.5rem; }
    .quote-flex { display: flex; justify-content: space-between; margin-bottom: 0.5rem; font-size: 0.95rem; }
    .quote-total { display: flex; justify-content: space-between; font-family: var(--font-cmd); font-weight: 800; font-size: 1.3rem; margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--structure); }
 
    .form-status { margin-top: 1.5rem; font-weight: 600; text-align: center; border-radius: 6px; }
    .status-success { color: #155724; background-color: #d4edda; padding: 1rem; border: 1px solid #c3e6cb; }
    .status-error { color: #721c24; background-color: #f8d7da; padding: 1rem; border: 1px solid #f5c6cb; }
 
    @media (max-width: 900px) {
      .service-hero { grid-template-columns: 1fr; }
      .hero-image-wrapper { min-height: 300px; }
      .feature-row { grid-template-columns: 1fr; gap: 2rem; }
      .feature-row.reverse { direction: ltr; }
      .pricing-grid { grid-template-columns: 1fr; }
      .form-row { grid-template-columns: 1fr; gap: 0; }
    }
  </style>
</head>
<body>
 
  <div class="mainframe">
    <?php include 'header.php'; ?>
 
    <main>
      
      <header class="service-hero">
        <div class="hero-image-wrapper">
          <img src="images/5-page-html.jpg" alt="Local Website Design Rakaia" class="hero-image">
        </div>
        <div class="hero-content">
          <span class="hero-badge">Built Locally. Built Right.</span>
          <h1 class="hero-title">Web Design For Rakaia Businesses</h1>
          
          <div class="hero-price-block">
            <span class="hero-price">$650.00 NZD</span>
            <span class="hero-price-sub">Or 3 gentle payments of $216.67. Zero monthly software fees.</span>
          </div>
 
          <p class="hero-desc">
            Being based right here in Rakaia, we know exactly how business works in a rural town. It is built on handshakes, trust, and your local reputation. But when someone passes through or looks you up online, you need to look the part.
            <br><br>
            You don't need a massive agency overcharging you for a website full of jargon. And you definitely don't want to get stuck paying monthly software fees just to keep a simple contact form running.
            <br><br>
            We keep it simple and honest. We build a clean, fast website that represents your hard work. Then, we hook up a private customer tracker (CRM) directly to the backend. Everything you need to grow—without the endless fees.
          </p>
 
          <a href="#contact" class="btn-primary" style="width: 100%;">Get Started Safely</a>
        </div>
      </header>
 
      <section class="features-section">
        <div class="section-header">
          <h2 class="section-title">Everything you need. Nothing you don't.</h2>
          <p style="font-size: 1.1rem; color: var(--signal-med);">Small town business is about being reliable. We build a lightning-fast site with an automated backend so you can manage local inquiries without being glued to your phone.</p>
        </div>
 
        <article class="feature-row">
          <div class="feature-text">
            <h3>Look The Part Online</h3>
            <p>Google rewards websites that load quickly and make sense. Building a cheap site on a drag-and-drop platform usually results in broken pages that actively hurt your credibility when locals search for you.</p>
            <p>We hand-code your site from the ground up right here in Mid Canterbury. You get a technically sound website that captures local traffic naturally.</p>
          </div>
          <div class="feature-card">
            <div class="feature-icon">⚡</div>
            <h4 style="font-size: 1.4rem; margin-bottom: 0.5rem;">Lightning Fast</h4>
            <p style="color: var(--signal-med); font-size: 0.95rem;">Engineered to load instantly and pass Google's speed tests.</p>
          </div>
        </article>
 
        <article class="feature-row reverse">
          <div class="feature-text">
            <h3>The Digital Handshake</h3>
            <p>Missing a message from a rural contractor or local client because you were flat out is painful. We close the communication gap.</p>
            <p>The moment someone fills out your contact form, our system automatically fires off a friendly email letting them know you got it. It is the digital equivalent of a firm handshake, showing you are reliable and onto it.</p>
          </div>
          <div class="feature-card">
            <div class="feature-icon">✉️</div>
            <h4 style="font-size: 1.4rem; margin-bottom: 0.5rem;">Instant Replies</h4>
            <p style="color: var(--signal-med); font-size: 0.95rem;">Automatic emails reassure your leads that you are on the job.</p>
          </div>
        </article>
 
        <article class="feature-row">
          <div class="feature-text">
            <h3>Block the Junk</h3>
            <p>Nothing is more frustrating than a flooded inbox full of overseas bots trying to sell you cheap search engine services.</p>
            <p>We build smart, invisible filters directly into your website's forms. This ensures that the only messages hitting your inbox are from genuine human beings who want your services.</p>
          </div>
          <div class="feature-card">
            <div class="feature-icon">🛡️</div>
            <h4 style="font-size: 1.4rem; margin-bottom: 0.5rem;">Spam Protection</h4>
            <p style="color: var(--signal-med); font-size: 0.95rem;">Keep your inbox clean and focus only on real local customers.</p>
          </div>
        </article>
      </section>
 
      <section class="crm-section">
        <h2 class="section-title">Your Built-In Business Dashboard</h2>
        <p style="max-width: 700px; margin: 0 auto; color: var(--signal-med); font-size: 1.1rem;">
          A CRM (Client Relationship Manager) is simply a private dashboard where you can see all your customer messages, track the progress of jobs, and understand your profits. Instead of paying a separate company monthly fees for this, we build it directly into your website for free.
        </p>
 
        <div class="video-container" onclick="this.innerHTML='<iframe src=\'https://www.youtube.com/embed/PlKzNNKXi-g?autoplay=1\' title=\'CRM Dashboard Showcase\' frameborder=\'0\' allow=\'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>'">
          <img src="images/5-page-html.jpg" alt="CRM Dashboard Preview" class="video-thumbnail">
          <div class="play-btn"></div>
        </div>
 
        <div class="testimonial">
          <p class="testimonial-text">"I used to track all my jobs in a messy notebook. Russell built me a website and this amazing dashboard where everything is finally in one place. For the first time, I actually know exactly how much profit I'm making. It took so much stress off my shoulders."</p>
          <p class="testimonial-author">— Local NZ Business Owner</p>
        </div>
      </section>
 
      <section class="promise-section">
        <div class="promise-content">
          <h2 style="font-size: 2.2rem; margin-bottom: 1.5rem; text-align: center;">Built With Local Founders In Mind</h2>
          <p>If you're building your business late at night after the kids are asleep, or hustling on your lunch breaks trying to create a lasting legacy for your family... we understand exactly where you are.</p>
          <p>We know how intimidating the tech side of business can be, and how scary it is to part with your hard-earned cash when you're just starting out.</p>
          
          <ul class="check-list">
            <li><span>✓</span> <strong>Clear Pricing:</strong> No hidden costs, no surprise invoices.</li>
            <li><span>✓</span> <strong>True Ownership:</strong> You own your domain, your website, and your CRM completely. No lock-in contracts or confusing tech jargon.</li>
            <li><span>✓</span> <strong>Zero Pressure:</strong> We offer honest, local advice. If we don't think you need this yet, we'll tell you.</li>
          </ul>
 
          <p style="text-align: center; font-weight: 600; color: var(--signal-high);">We build reliable digital foundations so you can focus on what you do best.</p>
        </div>
      </section>
 
      <section class="pricing-section">
        <div class="section-header" style="margin-bottom: 2rem;">
          <h2 class="section-title">A Founder-Friendly Payment Plan</h2>
          <p style="font-size: 1.1rem; color: var(--signal-med);">We understand that cash flow is the lifeblood of a startup. Instead of asking for a huge lump sum upfront, we split the cost into three manageable steps. We share the risk with you.</p>
        </div>
 
        <div class="pricing-grid">
          <div class="price-card">
            <span class="step-badge">Step 1</span>
            <h3 class="step-title">Kickoff</h3>
            <div class="step-amount">$216.67</div>
            <p class="step-desc">Due when we start. We partner up, gather your ideas, and begin building your website.</p>
          </div>
          <div class="price-card highlight">
            <span class="step-badge">Step 2</span>
            <h3 class="step-title">Going Live</h3>
            <div class="step-amount">$216.67</div>
            <p class="step-desc">Due right before we push your site live to the world. You are officially open for business!</p>
          </div>
          <div class="price-card">
            <span class="step-badge">Step 3</span>
            <h3 class="step-title">Revenue Run</h3>
            <div class="step-amount">$216.67</div>
            <p class="step-desc">Due 30 days <em>after</em> launch. We give you a full month to use the site and generate revenue first.</p>
          </div>
        </div>
      </section>
 
      <section id="contact" class="contact-section">
        <div class="section-header">
          <h2 class="section-title">Tell Us About Your Idea</h2>
          <p style="font-size: 1.1rem; color: var(--signal-med);">Take the first step towards your professional website. There is absolutely no pressure or commitment required today.</p>
        </div>
 
        <div class="form-container">
          <form id="serviceForm">
            <input type="hidden" name="Service Required" value="HTML 5 Page Website + CRM (Rakaia)">
            
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Your Full Name *</label>
                <input type="text" name="Name" class="form-input" required placeholder="e.g. Jane Doe">
              </div>
              <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input type="tel" name="Mobile" class="form-input" placeholder="021 123 4567">
              </div>
            </div>
 
            <div class="form-group">
              <label class="form-label">Email Address *</label>
              <input type="email" name="Email Address" class="form-input" required placeholder="hello@company.co.nz">
            </div>
 
            <div class="form-group">
              <label class="form-label">Include the free Business Dashboard (CRM)?</label>
              <select name="Include CRM" class="form-select">
                <option value="Yes">Yes, I'd love the CRM dashboard</option>
                <option value="No">No thanks, just the website</option>
              </select>
            </div>
 
            <div class="form-group">
              <label class="form-label">Referral Code (Optional)</label>
              <div style="display: flex; gap: 10px;">
                <input type="text" id="refCodeInput" class="form-input" placeholder="Enter partner code for $10 off" style="margin-bottom: 0;">
                <button type="button" id="applyCodeBtn" class="btn-secondary" style="margin-top: 0; width: auto; padding: 0 1.5rem;">Apply</button>
              </div>
              <div id="promoStatus" style="font-size: 0.85rem; font-weight: 600; margin-top: 0.5rem; display: none;"></div>
            </div>

            <div class="form-group">
              <label class="form-label">Project Details & Ideas *</label>
              <textarea name="Notes / Specific Requirements" rows="4" class="form-textarea" required placeholder="Tell us a little bit about your business and what you're hoping to achieve..."></textarea>
            </div>
 
            <input type="hidden" id="opt-retainer" name="opt-retainer" value="No">
            <div style="position: absolute; left: -9999px;">
              <input type="text" name="honey" tabindex="-1" autocomplete="off">
            </div>
 
            <div class="quote-box">
              <div class="quote-title">Estimated Investment</div>
              <div class="quote-flex"><span>Custom Website Build + CRM Dashboard</span> <span>$650.00</span></div>
              <div class="quote-flex" id="discountRow" style="display: none; color: #28a745; font-weight: 600;"><span>Referral Discount</span> <span>-$10.00</span></div>
              <div class="quote-flex"><span>Ongoing Monthly Fees</span> <span>$0.00</span></div>
              <div class="quote-total"><span>Total Estimate:</span> <span id="q-total">$650.00 NZD</span></div>
              <div style="text-align: right; font-size: 0.85rem; color: var(--signal-med); margin-top: 0.5rem;">Or 3 manageable payments of <span id="q-split">$216.67</span></div>
            </div>
 
            <button type="submit" class="btn-primary" id="submitBtn" style="width: 100%;">Send My Details</button>
            <div id="formStatus" class="form-status"></div>
          </form>
        </div>
      </section>
 
    </main>
    <?php include 'footer.php'; ?>
  </div>
 
  <script>
    const form = document.getElementById('serviceForm');
    const status = document.getElementById('formStatus');
    const btn = document.getElementById('submitBtn');
 
    // Promo Elements
    const refCodeInput = document.getElementById('refCodeInput');
    const applyCodeBtn = document.getElementById('applyCodeBtn');
    const promoStatus = document.getElementById('promoStatus');
    const discountRow = document.getElementById('discountRow');
    const qTotal = document.getElementById('q-total');
    const qSplit = document.getElementById('q-split');

    let isDiscountApplied = false;
    let validatedPartnerName = '';

    // LIVE CRM BACKEND URL
    const SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbwUMI-fBoFdCfuu39Q_20MbX0e6m4oOmccTQyu_Tj60B9qagxNVpIdRhYth35_RgBZ0Ew/exec';
 
    // SECURE PROMO VALIDATION
    applyCodeBtn.addEventListener('click', function() {
        const code = refCodeInput.value.trim();
        if (code.length === 0) return;

        applyCodeBtn.textContent = 'Checking...';
        applyCodeBtn.disabled = true;
        promoStatus.style.display = 'block';
        promoStatus.style.color = 'var(--signal-med)';
        promoStatus.textContent = 'Verifying code...';

        // Ask the Google Script if this code exists
        fetch(`${SCRIPT_URL}?action=validateCode&code=${encodeURIComponent(code)}`)
        .then(response => response.json())
        .then(data => {
            applyCodeBtn.textContent = 'Apply';
            applyCodeBtn.disabled = false;

            if (data.valid) {
                // Code is valid!
                isDiscountApplied = true;
                validatedPartnerName = data.partnerName;
                
                promoStatus.style.color = '#28a745';
                promoStatus.textContent = '✓ Code applied! $10 discount activated.';
                refCodeInput.readOnly = true; // Lock the input so they don't change it
                
                // Update Quote Box
                discountRow.style.display = 'flex';
                qTotal.innerText = '$640.00 NZD';
                qSplit.innerText = '$213.33';
            } else {
                // Code is invalid!
                isDiscountApplied = false;
                validatedPartnerName = '';
                
                promoStatus.style.color = 'var(--warning)';
                promoStatus.textContent = '✖ Invalid referral code.';
                
                // Reset Quote Box
                discountRow.style.display = 'none';
                qTotal.innerText = '$650.00 NZD';
                qSplit.innerText = '$216.67';
            }
        })
        .catch(error => {
            applyCodeBtn.textContent = 'Apply';
            applyCodeBtn.disabled = false;
            promoStatus.style.color = 'var(--warning)';
            promoStatus.textContent = '✖ Network error. Please try again.';
        });
    });

    form.addEventListener('submit', function(e) {
      e.preventDefault();
 
      btn.disabled = true;
      btn.textContent = 'Sending Message...';
      status.textContent = '';
      status.className = 'form-status';
 
      const formData = new FormData(form);
      let notes = formData.get('Notes / Specific Requirements') || 'No additional notes provided.';
      let retainerStatus = document.getElementById('opt-retainer').value;
      let total = isDiscountApplied ? 640 : 650;
 
      // Override whatever is in the box with the strictly validated name
      formData.set('refPartner', validatedPartnerName);
      let leadSource = validatedPartnerName ? 'Partner Referral' : 'Website Organic';
      formData.set('Referral Source', leadSource);

      // COMPILING THE ADMIN BRIEF INTO THE NOTES FIELD FOR THE CRM
      let configNotes = `\n\n---------------------------------------------------------\n`;
      configNotes += `PROJECT INQUIRY RECEIVED\n`;
      configNotes += `---------------------------------------------------------\n`;
      configNotes += `COST BREAKDOWN (Base Estimate):\n`;
      configNotes += `- Base Infrastructure & CRM: $650.00\n`;
 
      if (isDiscountApplied) {        
        configNotes += `- Referral Discount Applied: -$10.00 (Partner: ${validatedPartnerName})\n`;      
      }

      if(retainerStatus === 'Yes') {
        configNotes += `- Ongoing Support: OPTED IN ($40/month)\n`;
      } else {
        configNotes += `- Ongoing Support: DECLINED\n`;
      }
 
      configNotes += `\nTOTAL ESTIMATED INVESTMENT: $${total}.00\n`;
      let splitValue = (total / 3).toFixed(2);
      configNotes += `MILESTONE PAYMENTS (x3): $${splitValue} (Due at Start, Launch, & +30 Days)\n`;
      configNotes += `---------------------------------------------------------\n`;
 
      const finalNotes = `CLIENT PROJECT NOTES:\n${notes}${configNotes}`;
 
      // Overwrite the field so the CRM catches the entire brief in the 'Notes' column
      formData.set('Notes / Specific Requirements', finalNotes);
 
      // Clean up fields to prevent backend schema confusion
      formData.delete('opt-retainer');
 
      fetch(SCRIPT_URL, {
        method: 'POST',
        mode: 'no-cors',
        body: formData
      })
      .then(() => {
        status.textContent = 'Thank you! We have received your message and will be in touch soon.';
        status.className = 'form-status status-success';
        form.reset();

        // Reset dynamic pricing UI back to default
        isDiscountApplied = false;
        validatedPartnerName = '';
        refCodeInput.readOnly = false;
        promoStatus.style.display = 'none';
        discountRow.style.display = 'none';
        qTotal.innerText = '$650.00 NZD';
        qSplit.innerText = '$216.67';

        btn.textContent = 'Message Sent';
      })
      .catch(error => {
        console.error('Error:', error);
        status.textContent = 'Something went wrong. Please try again.';
        status.className = 'form-status status-error';
        btn.disabled = false;
        btn.textContent = 'Send My Details';
      });
    });
  </script>
</body>
</html>