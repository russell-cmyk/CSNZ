<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Network | Creative Startup NZ</title>
    <meta name="description" content="Join our supportive community of New Zealand and Australian startups. Share practical advice, ask questions, and grow your business together.">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.creativestartupnz.com/startup-network.php">
    <meta property="og:title" content="Startup Network | Creative Startup NZ">
    <meta property="og:description" content="Join our supportive community of New Zealand and Australian startups. Share practical advice, ask questions, and grow your business together.">
    <meta property="og:image" content="https://www.creativestartupnz.com/images/fb-group-cover.png">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.creativestartupnz.com/startup-network.php">
    <meta property="twitter:title" content="Startup Network | Creative Startup NZ">
    <meta property="twitter:description" content="Join our supportive community of New Zealand and Australian startups. Share practical advice, ask questions, and grow your business together.">
    <meta property="twitter:image" content="https://www.creativestartupnz.com/images/fb-group-cover.png">
    
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

        /* HERO HEADER */
        .network-header {
            padding: 8rem 2rem;
            background-color: var(--surface);
            border-bottom: var(--border-std);
            text-align: center;
            background-image: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.8)), url('images/fb-group-cover.png');
            background-size: cover;
            background-position: center;
            position: relative;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .network-title {
            font-family: var(--font-cmd);
            font-weight: 800;
            font-size: 4rem;
            color: #FFFFFF; /* Kept solid white to contrast with dark image overlay */
            text-transform: uppercase;
            line-height: 1.1;
            margin-bottom: 1rem;
            text-shadow: 0 4px 20px rgba(0,0,0,0.9);
        }

        .network-subtitle {
            font-size: 1.2rem;
            color: #E0E0E0; /* Kept solid light grey to contrast with dark image overlay */
            font-family: var(--font-brief);
            font-weight: 500;
            background-color: rgba(0,0,0,0.6);
            display: inline-block;
            padding: 8px 20px;
            border-radius: 4px !important;
            border: 1px solid rgba(255,255,255,0.2);
        }

        /* CTA BOX */
        .group-cta-container {
            background-color: var(--surface);
            padding: 4rem 2rem;
            border-bottom: var(--border-std);
            text-align: center;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .btn-join-group {
            display: inline-block;
            background-color: #1877F2; /* Standard Facebook Blue */
            color: #FFFFFF;
            font-family: var(--font-cmd);
            font-weight: 700;
            font-size: 1.3rem;
            padding: 1.2rem 3rem;
            text-decoration: none;
            text-transform: uppercase;
            border: 2px solid #1877F2;
            border-radius: 4px !important;
            transition: 0.2s;
        }

        .btn-join-group:hover {
            background-color: transparent;
            color: #1877F2;
        }

        /* RHYTHM GRID */
        .arena-wrapper {
            padding: 5rem 2rem;
            background-color: var(--void);
            transition: background-color 0.3s ease;
        }

        .arena-header {
            font-family: var(--font-cmd);
            font-weight: 800;
            color: var(--signal-high);
            font-size: 2.2rem;
            text-transform: uppercase;
            margin-bottom: 3rem;
            border-left: 4px solid var(--phoenix);
            padding-left: 1rem;
            transition: color 0.3s ease;
        }

        .rhythm-row {
            display: flex;
            border-bottom: var(--border-std);
            padding: 2rem 0;
            align-items: flex-start;
            transition: border-color 0.3s ease;
        }

        .date-box {
            background-color: var(--surface);
            width: 80px;
            height: 80px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: var(--signal-high);
            font-family: var(--font-cmd);
            margin-right: 2rem;
            border-radius: 8px !important;
            border: var(--border-std);
            transition: all 0.3s ease;
        }
        
        /* ACTIVE DAY STYLING */
        .date-box.active-day {
            background-color: var(--phoenix) !important;
            border-color: var(--phoenix) !important;
            color: #000000 !important;
            transform: scale(1.05);
        }

        .date-box .big-text { font-size: 1.8rem; font-weight: 800; line-height: 1; }
        .date-box .small-text { font-size: 0.8rem; font-family: var(--font-data); font-weight: 700;}

        .content-box { flex-grow: 1; }

        .meta-tag {
            font-family: var(--font-data);
            font-weight: 700;
            font-size: 0.8rem;
            color: var(--phoenix);
            margin-bottom: 0.5rem;
            display: block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: color 0.3s ease;
        }

        .item-title {
            font-family: var(--font-cmd);
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--signal-high);
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .item-desc {
            color: var(--signal-med);
            max-width: 800px;
            font-size: 1.05rem;
            transition: color 0.3s ease;
        }

        /* HIGHLIGHT BOXES */
        .highlight-box {
            margin-top: 4rem;
            border: var(--border-std);
            background-color: var(--surface);
            padding: 2.5rem;
            border-radius: 8px !important;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .surprise-highlight {
            border-color: var(--phoenix);
            outline: 2px solid var(--phoenix); /* Added outline for extra pop */
        }

        .workshop-highlight {
            border-color: var(--terminal);
            outline: 2px solid var(--terminal); /* Added outline for extra pop */
        }

        .highlight-header {
            font-family: var(--font-cmd);
            font-weight: 800;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        @media (max-width: 768px) {
            .rhythm-row { flex-direction: column; }
            .date-box { margin-bottom: 1.5rem; width: 100%; height: auto; padding: 10px; flex-direction: row; gap: 15px; }
            .network-title { font-size: 2.8rem; }
        }
    </style>
</head>
<body>
    <div class="mainframe">
        <?php include 'header.php'; ?>
        <main>
            
            <header class="network-header">
                <h1 class="network-title">The Startup Network</h1>
                <div class="network-subtitle">A practical community for NZ & Australian Founders</div>
            </header>

            <section class="group-cta-container">
                <p style="margin-bottom: 2rem; max-width: 750px; margin-left: auto; margin-right: auto; font-size: 1.15rem; color: var(--signal-high); transition: color 0.3s ease;">
                    Starting a business can feel incredibly isolating. Our free Facebook Group is a safe, practical space where local founders share real advice, ask questions without judgment, and help each other grow.
                </p>
                <a href="https://www.facebook.com/groups/startingabusinessinnzaustralia" target="_blank" class="btn-join-group">
                    JOIN THE COMMUNITY
                </a>
            </section>

            <div class="arena-wrapper">
                
                <div class="highlight-box surprise-highlight">
                    <h2 class="highlight-header" style="color: var(--phoenix);">Upcoming Live Session: AI Newsletter Creation</h2>
                    <div class="rhythm-row" style="border:none; padding:0;">
                        <div class="date-box" style="background-color: var(--phoenix); border-color: var(--phoenix); color: #000000;">
                            <span class="big-text" id="dynamic-day">--</span>
                            <span class="small-text" id="dynamic-month">--</span>
                        </div>
                        <div class="content-box">
                            <h3 class="item-title">Write emails faster with AI</h3>
                            <p class="item-desc" style="margin-bottom: 1.5rem;">
                                Stop staring at a blank screen wondering what to send your email list. We are running a quick, practical session on using free AI tools to generate a custom email newsletter that actually sounds like you.
                                <br><br>
                                <strong style="color: var(--signal-high); transition: color 0.3s ease;">Bonus:</strong> Everyone who attends gets our free step-by-step PDF guide so you can do it yourself immediately.
                            </p>
                            <a href="https://www.facebook.com/groups/startingabusinessinnzaustralia" style="color: var(--phoenix); font-family: var(--font-cmd); font-weight: 700; font-size: 1.1rem; text-decoration: none; border-bottom: 1px dashed var(--phoenix); padding-bottom: 2px; transition: color 0.2s ease;">JOIN THE GROUP TO WATCH ></a>
                        </div>
                    </div>
                </div>

                <h2 class="arena-header" style="margin-top: 4rem;">Our Weekly Schedule</h2>
                <p style="color: var(--signal-med); margin-bottom: 3rem; font-size: 1.1rem; transition: color 0.3s ease;">We run specific discussion themes each day to keep the group organized and helpful.</p>

                <div class="rhythm-row">
                    <div class="date-box" data-day="1">
                        <span class="big-text">MON</span>
                        <span class="small-text">WEEKLY</span>
                    </div>
                    <div class="content-box">
                        <span class="meta-tag">Facebook Group</span>
                        <h3 class="item-title">Promote Your Business</h3>
                        <p class="item-desc">Mondays are for sharing! Tell us exactly what you do, drop links to your website or latest offer, and let the community support you.</p>
                    </div>
                </div>

                <div class="rhythm-row">
                    <div class="date-box" data-day="2">
                        <span class="big-text">TUE</span>
                        <span class="small-text">WEEKLY</span>
                    </div>
                    <div class="content-box">
                        <span class="meta-tag">Facebook Group</span>
                        <h3 class="item-title">Ask for Help</h3>
                        <p class="item-desc">Stuck on a problem? Need a recommendation for an accountant or a reliable supplier? Ask the group. Our members are here to help.</p>
                    </div>
                </div>

                <div class="rhythm-row">
                    <div class="date-box" data-day="3">
                        <span class="big-text">WED</span>
                        <span class="small-text">WEEKLY</span>
                    </div>
                    <div class="content-box">
                        <span class="meta-tag">Facebook Group</span>
                        <h3 class="item-title">Website & Social Audits</h3>
                        <p class="item-desc">Post a link to your Facebook page or new website. We'll give you gentle, constructive feedback on how to improve it and get more customers.</p>
                    </div>
                </div>

                <div class="rhythm-row">
                    <div class="date-box" data-day="4">
                        <span class="big-text">THU</span>
                        <span class="small-text">WEEKLY</span>
                    </div>
                    <div class="content-box">
                        <span class="meta-tag">Facebook Group</span>
                        <h3 class="item-title">Share Your Wins</h3>
                        <p class="item-desc">Did you make your first sale? Finally launch your website? Share your victories with us—big or small. We want to celebrate with you.</p>
                    </div>
                </div>

                <div class="rhythm-row">
                    <div class="date-box" data-day="5">
                        <span class="big-text">FRI</span>
                        <span class="small-text">WEEKLY</span>
                    </div>
                    <div class="content-box">
                        <span class="meta-tag">Facebook Group</span>
                        <h3 class="item-title">The Friday Vent</h3>
                        <p class="item-desc">Running a business is stressful. Bad clients, late payments, frustrating tech. Get it off your chest in a safe space so you don't carry it into the weekend.</p>
                    </div>
                </div>

                <div class="highlight-box workshop-highlight">
                    <h2 class="highlight-header" style="color: var(--terminal);">Next Free Workshop</h2>
                    <div class="rhythm-row" style="border:none; padding:0;">
                        <div class="date-box" style="background-color: var(--surface); border: 1px solid var(--terminal); color: var(--signal-high);">
                            <span class="big-text" id="workshop-day">28</span>
                            <span class="small-text" id="workshop-month">FEB</span>
                        </div>
                        <div class="content-box">
                            <h3 class="item-title">Build a Newsletter from Scratch</h3>
                            <p class="item-desc" style="margin-bottom: 1.5rem;">We are hosting a free online workshop showing you exactly how to build and send a professional email newsletter without needing any expensive software.</p>
                            <a href="workshop-events.php" style="color: var(--terminal); font-family: var(--font-cmd); font-weight: 700; font-size: 1.1rem; text-decoration: none; border-bottom: 1px dashed var(--terminal); padding-bottom: 2px; transition: color 0.2s ease;">SECURE YOUR FREE TICKET ></a>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <?php include 'footer.php'; ?>
    </div>

    
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // --- PART 1: UPDATE SURPRISE DATE (Today + 1) ---
            const targetDate = new Date();
            targetDate.setDate(targetDate.getDate() + 1);
            
            const day = targetDate.getDate().toString().padStart(2, '0');
            const month = targetDate.toLocaleString('default', { month: 'short' }).toUpperCase();

            const dayElement = document.getElementById('dynamic-day');
            const monthElement = document.getElementById('dynamic-month');

            if(dayElement && monthElement) {
                dayElement.innerText = day;
                monthElement.innerText = month;
            }

            // --- PART 2: HIGHLIGHT CURRENT WEEKDAY ---
            // 0=Sun, 1=Mon, 2=Tue, 3=Wed, 4=Thu, 5=Fri, 6=Sat
            const todayIndex = new Date().getDay();
            
            // Look for the date-box that has the matching data-day attribute
            const todayBox = document.querySelector(`.date-box[data-day="${todayIndex}"]`);
            
            if (todayBox) {
                todayBox.classList.add('active-day');
                
                // Change the sub-text from "WEEKLY" to "TODAY"
                const subText = todayBox.querySelector('.small-text');
                if (subText) subText.innerText = 'TODAY';
            }

            // --- PART 3: EVERGREEN WORKSHOP DATE ---
            // Initial Base Date: FEB 28, 2026 09:00:00 NZDT (Months are 0-indexed)
            var targetWorkshopDate = new Date(2026, 1, 28, 9, 0, 0); 
            var nowTime = new Date();
            
            // Automatically roll the date forward by 28 days if target is in the past
            while (targetWorkshopDate.getTime() < nowTime.getTime()) {
                targetWorkshopDate.setDate(targetWorkshopDate.getDate() + 28);
            }

            const wsDay = document.getElementById('workshop-day');
            const wsMonth = document.getElementById('workshop-month');

            if (wsDay && wsMonth) {
                const months = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
                wsDay.innerText = (targetWorkshopDate.getDate() < 10 ? "0" : "") + targetWorkshopDate.getDate();
                wsMonth.innerText = months[targetWorkshopDate.getMonth()];
            }
        });
    </script>
</body>
</html>