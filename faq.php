<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Knowledge Hub | Creative Startup NZ</title>
    <meta name="description" content="A comprehensive knowledge base for New Zealand startups. Answers on company structure, tax, GST, marketing strategy, and business compliance.">
    
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

        /* HEADER & FOOTER are injected via JS */
        .control-bar, .tactical-footer { display: block; }

        /* DOSSIER LAYOUT */
        .dossier-header {
            padding: 6rem 2rem;
            background-color: var(--surface);
            border-bottom: var(--border-std);
            text-align: center;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .dossier-title {
            font-family: var(--font-cmd);
            font-weight: 800;
            font-size: 3.5rem;
            color: var(--signal-high);
            text-transform: uppercase;
            line-height: 1.1;
            margin-bottom: 1rem;
            transition: color 0.3s ease;
        }

        .dossier-meta {
            font-family: var(--font-brief);
            color: var(--phoenix);
            font-size: 1rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        /* SPLIT LAYOUT FOR CONTENT */
        .dossier-body {
            display: grid;
            grid-template-columns: 320px 1fr;
            min-height: 100vh;
        }

        /* SIDEBAR NAVIGATION */
        .dossier-nav {
            background-color: var(--void);
            border-right: var(--border-std);
            padding: 3rem 2rem;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .nav-sticky {
            position: sticky;
            top: 100px;
            max-height: calc(100vh - 120px);
            overflow-y: auto;
            padding-right: 10px;
        }
        
        .nav-sticky::-webkit-scrollbar { width: 6px; }
        .nav-sticky::-webkit-scrollbar-track { background: transparent; }
        .nav-sticky::-webkit-scrollbar-thumb { background: var(--structure); border-radius: 3px; }
        .nav-sticky::-webkit-scrollbar-thumb:hover { background: var(--phoenix); }

        .toc-link {
            display: block;
            color: var(--signal-med);
            text-decoration: none;
            font-family: var(--font-brief);
            font-weight: 600;
            font-size: 0.95rem;
            padding: 12px 0;
            border-bottom: 1px solid var(--structure);
            transition: all 0.2s ease;
        }
        .toc-link:hover { color: var(--phoenix); padding-left: 10px; border-bottom-color: var(--phoenix); }

        /* CONTENT SECTIONS */
        .content-sector {
            padding: 5rem 4rem;
            background-color: var(--void);
            transition: background-color 0.3s ease;
        }

        .sector-title {
            font-family: var(--font-cmd);
            font-weight: 800;
            font-size: 2.2rem;
            color: var(--signal-high);
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--structure);
            text-transform: uppercase;
            transition: color 0.3s ease, border-color 0.3s ease;
        }

        .sub-header {
            font-family: var(--font-cmd);
            font-weight: 700;
            color: var(--phoenix);
            font-size: 1.6rem;
            margin-top: 4rem;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .faq-item {
            margin-bottom: 3.5rem;
        }

        .faq-q {
            font-family: var(--font-cmd);
            font-weight: 700;
            color: var(--signal-high);
            font-size: 1.4rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
            line-height: 1.3;
            transition: color 0.3s ease;
        }

        .faq-q::before {
            content: 'Q:';
            color: var(--terminal);
            margin-right: 1rem;
            font-family: var(--font-data);
            font-weight: 700;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .faq-a {
            color: var(--signal-med);
            padding-left: 2.5rem;
            border-left: 2px solid var(--structure);
            font-size: 1.05rem;
            transition: color 0.3s ease, border-color 0.3s ease;
        }

        .faq-a p { margin-bottom: 1rem; }
        
        .faq-a ul {
            margin-bottom: 1rem;
            padding-left: 1.5rem;
            color: var(--signal-med);
        }
        
        .faq-a li { margin-bottom: 0.5rem; }

        /* DATA TABLES */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 2.5rem 0;
            font-family: var(--font-brief);
            font-size: 0.95rem;
            background-color: var(--surface);
            border: 1px solid var(--structure);
            border-radius: 4px !important;
            overflow: hidden; 
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        
        .data-table th { 
             text-align: left; 
             border-bottom: 2px solid var(--phoenix); 
             padding: 15px 20px; 
             color: var(--signal-high); 
             background-color: var(--structure);
             font-family: var(--font-cmd);
             font-weight: 700;
             text-transform: uppercase;
             font-size: 1.1rem;
             transition: color 0.3s ease, background-color 0.3s ease, border-color 0.3s ease;
        }
        
        .data-table td { 
             border-bottom: 1px solid var(--structure); 
             padding: 15px 20px; 
             color: var(--signal-med);
             vertical-align: top;
             transition: color 0.3s ease, border-color 0.3s ease;
        }
        
        .data-table tr:last-child td { border-bottom: none; }

        /* INLINE LINKS */
        .faq-a a {
            color: var(--phoenix);
            text-decoration: none;
            border-bottom: 1px dashed var(--phoenix);
            transition: 0.2s;
            font-weight: 600;
        }
        .faq-a a:hover {
            color: var(--signal-high);
            border-bottom: 1px solid var(--signal-high);
        }

        @media (max-width: 900px) {
            .dossier-body { grid-template-columns: 1fr; }
            .dossier-nav { display: none; } /* Hide sidebar on mobile */
            .content-sector { padding: 3rem 1.5rem; }
            .dossier-title { font-size: 2.5rem; }
            .data-table { font-size: 0.85rem; }
            .data-table th, .data-table td { padding: 10px; }
        }
    </style>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "Why is a custom logo necessary before the first sale?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "It creates immediate trust. A professional logo signals to the market that you are an established, reliable business rather than a temporary hobbyist. It lowers the barrier for customers making their first purchase."
        }
      }, {
        "@type": "Question",
        "name": "Why is my website not generating traffic?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Without technical optimization, new websites are often invisible to Google. This is frequently due to crawl errors, poor keyword strategy, or mobile loading failures. An SEO audit helps identify and fix the issues preventing your site from ranking."
        }
      }, {
        "@type": "Question",
        "name": "Do I need a custom WordPress site or a Google Site?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "For a brand new business starting with zero revenue, WordPress can be risky due to ongoing maintenance and hosting costs. A 5-Page Google Site is highly reliable, requires zero maintenance, and is incredibly cost-efficient to run."
        }
      }, {
        "@type": "Question",
        "name": "How do I incorporate a company in NZ?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "Incorporation is done entirely online via the Companies Office. It involves reserving a company name ($10+GST) and filing an incorporation application ($118.74+GST)."
        }
      }]
    }
    </script>
