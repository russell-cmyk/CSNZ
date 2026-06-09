<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live Workshops & Events | Creative Startup NZ</title>
  <meta name="description" content="Free practical workshops for New Zealand founders. Learn how to use AI for email marketing, set up your business systems, and connect with your audience.">
  
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

    /* WORKSHOP HERO */
    .workshop-hero {
      padding: 8rem 2rem;
      background-color: var(--surface);
      border-bottom: 1px solid var(--structure);
      text-align: center;
      background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)), url('images/e-newsletter-workshop.png');
      background-size: cover;
      background-position: center;
    }

    .workshop-badge {
      background-color: var(--phoenix);
      color: #000;
      padding: 0.4rem 1rem;
      font-family: var(--font-cmd);
      font-weight: 700;
      text-transform: uppercase;
      font-size: 0.85rem;
      display: inline-block;
      margin-bottom: 1.5rem;
      border-radius: 50px;
      letter-spacing: 1px;
    }

    .workshop-title {
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      color: #FFFFFF; 
      margin-bottom: 1rem;
      text-shadow: 0 4px 15px rgba(0,0,0,0.8);
    }

    .workshop-subtitle {
      font-size: 1.2rem;
      color: #E0E0E0; 
      max-width: 700px;
      margin: 0 auto;
      text-shadow: 0 2px 10px rgba(0,0,0,0.8);
    }

    /* COUNTDOWN SECTION */
    .countdown-section {
      background-color: var(--surface);
      padding: 3rem 1rem;
      border-bottom: 1px solid var(--structure);
      text-align: center;
    }

    .countdown-header {
      color: var(--signal-high);
      font-family: var(--font-cmd);
      font-weight: 700;
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
      display: block;
    }

    .timer-flex {
      display: inline-flex;
      gap: 1rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    .timer-box {
      background-color: var(--void);
      border: 1px solid var(--structure);
      padding: 1rem;
      min-width: 100px;
      border-radius: 8px;
    }

    .timer-value {
      font-family: var(--font-cmd);
      font-weight: 800;
      font-size: 3rem;
      color: var(--phoenix);
      line-height: 1;
      display: block;
      margin-bottom: 5px;
    }

    .timer-label {
      font-family: var(--font-brief);
      color: var(--signal-med);
      font-size: 0.8rem;
      text-transform: uppercase;
      font-weight: 600;
      letter-spacing: 1px;
    }

    /* CONTENT GRID */
    .workshop-content-grid {
      display: grid;
      grid-template-columns: 1.8fr 1fr;
      background-color: var(--void);
    }

    /* LEFT: WORKSHOP DETAILS */
    .details-section {
      padding: 5rem 4rem;
      border-right: 1px solid var(--structure);
    }

    .details-title {
      font-size: 2.2rem;
      margin-bottom: 1.5rem;
    }

    .details-text { 
      margin-bottom: 1.5rem; 
      font-size: 1.1rem; 
      color: var(--signal-med); 
    }

    /* REQUIREMENTS BOX */
    .requirements-box {
      background-color: var(--surface);
      border: 1px solid var(--structure);
      padding: 2.5rem;
      margin-top: 3rem;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    }

    .requirements-title {
      font-family: var(--font-cmd);
      font-weight: 700;
      color: var(--signal-high);
      border-bottom: 1px solid var(--structure);
      padding-bottom: 0.8rem;
      margin-bottom: 1.5rem;
      display: block;
      font-size: 1.2rem;
    }

    .requirement-item {
      display: flex;
      margin-bottom: 1.5rem;
      align-items: flex-start;
    }

    .requirement-icon {
      background-color: var(--phoenix);
      color: #000;
      width: 32px;
      height: 32px;
      text-align: center;
      font-weight: 700;
      margin-right: 1rem;
      font-family: var(--font-cmd);
      border-radius: 50%;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .workspace-link {
      color: var(--phoenix);
      text-decoration: underline;
      font-weight: 600;
      text-underline-offset: 4px;
      transition: color 0.2s ease;
    }
    
    .workspace-link:hover { color: var(--signal-high); }

    /* RIGHT: REGISTRATION FORM */
    .registration-section {
      padding: 5rem 3rem;
      background-color: var(--surface);
    }

    .registration-title {
      font-size: 1.8rem;
      margin-bottom: 2rem;
    }

    .form-label {
      display: block;
      font-family: var(--font-cmd);
      font-weight: 700;
      font-size: 0.85rem;
      color: var(--signal-high);
      margin-bottom: 0.5rem;
    }

    .form-input {
      width: 100%;
      background-color: var(--void);
      border: 1px solid var(--structure);
      color: var(--signal-high);
      padding: 1rem;
      font-family: var(--font-brief);
      font-size: 1rem;
      outline: none;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      margin-bottom: 1.5rem;
      border-radius: 6px;
    }

    .form-input:focus { 
      border-color: var(--phoenix); 
      box-shadow: 0 0 0 3px rgba(255, 106, 0, 0.1); 
    }

    .btn-submit {
      background-color: var(--phoenix);
      color: #000;
      border: none;
      padding: 1.2rem 2rem;
      font-family: var(--font-cmd);
      font-size: 1.1rem;
      font-weight: 700;
      cursor: pointer;
      text-transform: uppercase;
      width: 100%;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      border-radius: 8px;
      margin-top: 1rem;
      box-shadow: 0 4px 15px rgba(255, 106, 0, 0.2);
    }
    
    .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(255, 106, 0, 0.3); }

    .privacy-note {
      margin-top: 1.5rem;
      font-size: 0.85rem;
      color: var(--signal-low);
      text-align: center;
    }

    @media (max-width: 900px) {
      .workshop-content-grid { grid-template-columns: 1fr; }
      .workshop-title { font-size: 2.5rem; }
      .details-section { padding: 3rem 1.5rem; border-right: none; border-bottom: 1px solid var(--structure); }
      .registration-section { padding: 3rem 1.5rem; }
    }
  </style>
</head>
<body>
  <div class="mainframe">
    <?php include 'header.php'; ?>
    <main>
      
      <header class="workshop-hero">
        <span class="workshop-badge">Free Online Workshop</span>
        <h1 class="workshop-title">Write Your Newsletter in Minutes Using AI</h1>
        <p class="workshop-subtitle">Stop staring at a blank screen. Learn practical, gentle ways to write faster and connect with your audience.</p>
      </header>

      <section class="countdown-section">
        <span class="countdown-header" id="main-countdown-label">Calculating Next Workshop Date...</span>
        
        <div class="timer-flex" id="timer">
          <div class="timer-box"><span class="timer-value" id="d">00</span><span class="timer-label">Days</span></div>
          <div class="timer-box"><span class="timer-value" id="h">00</span><span class="timer-label">Hours</span></div>
          <div class="timer-box"><span class="timer-value" id="m">00</span><span class="timer-label">Mins</span></div>
          <div class="timer-box"><span class="timer-value" id="s">00</span><span class="timer-label">Secs</span></div>
        </div>
      </section>

      <div class="workshop-content-grid">
        
        <section class="details-section">
          <h2 class="details-title">What You'll Learn</h2>
          <p class="details-text">Building an email list is one of the most reliable ways to connect with your customers—you aren't at the mercy of unpredictable social media algorithms. In this supportive, practical workshop, we'll walk you through exactly how to build a professional email template using free AI tools.</p>
          <p class="details-text"><strong>Our Goal:</strong> To help you confidently generate, refine, and send a newsletter that perfectly matches your authentic brand voice, all in under 60 minutes.</p>

          <div class="requirements-box">
            <span class="requirements-title">Things to keep in mind</span>
            
            <div class="requirement-item">
              <div class="requirement-icon">1</div>
              <div>
                <strong style="color: var(--signal-high); display: block; margin-bottom: 5px;">The Right Tools</strong>
                <span style="font-size: 0.95rem; color: var(--signal-med); line-height: 1.5; display: block;">
                  We recommend using Google Workspace Standard (or above) to get the most out of this session. Please note that the basic Starter Plan doesn't include the advanced layout features we'll be using during the demonstration.<br><br>
                  <a href="https://workspace.google.com/" target="_blank" class="workspace-link">View Google Workspace Plans</a>
                </span>
              </div>
            </div>

            <div class="requirement-item" style="margin-bottom: 0;">
              <div class="requirement-icon">2</div>
              <div>
                <strong style="color: var(--signal-high); display: block; margin-bottom: 5px;">Limited Spots Available</strong>
                <span style="font-size: 0.95rem; color: var(--signal-med); line-height: 1.5; display: block;">
                  To make sure we have time to answer everyone's questions and provide genuine support, we keep our attendee numbers small. Registration closes exactly <strong>7 days before</strong> the event starts.
                </span>
              </div>
            </div>
          </div>
        </section>

        <section class="registration-section">
          <h3 class="registration-title">Reserve Your Free Ticket</h3>
          
          <form action="https://323c9805.sibforms.com/serve/MUIFAHh73LGg80xqPx9Nan7MgCYpVaQwZRT7NraXlTNcgWp5HFr8JNQgr6IZObYLkAK6j_bTO787wO6z1rAKGjSWDKqA6uu_Zsjs_9jToE5mGjAdEBTSC2MjibK9C_WnO2yRPUchSc0zFVaOduufzcjdAZjKdlS2dogch9sS5T7P5wDcsjaAsG10rgQMVgr0MgMxg9d2umTLtHeTDQ==" method="POST">
            
            <label class="form-label">First Name *</label>
            <input type="text" name="FIRSTNAME" class="form-input" placeholder="e.g. John" required>

            <label class="form-label">Last Name *</label>
            <input type="text" name="LASTNAME" class="form-input" placeholder="e.g. Doe" required>

            <label class="form-label">Email Address *</label>
            <input type="email" name="EMAIL" class="form-input" placeholder="hello@company.co.nz" required>

            <input type="hidden" name="locale" value="en">
            <input type="text" name="email_address_check" value="" class="input--hidden" style="display:none;">

            <button type="submit" class="btn-submit">Save My Spot</button>
            
            <p class="privacy-note">
              By registering, you'll receive the workshop link and occasional helpful tips for your business. We respect your inbox.
            </p>
          </form>
        </section>

      </div>
    </main>
    <?php include 'footer.php'; ?>
  </div>

  
  </script>

  <script>
    // ==========================================
    // EVERGREEN MAIN COUNTDOWN LOGIC
    // ==========================================
    (function() {
      // Initial Base Date: FEB 28, 2026 09:00:00 NZDT (Months are 0-indexed)
      var targetDate = new Date(2026, 1, 28, 9, 0, 0); 
      
      // Function to format the date into "DD MMM YYYY"
      function formatWorkshopDate(d) {
        var months = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
        var day = d.getDate();
        var month = months[d.getMonth()];
        var year = d.getFullYear();
        return (day < 10 ? "0" + day : day) + " " + month + " " + year;
      }

      // Function to calculate registration close date (7 days prior)
      function getCloseDate(d) {
        var closeDate = new Date(d.getTime());
        closeDate.setDate(closeDate.getDate() - 7);
        var months = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
        var day = closeDate.getDate();
        var month = months[closeDate.getMonth()];
        return (day < 10 ? "0" + day : day) + " " + month;
      }

      // Automatically roll the date forward by 28 days if target is in the past
      var now = new Date();
      while (targetDate.getTime() < now.getTime()) {
        targetDate.setDate(targetDate.getDate() + 28);
      }

      var fDate = targetDate.getTime();
      var mainLabelEl = document.getElementById("main-countdown-label");

      // Set initial labels
      if (mainLabelEl) {
        mainLabelEl.innerHTML = "Next Workshop: " + formatWorkshopDate(targetDate) + " | Registration closes " + getCloseDate(targetDate);
      }

      // Fire timer every second
      setInterval(function() {
        var currentTime = new Date().getTime();
        var distance = fDate - currentTime;

        // If countdown reaches zero, push forward 28 days instantly
        if (distance < 0) {
          targetDate.setDate(targetDate.getDate() + 28);
          fDate = targetDate.getTime();
          distance = fDate - currentTime;
          
          if (mainLabelEl) {
            mainLabelEl.innerHTML = "Next Workshop: " + formatWorkshopDate(targetDate) + " | Registration closes " + getCloseDate(targetDate);
          }
        }

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        var elD = document.getElementById("d");
        var elH = document.getElementById("h");
        var elM = document.getElementById("m");
        var elS = document.getElementById("s");

        if (elD) elD.innerHTML = (days < 10 ? "0" : "") + days;
        if (elH) elH.innerHTML = (hours < 10 ? "0" : "") + hours;
        if (elM) elM.innerHTML = (minutes < 10 ? "0" : "") + minutes;
        if (elS) elS.innerHTML = (seconds < 10 ? "0" : "") + seconds;
      }, 1000);
    })();
  </script>
</body>
</html>