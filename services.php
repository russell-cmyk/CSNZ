<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services | Creative Startup NZ</title>
  <meta name="description" content="Supportive, practical digital services for New Zealand founders. Websites, Logo Design, SEO, and Business Strategy designed to take the stress out of launching.">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.creativestartupnz.com/services.php">
  <meta property="og:title" content="Our Services | Creative Startup NZ">
  <meta property="og:description" content="Supportive, practical digital services for New Zealand founders. Websites, Logo Design, SEO, and Business Strategy designed to take the stress out of launching.">
  <meta property="og:image" content="https://www.creativestartupnz.com/images/select-your-service.jpg">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.creativestartupnz.com/services.php">
  <meta property="twitter:title" content="Our Services | Creative Startup NZ">
  <meta property="twitter:description" content="Supportive, practical digital services for New Zealand founders. Websites, Logo Design, SEO, and Business Strategy designed to take the stress out of launching.">
  <meta property="twitter:image" content="https://www.creativestartupnz.com/images/select-your-service.jpg">

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

    /* HEADER / HERO AREA */
    .services-hero {
      padding: 6rem 2rem 4rem;
      background-color: var(--surface);
      text-align: center;
      border-bottom: 1px solid var(--structure);
    }

    .hero-title {
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      margin-bottom: 1rem;
      color: var(--signal-high);
    }

    .hero-subtitle {
      font-size: 1.15rem;
      color: var(--signal-med);
      max-width: 700px;
      margin: 0 auto;
    }

    /* SECTION CONTAINERS */
    .service-category {
      padding: 5rem 2rem;
      border-bottom: 1px solid var(--structure);
    }

    .category-header {
      text-align: center;
      margin-bottom: 3.5rem;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .category-title {
      font-size: 2.2rem;
      margin-bottom: 0.5rem;
    }

    .category-desc {
      color: var(--signal-med);
      font-size: 1.05rem;
    }

    /* GRIDS */
    .grid-primary {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 2.5rem;
      max-width: 1100px;
      margin: 0 auto;
    }

    .grid-secondary {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 2rem;
      max-width: 1100px;
      margin: 0 auto;
    }

    /* CARDS */
    .card {
      background-color: var(--surface);
      border-radius: 12px;
      overflow: hidden;
      border: 1px solid var(--structure);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.08);
      border-color: var(--phoenix);
    }

    /* FEATURED CARD HIGHLIGHT */
    .card-featured {
      border: 2px solid var(--phoenix);
      box-shadow: 0 10px 25px rgba(0,0,0,0.05);
      position: relative;
    }

    .card-featured-label {
      position: absolute;
      top: 15px;
      right: 15px;
      background-color: var(--phoenix);
      color: #000;
      font-family: var(--font-cmd);
      font-weight: 700;
      font-size: 0.75rem;
      padding: 0.4rem 0.8rem;
      border-radius: 50px;
      text-transform: uppercase;
      z-index: 10;
    }

    /* CARD VISUALS */
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

    .card:hover .card-img-wrapper img {
      transform: scale(1.05);
    }

    /* CARD CONTENT */
    .card-content {
      padding: 2rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .card-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 0.8rem;
      font-family: var(--font-cmd);
      font-size: 0.85rem;
      font-weight: 700;
    }

    .meta-tag { color: var(--signal-low); text-transform: uppercase; }
    .meta-price { color: var(--signal-high); }
    .meta-price-featured { color: var(--phoenix); }

    .card-title {
      font-size: 1.4rem;
      margin-bottom: 1rem;
    }

    .card-desc {
      color: var(--signal-med);
      font-size: 0.95rem;
      flex-grow: 1;
      margin-bottom: 1.5rem;
    }

    /* BUTTONS */
    .btn {
      display: inline-block;
      text-align: center;
      font-family: var(--font-cmd);
      font-weight: 700;
      padding: 0.8rem;
      border-radius: 6px;
      text-transform: uppercase;
      font-size: 0.9rem;
      transition: all 0.2s ease;
      width: 100%;
    }

    .btn-outline {
      border: 2px solid var(--structure);
      color: var(--signal-high);
      background-color: transparent;
    }

    .btn-outline:hover {
      background-color: var(--structure);
    }

    .btn-solid {
      background-color: var(--phoenix);
      color: #000;
      border: 2px solid var(--phoenix);
    }

    .btn-solid:hover {
      background-color: #e55e00;
      border-color: #e55e00;
    }

    /* MOBILE RESPONSIVENESS */
    @media (max-width: 768px) {
      .grid-primary, .grid-secondary { grid-template-columns: 1fr; }
      .services-hero { padding: 4rem 1.5rem 3rem; }
    }
  </style>