</head>
<body>
    <div class="mainframe">
        <?php include 'header.php'; ?>
        <main>
            
            <header class="dossier-header">
                <div class="dossier-meta">Business Knowledge Hub</div>
                <h1 class="dossier-title">The Startup Library</h1>
                <p style="max-width: 700px; margin: 0 auto; color: var(--signal-med); font-size: 1.1rem; transition: color 0.3s ease;">
                    A comprehensive reference guide for New Zealand founders. Find clear answers on company structure, tax, marketing, and business compliance.
                </p>
            </header>

            <div class="dossier-body">
                
                <aside class="dossier-nav">
                    <div class="nav-sticky">
                        <div style="font-family: var(--font-cmd); font-weight: 700; font-size: 1.2rem; color: var(--signal-high); margin-bottom: 1.5rem; text-transform: uppercase; transition: color 0.3s ease;">Table of Contents</div>
                        <a href="#sector-1" class="toc-link">1. Our Business Philosophy</a>
                        <a href="#sector-2" class="toc-link">2. Our Services Explained</a>
                        <a href="#sector-3" class="toc-link">3. Key Marketing Concepts</a>
                        <a href="#sector-4" class="toc-link">4. Business Planning</a>
                        <a href="#sector-5" class="toc-link">5. Market Research</a>
                        <a href="#sector-6" class="toc-link">6. Corporate Structure</a>
                        <a href="#sector-7" class="toc-link">7. SEO Architecture</a>
                        <a href="#sector-8" class="toc-link">8. Franchising</a>
                        <a href="#sector-10" class="toc-link">9. Legal Entity Structures</a>
                        <a href="#sector-11" class="toc-link">10. Taxation & IRD</a>
                        <a href="#sector-12" class="toc-link">11. GST Frameworks</a>
                        <a href="#sector-13" class="toc-link">12. Managing Expenses</a>
                        <a href="#sector-14" class="toc-link">13. ACC & Insurance</a>
                        <a href="#sector-15" class="toc-link">14. Payroll & Employment</a>
                        <a href="#sector-16" class="toc-link">15. Record Keeping & IR10</a>
                    </div>
                </aside>

                <div class="content-sector">
                    
                    <div id="sector-1">
                        <h2 class="sector-title">1. Our Business Philosophy</h2>
                        <p>The commercial landscape of New Zealand presents unique challenges. While Kiwis are incredibly hard-working, the reality is that nearly half of all new businesses fail within their first five years. This hub aggregates practical intelligence to give you the clarity needed to build a sustainable company.</p>
                        
                        <h3 class="sub-header">The "Practical First" Approach</h3>
                        <p>At Creative Startup NZ, we believe in keeping things simple and cost-effective. We focus entirely on what actually moves the needle for your business, rejecting expensive "vanity" metrics.</p>
                        
                        <table class="data-table">
                            <tr>
                                <th>Strategic Component</th>
                                <th>Traditional Agency</th>
                                <th>The CSNZ Approach</th>
                                <th>The Benefit to You</th>
                            </tr>
                            <tr>
                                <td><strong>Brand Identity</strong></td>
                                <td>Long "Brand Workshops" ($5k+)</td>
                                <td>Custom Logo Design ($49.99)</td>
                                <td>Immediate, affordable legitimacy.</td>
                            </tr>
                            <tr>
                                <td><strong>Web Development</strong></td>
                                <td>Complex Custom Builds ($5k+)</td>
                                <td>Clean 5-Page Website ($650)</td>
                                <td>Speed to market. Zero technical debt.</td>
                            </tr>
                            <tr>
                                <td><strong>Business Advice</strong></td>
                                <td>Expensive Monthly Retainers</td>
                                <td>1-on-1 Consultation ($75/hr)</td>
                                <td>Honest, actionable advice when you need it.</td>
                            </tr>
                        </table>
                    </div>

                    <div id="sector-2" style="margin-top: 5rem;">
                        <h2 class="sector-title">2. Our Services Explained</h2>
                        <p>We prioritize resourcefulness over expensive resources. Here are the common questions about how we help local businesses.</p>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">Why is a custom logo necessary before the first sale?</h3>
                            <div class="faq-a">
                                <p>A logo creates immediate trust. It creates a "Halo Effect" where customers attribute quality to your service based on how professional you look. Our <a href="service-logo.php">Logo Design</a> ensures you don't look like an amateur.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Why is my website not generating traffic?</h3>
                            <div class="faq-a">
                                <p>If a website isn't technically optimized, it is invisible to Google. Our <a href="service-seo.php">SEO Audit</a> identifies the hidden errors (like broken links or mobile failures) that are preventing customers from finding you.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">How do I ensure my video content leads to sales?</h3>
                            <div class="faq-a">
                                <p>You need to capture attention instantly and tell people exactly what to do next. A professional Intro grabs their attention, and an Outro provides the Call-to-Action. Learn more about our <a href="service-video.php">Video Animations</a>.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Why isn't my social media posting resulting in engagement?</h3>
                            <div class="faq-a">
                                <p>Posting without a clear strategy is just adding to the noise. Our <a href="service-social.php">Social Media Audit</a> reviews your profiles to ensure your messaging actually builds trust and converts followers into leads.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">How do I know if my business idea is viable?</h3>
                            <div class="faq-a">
                                <p>A <a href="service-consult.php">Startup Consultation</a> is the best place to start. We sit down together, review your idea, and help you map out a practical plan to stop you from wasting money on the wrong things.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Do I need an expensive WordPress site to start?</h3>
                            <div class="faq-a">
                                <p>No. For brand new businesses, complex sites are often dangerous due to high ongoing maintenance costs. We recommend our <a href="service-website.php">5-Page Google Site</a> or our <a href="service-5-page-html-website.php">Custom HTML build</a> because they are fast, reliable, and incredibly cost-efficient.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">How can I launch my business without feeling overwhelmed?</h3>
                            <div class="faq-a">
                                <p>Our <a href="service-launch.php">Complete Launch Package</a> ($360.97) eliminates the stress of figuring it out yourself. It bundles the essentials: Logo Design, a Starter Website, and Business Strategy all into one affordable package.</p>
                            </div>
                        </div>
                    </div>

                    <div id="sector-3" style="margin-top: 5rem;">
                        <h2 class="sector-title">3. Key Marketing Concepts</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">What is "Digital Sovereignty"?</h3>
                            <div class="faq-a">
                                <p>As detailed in our <a href="blog-digital-hostage.php">Digital Hostage article</a>, it means taking total ownership of your digital assets. You must own the "Trinity": Your Domain Registrar, your Hosting Account, and your Website Admin access. Never let a vendor hold the keys to your business.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">How can I turn social media disruption into revenue?</h3>
                            <div class="faq-a">
                                <p>You must build an audience you actually own. Social media algorithms constantly change, but your email list belongs to you. Read our guide on <a href="blog-newsletter-revenue.php">Building an Audience</a> to learn more.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">Should I pay thousands for a business coaching seminar?</h3>
                            <div class="faq-a">
                                <p>No. Read our warning on <a href="blog-seminar-trap.php">The Seminar Trap</a>. Many "gurus" use high-pressure psychological tactics to make a $20,000 course look like a good deal. Invest your startup capital into building real assets, not buying secrets.</p>
                            </div>
                        </div>
                    </div>

                    <div id="sector-4" style="margin-top: 5rem;">
                        <h2 class="sector-title">4. Business Planning</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">Am I ready to start a business?</h3>
                            <div class="faq-a">
                                <p>You need to assess your personal readiness. Passion is important, but passion without a clear plan is dangerous. You must conduct initial research on the legal requirements and ensure there is an actual market need for your idea.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Do I actually need a business plan?</h3>
                            <div class="faq-a">
                                <p>Yes. It doesn't have to be a 50-page document, but it serves as your roadmap. It must outline your objectives, how you will find customers, and crucially, your rolling cash flow forecasts to ensure you don't run out of money.</p>
                            </div>
                        </div>
                    </div>

                    <div id="sector-5" style="margin-top: 5rem;">
                        <h2 class="sector-title">5. Market Research Basics</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">What type of research should I do before launching?</h3>
                            <div class="faq-a">
                                <p>You should mix <strong>Qualitative</strong> research (talking directly to people to find out "why" they buy) and <strong>Quantitative</strong> research (using surveys or test marketing to find out "how many" people might buy).</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Where can I find reliable New Zealand business data?</h3>
                            <div class="faq-a">
                                <p>Excellent free resources include Stats NZ (Infoshare), your local Industry Associations, and Xero's small business guides. However, simply sitting down and having a coffee with potential customers is often the most effective research tool you have.</p>
                            </div>
                        </div>
                    </div>

                    <div id="sector-6" style="margin-top: 5rem;">
                        <h2 class="sector-title">6. Corporate Structure Setup</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">How do I incorporate a company in NZ?</h3>
                            <div class="faq-a">
                                <p>The process is straightforward and completed entirely online via the government's Companies Office website.</p>
                                <table class="data-table">
                                    <tr>
                                        <th>Step</th>
                                        <th>Cost (NZD)</th>
                                        <th>Details</th>
                                    </tr>
                                    <tr>
                                        <td>1. Reserve Name</td>
                                        <td>$10.00 + GST</td>
                                        <td>A mandatory check to ensure your name is unique.</td>
                                    </tr>
                                    <tr>
                                        <td>2. Incorporation</td>
                                        <td>$118.74 + GST</td>
                                        <td>The formal registration fee to create the company.</td>
                                    </tr>
                                    <tr>
                                        <td>3. Tax Registration</td>
                                        <td>Free</td>
                                        <td>Registering for your new IRD number and GST (if applicable).</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div id="sector-7" style="margin-top: 5rem;">
                        <h2 class="sector-title">7. Technical SEO Architecture</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">Why can't I edit the 'robots.txt' file on Google Sites?</h3>
                            <div class="faq-a">
                                <p>Google Sites is a closed platform managed entirely by Google. You are essentially a tenant on their servers, meaning you cannot access or alter backend server files like robots.txt.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">What is JSON-LD Schema code, and how does it help?</h3>
                            <div class="faq-a">
                                <p>Because some website builders are rigid, we manually inject "Schema" code into your website. This is a specific language that directly feeds Google the exact details about your business so it understands what you do.</p>
                                <table class="data-table">
                                    <tr>
                                        <th>Schema Type</th>
                                        <th>Purpose</th>
                                        <th>How it helps you</th>
                                    </tr>
                                    <tr>
                                        <td>Organization</td>
                                        <td>Identity</td>
                                        <td>Tells Google your exact business name, logo, and contact info.</td>
                                    </tr>
                                    <tr>
                                        <td>Service</td>
                                        <td>Commercial</td>
                                        <td>Clearly defines your services and prices for search engines.</td>
                                    </tr>
                                    <tr>
                                        <td>FAQPage</td>
                                        <td>Visibility</td>
                                        <td>Can help your frequently asked questions appear directly in Google search results.</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div id="sector-8" style="margin-top: 5rem;">
                        <h2 class="sector-title">8. Franchising in NZ</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">Are there specific franchise laws in New Zealand?</h3>
                            <div class="faq-a">
                                <p>No. Unlike Australia, the NZ franchise industry is largely self-regulated. It is highly recommended to check if a franchisor is a registered member of the Franchise Association of New Zealand (FANZ). If they aren't, your risk profile as a buyer increases significantly.</p>
                            </div>
                        </div>
                    </div>

                    <div id="sector-10" style="margin-top: 5rem;">
                        <h2 class="sector-title">9. Legal Entity Structures</h2>
                        
                        <h3 class="sub-header">Choosing a Business Structure</h3>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">What is the difference between a Sole Trader and a Limited Company?</h3>
                            <div class="faq-a">
                                <p>As a <strong>sole trader</strong>, you and your business are exactly the same legal entity. This means you have unlimited personal liability for any business debts or legal claims against you.</p>
                                <p>A <strong>limited company</strong> is a separate legal entity completely distinct from its owners. This corporate "shield" generally protects your personal assets (like your house) from commercial debts.</p>
                                <p>A sole trader pays tax on their profits at their normal individual tax rates, while a company pays a flat corporate tax rate of 28%.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">What is a Look-Through Company (LTC)?</h3>
                            <div class="faq-a">
                                <p>An LTC is a unique setup. Legally, it is a standard limited company that offers you the protection of limited liability.</p>
                                <p>However, for tax purposes, Inland Revenue "looks through" the company. This means the profits and losses flow directly to the owners, who pay the tax on their personal tax returns instead of the company paying the flat corporate rate.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">What is my liability in a Partnership?</h3>
                            <div class="faq-a">
                                <p>In a standard general partnership, the partners face unlimited personal liability for the business's debts.</p>
                                <p>Partners are bound by "Joint and Several Liability." This means a creditor can legally pursue <em>any single partner</em> for 100% of a partnership debt, regardless of whether you caused the debt or what your percentage share of the business is.</p>
                            </div>
                        </div>

                        <h3 class="sub-header">Sole Trader Essentials</h3>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">Can I use a trading name without registering it?</h3>
                            <div class="faq-a">
                                <p>Yes, there is no legal requirement for a sole trader to formally register a trading name.</p>
                                <p>However, you should always use the government's free ONECheck tool to verify the name doesn't infringe on an existing trademark, which could trigger immediate legal action against you.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Do I need an NZBN as a sole trader?</h3>
                            <div class="faq-a">
                                <p>While it is optional for sole traders, getting a New Zealand Business Number (NZBN) is highly recommended. It is a free, globally recognized identifier that makes your business look more credible and speeds up administrative tasks.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Do I need to follow health and safety laws if I work alone?</h3>
                            <div class="faq-a">
                                <p>Yes. Even as a sole trader working alone, you are legally classified as a "PCBU" (Person Conducting a Business or Undertaking) under the Health and Safety at Work Act 2015.</p>
                                <p>You have a primary duty of care to ensure your own safety and the safety of the public affected by your work.</p>
                            </div>
                        </div>

                        <h3 class="sub-header">Partnerships</h3>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">Does a general partnership need formal registration to exist?</h3>
                            <div class="faq-a">
                                <p>No, a general partnership requires no formal government registration to exist. However, the partnership must apply for its own dedicated IRD number for tax purposes.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">How do individual partners report their partnership income?</h3>
                            <div class="faq-a">
                                <p>The partnership files an IR7 return to declare the total profit. Then, that profit is allocated to each partner. Each partner must then file their own Individual Income Tax Return (IR3) using their personal IRD number, paying tax on their specific share.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Are drawings considered a deductible business expense for partners?</h3>
                            <div class="faq-a">
                                <p>No, taking cash out of the business as "drawings" is not a deductible business expense. You pay tax on your allocated share of the total business profit, regardless of how much actual cash you chose to withdraw during the year.</p>
                            </div>
                        </div>

                        <h3 class="sub-header">Limited Companies</h3>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">What are the basic requirements to incorporate a company?</h3>
                            <div class="faq-a">
                                <p>To incorporate in New Zealand, your company must have a registered name ending in "Limited" or "Tapui Limited", at least one share issued, at least one shareholder, at least one director (who must live in NZ or Australia), and registered physical addresses.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">What is the Solvency Test for paying dividends?</h3>
                            <div class="faq-a">
                                <p>Before paying out a dividend to shareholders, the directors must legally sign a certificate confirming the company passes the Solvency Test. This means proving that after the cash is paid out, the company can still pay its debts and its total assets remain greater than its liabilities.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">What is an Annual Return?</h3>
                            <div class="faq-a">
                                <p>An Annual Return is a legal check-in filed every year with the Companies Office to confirm that your directors, addresses, and shareholdings are up to date. It costs a small fee. Note: This is completely separate from your annual tax return filed with the IRD.</p>
                            </div>
                        </div>
                    </div>

                    <div id="sector-11" style="margin-top: 5rem;">
                        <h2 class="sector-title">10. Taxation & IRD</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">Do I need a separate IRD number for my business?</h3>
                            <div class="faq-a">
                                <p>If you are a <strong>sole trader</strong>, you just use your personal IRD number for all your business taxes.</p>
                                <p>If you operate as a <strong>Partnership, Limited Company, or Trust</strong>, the business is a separate entity and must apply for its own dedicated IRD number.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Is my first year in business tax-free?</h3>
                            <div class="faq-a">
                                <p>No, the first year is definitely not tax-free.</p>
                                <p>While you might not be required to make regular tax payments <em>during</em> your first year, the profit you generate is fully taxable. That entire accumulated tax bill will hit you as a massive lump sum the following year, which often catches new business owners off guard.</p>
                            </div>
                        </div>

                        <h3 class="sub-header">Understanding Provisional Tax</h3>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">What is Provisional Tax?</h3>
                            <div class="faq-a">
                                <p>If your end-of-year tax bill (after PAYE and credits) is more than $5,000, you will trigger "provisional tax" for the following year.</p>
                                <p>This means the IRD requires you to pay your estimated income tax in advance installments (usually three times a year) rather than waiting until the end of the year.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">What is the AIM Option for provisional tax?</h3>
                            <div class="faq-a">
                                <p>The Accounting Income Method (AIM) is a great option for small businesses. It bases your provisional tax payments on your actual cash flows during the year, calculated directly through your approved accounting software (like Xero). If you make less profit, you pay less tax.</p>
                            </div>
                        </div>
                    </div>

                    <div id="sector-12" style="margin-top: 5rem;">
                        <h2 class="sector-title">11. GST Frameworks</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">When do I legally have to register for GST?</h3>
                            <div class="faq-a">
                                <p>You must register for GST if your gross turnover (total sales before any expenses are deducted) goes over $60,000 in a 12-month period, or if you expect it will cross that threshold in the next 12 months.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Can I register for GST if I earn under $60,000?</h3>
                            <div class="faq-a">
                                <p>Yes, you can register voluntarily. Many startups do this so they can claim back the 15% GST they pay on their initial setup expenses and equipment, even though it adds the admin work of filing regular GST returns.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">What are the rules for issuing invoices if I am GST registered?</h3>
                            <div class="faq-a">
                                <p>Recent law changes simplified the rules, replacing strict "Tax Invoices" with "Taxable Supply Information."</p>
                                <ul>
                                    <li><strong>Under $200:</strong> You must provide your trade name, the date, a description of the goods, and the total amount.</li>
                                    <li><strong>$200 to $1,000:</strong> You must also include your GST number and clearly show the GST amount.</li>
                                    <li><strong>Over $1,000:</strong> You must include all the above, plus the buyer's name and contact information (like their address or NZBN).</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="sector-13" style="margin-top: 5rem;">
                        <h2 class="sector-title">12. Managing Expenses & Assets</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">What is the difference between revenue expenses and capital expenses?</h3>
                            <div class="faq-a">
                                <p><strong>Revenue expenses</strong> are your normal day-to-day running costs (like rent, marketing, or power). These are fully deductible immediately.</p>
                                <p><strong>Capital expenses</strong> are larger assets you buy that last longer than 12 months (like a work vehicle or a computer). You cannot deduct the full cost immediately; instead, you must "depreciate" the cost over the lifespan of the item.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Can I claim expenses for using my personal vehicle?</h3>
                            <div class="faq-a">
                                <p>If you use a vehicle strictly for business, you can claim 100% of the running costs.</p>
                                <p>If you use it for both business and personal travel, you must keep a logbook for 3 months (recording the distance and reason for every trip) to calculate the exact business percentage you can claim. Without a logbook, you are limited to claiming a maximum of 25% of the costs.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">How do I claim expenses for my home office?</h3>
                            <div class="faq-a">
                                <p>You can deduct a portion of your household bills (like rent, mortgage interest, power, and internet) based on the exact square-meter percentage of your home used exclusively for the business.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Are business lunches fully deductible?</h3>
                            <div class="faq-a">
                                <p>Generally, business entertainment expenses (like taking a client out for lunch or coffee) are only 50% deductible because the IRD considers them to have a significant private benefit.</p>
                            </div>
                        </div>
                    </div>

                    <div id="sector-14" style="margin-top: 5rem;">
                        <h2 class="sector-title">13. ACC & Risk Management</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">Are ACC levies tax-deductible?</h3>
                            <div class="faq-a">
                                <p>Yes. Your ACC levies are a deductible business expense, meaning you can claim them to reduce your taxable profit.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Why is my Business Industry Classification (BIC) code important?</h3>
                            <div class="faq-a">
                                <p>Your BIC code tells ACC exactly what kind of work you do, which determines your risk profile. If you select a code that is inaccurate or too broad, you could end up paying a much higher variable ACC Work Levy than necessary.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">What is ACC CoverPlus Extra (CPX)?</h3>
                            <div class="faq-a">
                                <p>By default, self-employed people are on ACC CoverPlus, which pays out based on your fluctuating past income. If you had a slow year, your payout will be low.</p>
                                <p><strong>CoverPlus Extra (CPX)</strong> is an alternative, agreed-value policy. You negotiate a guaranteed level of income cover in advance. If you get hurt, ACC pays 100% of that agreed amount, giving you total financial certainty without needing to prove your lost income at claim time.</p>
                            </div>
                        </div>
                    </div>

                    <div id="sector-15" style="margin-top: 5rem;">
                        <h2 class="sector-title">14. Payroll & Employment</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">Do I need to register as an employer if I hire staff?</h3>
                            <div class="faq-a">
                                <p>Yes. Even as a sole trader, if you hire an employee, you must formally register as an employer with Inland Revenue before their first payday.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">What happens if I treat a true employee as an independent contractor?</h3>
                            <div class="faq-a">
                                <p>This is a serious offense. If you try to classify an employee as a contractor just to avoid paying holiday pay or deducting PAYE tax, you can be prosecuted, fined, and forced to back-pay all the taxes and benefits you avoided.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">What is the employer's responsibility for KiwiSaver?</h3>
                            <div class="faq-a">
                                <p>If your employee is enrolled in KiwiSaver, you are legally required to make a compulsory employer contribution equal to 3% of their gross pay on top of their wages.</p>
                            </div>
                        </div>
                    </div>

                    <div id="sector-16" style="margin-top: 5rem;">
                        <h2 class="sector-title">15. Record Keeping</h2>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">How long must I keep my business receipts and records?</h3>
                            <div class="faq-a">
                                <p>By law, you must keep all business records—including invoices, receipts, bank statements, and wage books—for a minimum of seven years.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-q">Can I just keep digital copies?</h3>
                            <div class="faq-a">
                                <p>Yes. Keeping electronic records is completely fine and often safer, as long as you have clear, readable copies of the original invoices or receipts to prove your income and expenses to the IRD if asked.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <h3 class="faq-q">What is the IR10 form?</h3>
                            <div class="faq-a">
                                <p>The IR10 is a summary of your financial statements that you file with your tax return. It helps the IRD gather statistics. Importantly, filing an IR10 does not replace your legal obligation to actually prepare and keep your full financial accounts.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>
        <?php include 'footer.php'; ?>
    </div>
    
    
    </script>
</body>
</html>