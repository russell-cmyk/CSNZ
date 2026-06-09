<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Startup Consultation | Creative Startup NZ</title>
  <meta name="description" content="Practical, honest advice for New Zealand founders. We review your business idea and help you map out the next steps. Your first hour is free.">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.creativestartupnz.com/service-consult.php">
  <meta property="og:title" content="Startup Consultation | Creative Startup NZ">
  <meta property="og:description" content="Practical, honest advice for New Zealand founders. We review your business idea and help you map out the next steps. Your first hour is free.">
  <meta property="og:image" content="https://www.creativestartupnz.com/images/startup-consult.png">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.creativestartupnz.com/service-consult.php">
  <meta property="twitter:title" content="Startup Consultation | Creative Startup NZ">
  <meta property="twitter:description" content="Practical, honest advice for New Zealand founders. We review your business idea and help you map out the next steps. Your first hour is free.">
  <meta property="twitter:image" content="https://www.creativestartupnz.com/images/startup-consult.png">

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

    .promo-box {
      margin-top: 1.5rem;
      font-size: 0.9rem;
      color: var(--phoenix);
      font-family: var(--font-data);
      font-weight: 700;
      border: 1px dashed var(--structure);
      padding: 12px 15px;
      display: inline-block;
      border-radius: 6px;
      background-color: var(--void);
      text-align: center;
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

    /* WHAT WE DO (GRID) */
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
          <img src="images/startup-consult.png" alt="Startup Consultation Session" class="hero-image">
        </div>
        <div class="hero-content">
          <span class="hero-badge">Honest Guidance</span>
          <h1 class="hero-title">Startup Consultation</h1>
          
          <div class="hero-price-block">
            <span class="hero-price">$75</span><span class="hero-price-sub">/ HOUR</span>
          </div>
          
          <p class="hero-desc">
            Taking a new idea to market can feel overwhelming, and trying to build a business completely in isolation is tough. We offer a supportive, objective review of your business model, helping you find clarity and map out exactly what to do next—before you invest your life savings.
          </p>

          <a href="#contact" class="btn-primary" style="width: 100%;">Book Your Free Hour</a>
          
          <div class="promo-box">
            Your first 60-minute chat is completely free. Zero obligations.
          </div>
        </div>
      </section>

      <section class="empathy-block">
        <h2 class="section-title">An Objective Sounding Board</h2>
        <p>
          It's natural to lean on friends and family when you're starting out. They want you to succeed, but because they care about you, they'll often tell you exactly what you want to hear.
        </p>
        <p>
          <strong>We offer something different: supportive, honest feedback.</strong>
        </p>
        <p>
          We act as an objective sounding board for your ideas. We gently challenge your assumptions, help you identify potential roadblocks, and work with you to ensure there is a real market for your idea before you spend months of your time building it.
        </p>
      </section>

      <section class="spec-section">
        <h2 class="section-title" style="text-align: center;">How We Can Help</h2>
        <p style="text-align: center; max-width: 600px; margin: 0 auto; color: var(--signal-med);">Whether you've just had a brilliant shower thought or you're feeling stuck, our sessions are practical and entirely focused on giving you clear, actionable steps.</p>

        <div class="spec-grid">
          <div class="spec-card">
            <div class="spec-icon">🔍</div>
            <strong>The Gentle Reality Check</strong>
            <span>We'll review your business idea together to find any hidden gaps in the logic and figure out a clear, realistic path to generating revenue.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">💡</div>
            <strong>Your First Product</strong>
            <span>It's easy to overbuild. We'll help you define the absolute simplest version of your product or service that you can launch and test right now.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">🤝</div>
            <strong>Finding Customers</strong>
            <span>We'll map out a practical strategy to help you find your first 10 paying customers without immediately throwing money into expensive Facebook or Google ads.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">💻</div>
            <strong>Tech & Tool Review</strong>
            <span>We'll look at the software you're using to run the business to ensure you aren't paying for complex, bloated subscriptions you don't actually need yet.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">📅</div>
            <strong>Accountability</strong>
            <span>If you need it, we offer optional weekly or monthly check-ins to ensure you feel supported while executing your roadmap and avoiding distractions.</span>
          </div>
        </div>
      </section>

      <section id="contact" class="contact-section">
        <h2 class="section-title" style="text-align: center;">Let's Have A Chat</h2>
        <p style="text-align: center; margin-bottom: 3rem; color: var(--signal-med);">Take the first step towards clarity. Tell us a bit about what you're working on below.</p>

        <div class="form-container">
          <form id="serviceForm">
            <input type="hidden" name="Service Required" value="Startup Consult">

            <div class="form-group">
              <label class="form-label">Your Full Name *</label>
              <input type="text" name="Name" class="form-input" required placeholder="e.g. Jane Doe">
            </div>

            <div class="form-group">
              <label class="form-label">Email Address *</label>
              <input type="email" name="Email Address" class="form-input" required placeholder="hello@company.co.nz">
            </div>

            <div class="form-group">
              <label class="form-label">Phone Number *</label>
              <input type="tel" name="Mobile" class="form-input" required placeholder="021 123 4567">
            </div>

            <div class="form-group">
              <label class="form-label">What are you working on? *</label>
              <textarea name="Notes / Specific Requirements" rows="4" class="form-textarea" required placeholder="Tell us a little bit about your business idea, and what you feel stuck on right now..."></textarea>
            </div>

            <div style="position: absolute; left: -9999px;">
              <input type="text" name="honey" tabindex="-1" autocomplete="off">
            </div>

            <button type="submit" class="btn-primary" id="submitBtn" style="width: 100%;">Request Your Free Consultation</button>
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
        status.textContent = 'Thank you! We have received your request and will be in touch shortly to schedule a time.';
        status.className = 'form-status status-success';
        form.reset();
        btn.textContent = 'Message Sent';
      })
      .catch(error => {
        console.error('Error:', error);
        status.textContent = 'Something went wrong. Please try again.';
        status.className = 'form-status status-error';
        btn.disabled = false;
        btn.textContent = 'Request Your Free Consultation';
      });
    });
  </script>

  
  </script>
</body>
</html>