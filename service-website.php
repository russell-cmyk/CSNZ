<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5-Page Google Site | Creative Startup NZ</title>
  <meta name="description" content="A practical 5-Page Google Site for your New Zealand business. Zero hosting fees. Zero maintenance. The perfect, affordable website to get you started safely.">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.creativestartupnz.com/service-website.php">
  <meta property="og:title" content="5-Page Google Site | Creative Startup NZ">
  <meta property="og:description" content="A practical 5-Page Google Site for your New Zealand business. Zero hosting fees. Zero maintenance. The perfect, affordable website to get you started safely.">
  <meta property="og:image" content="https://www.creativestartupnz.com/images/service-website.jpg">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.creativestartupnz.com/service-website.php">
  <meta property="twitter:title" content="5-Page Google Site | Creative Startup NZ">
  <meta property="twitter:description" content="A practical 5-Page Google Site for your New Zealand business. Zero hosting fees. Zero maintenance. The perfect, affordable website to get you started safely.">
  <meta property="twitter:image" content="https://www.creativestartupnz.com/images/service-website.jpg">

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

  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '3454542104667432');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=3454542104667432&ev=PageView&noscript=1" /></noscript>
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
      display: inline-block;
      margin-left: 5px;
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

    .promo-text {
      margin-top: 1.5rem;
      font-size: 0.9rem;
      color: var(--signal-low);
      font-family: var(--font-data);
      font-weight: 600;
    }

    /* EMPATHY TEXT BLOCK */
    .empathy-block {
      padding: 6rem 2rem;
      text-align: center;
      background-color: var(--void);
      border-bottom: 1px solid var(--structure);
    }

    .section-title {
      font-family: var(--font-cmd);
      font-weight: 800;
      font-size: 2.2rem;
      color: var(--signal-high);
      margin-bottom: 1.5rem;
    }

    .empathy-block p {
      max-width: 700px;
      margin: 0 auto 1.5rem auto;
      color: var(--signal-med);
      font-size: 1.1rem;
    }

    /* WHAT WE DELIVER (GRID) */
    .spec-section {
      padding: 6rem 2rem;
      background-color: var(--surface);
      border-bottom: 1px solid var(--structure);
    }

    .spec-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      max-width: 1000px;
      margin: 4rem auto 0 auto;
    }

    .spec-card {
      background-color: var(--void);
      padding: 2.5rem;
      border-radius: 12px;
      border: 1px solid var(--structure);
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .spec-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.05);
      border-color: var(--phoenix);
    }

    .spec-icon {
      font-size: 2rem;
      color: var(--phoenix);
      margin-bottom: 1rem;
    }

    .spec-card strong {
      color: var(--signal-high);
      font-size: 1.2rem;
      margin-bottom: 0.8rem;
      font-family: var(--font-cmd);
    }

    .spec-card span {
      color: var(--signal-med);
      font-size: 0.95rem;
      line-height: 1.5;
    }

    /* CONTACT FORM */
    .contact-section {
      padding: 6rem 2rem;
      background-color: var(--void);
    }

    .form-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: var(--surface);
      padding: 3rem;
      border-radius: 12px;
      border: 1px solid var(--structure);
      box-shadow: 0 10px 30px rgba(0,0,0,0.03);
    }

    .form-group { margin-bottom: 1.5rem; }
    
    .form-label {
      display: block;
      font-family: var(--font-cmd);
      font-weight: 700;
      font-size: 0.85rem;
      color: var(--signal-high);
      margin-bottom: 0.5rem;
    }

    .form-input, .form-textarea {
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

    .form-input:focus, .form-textarea:focus {
      outline: none;
      border-color: var(--phoenix);
      box-shadow: 0 0 0 3px rgba(255, 106, 0, 0.1);
    }

    .form-status { margin-top: 1.5rem; font-weight: 600; text-align: center; border-radius: 6px; }
    .status-success { color: #155724; background-color: #d4edda; padding: 1rem; border: 1px solid #c3e6cb; }
    .status-error { color: #721c24; background-color: #f8d7da; padding: 1rem; border: 1px solid #f5c6cb; }

    @media (max-width: 900px) {
      .service-hero { grid-template-columns: 1fr; }
      .hero-image-wrapper { min-height: 300px; }
      .form-container { padding: 1.5rem; }
    }
  </style>
</head>
<body>

  <div class="mainframe">
    <?php include 'header.php'; ?>

    <main>
      <section class="service-hero">
        <div class="hero-image-wrapper">
          <img src="images/service-website.jpg" alt="5 Page Google Site Website" class="hero-image">
        </div>
        <div class="hero-content">
          <span class="hero-badge">A Solid Foundation</span>
          <h1 class="hero-title">5-Page Google Site</h1>
          
          <div class="hero-price-block">
            <span class="hero-price">$215.99</span><span class="hero-price-sub">NZD</span>
          </div>
          
          <p class="hero-desc">
            You don't need to pay expensive monthly hosting fees for a website you rarely update. We build clean, high-performing Google Sites that are incredibly reliable, look great on mobile devices, and cost absolutely nothing to host each month.
          </p>

          <a href="#contact" class="btn-primary" style="width: 100%;">Start Your Project</a>
          
          <p class="promo-text">* One-time payment. No monthly subscriptions.</p>
        </div>
      </section>

      <section class="empathy-block">
        <h2 class="section-title">Why Use a Google Site?</h2>
        <p>
          Many digital agencies will try to sell you a complicated website platform. Why? Because it often allows them to charge you a monthly "hosting and maintenance" fee just to keep it running smoothly.
        </p>
        <p>
          <strong>We believe in building a simpler, stronger foundation for new businesses.</strong>
        </p>
        <p>
          A Google Site is practically unbreakable. It loads instantly on Google's servers, it costs exactly $0 a month to host, and you can easily edit the text and images yourself without needing a computer science degree. It's the perfect, stress-free starter website.
        </p>
      </section>

      <section class="spec-section">
        <h2 class="section-title" style="text-align: center;">What's Included</h2>
        <p style="text-align: center; max-width: 600px; margin: 0 auto; color: var(--signal-med);">Everything you need to establish a professional online presence quickly, without the ongoing costs.</p>

        <div class="spec-grid">
          <div class="spec-card">
            <div class="spec-icon">📄</div>
            <strong>5 Core Pages</strong>
            <span>We'll design and set up your Home, About, Services, Contact, and a simple Blog or FAQ page.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">💰</div>
            <strong>Zero Hosting Fees</strong>
            <span>Your site is hosted securely on Google's enterprise servers. The hosting is completely free forever.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">📱</div>
            <strong>Mobile Optimized</strong>
            <span>The design automatically adapts so that it looks perfect and is easy to read on all phones and tablets.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">🔗</div>
            <strong>Custom Domain Setup</strong>
            <span>We handle the technical headache of connecting your custom .co.nz or .com domain directly to the new site.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">🔒</div>
            <strong>Built-In Security</strong>
            <span>HTTPS encryption is included standard by Google, so your visitors' browsers won't throw up scary security warnings.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">📈</div>
            <strong>Analytics Ready</strong>
            <span>We'll pre-integrate Google Analytics so you can start tracking who is visiting your site from day one.</span>
          </div>
        </div>
      </section>

      <section id="contact" class="contact-section">
        <h2 class="section-title" style="text-align: center;">Tell Us About Your Project</h2>
        <p style="text-align: center; margin-bottom: 3rem; color: var(--signal-med);">Typical turnaround time is 5-7 business days. Fill out your details below and let's get the ball rolling.</p>

        <div class="form-container">
          <form id="serviceForm">
            <input type="hidden" name="Service Required" value="Google Site">

            <div class="form-group">
              <label class="form-label">Your Full Name *</label>
              <input type="text" name="Name" class="form-input" required placeholder="e.g. Jane Doe">
            </div>

            <div class="form-group">
              <label class="form-label">Email Address *</label>
              <input type="email" name="Email Address" class="form-input" required placeholder="hello@company.co.nz">
            </div>

            <div class="form-group">
              <label class="form-label">Mobile Number *</label>
              <input type="tel" name="Mobile" class="form-input" required placeholder="021 123 4567">
            </div>

            <div class="form-group">
              <label class="form-label">Project Details & Ideas *</label>
              <textarea name="Notes / Specific Requirements" rows="4" class="form-textarea" required placeholder="Tell us a little bit about your business, the style you're going for, or any colours you like..."></textarea>
            </div>

            <div style="position: absolute; left: -9999px;">
              <input type="text" name="honey" tabindex="-1" autocomplete="off">
            </div>

            <button type="submit" class="btn-primary" id="submitBtn" style="width: 100%;">Send Project Inquiry</button>
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

    // LIVE CRM BACKEND URL
    const SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbwUMI-fBoFdCfuu39Q_20MbX0e6m4oOmccTQyu_Tj60B9qagxNVpIdRhYth35_RgBZ0Ew/exec';

    form.addEventListener('submit', function(e) {
      e.preventDefault();

      btn.disabled = true;
      btn.textContent = 'Sending Request...';
      status.textContent = '';
      status.className = 'form-status';

      const formData = new FormData(form);

      fetch(SCRIPT_URL, {
        method: 'POST',
        mode: 'no-cors',
        body: formData
      })
      .then(() => {
        status.textContent = 'Thank you! We have received your inquiry and will be in touch shortly.';
        status.className = 'form-status status-success';
        form.reset();
        btn.textContent = 'Message Sent';
      })
      .catch(error => {
        console.error('Error:', error);
        status.textContent = 'Something went wrong. Please try again.';
        status.className = 'form-status status-error';
        btn.disabled = false;
        btn.textContent = 'Send Project Inquiry';
      });
    });
  </script>

  
  </script>
</body>
</html>