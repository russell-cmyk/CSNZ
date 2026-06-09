<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Weekly Social Media Planner | Creative Startup NZ</title>
  <meta name="description" content="Stop losing your weekends to social media. A straightforward, practical planner built for New Zealand and Australian small businesses.">
  
  <meta property="og:type" content="website">
  <meta property="og:title" content="The Weekly Social Media Planner | Creative Startup NZ">
  <meta property="og:description" content="Reclaim your time. Organize your week, avoid algorithm penalties, and easily execute your social media strategy.">
  <meta property="og:image" content="https://www.creativestartupnz.com/images/social-schedule.jpg">
	
	<meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.creativestartupnz.com/social-media-planner.php">
  <meta property="twitter:title" content="The Weekly Social Media Planner | Creative Startup NZ">
  <meta property="twitter:description" content="Reclaim your time. Organize your week, avoid algorithm penalties, and easily execute your social media strategy.">
  <meta property="twitter:image" content="https://www.creativestartupnz.com/images/social-schedule.jpg">

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
    "@type": "SoftwareApplication",
    "name": "The Weekly Social Media Planner",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web Browser",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Creative Startup NZ",
      "taxID": "9429053465030",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "NZ"
      }
    },
    "offers": {
      "@type": "Offer",
      "priceCurrency": "NZD",
      "price": "14.99",
      "availability": "https://schema.org/InStock",
      "description": "Basic Tier - $14.99 per month for tactical social media planning."
    },
    "description": "A locally-hosted social media planner designed for New Zealand small business owners to manage Facebook and LinkedIn without algorithm penalties.",
    "image": "https://www.creativestartupnz.com/images/social-schedule.jpg"
  }
  </script>

  <style>
    /* NOTE: Color and font variables (:root) have been removed from here.
       They are globally managed by header.js for Light/Dark mode. */

    * { box-sizing: border-box; margin: 0; padding: 0; border-radius: var(--radius-hard) !important; }

    body {
      background-color: var(--void);
      color: var(--signal-med);
      font-family: var(--font-brief);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .mainframe { 
      max-width: 1280px; 
      margin: 0 auto; 
      border-left: var(--border-std); 
      border-right: var(--border-std); 
      min-height: 100vh; 
    }

    h1, h2, h3 { 
      font-family: var(--font-cmd);
      color: var(--signal-high); 
      font-weight: 800; 
      line-height: 1.2; 
      transition: color 0.3s ease;
    }

    /* BUTTONS */
    .btn-primary { 
      background-color: var(--phoenix); 
      color: #000000; 
      padding: 1rem 2.5rem; 
      text-decoration: none; 
      font-family: var(--font-cmd);
      font-weight: 700; 
      display: inline-flex;
      align-items: center;
      justify-content: center; 
      transition: all 0.2s ease; 
      border: none;
      font-size: 1.1rem;
      text-transform: uppercase;
      border-radius: 4px !important;
    }
    .btn-primary:hover { 
      filter: brightness(110%);
      transform: translateY(-2px); 
    }

    .btn-secondary {
      background-color: transparent;
      color: var(--signal-high);
      border: 1px solid var(--signal-low);
      padding: 1rem 2.5rem;
      text-decoration: none;
      font-family: var(--font-cmd);
      font-weight: 700;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: all 0.2s ease;
      font-size: 1.1rem;
      text-transform: uppercase;
      border-radius: 4px !important;
    }
    .btn-secondary:hover {
      border-color: var(--phoenix);
      color: var(--phoenix);
      transform: translateY(-2px);
    }

    /* PRODUCT HERO */
    .product-hero { 
      display: grid; 
      grid-template-columns: 1fr 1fr; 
      border-bottom: var(--border-std); 
      background-color: var(--void);
      transition: background-color 0.3s ease;
    }
    .product-data { padding: 5rem 4rem; display: flex; flex-direction: column; justify-content: center; }
    .asset-tag { color: var(--terminal); font-family: var(--font-data); font-weight: 700; font-size: 0.85rem; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 1px; }
    .asset-title { font-size: 3rem; margin-bottom: 1.5rem; text-transform: uppercase;}
    .asset-desc { font-size: 1.1rem; margin-bottom: 2.5rem; max-width: 500px; color: var(--signal-med); }
    .product-visual { background-color: var(--surface); display: flex; align-items: center; justify-content: center; overflow: hidden; border-left: var(--border-std); transition: background-color 0.3s ease; }
    .product-img { width: 100%; height: 100%; object-fit: cover; filter: grayscale(20%); }

    /* FEATURES SECTION */
    .features-section { padding: 6rem 2rem; background-color: var(--surface); text-align: center; transition: background-color 0.3s ease;}
    .section-title { font-size: 2.5rem; margin-bottom: 1.5rem; text-transform: uppercase;}
    .section-subtitle { max-width: 700px; margin: 0 auto 4rem auto; font-size: 1.1rem; color: var(--signal-med); }

    .feature-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; max-width: 1100px; margin: 0 auto; text-align: left; }
    
    /* UPDATED: Feature Cards match Blog Cards */
    .feature-card { 
      background-color: var(--surface); 
      border: var(--border-std); 
      padding: 2.5rem; 
      transition: all 0.3s ease; 
      border-radius: 8px !important;
      display: flex;
      flex-direction: column;
    }
    .feature-card:hover { 
      border-color: transparent;
      outline: 2px solid var(--phoenix);
      transform: translateY(-5px); 
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
      z-index: 10; 
    }
    
    .feature-icon { font-family: var(--font-data); color: var(--terminal); font-size: 1.5rem; margin-bottom: 1rem; display: block; font-weight: 700; }
    .feature-title { font-size: 1.3rem; margin-bottom: 1rem; text-transform: uppercase; }

    /* PRICING SECTION */
    .financial-block { padding: 6rem 2rem; background-color: var(--void); text-align: center; border-top: var(--border-std); border-bottom: var(--border-std); transition: background-color 0.3s ease;}
    .financial-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); max-width: 1100px; margin: 4rem auto 0 auto; gap: 1.5rem; }
    
    /* UPDATED: Pricing Cards match Blog Cards */
    .fin-card { 
      border: var(--border-std); 
      padding: 3rem 2rem; 
      background-color: var(--surface); 
      display: flex; 
      flex-direction: column; 
      transition: all 0.3s ease;
      border-radius: 8px !important;
    }
    .fin-card:hover { 
      border-color: transparent;
      outline: 2px solid var(--phoenix);
      transform: translateY(-5px); 
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
      z-index: 10;
    }
    
    /* Safely highlighted for both Dark and Light modes (Permanently popped out) */
    .fin-card.highlight { 
      border-color: transparent; 
      outline: 2px solid var(--phoenix); 
      transform: translateY(-5px); 
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
      z-index: 5; 
    }
    
    .fin-tier { font-family: var(--font-data); font-weight: 700; font-size: 1rem; color: var(--signal-high); margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 0.5px;}
    .fin-val { font-family: var(--font-cmd); font-size: 3rem; color: var(--signal-high); font-weight: 800; line-height: 1; margin-bottom: 0.5rem; transition: color 0.3s ease;}
    .fin-duration { font-size: 0.95rem; color: var(--signal-med); margin-bottom: 2rem; text-transform: uppercase; letter-spacing: 0.5px;}
    
    .fin-features { list-style: none; text-align: left; margin-bottom: 2rem; flex-grow: 1;}
    .fin-features li { font-size: 0.95rem; margin-bottom: 0.8rem; padding-left: 1.5rem; position: relative; color: var(--signal-med); }
    .fin-features li::before { content: '✓'; color: var(--terminal); font-family: var(--font-data); font-weight: bold; position: absolute; left: 0; }

    /* SIMPLE SYSTEM REQ & TRUST BLOCK */
    .trust-block { padding: 4rem 2rem; background-color: var(--surface); text-align: center; transition: background-color 0.3s ease; }
    .trust-container { max-width: 800px; margin: 0 auto; }

    @media (max-width: 900px) {
      .product-hero { grid-template-columns: 1fr; }
      .product-data { padding: 3rem 2rem; }
      .product-visual { min-height: 300px; border-left: none; border-top: var(--border-std); }
    }
  </style>
	
	<!-- Meta Pixel Code -->
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
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=3454542104667432&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
	
