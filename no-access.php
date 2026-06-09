<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session Expired | Creative Startup NZ</title>
  <meta name="description" content="Your session has expired. Let's get you safely logged back in.">
  <meta name="robots" content="noindex, nofollow">
  <link rel="icon" type="image/png" href="images/favicon.png">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">

	
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
      background: var(--void); 
      min-height: 100vh; 
      border-left: var(--border-std); 
      border-right: var(--border-std); 
      transition: background-color 0.3s ease;
    }

    h1, h2, h3, h4 { 
      font-family: var(--font-cmd); 
      color: var(--signal-high); 
      font-weight: 800; 
      line-height: 1.2; 
      transition: color 0.3s ease;
    }

    .panel { 
      background-color: var(--surface); 
      border: var(--border-std); 
      padding: 2.5rem; 
      box-shadow: 0 4px 20px rgba(0,0,0,0.05); 
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    /* ERROR HEADER */
    .error-header { padding: 4rem 2rem 2rem 2rem; text-align: center; }
    .error-title { font-size: 3rem; color: var(--phoenix); margin-bottom: 1rem; text-transform: uppercase; }
    .error-subtitle { font-size: 1.2rem; color: var(--signal-high); font-weight: 500; transition: color 0.3s ease;}

    /* LAYOUT GRIDS */
    .content-grid { display: grid; grid-template-columns: 1fr; gap: 2rem; max-width: 900px; margin: 0 auto 4rem auto; padding: 0 2rem; }

    /* STATUS BLOCK */
    .intel-block { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; text-align: center; margin-bottom: 2rem; background: var(--surface); padding: 1.5rem; border: var(--border-std); transition: background-color 0.3s ease, border-color 0.3s ease; }
    .status-item { border-right: var(--border-std); transition: border-color 0.3s ease; }
    .status-item:last-child { border-right: none; }
    .status-label { font-family: var(--font-data); font-size: 0.85rem; color: var(--signal-low); display: block; margin-bottom: 0.3rem; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px; transition: color 0.3s ease;}
    .status-value { font-family: var(--font-cmd); color: var(--signal-high); font-size: 1.3rem; font-weight: 700; text-transform: uppercase; transition: color 0.3s ease;}
    .status-safe { color: var(--terminal); }

    /* VIDEO CONTAINER */
    .video-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border: var(--border-std); margin-bottom: 2rem; background-color: #000; transition: border-color 0.3s ease;}
    .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }

    /* PRICING & RENEWAL */
    .pricing-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1rem; margin-bottom: 2rem; }
    .price-card { border: var(--border-std); padding: 1.5rem; text-align: center; background: var(--void); transition: background-color 0.3s ease, border-color 0.3s ease; }
    .price-card h4 { color: var(--signal-med); font-size: 0.9rem; font-family: var(--font-data); text-transform: uppercase; letter-spacing: 0.5px; }
    .price-card .val { font-family: var(--font-cmd); font-size: 1.5rem; color: var(--signal-high); font-weight: 800; margin: 0.5rem 0; transition: color 0.3s ease;}

    /* FORM ELEMENTS */
    .label-text { font-family: var(--font-data); font-size: 0.85rem; color: var(--phoenix); display: block; margin-bottom: 0.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; }
    input, textarea, select { width: 100%; background-color: var(--void); border: var(--border-std); color: var(--signal-high); padding: 0.85rem; margin-bottom: 1.5rem; font-family: var(--font-brief); transition: all 0.2s ease; }
    input:focus, textarea:focus, select:focus { outline: none; border-color: var(--phoenix); box-shadow: 0 0 0 2px rgba(255, 106, 0, 0.2); }
    
    button { background-color: var(--phoenix); color: #000000; font-family: var(--font-cmd); text-transform: uppercase; letter-spacing: 0.5px; border: none; padding: 1rem; font-weight: 700; cursor: pointer; width: 100%; transition: all 0.2s ease; font-size: 1.1rem; }
    button:hover { transform: translateY(-2px); filter: brightness(110%); }

    .help-links { text-align: center; margin-top: 2rem; font-size: 0.95rem; }
    .help-links a { font-family: var(--font-brief); color: var(--phoenix); text-decoration: none; font-weight: 600; margin: 0 1rem; transition: color 0.2s ease;}
    .help-links a:hover { color: var(--signal-high); text-decoration: underline; }

    @media (max-width: 768px) {
      .intel-block { grid-template-columns: 1fr; gap: 1rem; }
      .status-item { border-right: none; border-bottom: var(--border-std); padding-bottom: 1rem; }
      .status-item:last-child { border-bottom: none; padding-bottom: 0; }
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
      <header class="error-header">
        <h1 class="error-title">Oops! Session Expired.</h1>
        <p class="error-subtitle">Let's get you safely logged back in.</p>
      </header>

      <div class="content-grid">
        
        <div class="intel-block">
          <div class="status-item">
            <span class="status-label">Account Status</span>
            <span class="status-value" style="color: var(--warning);">Logged Out</span>
          </div>
          <div class="status-item">
            <span class="status-label">Data Privacy</span>
            <span class="status-value status-safe">Secure</span>
          </div>
          <div class="status-item">
            <span class="status-label">Your Drafts</span>
            <span class="status-value status-safe">Saved Locally</span>
          </div>
        </div>

        <div class="panel">
          <h2 style="margin-bottom: 1rem;">What Happened?</h2>
          <p style="margin-bottom: 1.5rem; color: var(--signal-med); transition: color 0.3s ease;">Your access to the Weekly Social Media Planner has been paused to protect your accounts. You are seeing this page because your login details were incorrect, or your trial/subscription has expired.</p>
          <p style="margin-bottom: 1.5rem; color: var(--signal-med); transition: color 0.3s ease;"><strong style="color: var(--signal-high);">Don't worry.</strong> All your scheduled posts, text drafts, and images are perfectly safe and waiting exactly where you left them locally on your device. Take a breath, and let's get you sorted out below.</p>
          
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/EX5H8ZmBz3M?autoplay=0" title="Data is Safe Explanation" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

        <div class="panel">
          <h2 style="color: var(--terminal); text-align: center; margin-bottom: 1rem;">Restore Your Access</h2>
          <p style="text-align: center; margin-bottom: 2rem; color: var(--signal-med); transition: color 0.3s ease;">Select a plan to extend your access. We will email you a secure invoice to get your account reactivated.</p>
          
          <div class="pricing-grid">
            <div class="price-card"><h4>Monthly</h4><div class="val">$14.99</div></div>
            <div class="price-card" style="border-color: var(--phoenix); outline: 2px solid var(--phoenix);"><h4>Quarterly (3 Mo)</h4><div class="val">$40.48</div><span style="color:var(--phoenix); font-family: var(--font-data); font-size:0.75rem; text-transform: uppercase; font-weight:700;">Most Popular</span></div>
            <div class="price-card"><h4>Semi-Annual (6 Mo)</h4><div class="val">$71.95</div></div>
            <div class="price-card"><h4>Annual (12 Mo)</h4><div class="val">$116.92</div></div>
          </div>

          <div style="border: 1px dashed var(--terminal); padding: 1rem; margin-bottom: 2rem; text-align: center; transition: border-color 0.3s ease;">
            <strong style="color: var(--terminal); font-family: var(--font-data); text-transform: uppercase; font-size: 0.9rem;">🤝 Referral Bonus:</strong> <span style="color: var(--signal-med);">Refer a fellow business owner. If they sign up, you get <strong style="color: var(--signal-high);">1 Free Month</strong> added to your plan.</span>
          </div>

          <form id="recoveryForm" onsubmit="submitRenewal(event)">
            <label class="label-text">Your Account Email *</label>
            <input type="email" id="renewEmail" required placeholder="The email you used to sign up">

            <label class="label-text">Preferred Plan *</label>
            <select id="renewTier" required>
              <option value="Monthly Plan">Monthly Plan ($14.99)</option>
              <option value="Quarterly Plan">Quarterly Plan ($40.48)</option>
              <option value="Semi-Annual Plan">Semi-Annual Plan ($71.95)</option>
              <option value="Annual Plan">Annual Plan ($116.92)</option>
            </select>
            
            <label class="label-text">Referred By (Optional)</label>
            <input type="email" id="renewReferral" placeholder="Email of the person who sent you">
            
            <label class="label-text">How else can we help? (Optional)</label>
            <textarea id="renewNotes" rows="2" placeholder="Website needs? Social strategy? Let us know."></textarea>
            
            <button type="submit">Request Account Reactivation</button>
          </form>

          <div class="help-links">
            <a href="social-schedule.php">Try Logging In Again</a> | 
            <a href="contact.php">Contact Support</a>
          </div>
        </div>

      </div>
    </main>

    <?php include 'footer.php'; ?>
  </div>

  
  </script>
  
  <script>
    // Your live Web App URL
    const SCRIPT_URL = "https://script.google.com/macros/s/AKfycbyeK5r9c-AwirKgO7R41EvgIkmZ02MVTfzyWNuSrPZ16p3njeEJF1Ih6tvk5uOZaivoWw/exec";

    async function submitRenewal(e) {
      e.preventDefault();
      
      const btn = e.target.querySelector('button[type="submit"]');
      const originalText = btn.innerText;
      
      // Gather data from the form
      const payload = {
        action: "requestRenewal",
        email: document.getElementById('renewEmail').value,
        tier: document.getElementById('renewTier').value,
        referral: document.getElementById('renewReferral').value,
        notes: document.getElementById('renewNotes').value
      };

      if (!payload.email) return;

      // Update button state to show it is working
      btn.innerText = "Sending Request...";
      btn.disabled = true;

      try {
        const response = await fetch(SCRIPT_URL, {
          method: 'POST',
          body: JSON.stringify(payload)
        });
        const res = await response.json();

        if (res.success) {
          alert("Reactivation request received for " + payload.email + "! We will email you your secure invoice shortly.");
          document.getElementById('recoveryForm').reset();
        } else {
          // If email is not found in the Google Sheet, it will alert them here.
          alert("Notice: " + res.error);
        }
      } catch (err) {
        alert("Network error. Please try again.");
      }

      // Restore button state
      btn.innerText = originalText;
      btn.disabled = false;
    }
  </script>
</body>
</html>