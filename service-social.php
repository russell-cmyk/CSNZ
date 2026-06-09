<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Social Media Audit | Creative Startup NZ</title>
  <meta name="description" content="Practical, honest social media feedback for New Zealand businesses. Understand why your followers aren't buying and get a clear plan to connect with them.">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.creativestartupnz.com/service-social.php">
  <meta property="og:title" content="Social Media Audit | Creative Startup NZ">
  <meta property="og:description" content="Practical, honest social media feedback for New Zealand businesses. Understand why your followers aren't buying and get a clear plan to connect with them.">
  <meta property="og:image" content="https://www.creativestartupnz.com/images/social-audit.png">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.creativestartupnz.com/service-social.php">
  <meta property="twitter:title" content="Social Media Audit | Creative Startup NZ">
  <meta property="twitter:description" content="Practical, honest social media feedback for New Zealand businesses. Understand why your followers aren't buying and get a clear plan to connect with them.">
  <meta property="twitter:image" content="https://www.creativestartupnz.com/images/social-audit.png">

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
          <img src="images/social-audit.png" alt="Social Media Audit Service" class="hero-image">
        </div>
        <div class="hero-content">
          <span class="hero-badge">Stop Guessing, Start Connecting</span>
          <h1 class="hero-title">Social Media Audit</h1>
          
          <div class="hero-price-block">
            <span class="hero-price">$49.99</span><span class="hero-price-sub">NZD</span>
          </div>
          
          <p class="hero-desc">
            Posting constantly without seeing any return is exhausting. We review your Facebook and LinkedIn presence to help you understand exactly why your followers aren't reaching out, and give you a gentle, practical plan to start turning them into real customers.
          </p>

          <a href="#contact" class="btn-primary" style="width: 100%;">Start Your Audit</a>
        </div>
      </section>

      <section class="empathy-block">
        <h2 class="section-title">Take the Guesswork Out of Posting</h2>
        <p>
          You have a business to run. Treating social media like a dreaded chore that you squeeze in at the end of the day isn't sustainable, and posting generic updates rarely leads to sales.
        </p>
        <p>
          <strong>We look past vanity metrics and focus on genuine connection.</strong>
        </p>
        <p>
          Does your page clearly explain how you can help people? Are your links easy to find? Is your content actually solving your customers' problems, or just taking up space? We provide honest, constructive feedback so you can stop guessing and start building trust.
        </p>
      </section>

      <section class="spec-section">
        <h2 class="section-title" style="text-align: center;">What We Look At</h2>
        <p style="text-align: center; max-width: 600px; margin: 0 auto; color: var(--signal-med);">We review your current online presence to see what's working well and what might be confusing your potential customers.</p>

        <div class="spec-grid">
          <div class="spec-card">
            <div class="spec-icon">👀</div>
            <strong>The First Impression</strong>
            <span>We check your bio, cover photos, and links to make sure visitors instantly understand what you do and exactly how to reach you.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">📊</div>
            <strong>Content Review</strong>
            <span>We identify which of your past posts have actually resonated with your audience, and which ones might be wasting your valuable time to create.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">🎨</div>
            <strong>Visual Consistency</strong>
            <span>We make sure your brand looks sharp and trustworthy across the board, so you present a professional, united front to new customers.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">💬</div>
            <strong>Engagement Strategy</strong>
            <span>Practical, real-world advice on how to gently encourage casual scrollers and "Likes" to take the next step and send you a genuine inquiry.</span>
          </div>
          
          <div class="spec-card">
            <div class="spec-icon">📝</div>
            <strong>The Action Plan</strong>
            <span>You'll receive a clear, prioritized checklist of straightforward adjustments you can make right away to start seeing better results from your efforts.</span>
          </div>
        </div>
      </section>

      <section id="contact" class="contact-section">
        <h2 class="section-title" style="text-align: center;">Request Your Audit</h2>
        <p style="text-align: center; margin-bottom: 3rem; color: var(--signal-med);">Drop your links below and let's figure out how to make your social media work harder for you.</p>

        <div class="form-container">
          <form id="serviceForm">
            <input type="hidden" name="Service Required" value="Social Audit">

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
              <label class="form-label">Social Media Links & Notes *</label>
              <textarea name="Notes / Specific Requirements" rows="4" class="form-textarea" required placeholder="Paste the links to your Facebook or LinkedIn here, and tell us a bit about what's frustrating you the most right now..."></textarea>
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
        status.textContent = 'Thank you! We have received your links and will be in touch shortly.';
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