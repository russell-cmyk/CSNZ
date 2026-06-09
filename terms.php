<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terms & Privacy | Creative Startup NZ</title>
  <meta name="description" content="Terms & Conditions and Privacy Policy for Creative Startup NZ. Clear, straightforward information regarding our services and your data.">
  
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

    /* HEADER */
    .legal-header {
      padding: 6rem 2rem 4rem 2rem;
      background-color: var(--surface);
      border-bottom: 1px solid var(--structure);
      text-align: center;
      transition: background-color 0.3s ease;
    }

    .legal-title {
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      margin-bottom: 1rem;
    }

    .legal-subtitle {
      font-size: 1.15rem;
      color: var(--signal-med);
      max-width: 600px;
      margin: 0 auto;
    }

    /* CONTENT CONTAINER */
    .legal-content {
      max-width: 900px;
      margin: 0 auto;
      padding: 4rem 2rem;
      background-color: var(--void);
    }

    /* WARNING BOX (B2B NOTICE) */
    .notice-box {
      border: 1px solid var(--warning);
      background-color: rgba(229, 115, 115, 0.05); /* Light red tint based on --warning */
      padding: 2rem;
      border-radius: 8px;
      margin-bottom: 3rem;
    }

    .notice-header {
      color: var(--warning);
      font-family: var(--font-cmd);
      font-weight: 700;
      font-size: 1.2rem;
      text-transform: uppercase;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* CLAUSE STYLING */
    .clause-block {
      margin-bottom: 3.5rem;
    }

    .clause-title {
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
      border-bottom: 1px solid var(--structure);
      padding-bottom: 0.5rem;
    }

    .clause-text {
      font-size: 1.05rem;
      margin-bottom: 1rem;
    }

    .clause-list {
      list-style: none;
      padding-left: 0;
      margin-top: 1rem;
    }

    .clause-list li {
      margin-bottom: 1rem;
      padding-left: 1.8rem;
      position: relative;
      font-size: 1.05rem;
    }

    .clause-list li::before {
      content: '—';
      position: absolute;
      left: 0;
      color: var(--phoenix);
      font-weight: 700;
    }

    /* SUB-HEADERS WITHIN CLAUSES */
    .sub-clause {
      font-family: var(--font-cmd);
      font-weight: 700;
      color: var(--signal-high);
      font-size: 1.15rem;
      margin-top: 2rem;
      margin-bottom: 1rem;
    }

    /* PRIVACY SPECIFIC */
    .privacy-divider {
      border: 0;
      border-top: 2px solid var(--structure);
      margin: 5rem 0;
    }

    .privacy-box {
      background-color: var(--surface);
      border: 1px solid var(--structure);
      padding: 2rem;
      border-radius: 8px;
      margin-top: 2rem;
    }

    .btn-primary { 
      background-color: var(--phoenix); 
      color: #000; 
      font-family: var(--font-cmd); 
      font-weight: 700; 
      padding: 1.2rem 3rem; 
      border: none; 
      cursor: pointer; 
      display: inline-block; 
      text-decoration: none; 
      font-size: 1.1rem; 
      text-transform: uppercase; 
      text-align: center; 
      transition: all 0.2s ease;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(255, 106, 0, 0.2);
    }
    .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(255, 106, 0, 0.3); }

    @media (max-width: 768px) {
      .legal-title { font-size: 2.5rem; }
      .legal-content { padding: 3rem 1.5rem; }
      .clause-title { font-size: 1.3rem; }
    }
  </style>
