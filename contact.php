<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Creative Startup NZ</title>
  <meta name="description" content="Get in touch with Creative Startup NZ. Book a free, no-pressure chat with Russell Oliver to figure out your next steps for your website or business.">

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

    /* CONTACT PAGE STYLES */
    .contact-header {
      padding: 6rem 2rem;
      background-color: var(--surface);
      border-bottom: 1px solid var(--structure);
      text-align: center;
    }

    .contact-title {
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      margin-bottom: 0.5rem;
    }

    .contact-subtitle {
      font-size: 1.2rem;
      color: var(--signal-med);
      max-width: 600px;
      margin: 0 auto;
    }

    /* GRID LAYOUT */
    .contact-grid {
      display: grid;
      grid-template-columns: 1.5fr 1fr;
      min-height: 600px;
    }

    /* LEFT: CONTACT FORM */
    .form-sector {
      padding: 5rem 4rem;
      background-color: var(--void);
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .status-indicator {
      font-family: var(--font-cmd);
      font-weight: 700;
      color: #155724;
      background-color: #d4edda;
      border: 1px solid #c3e6cb;
      margin-bottom: 2rem;
      display: inline-block;
      padding: 0.5rem 1rem;
      align-self: flex-start;
      border-radius: 50px;
      font-size: 0.85rem;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .form-instruction {
      font-size: 2.2rem;
      margin-bottom: 1rem;
    }

    /* FORM STYLES */
    .contact-form { display: flex; flex-direction: column; gap: 1.5rem; }
    .form-group { display: flex; flex-direction: column; gap: 0.5rem; }

    .form-label { 
      font-family: var(--font-cmd); 
      font-weight: 700;
      color: var(--signal-high); 
      font-size: 0.85rem; 
      text-transform: uppercase; 
      letter-spacing: 1px; 
    }

    .form-input, .form-select, .form-textarea {
      background-color: var(--surface);
      border: 1px solid var(--structure);
      color: var(--signal-high);
      padding: 1rem;
      font-family: var(--font-brief);
      border-radius: 6px;
      font-size: 1rem;
      transition: all 0.3s ease;
      width: 100%;
    }

    .form-input:focus, .form-select:focus, .form-textarea:focus { 
      outline: none; 
      border-color: var(--phoenix); 
      box-shadow: 0 0 0 3px rgba(255, 106, 0, 0.1); 
    }

    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }

    /* Custom Select Arrow */
    .form-select {
      appearance: none;
      background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23FF6A00' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right 1rem center;
      background-size: 1em;
      cursor: pointer;
    }

    /* Dark mode tweaks for standard browser UI elements */
    [data-theme="dark"] input[type="date"]::-webkit-calendar-picker-indicator { filter: invert(0.8); cursor: pointer; }

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
      text-align: center;
      width: 100%;
      border-radius: 8px;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      margin-top: 1rem;
      box-shadow: 0 4px 15px rgba(255, 106, 0, 0.2);
    }

    .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(255, 106, 0, 0.3); }
    .btn-submit:disabled { background-color: var(--structure); color: var(--signal-low); cursor: not-allowed; transform: none; box-shadow: none; }

    /* RIGHT: INFO SECTOR */
    .info-sector {
      background-color: var(--surface);
      padding: 5rem 4rem;
      border-left: 1px solid var(--structure);
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }

    .contact-profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 3px solid var(--phoenix);
      object-fit: cover;
      margin-bottom: 2.5rem;
      display: block;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .info-block { margin-bottom: 3rem; }

    .info-title {
      font-family: var(--font-cmd);
      font-weight: 700;
      color: var(--signal-high);
      font-size: 1.1rem;
      margin-bottom: 0.8rem;
      text-transform: uppercase;
      display: flex;
      align-items: center;
    }

    .info-icon { margin-right: 10px; font-size: 1.2rem; }

    .info-data {
      color: var(--signal-med);
      font-size: 1.05rem;
    }

    /* SOCIAL GRID STYLING */
    .social-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
    }

    .social-btn {
      display: block;
      padding: 0.8rem;
      text-align: center;
      border: 1px solid var(--structure);
      color: var(--signal-med);
      font-family: var(--font-cmd);
      font-weight: 600;
      font-size: 0.95rem;
      background-color: var(--void);
      border-radius: 6px;
      text-transform: uppercase;
      transition: all 0.2s ease;
    }

    .social-btn:hover {
      border-color: var(--phoenix);
      color: var(--phoenix);
      background-color: var(--surface);
    }

    .social-btn.yt-btn:hover { border-color: #FF0000; color: #FF0000; }
    .social-btn.li-btn:hover { border-color: #0077B5; color: #0077B5; }

    .map-frame {
      width: 100%;
      height: 250px;
      border: 1px solid var(--structure);
      border-radius: 12px;
    }

    @media (max-width: 900px) {
      .contact-grid { grid-template-columns: 1fr; }
      .info-sector { border-left: none; border-top: 1px solid var(--structure); }
      .form-sector, .info-sector { padding: 3rem 1.5rem; }
      .form-row { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

  <div class="mainframe">
    <?php include 'header.php'; ?>

    <main>
      <header class="contact-header">
        <h1 class="contact-title">Let's Have a Chat</h1>
        <p class="contact-subtitle">No jargon, no pressure. Just honest advice for your business.</p>
      </header>

      <div class="contact-grid">
        
        <section class="form-sector">
          <div class="status-indicator">Currently Accepting New Clients</div>
          
          <h2 class="form-instruction">Book a Free Session</h2>
          <p style="margin-bottom: 2.5rem; color: var(--signal-med); font-size: 1.1rem;">Pick a time that works for you below. We'll have a casual chat about where your business is at, what's frustrating you right now, and how we can help you move forward.</p>

          <form class="contact-form" id="bookingForm">
            <input type="hidden" name="Service Required" value="General Contact/Booking">
            
            <div style="position: absolute; left: -9999px; top: -9999px;" aria-hidden="true">
              <input type="text" id="honeypot_trap" name="honey" tabindex="-1" autocomplete="off">
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="Name">Your Name *</label>
                <input type="text" id="Name" name="Name" class="form-input" placeholder="e.g. Jane Doe" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="Mobile">Phone Number *</label>
                <input type="tel" id="Mobile" name="Mobile" class="form-input" placeholder="021 123 4567" required>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="Email">Email Address *</label>
              <input type="email" id="Email" name="Email Address" class="form-input" placeholder="hello@yourbusiness.co.nz" required>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="reqDate">Preferred Date *</label>
                <input type="date" id="reqDate" name="Requested Date" class="form-input" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="Preferred Time">Preferred Time *</label>
                <select id="Preferred Time" name="Preferred Time" class="form-select" required>
                  <option value="" disabled selected>Select a Window</option>
                  <optgroup label="Morning">
                    <option value="9:00 AM - 10:00 AM">9:00 AM - 10:00 AM</option>
                    <option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
                    <option value="11:00 AM - 12:00 PM">11:00 AM - 12:00 PM</option>
                  </optgroup>
                  <optgroup label="Afternoon">
                    <option value="1:00 PM - 2:00 PM">1:00 PM - 2:00 PM</option>
                    <option value="2:00 PM - 3:00 PM">2:00 PM - 3:00 PM</option>
                    <option value="3:00 PM - 4:00 PM">3:00 PM - 4:00 PM</option>
                  </optgroup>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="Notes">What's on your mind? *</label>
              <textarea id="Notes" name="Notes" class="form-textarea" rows="4" placeholder="Tell us a little bit about your business and what you'd like to discuss..." required></textarea>
            </div>

            <button type="submit" class="btn-submit" id="submitBtn">
              Book Your Chat
            </button>

            <div id="formStatus" style="display:none; font-family: var(--font-brief); font-weight: 600; color: #155724; background-color: #d4edda; margin-top: 1rem; border: 1px solid #c3e6cb; padding: 1rem; border-radius: 6px; text-align: center;">
              Thank you! We will be in touch shortly to confirm your booking.
            </div>
          </form>
        </section>

        <section class="info-sector">
          <img src="images/russell.jpg" alt="Russell Oliver" class="contact-profile-img">

          <div class="info-block">
            <div class="info-title"><span class="info-icon">✉️</span> Direct Email</div>
            <div class="info-data"><a href="mailto:russell@creativestartupnz.com" style="color: var(--phoenix); text-decoration: underline;">russell@creativestartupnz.com</a></div>
          </div>

          <div class="info-block">
            <div class="info-title"><span class="info-icon">🤝</span> Connect With Us</div>
            <div class="social-grid">
              <a href="https://www.facebook.com/CreativeStartupNZ" target="_blank" class="social-btn">Facebook</a>
              <a href="https://www.linkedin.com/in/rgrusselloliver" target="_blank" class="social-btn li-btn">LinkedIn</a>
              <a href="https://www.youtube.com/@CREATIVESTARTUPNZ" target="_blank" class="social-btn yt-btn" style="grid-column: span 2;">YouTube Channel</a>
            </div>
          </div>

          <div class="info-block">
            <div class="info-title"><span class="info-icon">📍</span> Our Location</div>
            <div class="info-data">
              Canterbury, South Island<br>
              New Zealand
            </div>
          </div>

          <iframe src="https://maps.google.com/maps?q=Canterbury,%20New%20Zealand&t=&z=8&ie=UTF8&iwloc=&output=embed" class="map-frame" allowfullscreen="" loading="lazy"></iframe>
        </section>

      </div>
    </main>

    <?php include 'footer.php'; ?>
  </div>

  <script>
    const form = document.getElementById('bookingForm');
    const status = document.getElementById('formStatus');
    const btn = document.getElementById('submitBtn');

    // LIVE CRM BACKEND URL
    const SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbwUMI-fBoFdCfuu39Q_20MbX0e6m4oOmccTQyu_Tj60B9qagxNVpIdRhYth35_RgBZ0Ew/exec';

    form.addEventListener('submit', function(e) {
      e.preventDefault();

      btn.disabled = true;
      btn.textContent = 'Sending Request...';
      status.style.display = 'none';

      const formData = new FormData(form);

      fetch(SCRIPT_URL, {
        method: 'POST',
        mode: 'no-cors',
        body: formData
      })
      .then(() => {
        status.textContent = 'Thank you! We have received your request and will be in touch shortly to confirm.';
        status.style.display = 'block';
        status.style.color = '#155724';
        status.style.backgroundColor = '#d4edda';
        status.style.borderColor = '#c3e6cb';
        form.reset();
        btn.textContent = 'Message Sent';
      })
      .catch(error => {
        console.error('Error:', error);
        status.textContent = 'Something went wrong. Please try again.';
        status.style.display = 'block';
        status.style.color = '#721c24';
        status.style.backgroundColor = '#f8d7da';
        status.style.borderColor = '#f5c6cb';
        btn.disabled = false;
        btn.textContent = 'Book Your Chat';
      });
    });
  </script>

  
  </script>
</body>
</html>