</head>
<body>

  <div class="mainframe">
    <?php include 'header.php'; ?>

    <main>
      <header class="services-hero">
        <h1 class="hero-title">Practical Support for<br>NZ Founders.</h1>
        <p class="hero-subtitle">Starting a business is overwhelming enough without hidden costs. We've broken down our services into clear, honest packages so you know exactly what you're getting, what it costs, and how we can support your journey.</p>
      </header>

      <section class="service-category" style="background-color: var(--void);">
        <div class="category-header">
          <span style="color: var(--phoenix); font-family: var(--font-cmd); font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Step 1: Get Online</span>
          <h2 class="category-title">Professional Web Design</h2>
          <p class="category-desc">Your digital storefront doesn't have to be a headache. Choose a reliable, affordable foundation that fits exactly where your business is at right now.</p>
        </div>

        <div class="grid-primary">
          <article class="card">
            <div class="card-img-wrapper">
              <img src="images/service-website.jpg" alt="5-Page Google Site">
            </div>
            <div class="card-content">
              <div class="card-meta">
                <span class="meta-tag">Web Design</span>
                <span class="meta-price">$215.99 NZD</span>
              </div>
              <h3 class="card-title">5-Page Google Site</h3>
              <p class="card-desc">Your digital business card. Zero maintenance, zero hosting fees. Perfect for getting your new idea online quickly and affordably to test the waters.</p>
              <a href="service-website.php" class="btn btn-outline">View Details</a>
            </div>
          </article>

          <article class="card card-featured">
            <div class="card-featured-label">Recommended</div>
            <div class="card-img-wrapper">
              <img src="images/5-page-html.jpg" alt="5-Page Custom HTML Website">
            </div>
            <div class="card-content">
              <div class="card-meta">
                <span class="meta-tag" style="color: var(--phoenix);">Web Design</span>
                <span class="meta-price-featured">$650.00 NZD</span>
              </div>
              <div style="background-color: var(--void); padding: 0.6rem; border-radius: 6px; margin-bottom: 1rem; border: 1px solid var(--structure);">
                <p style="font-size: 0.75rem; font-weight: 600; margin-bottom: 0; color: var(--signal-high);">Or 3 gentle payments of $216.66</p>
              </div>
              <h3 class="card-title">5-Page Custom HTML + CRM</h3>
              <p class="card-desc">A custom-built, high-speed website designed to automatically capture leads directly into a private customer dashboard. You own it completely.</p>
              <a href="service-5-page-html-website.php" class="btn btn-solid">View Details</a>
            </div>
          </article>

          <article class="card">
            <div class="card-img-wrapper">
              <img src="images/full-launch.png" alt="Complete Launch Package">
            </div>
            <div class="card-content">
              <div class="card-meta">
                <span class="meta-tag">Bundle (Save 5%)</span>
                <span class="meta-price">$736.24 NZD</span>
              </div>
              <div style="background-color: var(--void); padding: 0.6rem; border-radius: 6px; margin-bottom: 1rem; border: 1px solid var(--structure);">
                <p style="font-size: 0.75rem; font-weight: 600; margin-bottom: 0; color: var(--signal-high);">Or 3 gentle payments of $245.41</p>
              </div>
              <h3 class="card-title">Complete Launch Package</h3>
              <p class="card-desc">Stop losing your weekends. Get your custom HTML site + CRM, professional logo design, a 1-hour strategy consult, and a 6-month social planner in one supportive package.</p>
              <a href="service-launch.php" class="btn btn-outline">View Package</a>
            </div>
          </article>
        </div>
      </section>

      <section class="service-category" style="background-color: var(--surface);">
        <div class="category-header">
          <span style="color: var(--phoenix); font-family: var(--font-cmd); font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Step 2: Get Found</span>
          <h2 class="category-title">Branding & Visibility</h2>
          <p class="category-desc">It's hard to get noticed when you're starting out. We'll help you build trust and ensure local Kiwis can easily find you.</p>
        </div>

        <div class="grid-secondary">
          <article class="card">
            <div class="card-img-wrapper" style="height: 180px;">
              <img src="images/service-logo.jpg" alt="Custom Logo Design">
            </div>
            <div class="card-content">
              <div class="card-meta">
                <span class="meta-tag">Branding</span>
                <span class="meta-price">$49.99 NZD</span>
              </div>
              <h3 class="card-title" style="font-size: 1.2rem;">Custom Logo Design</h3>
              <p class="card-desc" style="font-size: 0.9rem;">A clean, professional logo that helps you look established and builds instant trust with your local market. Includes all master vector files.</p>
              <a href="service-logo.php" class="btn btn-outline">View Details</a>
            </div>
          </article>

          <article class="card">
            <div class="card-img-wrapper" style="height: 180px;">
              <img src="images/video-service.png" alt="Video Animations">
            </div>
            <div class="card-content">
              <div class="card-meta">
                <span class="meta-tag">Content</span>
                <span class="meta-price">$49.99 NZD</span>
              </div>
              <h3 class="card-title" style="font-size: 1.2rem;">Video Animations</h3>
              <p class="card-desc" style="font-size: 0.9rem;">Make your content look polished. Custom animated intros and outros to grab attention in the first 3 seconds of your videos.</p>
              <a href="service-video.php" class="btn btn-outline">View Details</a>
            </div>
          </article>

          <article class="card">
            <div class="card-img-wrapper" style="height: 180px;">
              <img src="images/service-seo.jpg" alt="Website SEO Audit">
            </div>
            <div class="card-content">
              <div class="card-meta">
                <span class="meta-tag">Search</span>
                <span class="meta-price">$49.99 NZD</span>
              </div>
              <h3 class="card-title" style="font-size: 1.2rem;">Website SEO Audit</h3>
              <p class="card-desc" style="font-size: 0.9rem;">Wondering why you aren't showing up on Google? We check your website for hidden errors and give you a plain-English plan to fix it.</p>
              <a href="service-seo.php" class="btn btn-outline">View Details</a>
            </div>
          </article>

          <article class="card">
            <div class="card-img-wrapper" style="height: 180px;">
              <img src="images/social-audit.png" alt="Social Media Audit">
            </div>
            <div class="card-content">
              <div class="card-meta">
                <span class="meta-tag">Social</span>
                <span class="meta-price">$49.99 NZD</span>
              </div>
              <h3 class="card-title" style="font-size: 1.2rem;">Social Media Audit</h3>
              <p class="card-desc" style="font-size: 0.9rem;">Honest, constructive feedback. We review your current social profiles and tell you exactly how to start converting followers into customers.</p>
              <a href="service-social.php" class="btn btn-outline">View Details</a>
            </div>
          </article>
        </div>
      </section>

      <section class="service-category" style="background-color: var(--void); border-bottom: none;">
        <div class="category-header">
          <span style="color: var(--phoenix); font-family: var(--font-cmd); font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Step 3: Keep Growing</span>
          <h2 class="category-title">Guidance & Planning Tools</h2>
          <p class="category-desc">Building a business in isolation is tough. Lean on our practical tools and guidance to protect your time, budget, and sanity.</p>
        </div>

        <div class="grid-primary" style="max-width: 800px;">
          <article class="card">
            <div class="card-img-wrapper" style="height: 180px;">
              <img src="images/startup-consult.png" alt="Startup Consultation">
            </div>
            <div class="card-content">
              <div class="card-meta">
                <span class="meta-tag">Guidance</span>
                <span class="meta-price">$75.00 / HR</span>
              </div>
              <h3 class="card-title">Startup Consultation</h3>
              <p class="card-desc">1-on-1 business support. We'll sit down, cut through the confusion, review your ideas, and help you map out a practical, realistic plan for your next 90 days.</p>
              <a href="service-consult.php" class="btn btn-outline">View Details</a>
            </div>
          </article>

          <article class="card">
            <div class="card-img-wrapper" style="height: 180px;">
              <img src="images/social-schedule.jpg" alt="Weekly Social Media Planner">
            </div>
            <div class="card-content">
              <div class="card-meta">
                <span class="meta-tag">Software</span>
                <span class="meta-price">$14.99 / MO</span>
              </div>
              <h3 class="card-title">Weekly Social Planner</h3>
              <p class="card-desc">Stop losing your precious evenings to social media management. A straightforward, practical planner that protects your reach and keeps you highly organized.</p>
              <a href="service-social-post-planner.php" class="btn btn-outline">View Details</a>
            </div>
          </article>
        </div>
      </section>
    </main>

    <?php include 'footer.php'; ?>
  </div>

  
  </script>
</body>
</html>