</head>
<body>

  <div class="mainframe">
    <?php include 'header.php'; ?>

    <main>
      <header class="legal-header">
        <h1 class="legal-title">Terms & Privacy</h1>
        <p class="legal-subtitle">Clear, straightforward information regarding our services, our payment structures, and how we handle your data.</p>
      </header>

      <div class="legal-content">

        <div class="notice-box">
          <div class="notice-header">
            Important: Business-To-Business (B2B) Agreement
          </div>
          <p style="color: var(--signal-med); font-size: 0.95rem;">
            By engaging with our services, the Client acknowledges that they are acquiring the Services for the purposes of a business. In accordance with <strong>Section 43 of the Consumer Guarantees Act 1993</strong> and <strong>Section 5D of the Fair Trading Act 1986</strong>, the provisions of these Acts shall not apply to this agreement.
          </p>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">1. Services and Definitions</h3>
          <ul class="clause-list">
            <li><strong>1.1 "The Company":</strong> Means Creative Startup NZ.</li>
            <li><strong>1.2 "Services":</strong> Includes Logo Design, Website Design (HTML & Google Sites), SEO Audits, Social Media Audits, Video Assets, and Strategic Consulting.</li>
            <li><strong>1.3 "Full Launch Package":</strong> A comprehensive service comprising a Professional Logo, 5-Page Website, Strategic Consult, and Stripe Integration.</li>
            <li><strong>1.4 "Weekly Social Media Planner":</strong> A locally-hosted, desktop-only software tool provided on a subscription basis.</li>
          </ul>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">2. Price and Payment</h3>
          <ul class="clause-list">
            <li><strong>2.1 Pricing:</strong> Prices are fixed as advertised on the website. All rates are exclusive of GST (15%) unless otherwise stated.</li>
            <li><strong>2.2 Stripe Fee Absorption:</strong> The Company absorbs all standard Stripe transaction fees. The price displayed + GST is the final price. No unexpected surcharges will be applied.</li>
            <li><strong>2.3 Standard Payment Terms:</strong> For standard services, payment is due in full prior to the commencement of work.</li>
          </ul>

          <div class="sub-clause">2.4 Payment Protocol (33/33/33 Plan)</div>
          <ul class="clause-list">
            <li><strong>Structure:</strong> Clients electing to use the payment plan agree to split the total fee into three equal installments:
              <br><br>
              <strong>(1) Kickoff:</strong> 33% due immediately to initiate the project.<br>
              <strong>(2) Go-Live:</strong> 33% due prior to the public launch of the website.<br>
              <strong>(3) Support Run:</strong> 33% due exactly 30 days after the Go-Live date.
            </li>
            <li><strong>Obligation:</strong> The Client acknowledges that the final payment is a fixed obligation for the services rendered. It is <em>not</em> contingent on the Client's sales or business performance during that 30-day period.</li>
          </ul>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">3. Client Responsibilities & Timelines</h3>
          <ul class="clause-list">
            <li><strong>3.1 Providing Assets:</strong> The Client agrees to provide all necessary copy, images, and branding assets within five (5) working days of the project kickoff.</li>
            <li><strong>3.2 Project Delays:</strong> Failure to provide assets within this window may result in the project being paused and moved to the end of the current production queue. Significant delays may incur a rescheduling fee.</li>
          </ul>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">4. Service-Specific Terms</h3>
          
          <div class="sub-clause">4.1 Logo Design</div>
          <ul class="clause-list">
            <li><strong>Deliverables:</strong> Custom design provided as high-resolution files (PNG, JPG, SVG/EPS).</li>
            <li><strong>Revisions:</strong> Includes up to three (3) rounds of minor revisions to ensure you are happy with the result.</li>
          </ul>

          <div class="sub-clause">4.2 Website Design</div>
          <ul class="clause-list">
            <li><strong>Scope:</strong> Design and development of up to five core static pages.</li>
            <li><strong>Integration:</strong> The Full Launch Package includes the setup of Stripe checkout and necessary API keys.</li>
            <li><strong>Delivery:</strong> For Google Sites, "Delivery" constitutes the formal transfer of "Owner" status to the Client's nominated Google Account.</li>
          </ul>

          <div class="sub-clause">4.3 Audits (SEO & Social)</div>
          <ul class="clause-list">
            <li><strong>Scope:</strong> Diagnosis of technical issues, keyword strategy, and engagement consistency.</li>
            <li><strong>Implementation:</strong> These services provide a clear roadmap and report. The physical implementation of these recommended changes is a separate service.</li>
          </ul>

          <div class="sub-clause">4.4 Video Assets</div>
          <ul class="clause-list">
            <li><strong>Scope:</strong> Custom animation of the Client's logo to create Intros or Outros.</li>
            <li><strong>Prerequisite:</strong> The Client must provide high-quality vector files of their logo for animation.</li>
          </ul>

          <div class="sub-clause">4.5 Consulting</div>
          <ul class="clause-list">
            <li><strong>Methodology:</strong> We focus on practical, Lean Startup strategies. We offer honest feedback and guidance, but we do not guarantee financial results as success relies on the Client's execution.</li>
          </ul>

          <div class="sub-clause" style="color: var(--warning);">4.6 Weekly Social Media Planner (Software)</div>
          <ul class="clause-list">
            <li><strong>5-Day Trial:</strong> A 5-day free trial is provided. It is the Client's responsibility to test the software during this period to ensure it meets their needs and works on their specific hardware.</li>
            <li><strong>Data Storage Limitations:</strong> The software operates entirely via local browser storage (IndexedDB) to ensure your data remains private. It is not compatible with mobile devices. <strong>Important: Clearing your browser cache, cookies, or site data will permanently delete all scheduled content.</strong> The Company cannot recover this data and accepts no liability for data lost due to user actions or automated browser clearing.</li>
          </ul>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">5. Ownership & Intellectual Property</h3>
          <ul class="clause-list">
            <li><strong>5.1 Standard Transfer:</strong> Upon full payment of the invoice, the Company assigns to the Client all Intellectual Property Rights in the final deliverables. You own it completely.</li>
            <li><strong>5.2 Ongoing Security:</strong> The Client is solely responsible for maintaining the security of their own accounts (Google, Domain Registrar, Stripe) after the handover is complete.</li>
          </ul>

          <div class="sub-clause">5.3 Conditional Transfer (Payment Plan Clients)</div>
          <ul class="clause-list">
            <li><strong>Provisional License:</strong> For clients utilizing the 33/33/33 payment plan, the Website operates under a Revocable Provisional License until the final payment clears. Intellectual Property rights do not officially transfer until the invoice is settled in full.</li>
            <li><strong>License Script:</strong> The website code contains a date-based license validator. If the final payment is not received by the agreed due date, a "Service Payment Due" notice will automatically appear on the website.</li>
            <li><strong>Tampering:</strong> Removing or altering this license code prior to making the final payment constitutes a breach of contract.</li>
          </ul>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">6. Warranties & Liability</h3>
          <ul class="clause-list">
            <li><strong>6.1 15-Day Warranty:</strong> We provide a 15-day technical warranty on Website code and links from the date of delivery. This covers our work, but excludes issues caused by the Client modifying the site or third-party platforms changing their systems.</li>
            <li><strong>6.2 No Earnings Guarantee:</strong> The Company provides tools and advice, but makes no guarantee regarding future revenue, website traffic, or business success.</li>
          </ul>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">7. Cancellations & Refunds</h3>
          <ul class="clause-list">
            <li><strong>7.1 Standard Services:</strong> As our work is custom and time-intensive, no refunds are provided once design, development, or consulting work has officially commenced.</li>
            <li><strong>7.2 Bundled Services:</strong> If a bundled package is cancelled partway through, we reserve the right to charge the standard list price for the individual services that have already been delivered.</li>
            <li><strong>7.3 Software Subscriptions:</strong> Because a free trial is provided to verify compatibility, all subsequent subscription payments for the Weekly Social Media Planner are final and non-refundable.</li>
            <li><strong>7.4 Disputes:</strong> Any disputes that cannot be resolved amicably within 5 working days must be referred to mediation via the Resolution Institute (NZ).</li>
            <li><strong>7.5 Payment Default:</strong> Failure to clear final payments within 7 days of the due date will result in the revocation of licenses and potential suspension of the provided services.</li>
          </ul>
        </div>

        <hr class="privacy-divider">

        <h1 class="legal-title" style="text-align: center; margin-bottom: 0.5rem;">Privacy Policy</h1>
        <p style="text-align: center; color: var(--signal-med); margin-bottom: 3rem; font-size: 0.95rem;">
          JURISDICTION: NEW ZEALAND (PRIVACY ACT 2020)<br>
          EFFECTIVE DATE: OCTOBER 2025
        </p>

        <div class="clause-block">
          <h3 class="clause-title">1. Introduction</h3>
          <p class="clause-text">
            Creative Startup NZ ("we," "us," or "our") is committed to protecting your privacy. This policy outlines how we collect, use, store, and share your personal information in compliance with the New Zealand Privacy Act 2020.
          </p>
          <p class="clause-text">
            By using our website and services, you acknowledge that we collect and use your information as described below.
          </p>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">2. Information We Collect</h3>
          <p class="clause-text">We collect information directly from you when you fill out our forms, register for workshops, or engage with our services.</p>

          <div class="sub-clause">A. Service Inquiries</div>
          <ul class="clause-list">
            <li><strong>Contact Details:</strong> Name, Email Address, Mobile Number.</li>
            <li><strong>Project Data:</strong> Business name, industry, and specific project requirements.</li>
            <li><strong>Free-Text Inputs:</strong> Information you voluntarily provide in the "Briefing Notes" or "Requirements" fields on our forms.</li>
          </ul>

          <div class="notice-box" style="margin-top: 1.5rem; border-color: var(--phoenix); background-color: transparent;">
            <div class="notice-header" style="color: var(--phoenix);">Security Notice</div>
            <p style="color: var(--signal-med); font-size: 0.95rem;">
              Our forms contain free-text fields. <strong>Please do not paste passwords, credit card numbers, or sensitive login credentials into these fields.</strong> If we require access to your systems (e.g., Hosting), we will request these credentials via a secure, encrypted channel later in the process.
            </p>
          </div>

          <div class="sub-clause">B. Workshop Registration</div>
          <ul class="clause-list">
            <li><strong>Identity:</strong> First Name, Last Name.</li>
            <li><strong>Contact:</strong> Email Address.</li>
            <li><strong>Preferences:</strong> Your consent to receive workshop updates and newsletters.</li>
          </ul>

          <div class="sub-clause">C. Automated Collection</div>
          <p class="clause-text">When you visit our website, we use Google Analytics 4 to collect anonymous technical data to help us improve the site. This includes:</p>
          <ul class="clause-list">
            <li>Your IP address (anonymized).</li>
            <li>Browser type and operating system.</li>
            <li>Pages viewed and time spent on the site.</li>
          </ul>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">3. How We Use Your Information</h3>
          <p class="clause-text">We use your personal information strictly for the following purposes:</p>
          <ul class="clause-list">
            <li><strong>Service Delivery:</strong> To assess your project requirements, provide quotes, and deliver digital assets.</li>
            <li><strong>Account Management:</strong> To monitor payment schedules and manage payment plan milestones.</li>
            <li><strong>Communication:</strong> To send you invoices, project updates, and meeting links.</li>
            <li><strong>Workshop Administration:</strong> To manage event attendance and send you relevant workshop materials.</li>
            <li><strong>Marketing:</strong> To send you practical business advice and updates, only if you have opted in. You may unsubscribe at any time via the link in our emails.</li>
          </ul>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">4. Third-Party Processors</h3>
          <p class="clause-text">
            We do not sell, rent, or trade your personal information. However, we use trusted third-party software providers to operate our business securely. By using our forms, you acknowledge that your data may be processed by:
          </p>
          <ul class="clause-list">
            <li><strong>Google:</strong> We use Google's secure cloud infrastructure to process form submissions and store project inquiries.</li>
            <li><strong>Brevo:</strong> We use Brevo to manage our workshop registrations and email newsletters securely.</li>
          </ul>
          
          <div class="sub-clause">International Data Transfers</div>
          <p class="clause-text">
            Because we use global cloud providers, your personal information may be stored on servers located outside New Zealand. We ensure these providers utilize industry-standard security safeguards (such as GDPR compliance and data encryption) that are comparable to the protections afforded by the New Zealand Privacy Act 2020.
          </p>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">5. Storage and Security</h3>
          <p class="clause-text">We take all reasonable steps to protect your personal information from loss, misuse, or unauthorized access:</p>
          <ul class="clause-list">
            <li><strong>Encryption:</strong> Our website uses SSL (HTTPS) encryption to protect data in transit.</li>
            <li><strong>Access Control:</strong> Access to our client databases is restricted to authorized personnel only.</li>
            <li><strong>Data Minimization:</strong> We do not collect passwords or financial data via standard website forms.</li>
          </ul>
          
          <div class="sub-clause">Local Storage (Social Media Planner)</div>
          <p class="clause-text">
            The Weekly Social Media Planner software operates locally. All post content, scheduled times, and uploaded media are stored <strong>locally on your device's browser</strong>. We do not transmit, process, or store your scheduled content on our servers.
          </p>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">6. Retention of Information</h3>
          <p class="clause-text">We retain your personal information only for as long as necessary:</p>
          <ul class="clause-list">
            <li><strong>Project Assets:</strong> We retain design files, strategy documents, and client briefs for 7 years for tax purposes and portfolio continuity.</li>
            <li><strong>Marketing Lists:</strong> We retain workshop registration data until you choose to unsubscribe.</li>
          </ul>
        </div>

        <div class="clause-block">
          <h3 class="clause-title">7. Your Rights</h3>
          <p class="clause-text">Under the Privacy Act 2020, you have the right to:</p>
          <ul class="clause-list">
            <li><strong>Access:</strong> Request a copy of the personal information we hold about you.</li>
            <li><strong>Correct:</strong> Ask us to correct your information if you believe it is wrong.</li>
          </ul>
          
          <div class="privacy-box">
            <h4 style="font-size: 1.1rem; margin-bottom: 0.5rem;">Privacy Contact</h4>
            <p style="color: var(--signal-med); font-size: 0.95rem;">
              To exercise these rights, or if you have any questions regarding your privacy, please contact us:<br><br>
              <strong>Email:</strong> russell@creativestartupnz.com<br>
              <strong>Location:</strong> Christchurch, New Zealand
            </p>
          </div>
        </div>

        <div style="margin-top: 5rem; text-align: center;">
          <a href="index.php" class="btn-primary" style="background-color: var(--structure); color: var(--signal-high);">Acknowledge & Return to Home</a>
        </div>

      </div>
    </main>
    
    <?php include 'footer.php'; ?>
  </div>
  
  
  </script>
</body>
</html>