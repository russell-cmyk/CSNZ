<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Complete Launch Package | Creative Startup NZ</title>
  <meta name="description" content="Stop losing your weekends trying to build a business online. We handle your custom logo, a fast custom HTML site with a CRM, a strategy consult, and a social planner in one supportive package.">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.creativestartupnz.com/service-launch.php">
  <meta property="og:title" content="The Complete Launch Package | Creative Startup NZ">
  <meta property="og:description" content="Stop losing your weekends trying to build a business online. We handle your custom logo, a fast custom HTML site with a CRM, a strategy consult, and a social planner in one supportive package.">
  <meta property="og:image" content="https://www.creativestartupnz.com/images/full-launch.png">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.creativestartupnz.com/service-launch.php">
  <meta property="twitter:title" content="The Complete Launch Package | Creative Startup NZ">
  <meta property="twitter:description" content="Stop losing your weekends trying to build a business online. We handle your custom logo, a fast custom HTML site with a CRM, a strategy consult, and a social planner in one supportive package.">
  <meta property="twitter:image" content="https://www.creativestartupnz.com/images/full-launch.png">

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
      max-width: 800px;
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

    .quote-box {
      background-color: var(--void);
      border: 1px solid var(--structure);
      padding: 2rem;
      border-radius: 8px;
      margin: 2rem 0;
    }

    .quote-title { font-family: var(--font-cmd); font-weight: 700; font-size: 1rem; margin-bottom: 1rem; text-transform: uppercase; border-bottom: 1px solid var(--structure); padding-bottom: 0.5rem; color: var(--signal-high); }
    .quote-flex { display: flex; justify-content: space-between; margin-bottom: 0.5rem; font-size: 0.95rem; }
    .quote-flex.discount { color: #28a745; font-weight: 600; }
    .quote-total { display: flex; justify-content: space-between; font-family: var(--font-cmd); font-weight: 800; font-size: 1.4rem; margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--structure); color: var(--signal-high); }

    .form-status { margin-top: 1.5rem; font-weight: 600; text-align: center; border-radius: 6px; }
    .status-success { color: #155724; background-color: #d4edda; padding: 1rem; border: 1px solid #c3e6cb; }
    .status-error { color: #721c24; background-color: #f8d7da; padding: 1rem; border: 1px solid #f5c6cb; }

    @media (max-width: 900px) {
      .service-hero { grid-template-columns: 1fr; }
      .hero-image-wrapper { min-height: 300px; }
      .form-container { padding: 1.5rem; }
      .form-row { grid-template-columns: 1fr; gap: 0; }
    }
  </style>
</head>
<body>

  <div class="mainframe">
    <?php include 'header.php'; ?>

    <main>
      <section class="service-hero">
        <div class="hero-image-wrapper">
          <img src="images/full-launch.png" alt="Complete Startup Launch Package" class="hero-image">
        </div>
        <div class="hero-content">
          <span class="hero-badge">The Supportive 'Done For You' Solution</span>
          <h1 class="hero-title">The Complete Launch Package</h1>

          <div class="hero-price-block">
            <span class="hero-price">$736.24</span><span class="hero-price-sub" style="display:inline-block;">NZD</span>
            <span class="hero-price-sub" style="display:block; margin-top:0.5rem;">Or 3 gentle payments of $245.41. Zero monthly software fees.</span>
          </div>

          <p class="hero-desc">
            Starting a business in New Zealand takes real guts. You're likely juggling a day job, family life, and a hundred different ideas at once. You shouldn't have to lose your weekends fighting with website builders or stressing over logo formats.
            <br><br>
            We handle the heavy technical lifting. You get a lightning-fast custom HTML website with a built-in CRM, a professional vector logo, a 1-hour strategy session, and a 6-month social media planner—all bundled with a 5% discount to help your hard-earned cash go further.
          </p>

          <a href="#contact" class="btn-primary" style="width: 100%;">Start Your Launch Journey</a>
        </div>
      </section>

      <section class="empathy-block">
        <h2 class="section-title">Let's Get Your Idea Out of Your Head</h2>
        <p>
          It's incredibly common for founders to get stuck in the planning phase. Every week you spend worrying about which website plugin to use or whether your logo colors clash, is a week you aren't actually helping your customers or bringing revenue through the door.
        </p>
        <p>
          <strong>We know how intimidating the tech side of business can be.</strong>
        </p>
        <p>
          We also know how scary it is to part with your money when you're just starting out. That's why we act as your sounding board and technical partner. We compress months of stressful guesswork into a single package, building you a reliable digital foundation so you can step out of the frustration and focus on what actually matters: running your business.
        </p>
      </section>

      <section class="spec-section">
        <h2 class="section-title" style="text-align: center;">What's Included</h2>
        <p style="text-align: center; max-width: 600px; margin: 0 auto; color: var(--signal-med);">Everything you need to launch a legitimate, professional NZ business without the headache.</p>

        <div class="spec-grid">
          <div class="spec-card">
            <div class="spec-icon">⚡</div>
            <strong>5-Page Custom HTML Website + CRM</strong>
            <span>A lightning-fast, custom-coded site that looks incredible on mobile. It includes a built-in, private customer dashboard (CRM) to capture leads automatically. Zero ongoing monthly subscription fees.</span>
          </div>

          <div class="spec-card">
            <div class="spec-icon">🎨</div>
            <strong>Custom Logo Design</strong>
            <span>A professional vector suite (EPS/SVG/PNG) built for the real world. Perfect for websites, business cards, or vehicle wraps. We design it, but you own the rights completely.</span>
          </div>

          <div class="spec-card">
            <div class="spec-icon">🧭</div>
            <strong>1-Hour Startup Consultation</strong>
            <span>A supportive, objective sounding board. We'll review your business idea together, gently challenge assumptions, and figure out a practical roadmap to find your first paying customers.</span>
          </div>

          <div class="spec-card">
            <div class="spec-icon">📅</div>
            <strong>FREE: 6-Month Social Media Planner</strong>
            <span>Stop panicking about what to post. You'll get a 6-month subscription to our Weekly Social Media Planner to organize your Facebook and LinkedIn strategy without algorithm penalties.</span>
          </div>

          <div class="spec-card">
            <div class="spec-icon">💳</div>
            <strong>Payment Integration</strong>
            <span>We set up secure Stripe checkout links so you can start taking credit card payments online safely from day one.</span>
          </div>

          <div class="spec-card">
            <div class="spec-icon">🔗</div>
            <strong>Domain & Security Setup</strong>
            <span>We handle all the frustrating technical headaches of buying, configuring, and connecting your custom web address securely.</span>
          </div>
        </div>
      </section>

      <section id="contact" class="contact-section">
        <h2 class="section-title" style="text-align: center;">Tell Us About Your Idea</h2>
        <p style="text-align: center; margin-bottom: 3rem; color: var(--signal-med);">Take the first step towards clarity. There is absolutely no pressure or commitment required today.</p>

        <div class="form-container">
          <form id="serviceForm">
            <input type="hidden" name="Service Required" value="The Complete Launch Package (Updated)">

            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Your Full Name *</label>
                <input type="text" name="Name" class="form-input" required placeholder="e.g. Jane Doe">
              </div>
              <div class="form-group">
                <label class="form-label">Phone Number *</label>
                <input type="tel" name="Mobile" class="form-input" required placeholder="021 123 4567">
              </div>
            </div>

            <div class="form-group">
              <label class="form-label">Email Address *</label>
              <input type="email" name="Email Address" class="form-input" required placeholder="hello@company.co.nz">
            </div>

            <div class="form-group">
              <label class="form-label">Project Details & Ideas *</label>
              <textarea name="Notes / Specific Requirements" rows="4" class="form-textarea" required placeholder="Briefly describe your new business idea, what you'll be selling, and where you feel stuck right now..."></textarea>
            </div>

            <div style="position: absolute; left: -9999px;">
              <input type="text" name="honey" tabindex="-1" autocomplete="off">
            </div>

            <div class="quote-box">
              <div class="quote-title">Transparent Pricing Estimate</div>
              <div class="quote-flex"><span>Custom HTML Website + CRM</span> <span>$650.00</span></div>
              <div class="quote-flex"><span>Custom Logo Design</span> <span>$49.99</span></div>
              <div class="quote-flex"><span>1-Hour Startup Consultation</span> <span>$75.00</span></div>
              <div class="quote-flex"><span>6-Month Social Media Planner</span> <span><strike>$71.95</strike> Included Free</span></div>
              <div class="quote-flex discount"><span>Founder's Bundle Discount (5%)</span> <span>-$38.75</span></div>
              <div class="quote-flex"><span>Ongoing Monthly Fees</span> <span>$0.00</span></div>
              
              <div class="quote-total"><span>Total Estimate:</span> <span id="q-total">$736.24 NZD</span></div>
              <div style="text-align: right; font-size: 0.85rem; color: var(--signal-med); margin-top: 0.5rem;">Or 3 manageable payments of $245.41 to help with cash flow.</div>
            </div>

            <button type="submit" class="btn-primary" id="submitBtn" style="width: 100%;">Send My Project Inquiry</button>
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
      let notes = formData.get('Notes / Specific Requirements') || 'No additional notes provided.';

      // COMPILING THE ADMIN BRIEF INTO THE NOTES FIELD FOR THE CRM
      let configNotes = `\n\n---------------------------------------------------------\n`;
      configNotes += `THE COMPLETE LAUNCH PACKAGE INQUIRY\n`;
      configNotes += `---------------------------------------------------------\n`;
      configNotes += `COST BREAKDOWN:\n`;
      configNotes += `- 5-Page HTML Site + CRM: $650.00\n`;
      configNotes += `- Logo Design: $49.99\n`;
      configNotes += `- 1-Hour Consult: $75.00\n`;
      configNotes += `- Social Media Planner (6 Months): FREE\n`;
      configNotes += `- 5% Bundle Discount Applied: -$38.75\n`;
      configNotes += `\nTOTAL ESTIMATED INVESTMENT: $736.24\n`;
      configNotes += `MILESTONE PAYMENTS (x3): $245.41\n`;
      configNotes += `---------------------------------------------------------\n`;

      const finalNotes = `CLIENT PROJECT NOTES:\n${notes}${configNotes}`;

      // Overwrite the field so the CRM catches the entire brief
      formData.set('Notes / Specific Requirements', finalNotes);

      fetch(SCRIPT_URL, {
        method: 'POST',
        mode: 'no-cors',
        body: formData
      })
      .then(() => {
        status.textContent = 'Thank you! We have received your inquiry and will be in touch shortly to help get your idea off the ground.';
        status.className = 'form-status status-success';
        form.reset();
        btn.textContent = 'Message Sent';
      })
      .catch(error => {
        console.error('Error:', error);
        status.textContent = 'Something went wrong. Please try again.';
        status.className = 'form-status status-error';
        btn.disabled = false;
        btn.textContent = 'Send My Project Inquiry';
      });
    });
  </script>

  
  </script>
</body>
</html>