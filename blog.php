<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Startup Guides & Advice | Creative Startup NZ</title>
  <meta name="description" content="Practical business advice for New Zealand startups. Honest guides, real-world examples, and actionable steps to help you grow your business safely.">
  
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.creativestartupnz.com/blog.php">
  <meta property="og:title" content="Startup Guides & Advice | Creative Startup NZ">
  <meta property="og:description" content="Practical business advice for New Zealand startups. Honest guides, real-world examples, and actionable steps to help you grow your business safely.">
  <meta property="og:image" content="https://www.creativestartupnz.com/images/blog-hub-page.jpg">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.creativestartupnz.com/blog.php">
  <meta property="twitter:title" content="Startup Guides & Advice | Creative Startup NZ">
  <meta property="twitter:description" content="Practical business advice for New Zealand startups. Honest guides, real-world examples, and actionable steps to help you grow your business safely.">
  <meta property="twitter:image" content="https://www.creativestartupnz.com/images/blog-hub-page.jpg">
  
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

    /* HEADER & FOOTER are injected via JS */
    .control-bar, .tactical-footer { display: block; }

    /* BLOG HEADER */
    .page-header {
      padding: 6rem 2rem;
      background-color: var(--surface);
      border-bottom: 1px solid var(--structure);
      text-align: center;
      transition: background-color 0.3s ease;
    }

    .page-title {
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      margin-bottom: 1rem;
    }

    .page-subtitle {
      max-width: 700px;
      margin: 0 auto;
      color: var(--signal-med);
      font-size: 1.15rem;
    }

    /* BLOG GRID STYLES */
    .blog-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 2.5rem;
      padding: 5rem 2rem;
      background-color: var(--void);
      max-width: 1200px;
      margin: 0 auto;
    }

    .article-card {
      background-color: var(--surface);
      border: 1px solid var(--structure);
      border-radius: 12px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .article-card:hover {
      border-color: var(--phoenix);
      transform: translateY(-6px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.08);
      z-index: 10;
    }

    .card-img-container {
      width: 100%;
      height: 220px;
      overflow: hidden;
      border-bottom: 1px solid var(--structure);
    }

    .card-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.9;
      transition: transform 0.5s ease, opacity 0.3s ease;
    }

    .article-card:hover .card-img {
      opacity: 1;
      transform: scale(1.05);
    }

    .card-body {
      padding: 2rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .card-tag {
      font-family: var(--font-cmd);
      font-size: 0.75rem;
      color: var(--phoenix);
      margin-bottom: 0.8rem;
      text-transform: uppercase;
      font-weight: 700;
      letter-spacing: 1px;
    }

    .card-title {
      font-size: 1.4rem;
      margin-bottom: 1rem;
    }

    .card-excerpt {
      font-size: 0.95rem;
      color: var(--signal-med);
      margin-bottom: 2rem;
      flex-grow: 1;
    }

    .btn-card {
      display: inline-block;
      text-align: center;
      font-family: var(--font-cmd);
      font-weight: 700;
      padding: 0.8rem;
      border-radius: 6px;
      text-transform: uppercase;
      font-size: 0.9rem;
      border: 2px solid var(--structure);
      color: var(--signal-high);
      background-color: transparent;
      transition: all 0.2s ease;
    }

    .article-card:hover .btn-card {
      background-color: var(--phoenix);
      border-color: var(--phoenix);
      color: #000;
    }

    /* FEATURED CARD HIGHLIGHT */
    .featured-card {
      border: 2px solid var(--phoenix);
      box-shadow: 0 10px 25px rgba(0,0,0,0.05);
      position: relative;
    }

    .featured-card-label {
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
    
    .featured-card .btn-card {
      background-color: var(--phoenix);
      border-color: var(--phoenix);
      color: #000;
    }
    
    .featured-card:hover .btn-card {
      background-color: #e55e00;
      border-color: #e55e00;
    }

    @media (max-width: 768px) {
      .blog-grid { grid-template-columns: 1fr; padding: 3rem 1.5rem; }
      .page-header { padding: 4rem 1.5rem; }
    }
  </style>
</head>
<body>
  <div class="mainframe">
    <?php include 'header.php'; ?>
    
    <main>
      <header class="page-header">
        <h1 class="page-title">Startup Guides & Advice</h1>
        <p class="page-subtitle">
          Practical guides, real-world lessons, and honest advice to help you build a stronger, more resilient New Zealand business.
        </p>
      </header>

      <div class="blog-grid">
        
        <article class="article-card featured-card">
          <div class="featured-card-label">Start Here</div>
          <div class="card-img-container">
            <img src="images/2026playbook.jpg" alt="Hobby to Business Playbook" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">NZ Startup Guide</span>
            <h2 class="card-title">From Hobby to Business: The Complete NZ Guide</h2>
            <p class="card-excerpt">A clear, practical guide to understanding legal structures, exploring funding options, and developing the right mindset for launching your New Zealand startup safely.</p>
            <a href="blog-hobby-to-business.php" class="btn-card">Read Guide</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/logodesigner.jpg" alt="AI vs Designer" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Brand Strategy</span>
            <h2 class="card-title">Got $500 for a logo? AI vs. Graphic Designer</h2>
            <p class="card-excerpt">A tight budget forces a tough choice: fire up an AI generator or hire a human? We break down the real risks and hidden costs of AI branding for NZ businesses.</p>
            <a href="blog-ai-vs-designer-logo.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/websitescam.jpg" alt="Website Security" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Digital Safety</span>
            <h2 class="card-title">Protecting Your Digital Assets</h2>
            <p class="card-excerpt">Learn how to spot common pitfalls when hiring web developers and understand the warning signs to keep your business's online presence secure.</p>
            <a href="blog-website-scam.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/digital-hostage.jpg" alt="Digital Ownership" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Case Study</span>
            <h2 class="card-title">The Importance of Domain Ownership</h2>
            <p class="card-excerpt">A real-world look at why holding the keys to your own digital domain is the most crucial step in maintaining control of your growing business.</p>
            <a href="blog-digital-hostage.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/greedyseminar.jpg" alt="Navigating Business Seminars" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Industry Insights</span>
            <h2 class="card-title">Navigating "Free" Business Seminars</h2>
            <p class="card-excerpt">Understanding the business model behind free networking events and how to make sure you are actually getting value before committing your time and money.</p>
            <a href="blog-seminar-trap.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/ugly.jpg" alt="Simple Website Design" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Marketing Strategy</span>
            <h2 class="card-title">Why a Simple Website Beats a Perfect One</h2>
            <p class="card-excerpt">Perfectionism can easily stall your momentum. Discover why launching a clean, simple website today is far more effective than waiting six months for perfection.</p>
            <a href="blog-ugly-website.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/revenue.jpg" alt="Newsletter Strategy" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Revenue Strategy</span>
            <h2 class="card-title">Building an Audience You Actually Own</h2>
            <p class="card-excerpt">Social media algorithms are unpredictable. Learn how building a reliable email newsletter can create a stable, direct connection with your core customers.</p>
            <a href="blog-newsletter-revenue.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/aitrap.jpg" alt="AI Website Limitations" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Branding Advice</span>
            <h2 class="card-title">The Limitations of AI Content</h2>
            <p class="card-excerpt">While automated tools are helpful, purely AI-generated content can often feel impersonal. Learn why maintaining an authentic, human brand voice always wins.</p>
            <a href="blog-ai-trap.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/cowboycheck.jpg" alt="Business Compliance" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Legal & Compliance</span>
            <h2 class="card-title">The Compliance Checks You Shouldn't Skip</h2>
            <p class="card-excerpt">A supportive guide to the basic licenses and regulations you need to understand to ensure your business operates safely and legitimately from day one.</p>
            <a href="blog-cowboy-check.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/youdontownyourbiz.jpg" alt="Domain Ownership" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Digital Ownership</span>
            <h2 class="card-title">Securing Your Digital Keys</h2>
            <p class="card-excerpt">If you don't hold the main admin login to your domain registrar, your business is at risk. A simple guide to finding and securing your digital keys.</p>
            <a href="blog-ownership-trap.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/survival.jpg" alt="Business Resilience Strategy" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Business Strategy</span>
            <h2 class="card-title">Building Business Resilience</h2>
            <p class="card-excerpt">When the economic climate changes, you need a steady plan. Learn practical ways to systemize your operations and build resilience during market downturns.</p>
            <a href="blog-survival-blueprint.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/vetting.jpg" alt="Vetting Business Partners" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Risk Management</span>
            <h2 class="card-title">Safely Vetting Your Partners</h2>
            <p class="card-excerpt">Choosing the right suppliers and platforms is vital. Learn how to properly vet the companies you work with to protect your cash flow and reputation.</p>
            <a href="blog-vetting-partners.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/forged.jpg" alt="Adapting Business Models" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Case Study</span>
            <h2 class="card-title">Adapting to Change: 5 Kiwi Businesses</h2>
            <p class="card-excerpt">An inspiring look at how local businesses successfully adapted their models during challenging times to find new opportunities and stay afloat.</p>
            <a href="blog-forged-in-fire.php" class="btn-card">Read Article</a>
          </div>
        </article>

        <article class="article-card">
          <div class="card-img-container">
            <img src="images/coffin.jpg" alt="Strategic Business Planning" class="card-img">
          </div>
          <div class="card-body">
            <span class="card-tag">Business Lessons</span>
            <h2 class="card-title">The Value of Strategic Planning</h2>
            <p class="card-excerpt">Hoping for the best isn't a sustainable strategy. Why taking the time to map out a clear plan is the most important investment you can make in your business.</p>
            <a href="blog-comfortable-coffin.php" class="btn-card">Read Article</a>
          </div>
        </article>

      </div>
    </main>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>