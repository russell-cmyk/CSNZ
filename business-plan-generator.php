<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Plan Generator | Creative Startup NZ</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="A secure, step-by-step tool for Creative Startup NZ clients to generate a practical, operational business plan.">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.creativestartupnz.com/business-plan-generator.php">
    <meta property="og:title" content="Business Plan Generator | Creative Startup NZ">
    <meta property="og:description" content="A secure, step-by-step tool for Creative Startup NZ clients to generate a practical, operational business plan.">
    <meta property="og:image" content="https://www.creativestartupnz.com/images/business-plan-og.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Business Plan Generator | Creative Startup NZ">
    <meta property="twitter:description" content="A secure, step-by-step tool for Creative Startup NZ clients to generate a practical, operational business plan.">
    <meta property="twitter:image" content="https://www.creativestartupnz.com/images/business-plan-og.jpg">
    
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

        .mainframe { max-width: 1280px; margin: 0 auto; border-left: var(--border-std); border-right: var(--border-std); min-height: 100vh; }
        
        .control-bar, .tactical-footer { display: block; }

        /* HEADER */
        .generator-header {
            padding: 6rem 2rem;
            background-color: var(--surface);
            border-bottom: var(--border-std);
            text-align: center;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .header-title {
            font-family: var(--font-cmd);
            font-weight: 800;
            font-size: 3.5rem;
            color: var(--signal-high);
            text-transform: uppercase;
            line-height: 1.2;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .header-subtitle {
            font-size: 1.2rem;
            color: var(--phoenix);
            font-family: var(--font-brief);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2rem;
        }

        .hero-img {
            width: 100%;
            max-width: 800px;
            height: auto;
            border: var(--border-std);
            display: block;
            margin: 0 auto;
            border-radius: 8px !important;
            filter: grayscale(10%);
            opacity: 0.95;
            transition: border-color 0.3s ease;
        }

        /* FORM CONTAINER */
        .form-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 5rem 2rem;
        }

        .form-section-title {
            font-family: var(--font-cmd);
            font-weight: 800;
            font-size: 2rem;
            color: var(--signal-high);
            margin-top: 4rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--structure);
            text-transform: uppercase;
            transition: color 0.3s ease, border-color 0.3s ease;
        }

        .form-group { margin-bottom: 2rem; }
        
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }

        .form-label {
            display: block;
            font-family: var(--font-cmd);
            font-weight: 700;
            color: var(--signal-high);
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .form-desc {
            display: block;
            font-family: var(--font-brief);
            color: var(--signal-med);
            font-size: 1rem;
            margin-bottom: 0.8rem;
            transition: color 0.3s ease;
        }

        .form-input, .form-textarea, .form-select {
            width: 100%;
            background-color: var(--surface);
            border: 1px solid var(--structure);
            color: var(--signal-high);
            padding: 1.2rem;
            font-family: var(--font-brief);
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
            border-radius: 4px !important;
        }

        .form-textarea { height: 140px; resize: vertical; }
        
        .form-input:focus, .form-textarea:focus, .form-select:focus { 
            border-color: var(--phoenix); 
            box-shadow: 0 0 0 2px rgba(255, 106, 0, 0.1); 
        }

        .form-select {
            appearance: none;
            cursor: pointer;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23FF6A00' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1em;
        }

        /* CHECKBOXES & RADIOS */
        .check-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            background: var(--surface);
            border: 1px solid var(--structure);
            padding: 2rem;
            border-radius: 4px !important;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .check-label {
            display: flex;
            align-items: center;
            font-size: 1rem;
            color: var(--signal-high);
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .check-label input {
            margin-right: 12px;
            accent-color: var(--phoenix);
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        /* BUTTONS & ALERTS */
        .btn-deploy {
             background-color: var(--phoenix);
             color: #000000;
             font-family: var(--font-cmd);
             font-weight: 700;
             padding: 1.5rem 3rem;
             border: none;
             cursor: pointer;
             display: block;
             font-size: 1.2rem;
             text-transform: uppercase;
             width: 100%;
             text-align: center;
             transition: 0.2s;
             margin-top: 3rem;
             border-radius: 4px !important;
        }
        
        .btn-deploy:hover { filter: brightness(110%); transform: translateY(-2px); }
        .btn-deploy:disabled { background-color: var(--structure); cursor: not-allowed; color: var(--signal-low); transform: none; filter: none;}

        .status-msg {
            padding: 2rem;
            margin-bottom: 2rem;
            display: none;
            font-family: var(--font-brief);
            font-weight: 600;
            text-align: center;
            border: 1px solid;
            font-size: 1.1rem;
            border-radius: 4px !important;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        .success-box { background-color: transparent; border-color: var(--terminal); color: var(--terminal); }
        .error-box { background-color: transparent; border-color: var(--warning); color: var(--warning); }

        .mid-img {
             width: 100%;
             height: auto;
             border: var(--border-std);
             margin: 3rem 0;
             border-radius: 8px !important;
             filter: grayscale(10%);
             opacity: 0.95;
             transition: border-color 0.3s ease;
        }

        @media (max-width: 900px) {
            .form-row { grid-template-columns: 1fr; gap: 0; }
            .check-grid { grid-template-columns: 1fr; }
            .header-title { font-size: 2.5rem; }
        }
    </style>
</head>
<body>
    <div class="mainframe">
        <?php include 'header.php'; ?>
        <main>
            
            <header class="generator-header">
                <h1 class="header-title">Business Plan Generator</h1>
                <p class="header-subtitle">Build a practical roadmap for your business</p>
                
                <img src="images/war-room-blueprint.jpg" alt="Business Planning Session" class="hero-img">
                
                <p style="max-width: 700px; margin: 2rem auto 0 auto; color: var(--signal-med); font-size: 1.1rem; transition: color 0.3s ease;">
                    To generate a truly useful operational plan, you need to clearly define the parameters of your venture. Please answer the following questions as honestly and practically as possible. Avoid corporate fluff—just tell us the truth about what you want to build.
                </p>
            </header>

            <div class="form-container">
                
                <div id="success-msg" class="status-msg success-box">
                    Plan submitted successfully. We will generate your custom business roadmap and email it to you shortly.
                </div>
                <div id="error-msg" class="status-msg error-box"></div>

                <form id="businessPlanForm">
                    
                    <div style="position: absolute; left: -9999px; top: -9999px;" aria-hidden="true">
                        <label for="honeypot_trap">Leave this empty to prove you are human</label>
                        <input type="text" id="honeypot_trap" name="honeypot_trap" tabindex="-1" autocomplete="off">
                    </div>

                    <h2 class="form-section-title" style="margin-top: 0;">01. Your Details</h2>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="What is your full name?" class="form-input" placeholder="e.g. Jane Doe" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="Email Address" class="form-input" placeholder="hello@yourbusiness.co.nz" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Proposed Business Name</label>
                        <input type="text" name="Proposed or Final Business Name" class="form-input" placeholder="What are you calling the business?" required>
                    </div>

                    <h2 class="form-section-title">02. Core Vision</h2>
                    
                    <div class="form-group">
                        <label class="form-label">The 'Elevator Pitch'</label>
                        <span class="form-desc">Describe exactly what your business does in one simple, easy-to-understand sentence.</span>
                        <input type="text" name="The 'Elevator Pitch': Describe your business idea in one concise sentence." class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">The 'Why' (Your Mission)</label>
                        <span class="form-desc">Why are you starting this specific business? What is driving you to do this?</span>
                        <textarea name="The 'Why' (Mission): Why are you starting this business?" class="form-textarea" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Non-Negotiables (Your Values)</label>
                        <span class="form-desc">What are 3 core principles you will never compromise on? (e.g., Honest pricing, Quality over speed, Sustainable sourcing).</span>
                        <textarea name="Non-Negotiables (Values): What are 3 core principles you will not compromise on? (e.g., Honest pricing, Quality over speed, Sustainable sourcing). Please list each one." class="form-textarea" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Definition of Success</label>
                        <span class="form-desc">What exactly does success look like to you in one year? Be specific.</span>
                        <textarea name="Success Definition: What does success look like to you in 1 year?" class="form-textarea" required></textarea>
                    </div>

                    <img src="images/tactical-execution.jpg" alt="Business Execution" class="mid-img">

                    <h2 class="form-section-title">03. The Operations</h2>
                    
                    <div class="form-group">
                        <label class="form-label">Your Offering</label>
                        <span class="form-desc">What exactly are you selling? Please provide a detailed description of your products or services.</span>
                        <textarea name="What are you selling? Detailed description of products or services." class="form-textarea" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">The Solution</label>
                        <span class="form-desc">What specific problem does your product or service solve for the customer?</span>
                        <textarea name="What problem does your product/service solve?" class="form-textarea" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">The Compliance Check</label>
                        <span class="form-desc">Are there any legal requirements, council licenses, or safety standards required before you can operate?</span>
                        <textarea name="The 'Cowboy' Check: Are there any legal requirements, licenses, or safety standards required for your product/service?" class="form-textarea" required></textarea>
                    </div>

                    <h2 class="form-section-title">04. Market Analysis</h2>
                    
                    <div class="form-group">
                        <label class="form-label">Target Customer</label>
                        <span class="form-desc">Describe your ideal client. Think about their age, location, occupation, and habits.</span>
                        <textarea name="Target Customer: Describe your ideal client (Age, location, occupation, habits)." class="form-textarea" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Main Competitors</label>
                        <span class="form-desc">List 2-3 specific competitors currently operating in your market.</span>
                        <input type="text" name="Competitors: List 2-3 specific competitors." class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" style="color: var(--phoenix);">Your Competitive Edge</label>
                        <span class="form-desc" style="margin-bottom: 1.5rem;">Why would someone choose you over those competitors? Answer honestly for the following four metrics:</span>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-desc" style="color: var(--signal-high); font-weight: 600;">[1] Price Point</label>
                            <input type="text" name="Your Edge: Why would someone choose you over the competitors? [Price Point]" class="form-input" required>
                        </div>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-desc" style="color: var(--signal-high); font-weight: 600;">[2] Quality / Craftsmanship</label>
                            <input type="text" name="Your Edge: Why would someone choose you over the competitors? [Quality/Craftsmanship]" class="form-input" required>
                        </div>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-desc" style="color: var(--signal-high); font-weight: 600;">[3] Speed / Delivery Time</label>
                            <input type="text" name="Your Edge: Why would someone choose you over the competitors? [Speed/Delivery Time]" class="form-input" required>
                        </div>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-desc" style="color: var(--signal-high); font-weight: 600;">[4] Customer Service / Friendliness</label>
                            <input type="text" name="Your Edge: Why would someone choose you over the competitors? [Customer Service/Friendliness]" class="form-input" required>
                        </div>
                    </div>

                    <h2 class="form-section-title">05. Logistics & Support</h2>
                    
                    <div class="form-group">
                        <label class="form-label">Location</label>
                        <span class="form-desc">Where will you primarily operate? (e.g., Online only, a specific city, nationwide).</span>
                        <input type="text" name="Location: Where will you primarily operate?" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Outsourcing Plans</label>
                        <span class="form-desc" style="margin-bottom: 1rem;">Which tasks do you realistically plan to hire someone else to do in the first year? (Select all that apply)</span>
                        
                        <div class="check-grid">
                            <label class="check-label"><input type="checkbox" value="Accounting/Bookkeeping" class="outsource-cb"> Accounting / Bookkeeping</label>
                            <label class="check-label"><input type="checkbox" value="Website/Digital" class="outsource-cb"> Website / Digital Setup</label>
                            <label class="check-label"><input type="checkbox" value="Social Media/Marketing" class="outsource-cb"> Social Media / Marketing</label>
                            <label class="check-label"><input type="checkbox" value="Legal/Contracts" class="outsource-cb"> Legal / Contracts</label>
                            <label class="check-label"><input type="checkbox" value="Manufacturing/Production" class="outsource-cb"> Manufacturing / Production</label>
                            <label class="check-label"><input type="checkbox" value="Shipping/Delivery" class="outsource-cb"> Shipping / Delivery</label>
                        </div>
                        
                        <input type="hidden" id="hiddenOutsource" name="Outsourcing Plans: Which tasks do you plan to hire someone else to do in the first year? (Select all that apply)">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Supplier Needs</label>
                        <span class="form-desc">What raw materials, stock, or essential tools do you need to buy to get started?</span>
                        <textarea name="Supplier Needs: What raw materials, stock, or essential services do you need to buy to get started?" class="form-textarea" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Current Advisors</label>
                        <span class="form-desc">Do you currently have a qualified Accountant or Lawyer you plan to use?</span>
                        <select name="Current Advisors: Do you currently have a qualified Accountant or Lawyer you plan to use?" class="form-select" required>
                            <option value="" disabled selected>Select an option</option>
                            <option value="Yes, I have both">Yes, I have both</option>
                            <option value="I have an Accountant only">I have an Accountant only</option>
                            <option value="I have a Lawyer only">I have a Lawyer only</option>
                            <option value="No, I need to find them">No, I need to find them</option>
                        </select>
                    </div>

                    <h2 class="form-section-title">06. Financials & Risk</h2>
                    
                    <div class="form-group">
                        <label class="form-label">Pricing Strategy</label>
                        <span class="form-desc">How do you primarily plan to charge for your product or service?</span>
                        <select name="Pricing Idea: How do you plan to charge for your product/service?" class="form-select" required>
                            <option value="" disabled selected>Select a Pricing Model</option>
                            <option value="One-time flat fee per product/service">One-time flat fee per product/service</option>
                            <option value="Hourly rate">Hourly rate</option>
                            <option value="Monthly subscription / Retainer">Monthly subscription / Retainer</option>
                            <option value="Tiered pricing (Basic, Pro, Premium)">Tiered pricing (Basic, Pro, Premium)</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">If 'Other', please specify:</label>
                        <input type="text" name="If 'Other' for Pricing Idea, please specify:" class="form-input">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Major Costs</label>
                        <span class="form-desc">What do you anticipate will be your single biggest expense in the first 6 months?</span>
                        <input type="text" name="Major Costs: What do you think will be your single biggest expense in the first 6 months?" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Biggest Worry</label>
                        <span class="form-desc">What is the one thing you are most afraid of regarding starting this business? Be honest.</span>
                        <textarea name="Biggest Worry: What is the one thing you are most afraid of regarding starting this business?" class="form-textarea" required></textarea>
                    </div>

                    <button type="submit" id="submitBtn" class="btn-deploy">GENERATE BUSINESS PLAN</button>
                    
                </form>
            </div>
        </main>
        
        <?php include 'footer.php'; ?>
    </div>

    
    </script>

    <script>
        // =======================================================
        // LIVE GOOGLE APPS SCRIPT URL INJECTED HERE
        // DO NOT CHANGE THIS URL
        // =======================================================
        const scriptURL = 'https://script.google.com/macros/s/AKfycbxFXXZXPJaWor68rfoc6GKYL6Da1ttDUpyNppoKsXFZY6-ZjWlLmIeIr7qdj4cqhb_Z/exec';
        
        const form = document.forms['businessPlanForm'];
        const submitBtn = document.getElementById('submitBtn');
        const successMsg = document.getElementById('success-msg');
        const errorMsg = document.getElementById('error-msg');

        form.addEventListener('submit', e => {
            e.preventDefault();
            
            // HONEYPOT ANTI-SPAM PROTOCOL
            const honeypot = document.getElementById('honeypot_trap').value;
            if (honeypot !== "") {
                console.warn("Automated bot sequence intercepted.");
                form.reset();
                submitBtn.style.display = 'none';
                successMsg.style.display = 'block';
                return; // Blocks the script from running
            }

            // CHECKBOX AGGREGATION LOGIC
            const checkboxes = document.querySelectorAll('.outsource-cb:checked');
            let selectedOutsourcing = [];
            checkboxes.forEach((cb) => {
                selectedOutsourcing.push(cb.value);
            });
            document.getElementById('hiddenOutsource').value = selectedOutsourcing.join(', ');

            // UI UPDATE
            submitBtn.disabled = true;
            submitBtn.innerText = "SUBMITTING PLAN...";

            // TRANSMISSION TO GOOGLE SHEET
            const formData = new FormData(form);
            const params = new URLSearchParams();
            for (const pair of formData) {
                params.append(pair[0], pair[1]);
            }

            fetch(scriptURL, {
                method: 'POST',
                body: params,
                mode: 'no-cors' // Bypasses cross-origin strict blocks
            })
            .then(() => {
                form.style.display = "none";
                successMsg.style.display = "block";
                window.scrollTo({ top: document.querySelector('.form-container').offsetTop - 100, behavior: 'smooth' });
            })
            .catch(error => {
                errorMsg.style.display = "block";
                errorMsg.innerText = "Connection failed. Please check your internet and try again.";
                submitBtn.disabled = false;
                submitBtn.innerText = "RETRY SUBMISSION";
            });
        });
    </script>
</body>
</html>