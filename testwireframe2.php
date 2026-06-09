<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Website Layout Viewer | Creative Startup NZ</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Oswald:wght@500;700&family=Playfair+Display:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* =========================================
           1. CORE STYLES & DYNAMIC VARIABLES
           ========================================= */
        :root {
            --panel-width: 340px;
            --brand-orange: #FF6A00;
            
            /* Dynamic Client Controls */
            --radius-hard: 4px;
            --spacing-base: 20px;
            --font-scale: 1rem;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: #1a1a1a; 
            overflow-x: hidden;
            font-size: var(--font-scale);
        }

        /* --- CONTROL PANEL (HUMAN-CENTRED DESIGN) --- */
        #control-panel {
            width: var(--panel-width);
            background: #25262B;
            color: #eee;
            padding: 25px;
            height: 100vh;
            position: fixed;
            border-right: 1px solid #333;
            display: flex;
            flex-direction: column;
            gap: 20px;
            z-index: 1000;
            overflow-y: auto;
        }

        .panel-header {
            border-bottom: 1px solid #444;
            padding-bottom: 15px;
        }
        
        .panel-header h2 {
            font-family: 'Oswald', sans-serif;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin: 0 0 5px 0;
            font-size: 1.2rem;
            color: var(--brand-orange);
        }

        .helper-text {
            font-size: 0.8rem;
            color: #A6A7AB;
            line-height: 1.4;
            margin-bottom: 10px;
        }

        .control-section {
            background: #1A1B1E;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #333;
        }

        .control-group label {
            display: block;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 6px;
            color: #ccc;
        }

        input[type="text"], input[type="email"], select, textarea {
            width: 100%;
            padding: 8px 10px;
            background: #25262B;
            border: 1px solid #444;
            color: #fff;
            border-radius: 4px;
            font-family: 'Inter', sans-serif;
            margin-bottom: 10px;
            font-size: 0.85rem;
        }

        input[type="range"] {
            width: 100%;
            margin-bottom: 15px;
            accent-color: var(--brand-orange);
        }

        .btn-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .layout-btn {
            padding: 8px;
            background: #25262B;
            border: 1px solid #444;
            color: #ccc;
            cursor: pointer;
            font-size: 0.8rem;
            border-radius: 4px;
            transition: 0.2s;
        }

        .layout-btn:hover, .layout-btn.active {
            background: var(--brand-orange);
            color: #000;
            font-weight: 600;
            border-color: var(--brand-orange);
        }

        .submit-btn {
            background: var(--brand-orange);
            color: #000;
            border: none;
            padding: 12px;
            width: 100%;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            border-radius: 4px;
            font-size: 0.9rem;
            margin-top: 10px;
        }

        /* --- PREVIEW WRAPPER --- */
        #preview-wrapper {
            margin-left: var(--panel-width);
            flex-grow: 1;
            background: var(--bg-color, #fff);
            color: var(--text-color, #333);
            transition: all 0.3s ease;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* --- MOCK GLOBAL HEADER/FOOTER --- */
        .mock-global-header, .mock-global-footer {
            padding: var(--spacing-base);
            background: var(--surface-color, #f9f9f9);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .mock-global-header {
            border-bottom: 1px solid var(--border-color, #ddd);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .mock-global-footer {
            margin-top: auto;
            border-top: 1px solid var(--border-color, #ddd);
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: var(--spacing-base);
        }
        
        .logo-box {
            display: flex;
            align-items: center;
        }

        .logo-box img {
            max-height: 50px;
            object-fit: contain;
            border-radius: var(--radius-hard);
        }

        .mock-global-header nav {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .mock-global-header nav span { cursor: pointer; font-weight: 600; }
        .mock-global-header nav span:hover { color: var(--accent-color); }
        
        .cta-mock { 
             background: var(--accent-color); 
             color: #fff !important; 
             padding: 10px 20px; 
             border-radius: var(--radius-hard);
        }

        /* --- WIREFRAME COMPONENTS --- */
        .wf-section {
            padding: calc(var(--spacing-base) * 2) var(--spacing-base);
        }

        /* Hero Slider Setup */
        .wf-hero {
            position: relative;
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            overflow: hidden;
            color: #fff;
        }

        .hero-slider {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: 0;
            display: flex;
        }

        .hero-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            opacity: 0.4; 
            background: #000;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 20px;
            background: rgba(0,0,0,0.5);
            border-radius: var(--radius-hard);
        }

        .hero-content h1 { font-size: calc(var(--font-scale) * 2.5); margin-bottom: 10px; }

        .wf-box {
            background: var(--surface-color, #eee);
            border: 1px solid var(--border-color, #999);
            padding: var(--spacing-base);
            margin-bottom: 10px;
            border-radius: var(--radius-hard);
            transition: 0.3s;
        }

        .img-fluid {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: var(--radius-hard);
            margin-bottom: 15px;
        }

        button.wf-btn {
            padding: 12px 24px;
            background: var(--accent-color);
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top: 15px;
            border-radius: var(--radius-hard);
            font-size: var(--font-scale);
            font-weight: bold;
        }

        .social-icons-container {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        .social-icons-container svg { width: 24px; height: 24px; fill: currentColor; }

        /* --- LAYOUT SYSTEMS --- */
        .layout-stack .grid-container { display: flex; flex-direction: column; gap: var(--spacing-base); }
        .layout-split .grid-container { display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-base); }
        .layout-grid .grid-container { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--spacing-base); }
        
        /* =========================================
           2. INDUSTRY SPECIFIC THEMES
           ========================================= */
        .theme-corporate {
            --bg-color: #f8f9fa; --text-color: #212529; --surface-color: #ffffff; 
            --border-color: #dee2e6; --accent-color: #0d6efd; --font-main: 'Inter', sans-serif;
        }
        .theme-luxurious {
            --bg-color: #fffaf0; --text-color: #2c2c2c; --surface-color: #ffffff; 
            --border-color: #d4af37; --accent-color: #000000; --font-main: 'Playfair Display', serif;
        }
        .theme-mechanic {
            --bg-color: #1a1a1a; --text-color: #ffffff; --surface-color: #333333; 
            --border-color: #e53935; --accent-color: #d32f2f; --font-main: 'Oswald', sans-serif;
        }
        .theme-florist {
            --bg-color: #fdfaf6; --text-color: #4a5d23; --surface-color: #ffffff; 
            --border-color: #e8d8c3; --accent-color: #8fbc8f; --font-main: 'Playfair Display', serif;
        }
        .theme-baker {
            --bg-color: #fff5e6; --text-color: #5c4033; --surface-color: #ffffff; 
            --border-color: #d2a679; --accent-color: #c08081; --font-main: 'Inter', sans-serif;
        }
        .theme-gift {
            --bg-color: #f0f8ff; --text-color: #333333; --surface-color: #ffffff; 
            --border-color: #b0e0e6; --accent-color: #ffb6c1; --font-main: 'Inter', sans-serif;
        }
        .theme-architect {
            --bg-color: #ffffff; --text-color: #000000; --surface-color: #f0f0f0; 
            --border-color: #000000; --accent-color: #000000; --font-main: 'Roboto Mono', monospace;
        }

        #preview-wrapper { font-family: var(--font-main); }
    </style>
</head>
<body>
    <div id="control-panel">
        <div class="panel-header">
            <h2>Website Builder</h2>
            <p class="helper-text">We built this tool to make things simple. You can play around with the look and feel here. Don't worry about breaking anything; we let our results do the talking.</p>
        </div>
        
        <div class="control-section">
            <div class="control-group">
                <label>1. Select Page</label>
                <select id="page-selector">
                    <option value="home">Home</option>
                    <option value="about">About Us</option>
                    <option value="shop">Shop / Product</option>
                    <option value="blog">Blog</option>
                    <option value="contact">Contact</option>
                </select>
            </div>

            <div class="control-group">
                <label>2. Choose Layout</label>
                <p class="helper-text" style="margin-top: -3px; margin-bottom: 8px;">Select a unique layout for this specific page.</p>
                <div class="btn-group">
                    <button class="layout-btn" data-layout="layout-stack">Stacked</button>
                    <button class="layout-btn" data-layout="layout-split">Split</button>
                    <button class="layout-btn" data-layout="layout-grid">Grid</button>
                </div>
            </div>

            <div class="control-group" style="margin-top: 15px;">
                <label>3. Industry Style</label>
                <select id="theme-selector">
                    <option value="theme-corporate">Corporate & Professional</option>
                    <option value="theme-luxurious">Luxurious & Boutique</option>
                    <option value="theme-mechanic">Car Mechanic & Trades</option>
                    <option value="theme-florist">Florist</option>
                    <option value="theme-baker">Baker's Shop</option>
                    <option value="theme-gift">Gift Shop</option>
                    <option value="theme-architect">Architect & Minimalist</option>
                </select>
            </div>
        </div>

        <div class="control-section">
            <label style="font-size: 0.8rem; font-weight: bold; color: #fff; margin-bottom: 10px; display: block;">Design Tweaks</label>
            <p class="helper-text">Authenticity requires leaving a few rough edges intact. Adjust these sliders until it feels like you.</p>
            
            <label>Corner Style (Sharp to Smooth)</label>
            <input type="range" id="radius-slider" min="0" max="30" value="4">
            
            <label>Spacing</label>
            <input type="range" id="spacing-slider" min="10" max="40" value="20">
            
            <label>Font Size</label>
            <input type="range" id="font-slider" min="0.8" max="1.3" step="0.1" value="1">
        </div>

        <div class="control-section">
            <label style="font-size: 0.8rem; font-weight: bold; color: #fff; margin-bottom: 10px; display: block;">Your Business Details</label>
            <p class="helper-text">Type your details below to see them update live on the page.</p>
            
            <label>Brand Identity</label>
            <input type="text" id="input-logo" placeholder="Paste Logo Image URL here">
            <input type="text" id="input-bizname" placeholder="Business Name" value="My Local Business">
            
            <label style="margin-top: 10px;">Contact Info</label>
            <input type="text" id="input-phone" placeholder="Phone Number">
            <input type="email" id="input-email" placeholder="Email Address">
            <input type="text" id="input-address" placeholder="Physical Address">
            
            <label style="margin-top: 10px;">Social Media Links</label>
            <input type="text" id="input-fb" placeholder="Facebook URL">
            <input type="text" id="input-ig" placeholder="Instagram URL">
            <input type="text" id="input-yt" placeholder="YouTube URL">
            
            <label style="margin-top: 10px;">Marketing (Optional)</label>
            <p class="helper-text">Adding these tools helps you grow your business.</p>
            <input type="text" id="input-pixel" placeholder="Facebook Pixel ID">
            <input type="text" id="input-ga" placeholder="Google Analytics ID">
        </div>

        <div class="control-section" style="border-color: var(--brand-orange);">
            <p class="helper-text" style="color: #fff;">Happy with how it looks? Let's look at the details and figure out how to work together.</p>
            <textarea id="input-notes" rows="2" placeholder="Any extra notes for us?"></textarea>
            <button class="submit-btn" id="submit-design">Get my fixed-price quote</button>
        </div>
    </div>

    <div id="preview-wrapper" class="theme-corporate layout-stack">
        
        <header class="mock-global-header">
            <div class="logo-box">
                <img id="display-logo" src="images/yourlogo.png" alt="Business Logo">
                <strong id="display-bizname" style="margin-left: 10px;">My Local Business</strong>
            </div>
            <nav>
                <span onclick="setPage('home')">Home</span>
                <span onclick="setPage('about')">About</span>
                <span onclick="setPage('shop')">Shop</span>
                <span onclick="setPage('blog')">Blog</span>
                <span onclick="setPage('contact')">Contact</span>
                <span class="cta-mock">Talk to a human</span>
            </nav>
        </header>

        <main id="app-content"></main>

        <footer class="mock-global-footer">
            <div class="footer-col">
                <strong id="footer-bizname">My Local Business</strong>
                <p>We built this product to integrate instantly with your daily life. Serving our local community.</p>
                <div class="social-icons-container" id="display-socials"></div>
            </div>
            <div class="footer-col">
                <strong>Contact Details</strong>
                <p id="display-phone">Phone: Add your number</p>
                <p id="display-email">Email: Add your email</p>
                <p id="display-address">Address: Add your address</p>
            </div>
            <div class="footer-col">
                <strong>Legal</strong>
                <p>© 2026. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        // Prevent right-click and common developer shortcuts to protect your UI
        document.addEventListener('contextmenu', event => event.preventDefault()); 
        document.onkeydown = function(e) {
            if (e.keyCode == 123 || 
               (e.ctrlKey && e.shiftKey && (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'J'.charCodeAt(0))) || 
               (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))) {
                return false;
            }
        };

        const state = {
            page: 'home',
            theme: 'theme-corporate',
            pageLayouts: {
                home: 'layout-stack',
                about: 'layout-stack',
                shop: 'layout-stack',
                blog: 'layout-stack',
                contact: 'layout-stack'
            }
        };

        // Mapping specific themes to their local image path
        const themeHeroMap = {
            'theme-architect': 'images/architect.jpg',
            'theme-gift': 'images/gift.jpg',
            'theme-baker': 'images/baker.jpg',
            'theme-florist': 'images/florist.jpg',
            'theme-mechanic': 'images/mechanic.jpg',
            'theme-corporate': 'images/corporate.jpg', // Fallback local image if user stays on default
            'theme-luxurious': 'images/luxurious.jpg' // Fallback local image
        };

        const pages = {
            home: `
                <div class="page-wrapper">
                    <section class="wf-section wf-hero">
                        <div class="hero-slider">
                            <img id="dynamic-hero-img" src="" alt="Hero Image">
                        </div>
                        <div class="hero-content">
                            <h1>What your business does</h1>
                            <p>You didn't start a business to spend weekends stressing. Explain the exact problem you solve here so they can get their Sunday afternoons back.</p>
                            <button class="wf-btn">See how it works</button>
                        </div>
                    </section>
                    
                    <section class="wf-section">
                        <h2>Our Services</h2>
                        <div class="grid-container">
                            <div class="wf-box">
                                <img class="img-fluid" src="images/servicea.jpg" alt="Service A">
                                <h3>Service A</h3>
                                <p>We don't use corporate jargon. We just get the job done.</p>
                            </div>
                            <div class="wf-box">
                                <img class="img-fluid" src="images/serviceb.jpg" alt="Service B">
                                <h3>Service B</h3>
                                <p>Detail how you save them time or money locally.</p>
                            </div>
                            <div class="wf-box">
                                <img class="img-fluid" src="images/servicec.jpg" alt="Service C">
                                <h3>Service C</h3>
                                <p>Detail your specific expertise here.</p>
                            </div>
                        </div>
                    </section>

                    <section class="wf-section">
                        <h2>Recent Work</h2>
                        <div class="wf-box">
                            <img class="img-fluid" style="height: 400px;" src="images/recentwork.jpg" alt="Work Example">
                            <p>Last month, we helped a local client solve a massive issue at 2 AM on a Saturday. Here's the result.</p>
                        </div>
                    </section>
                </div>
            `,
            about: `
                <div class="page-wrapper">
                    <section class="wf-section">
                        <h1>About Us</h1>
                        <p>We value directness, brevity, and a pragmatic "plain speaking" style. Here is our story.</p>
                    </section>
                    <section class="wf-section">
                        <div class="grid-container">
                            <div class="wf-box">
                                <img class="img-fluid" src="images/story.jpg" alt="Team Photo">
                                <h3>Our Story</h3>
                                <p>Tell your local customers about your background. Share specific instances of past professional lessons learned on the job.</p>
                            </div>
                            <div class="wf-box">
                                <h3>Our Values</h3>
                                <p>We let our results do the talking. No aggressive self-promotion.</p>
                                <ul>
                                    <li>Honesty</li>
                                    <li>Reliability</li>
                                    <li>Hard Work</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            `,
            shop: `
                <div class="page-wrapper">
                    <section class="wf-section">
                        <h1>Shop Our Products</h1>
                        <p>Browse our latest local offerings.</p>
                    </section>
                    <section class="wf-section">
                        <div class="grid-container">
                            <div class="wf-box">
                                <img class="img-fluid" src="images/product1.jpg" alt="Product 1">
                                <h3>Product 1</h3>
                                <strong>$49.99</strong>
                                <br>
                                <button class="wf-btn">Add to Cart</button>
                            </div>
                            <div class="wf-box">
                                <img class="img-fluid" src="images/product2.jpg" alt="Product 2">
                                <h3>Product 2</h3>
                                <strong>$89.99</strong>
                                <br>
                                <button class="wf-btn">Add to Cart</button>
                            </div>
                            <div class="wf-box">
                                <img class="img-fluid" src="images/product3.jpg" alt="Product 3">
                                <h3>Product 3</h3>
                                <strong>$129.99</strong>
                                <br>
                                <button class="wf-btn">Add to Cart</button>
                            </div>
                        </div>
                    </section>
                </div>
            `,
            blog: `
                <div class="page-wrapper">
                    <section class="wf-section">
                        <h1>Latest Updates</h1>
                        <p>We share specific lessons learned.</p>
                    </section>
                    <section class="wf-section">
                        <div class="grid-container">
                            <article class="wf-box">
                                <img class="img-fluid" src="images/hobby-to-businessjpg.jpg" alt="Writing">
                                <h3>Update Title 1</h3>
                                <p>If you're still ignoring your community in 2026, you're handing your best customers to competitors.</p>
                            </article>
                            <article class="wf-box">
                                <img class="img-fluid" src="images/tactical-execution.jpg" alt="Community Event">
                                <h3>Update Title 2</h3>
                                <p>A short preview of our latest local event...</p>
                            </article>
                            <article class="wf-box">
                                <img class="img-fluid" src="images/forged.jpg" alt="We are open sign">
                                <h3>Update Title 3</h3>
                                <p>We've updated our holiday hours.</p>
                            </article>
                        </div>
                    </section>
                </div>
            `,
            contact: `
                <div class="page-wrapper">
                    <section class="wf-section">
                        <h1>Get in Touch</h1>
                        <p>Have a question? Talk to a human.</p>
                    </section>
                    <section class="wf-section">
                        <div class="grid-container">
                            <div class="wf-box">
                                <h3>Send a Message</h3>
                                <form onsubmit="event.preventDefault();">
                                    <input type="text" placeholder="Your Name" style="width:100%; padding:10px; margin-bottom:10px;">
                                    <input type="email" placeholder="Your Email" style="width:100%; padding:10px; margin-bottom:10px;">
                                    <textarea placeholder="How can we help?" rows="5" style="width:100%; padding:10px; margin-bottom:10px;"></textarea>
                                    <button class="wf-btn">Send Message</button>
                                </form>
                            </div>
                            <div class="wf-box">
                                <h3>Our Details</h3>
                                <p>We are locally based in Canterbury, New Zealand.</p>
                                <iframe src="https://maps.google.com/maps?q=Canterbury%20New%20Zealand&t=&z=9&ie=UTF8&iwloc=&output=embed" width="100%" height="250" style="border:0; border-radius: var(--radius-hard);" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </section>
                </div>
            `
        };

        const previewWrapper = document.getElementById('preview-wrapper');
        const contentArea = document.getElementById('app-content');
        const layoutBtns = document.querySelectorAll('.layout-btn');
        
        // Render UI based on current page state and specific page layout
        function render() {
            contentArea.innerHTML = pages[state.page];
            previewWrapper.className = ''; 
            previewWrapper.classList.add(state.theme);
            
            // Apply the specific layout saved for this exact page
            const currentPageLayout = state.pageLayouts[state.page];
            previewWrapper.classList.add(currentPageLayout);

            // Update the active button in the control panel to match the current page's layout
            layoutBtns.forEach(btn => {
                if (btn.dataset.layout === currentPageLayout) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });

            // Update Dynamic Hero Image if on home page
            if (state.page === 'home') {
                const heroImg = document.getElementById('dynamic-hero-img');
                if (heroImg) {
                    heroImg.src = themeHeroMap[state.theme] || 'images/corporate.jpg';
                }
            }
        }

        // Navigation
        function setPage(pageName) {
            state.page = pageName;
            document.getElementById('page-selector').value = pageName;
            render();
            window.scrollTo(0,0);
        }

        // Event Listeners for Controls
        document.getElementById('page-selector').addEventListener('change', (e) => {
            state.page = e.target.value;
            render();
        });

        document.getElementById('theme-selector').addEventListener('change', (e) => {
            state.theme = e.target.value;
            render();
        });

        // Layout buttons now save their selection to the specific page currently being viewed
        layoutBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                state.pageLayouts[state.page] = btn.dataset.layout;
                render();
            });
        });

        // Dynamic CSS Variable Sliders
        document.getElementById('radius-slider').addEventListener('input', (e) => {
            document.documentElement.style.setProperty('--radius-hard', e.target.value + 'px');
        });
        document.getElementById('spacing-slider').addEventListener('input', (e) => {
            document.documentElement.style.setProperty('--spacing-base', e.target.value + 'px');
        });
        document.getElementById('font-slider').addEventListener('input', (e) => {
            document.documentElement.style.setProperty('--font-scale', e.target.value + 'rem');
        });

        // Live Text & Image Updates
        function bindInput(inputId, displayId, prefix = '') {
            document.getElementById(inputId).addEventListener('input', (e) => {
                const val = e.target.value;
                document.getElementById(displayId).innerText = val ? prefix + val : prefix + 'Add your details';
                if(inputId === 'input-bizname') {
                    document.getElementById('footer-bizname').innerText = val || 'My Local Business';
                }
            });
        }
        
        bindInput('input-bizname', 'display-bizname');
        bindInput('input-phone', 'display-phone', 'Phone: ');
        bindInput('input-email', 'display-email', 'Email: ');
        bindInput('input-address', 'display-address', 'Address: ');

        // Live Logo Update
        document.getElementById('input-logo').addEventListener('input', (e) => {
            const val = e.target.value;
            document.getElementById('display-logo').src = val || 'https://images.unsplash.com/photo-1614036634955-ae5e90f9b9eb?w=200&q=80';
        });

        // Social Icons Logic
        function updateSocials() {
            const fb = document.getElementById('input-fb').value;
            const ig = document.getElementById('input-ig').value;
            const yt = document.getElementById('input-yt').value;
            const container = document.getElementById('display-socials');
            container.innerHTML = '';
            
            if (fb) {
                container.innerHTML += `<a href="${fb}" target="_blank" style="color: inherit;"><svg viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z"/></svg></a>`;
            }
            if (ig) {
                container.innerHTML += `<a href="${ig}" target="_blank" style="color: inherit;"><svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>`;
            }
            if (yt) {
                container.innerHTML += `<a href="${yt}" target="_blank" style="color: inherit;"><svg viewBox="0 0 24 24"><path d="M21.582 6.186a2.665 2.665 0 00-1.874-1.884C17.953 3.868 12 3.868 12 3.868s-5.953 0-7.708.434a2.665 2.665 0 00-1.874 1.884C1.984 7.947 1.984 12 1.984 12s0 4.053.434 5.814a2.665 2.665 0 001.874 1.884c1.755.434 7.708.434 7.708.434s5.953 0 7.708-.434a2.665 2.665 0 001.874-1.884C22.016 16.053 22.016 12 22.016 12s0-4.053-.434-5.814zM9.983 15.111V8.889l5.96 3.111-5.96 3.111z"/></svg></a>`;
            }
        }
        document.getElementById('input-fb').addEventListener('input', updateSocials);
        document.getElementById('input-ig').addEventListener('input', updateSocials);
        document.getElementById('input-yt').addEventListener('input', updateSocials);

        // Helper function to clean up layout names for the email
        function formatLayoutName(layoutStr) {
            const map = {
                'layout-stack': 'Stacked',
                'layout-split': 'Split',
                'layout-grid': 'Grid'
            };
            return map[layoutStr] || layoutStr;
        }

        // Mailto Submission Logic
        document.getElementById('submit-design').addEventListener('click', (e) => {
            e.preventDefault();
            
            // Gather client data
            const bName = document.getElementById('input-bizname').value || 'Not provided';
            const bPhone = document.getElementById('input-phone').value || 'Not provided';
            const bEmail = document.getElementById('input-email').value || 'Not provided';
            const bNotes = document.getElementById('input-notes').value || 'None';
            const bLogo = document.getElementById('input-logo').value || 'None';
            const bPixel = document.getElementById('input-pixel').value || 'None';
            const bGa = document.getElementById('input-ga').value || 'None';
            
            // Capture the specific design tweaks
            const tRadius = document.getElementById('radius-slider').value + 'px';
            const tSpacing = document.getElementById('spacing-slider').value + 'px';
            const tFont = document.getElementById('font-slider').value + 'rem';

            // Construct readable email body
            let body = "Hi Creative Startup NZ team,\n\n";
            body += "I have been using the layout viewer and would like to get a quote based on my selections. Here are my details:\n\n";
            
            body += "--- BUSINESS DETAILS ---\n";
            body += "Business Name: " + bName + "\n";
            body += "Phone: " + bPhone + "\n";
            body += "Email: " + bEmail + "\n";
            body += "Logo URL: " + bLogo + "\n\n";
            
            body += "--- PAGE & LAYOUT CHOICES ---\n";
            body += "Industry Theme Selected: " + state.theme.replace('theme-', '') + "\n\n";
            body += "Page Layouts Selected:\n";
            body += "- Home Page: " + formatLayoutName(state.pageLayouts.home) + "\n";
            body += "- About Page: " + formatLayoutName(state.pageLayouts.about) + "\n";
            body += "- Shop Page: " + formatLayoutName(state.pageLayouts.shop) + "\n";
            body += "- Blog Page: " + formatLayoutName(state.pageLayouts.blog) + "\n";
            body += "- Contact Page: " + formatLayoutName(state.pageLayouts.contact) + "\n\n";

            body += "--- DESIGN TWEAKS ---\n";
            body += "Corner Style (Radius): " + tRadius + "\n";
            body += "Spacing Preference: " + tSpacing + "\n";
            body += "Font Size Scale: " + tFont + "\n\n";

            body += "--- MARKETING ---\n";
            body += "Facebook Pixel: " + bPixel + "\n";
            body += "Google Analytics: " + bGa + "\n\n";
            
            body += "--- EXTRA NOTES ---\n";
            body += bNotes + "\n\n";
            
            body += "Looking forward to hearing from you.";

            // Format mailto link
            const mailtoURL = "mailto:russell@creativestartupnz.com?subject=New Website Quote Request: " + encodeURIComponent(bName) + "&body=" + encodeURIComponent(body);

            // Inform the user what is happening
            alert("Thanks! We are opening your email app right now with your design details ready to send to russell@creativestartupnz.com.");
            
            // Trigger the email app to open
            window.location.href = mailtoURL;
        });

        // Init
        window.addEventListener('DOMContentLoaded', () => {
            render(); 
        });
    </script>
</body>
</html>