</head>
<body>
  <div class="mainframe">
    <?php include 'header.php'; ?>

    <main>
      <section class="product-hero">
        <div class="product-data">
          <div class="asset-tag">Practical Tools for Local Business</div>
          <h1 class="asset-title">The Weekly Social Media Planner</h1>
          <p class="asset-desc">
            You're running a business, not a marketing agency. Stop losing your weekends trying to figure out what to post. Our planner is a straightforward, easy-to-use tool designed for founders who need to organize their social media quickly and get back to actual work.
          </p>
          <div>
            <a href="social-schedule.php" class="btn-primary">START 5-DAY FREE TRIAL</a>
            <p style="margin-top: 1rem; font-size: 0.85rem; color: var(--signal-low); text-transform: uppercase; letter-spacing: 0.5px;">No credit card required upfront.</p>
          </div>
        </div>
        <div class="product-visual">
          <img src="images/social-schedule.jpg" alt="Social Media Planner Interface" loading="eager" class="product-img hover-color">
        </div>
      </section>

      <section class="features-section">
        <h2 class="section-title">Level the Playing Field</h2>
        <p class="section-subtitle">
          Marketing agencies want big monthly retainers. Automated "robot" apps get your reach crushed by Facebook's algorithm. We built a third option: a reliable tool that puts you in total control.
        </p>

        <div class="feature-grid">
          <div class="feature-card">
            <span class="feature-icon">01</span>
            <h3 class="feature-title">Visual Content Calendar</h3>
            <p style="color: var(--signal-med);">Plan your week effortlessly. A simple drag-and-drop calendar organizes everything. Write it all on Sunday night, schedule the times, and stop panicking on Wednesday morning.</p>
          </div>

          <div class="feature-card">
            <span class="feature-icon">02</span>
            <h3 class="feature-title">Protect Your Reach</h3>
            <p style="color: var(--signal-med);">Social networks silently punish posts made by automated robots. Our planner organizes your plan, alerts you, and lets you manually publish in 10 seconds to keep your organic reach high.</p>
          </div>

          <div class="feature-card">
            <span class="feature-icon">03</span>
            <h3 class="feature-title">Total Privacy</h3>
            <p style="color: var(--signal-med);">Most software holds your content hostage. We believe you should own your work. This planner safely backs up your data while running right from your browser.</p>
          </div>

          <div class="feature-card">
            <span class="feature-icon">04</span>
            <h3 class="feature-title">Easy Execution</h3>
            <p style="color: var(--signal-med);">When it's time to post, a desktop alert pops up. Click it, and your text is instantly copied, your image downloaded, and the exact Facebook Group or LinkedIn page opens for you. Paste and post.</p>
          </div>
        </div>
      </section>

      <section class="financial-block">
        <h2 class="section-title">Simple, Affordable Pricing</h2>
        <p class="section-subtitle" style="margin-bottom: 0;">Try it free for 5 days. If it saves you time, pick a plan that fits your budget. Cancel anytime.</p>

        <div class="financial-grid">
          
          <div class="fin-card">
            <div class="fin-tier">Monthly</div>
            <div class="fin-val">$14.99</div>
            <div class="fin-duration">per month</div>
            <ul class="fin-features">
              <li>Full Calendar Access</li>
              <li>Unlimited Facebook Groups</li>
              <li>Unlimited LinkedIn Profiles</li>
              <li>Desktop Alert System</li>
            </ul>
            <a href="social-schedule.php" class="btn-secondary">Start Free Trial</a>
          </div>

          <div class="fin-card highlight">
            <div class="fin-tier" style="color: var(--phoenix);">Quarterly</div>
            <div class="fin-val">$40.48</div>
            <div class="fin-duration">every 3 months</div>
            <ul class="fin-features">
              <li>Everything in Monthly</li>
              <li style="color: var(--signal-high); font-weight: 600;">Save 10% annually</li>
              <li>Reduced admin overhead</li>
              <li>Lock in your rate</li>
            </ul>
            <a href="social-schedule.php" class="btn-primary">Start Free Trial</a>
          </div>

          <div class="fin-card">
            <div class="fin-tier">Semi-Annual</div>
            <div class="fin-val">$71.95</div>
            <div class="fin-duration">every 6 months</div>
            <ul class="fin-features">
              <li>Everything in Monthly</li>
              <li style="color: var(--signal-high); font-weight: 600;">Save 20% annually</li>
              <li>Best for growing teams</li>
            </ul>
            <a href="social-schedule.php" class="btn-secondary">Start Free Trial</a>
          </div>

          <div class="fin-card">
            <div class="fin-tier">Annual</div>
            <div class="fin-val">$116.92</div>
            <div class="fin-duration">per year</div>
            <ul class="fin-features">
              <li>Everything in Monthly</li>
              <li style="color: var(--signal-high); font-weight: 600;">Save 35% annually</li>
              <li>Best overall value</li>
            </ul>
            <a href="social-schedule.php" class="btn-secondary">Start Free Trial</a>
          </div>

        </div>
      </section>

      <section class="trust-block">
        <div class="trust-container">
          <h3 style="margin-bottom: 1rem; font-size: 1.5rem; text-transform: uppercase;">A Quick Note on Compatibility</h3>
          <p style="color: var(--signal-med); font-size: 1.05rem; margin-bottom: 2rem;">
            Because this tool utilizes browser-based timers and local clipboards to automate your workflow without getting you banned by Facebook, <strong style="color: var(--signal-high);">the planner requires a Desktop or Laptop computer (Mac or PC)</strong>. Mobile phones (iOS/Android) block the necessary background tasks.
          </p>
          <a href="social-schedule.php" class="btn-primary">Get Started Now</a>
        </div>
      </section>

    </main>

    <?php include 'footer.php'; ?>
  </div>

  
  </script>
</body>
</html>