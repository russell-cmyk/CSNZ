<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Russell Oliver | Creative Startup NZ</title>
  <meta name="description" content="I'm Russell Oliver. A New Zealand business owner, husband, and dad helping everyday people build real businesses without the $20k price tag.">
  
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.creativestartupnz.com/about.php">
  <meta property="og:title" content="About Russell Oliver | Creative Startup NZ">
  <meta property="og:description" content="I'm not a guru. I'm a builder. Real strategies for NZ business owners juggling work, family, and life.">
  <meta property="og:image" content="https://www.creativestartupnz.com/images/russell.jpg">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.creativestartupnz.com/about.php">
  <meta property="twitter:title" content="About Russell Oliver | Creative Startup NZ">
  <meta property="twitter:description" content="I'm not a guru. I'm a builder. Real strategies for NZ business owners juggling work, family, and life.">
  <meta property="twitter:image" content="https://www.creativestartupnz.com/images/russell.jpg">
  
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

    /* GLOBAL SECTION CARD STYLE */
    .section-card {
      background-color: var(--surface);
      border: 1px solid var(--structure);
      border-radius: 12px;
      padding: 4rem;
      max-width: 1000px;
      margin: 0 auto 4rem auto;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
    }

    .section-card:hover {
      border-color: transparent;
      border: 1px solid var(--phoenix);
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    /* HEADER */
    .mission-header {
      padding: 6rem 2rem 4rem 2rem;
      background-color: var(--void);
      text-align: center;
    }

    .mission-title {
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      margin-bottom: 1rem;
    }

    .mission-subtitle {
      font-size: 1.2rem;
      max-width: 800px;
      margin: 0 auto;
      color: var(--signal-med);
    }

    /* INTRO SECTION */
    .intro-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: center;
    }

    .intro-text h2 {
      font-size: 2.2rem;
      color: var(--phoenix);
      margin-bottom: 1.5rem;
    }

    .intro-text p {
      margin-bottom: 1.5rem;
      font-size: 1.1rem;
      color: var(--signal-med);
    }

    .intro-img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      object-fit: cover;
    }
    
    /* CORE VALUES GRID */
    .values-header {
      text-align: center;
      padding: 2rem;
      margin-bottom: 2rem;
    }
    
    .values-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      max-width: 1000px;
      margin: 0 auto 4rem auto;
      padding: 0 2rem;
    }

    .value-card {
      background-color: var(--surface);
      border: 1px solid var(--structure);
      padding: 2.5rem;
      border-radius: 12px;
      display: flex;
      flex-direction: column;
      transition: all 0.3s ease;
    }

    .value-card:hover {
      border-color: var(--phoenix);
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    }

    .value-icon {
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    .value-title {
      font-size: 1.4rem;
      margin-bottom: 1rem;
    }

    .value-text {
      color: var(--signal-med);
      font-size: 1rem;
      flex-grow: 1;
      margin-bottom: 1rem;
    }

    .value-highlight {
      color: var(--signal-high);
      font-weight: 600;
      font-size: 1.05rem;
    }

    /* QUALIFICATIONS */
    .quals-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: center;
    }

    .quals-list {
      list-style: none;
      margin-top: 1.5rem;
    }
    
    .quals-list li {
      margin-bottom: 1rem;
      padding-left: 2rem;
      position: relative;
      color: var(--signal-high);
      font-size: 1.05rem;
    }
    
    .quals-list li::before {
      content: "✓";
      color: var(--phoenix);
      position: absolute;
      left: 0;
      font-weight: bold;
      font-size: 1.2rem;
    }
    
    /* VIDEO EMBED */
    .video-wrapper {
      position: relative;
      padding-bottom: 56.25%; /* 16:9 */
      height: 0;
      overflow: hidden;
      background: #000;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      margin-top: 1rem;
    }
    
    .video-wrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }
    
    .video-caption {
      text-align: center;
      color: var(--signal-low);
      font-size: 0.9rem;
      margin-top: 1rem;
      font-style: italic;
    }

    /* MISSION BIO */
    .founder-profile {
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .profile-img {
      width: 180px;
      height: 180px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid var(--phoenix);
      margin-bottom: 1.5rem;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .profile-name {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    .profile-role {
      color: var(--phoenix);
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 2.5rem;
      font-size: 0.9rem;
    }

    .mission-text {
      max-width: 700px;
      margin: 0 auto;
      text-align: left;
      color: var(--signal-med);
      font-size: 1.1rem;
    }

    .mission-text p {
      margin-bottom: 1.5rem;
    }

    .btn-primary {
      display: inline-block;
      background-color: var(--phoenix);
      color: #000;
      padding: 1.2rem 2.5rem;
      border-radius: 8px;
      font-family: var(--font-cmd);
      font-weight: 700;
      text-transform: uppercase;
      font-size: 1.1rem;
      margin-top: 3rem;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      box-shadow: 0 4px 15px rgba(255, 106, 0, 0.2);
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(255, 106, 0, 0.3);
    }

    /* UPSELL LINKS */
    .next-steps {
      text-align: center;
      padding: 3rem 2rem 6rem 2rem;
    }
    
    .next-steps-title {
      color: var(--signal-med);
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 1.5rem;
      font-size: 0.9rem;
    }

    .step-link {
      color: var(--signal-high);
      text-decoration: none;
      margin: 0 1.5rem;
      font-weight: 600;
      border-bottom: 2px solid transparent;
      padding-bottom: 2px;
      transition: all 0.2s ease;
      text-transform: uppercase;
      font-size: 0.95rem;
    }

    .step-link:hover {
      color: var(--phoenix);
      border-bottom-color: var(--phoenix);
    }

    @media (max-width: 900px) {
      .section-card { padding: 2.5rem 1.5rem; }
      .intro-grid, .quals-grid { grid-template-columns: 1fr; gap: 3rem; }
      .step-link { display: block; margin: 1.5rem 0; }
    }
  </style>
</head>
<body>
  <div class="mainframe">
    <?php include 'header.php'; ?>
    
    <main>
      
      <header class="mission-header">
        <h1 class="mission-title">Hi, I'm Russell.</h1>
        <p class="mission-subtitle">I'm a New Zealand business owner, husband, and dad helping everyday Kiwis build real businesses without the overwhelming agency price tags.</p>
      </header>

      <section class="section-card">
        <div class="intro-grid">
          <div class="intro-text">
            <h2>Let's keep things grounded.</h2>
            <p>Most web agencies talk a big game. They use tech buzzwords, boast about massive teams, and push complex solutions. <strong>That's just not how I work.</strong></p>
            <p>I'm not a "marketing guru" posting from a beach. I have a full-time job. I come home tired. And then I sit down, open my laptop, and build the future for my family—just like you might be doing right now.</p>
            <p>When you work with me, you aren't paying for fancy downtown office overhead. You're paying for the discipline and care I've built over a 23-year career. You get clear timelines, straightforward advice, and a genuine partnership.</p>
            <p>If you're trying to get a business off the ground while juggling a day job and family life, I understand exactly where you are. And I can help.</p>
          </div>
          <div>
            <img src="images/russell.jpg" alt="Russell Oliver" class="intro-img">
          </div>
        </div>
      </section>

      <div class="values-header">
        <h2 class="mission-title" style="font-size: 2.2rem;">Why Founders Work With Me</h2>
        <p style="color: var(--signal-med); font-size: 1.1rem;">Because I've sat exactly where you are sitting right now.</p>
      </div>

      <section class="values-grid">
        
        <div class="value-card">
          <div class="value-icon">🤝</div>
          <h3 class="value-title">I Understand the Pressure</h3>
          <p class="value-text">I've run businesses where the numbers were scary. I've had those sleepless nights wondering how to fix the cash flow, staring at spreadsheets hoping for a change.</p>
          <p class="value-highlight">I didn't quit. I figured it out, and I'll help you do the same.</p>
        </div>

        <div class="value-card">
          <div class="value-icon">🛡️</div>
          <h3 class="value-title">I Value Your Security</h3>
          <p class="value-text">Years ago, an agency held my business website hostage, refusing to hand over passwords. That feeling of helplessness is awful.</p>
          <p class="value-highlight">That's why you will always own your domain, code, and hosting entirely. No lock-in contracts.</p>
        </div>

        <div class="value-card">
          <div class="value-icon">⚙️</div>
          <h3 class="value-title">I Build Solid Systems</h3>
          <p class="value-text">In 2014, my wife and I took over a small local site. I completely rebuilt the digital infrastructure while she drove the business forward. Today, it's an award-winning company.</p>
          <p class="value-highlight">I build the digital engine so you can safely drive your business forward.</p>
        </div>

      </section>

      <section class="section-card">
        <div class="quals-grid">
          <div>
            <h2 style="font-size: 2rem; margin-bottom: 1rem;">Experience & Training</h2>
            <p style="color: var(--signal-med); font-size: 1.1rem;">While real-world experience is the best teacher, I also have the formal training to ensure everything is built correctly from the ground up:</p>
            
            <ul class="quals-list">
              <li>Certificate in Artificial Intelligence for Business Leaders</li>
              <li>Graduate Diploma in Business</li>
              <li>Bachelor of Business (Marketing)</li>
              <li>NZ Diploma in Business (Level 6)</li>
              <li>NZ Diploma in Marketing</li>
              <li>Certificate in Adult Education & Training</li>
              <li>Certificate in Web Design</li>
              <li>23 years of experience in Logistics and Systems</li>
            </ul>
          </div>
          
          <div>
            <div class="video-wrapper">
              <iframe src="https://www.youtube.com/embed/2qYeoJAAJgI" title="Graduation Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <p class="video-caption">Putting in the work: Graduation Day</p>
          </div>
        </div>

        <div style="margin-top: 4rem; text-align: center; border-top: 1px solid var(--structure); padding-top: 3rem;">
          <h3 style="font-size: 1.6rem; margin-bottom: 1rem;">But what really matters is this:</h3>
          <p style="color: var(--signal-med); font-size: 1.15rem; max-width: 800px; margin: 0 auto;">
            My 23 years in logistics taught me one fundamental truth: <strong>if the underlying systems are broken, nothing moves.</strong> I apply that exact same care and logic to building your website, ensuring your digital foundation is rock solid.
          </p>
        </div>
      </section>

      <section class="section-card founder-profile">
        <img src="images/russell.jpg" alt="Russell Oliver" class="profile-img">
        <h2 class="profile-name">My Mission</h2>
        <div class="profile-role">Russell Oliver | Founder</div>
        
        <div class="mission-text">
          <p>My goal is simple: To help everyday Kiwis build real, sustainable businesses.</p>
          <p>I don't do hype, and I certainly don't build bloated websites that you simply don't need right now.</p>
          <p>Instead, I want to arm you with:</p>
          
          <ul class="quals-list" style="margin-bottom: 2rem;">
            <li>Clear, professional branding that builds trust.</li>
            <li>Lightning-fast websites that you actually own.</li>
            <li>Honest, practical business advice.</li>
            <li>Digital systems that safely scale as you grow.</li>
          </ul>
          
          <p>I treat your investment with deep respect, because I know exactly how much hard work it took to earn it.</p>
          <p>If you are just starting out and feeling overwhelmed by the tech, please know this: You are not behind. You are exactly where you need to be. You are just at the beginning. And beginnings are my specialty.</p>
          
          <p style="text-align: center; font-weight: 800; color: var(--phoenix); margin-top: 3rem; font-size: 1.4rem; text-transform: uppercase;">Let's build this together.</p>
        </div>

        <a href="contact.php" class="btn-primary">Send Me a Message</a>
      </section>

      <div class="next-steps">
        <p class="next-steps-title">How I Can Help You Get Started</p>
        <a href="service-5-page-html-website.php" class="step-link">5-Page Custom Website ($650)</a>
        <a href="service-seo.php" class="step-link">Website SEO Audit ($49.99)</a>
      </div>

    </main>
    <?php include 'footer.php'; ?>
  </div>

  
  </script>
</body>
</html>