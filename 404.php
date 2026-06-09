<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 // YEAH, NAH. PAGE NOT FOUND // CSNZ</title>
    <meta name="description" content="404 Error. You're lost in the bush. Take a breath, stop watching kittens, and let's get back to the mahi.">
    
    <link rel="icon" type="image/png" href="images/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@500;700;800&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        /* CSNZ CORE CSS VARIABLES RESTORED */
        :root {
            --void: #121212;
            --surface: #1A1A1A;
            --structure: #333333;
            --deep-black: #000000;
            --signal-high: #E0E0E0;
            --signal-med: #CCCCCC;
            --signal-low: #999999;
            --phoenix: #FF6A00;
            --terminal: #CCFF00;
            --warning: #E57373;
            --threat: #FF3333;
            --radius-hard: 4px;
            --border-std: 1px solid var(--structure);
            
            --font-cmd: 'Montserrat', sans-serif;
            --font-brief: 'Inter', sans-serif;
            --font-data: 'Roboto Mono', monospace;
        }

        /* Light Mode Fallback */
        [data-theme="light"], .light-mode {
            --void: #FFFFFF;
            --surface: #F5F5F5;
            --structure: #E0E0E0;
            --deep-black: #FFFFFF;
            --signal-high: #121212;
            --signal-med: #444444;
            --signal-low: #666666;
            --border-std: 1px solid var(--structure);
        }

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

        .error-header {
            padding: 6rem 2rem;
            background-color: var(--surface);
            border-bottom: var(--border-std);
            text-align: center;
            border-top: 4px solid var(--threat);
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .error-title {
            font-family: var(--font-cmd);
            font-weight: 800;
            font-size: 4rem;
            color: var(--threat);
            text-transform: uppercase;
            line-height: 1;
            margin-bottom: 1rem;
            text-shadow: 0 0 10px rgba(255, 51, 51, 0.3);
            transition: color 0.3s ease;
        }

        .error-subtitle {
            font-size: 1.2rem;
            color: var(--signal-high);
            font-family: var(--font-data);
            font-weight: 700;
            letter-spacing: 2px;
            transition: color 0.3s ease;
        }

        .intel-block {
            background-color: var(--void);
            padding: 2rem;
            border: var(--border-std);
            margin: -3rem auto 3rem auto;
            max-width: 800px;
            position: relative;
            z-index: 10;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            text-align: center;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .status-item { border-right: var(--border-std); transition: border-color 0.3s ease; }
        .status-item:last-child { border-right: none; }
        
        .status-label {
            font-family: var(--font-data);
            font-weight: 700;
            font-size: 0.8rem;
            color: var(--signal-low);
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }
        
        .status-value {
            font-family: var(--font-cmd);
            font-weight: 800;
            color: var(--signal-high);
            font-size: 1.2rem;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .briefing-sector { max-width: 900px; margin: 0 auto; padding: 2rem 2rem 6rem 2rem; }

        .briefing-title {
            font-family: var(--font-cmd);
            font-weight: 800;
            color: var(--phoenix);
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            border-left: 4px solid var(--phoenix);
            padding-left: 1rem;
            transition: color 0.3s ease;
        }

        .briefing-text p { margin-bottom: 1.5rem; font-size: 1.1rem; transition: color 0.3s ease; }
        .briefing-text strong { color: var(--signal-high); font-weight: 600; transition: color 0.3s ease; }

        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            height: 0;
            overflow: hidden;
            border: var(--border-std);
            margin-bottom: 3rem;
            background-color: #000000;
            transition: border-color 0.3s ease;
        }
        .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }

        .recovery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .recovery-card {
            background-color: var(--surface);
            border: var(--border-std);
            padding: 1.5rem;
            transition: all 0.3s ease;
        }
        .recovery-card:hover { 
            border-color: var(--phoenix); 
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .protocol-title {
            color: var(--terminal);
            font-family: var(--font-cmd);
            font-weight: 800;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .protocol-link {
            color: var(--signal-high);
            text-decoration: underline;
            font-weight: 700;
            transition: color 0.2s ease;
        }
        .protocol-link:hover { color: var(--phoenix); }

        .unit-status {
            margin-top: 4rem;
            padding-top: 2rem;
            border-top: 1px dashed var(--structure);
            font-family: var(--font-data);
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--signal-med);
            transition: color 0.3s ease, border-color 0.3s ease;
        }

        @media (max-width: 768px) {
            .error-title { font-size: 2.5rem; }
            .intel-block { grid-template-columns: 1fr; border: none; margin-top: 0; background-color: transparent;}
            .status-item { border-right: none; border-bottom: var(--border-std); padding-bottom: 1rem; }
        }
    </style>
</head>
<body>
    <div class="mainframe">
        <?php include 'header.php'; ?>

        <main>
            <header class="error-header">
                <h1 class="error-title">ERROR 404 // YEAH... NAH, MATE</h1>
                <p class="error-subtitle">/// YOU'VE WANDERED OFF THE TRACK, BOSS</p>
            </header>

            <div class="intel-block">
                <div class="status-item">
                    <span class="status-label">CURRENT ACTIVITY</span>
                    <span class="status-value" style="color: var(--threat); transition: color 0.3s ease;">AVOIDING XERO</span>
                </div>
                <div class="status-item">
                    <span class="status-label">INVOICES PAID TODAY</span>
                    <span class="status-value">$0.00 (STILL WAITING)</span>
                </div>
                <div class="status-item">
                    <span class="status-label">FLAT WHITES CONSUMED</span>
                    <span class="status-value" style="color: var(--threat); transition: color 0.3s ease;">DANGEROUSLY HIGH</span>
                </div>
            </div>

            <div class="briefing-sector">
                <h2 class="briefing-title">The Hard Truth (And a Virtual Hug):</h2>
                <div class="briefing-text">
                    <p>Look, we get it. Running a small business in Aotearoa right now is tougher than a two-dollar steak. You were probably looking for the <strong>"Secret Button That Pays the GST Bill"</strong> or trying to find a corner of the internet to hide from your accountant.</p>
                    <p><strong>Bad news:</strong> That page doesn't exist. Just like the mythical concept of a "four-hour work week."</p>
                    <p>You’ve stumbled into the 404 Void. Since you're already here bleeding daylight and actively searching for Kung-fu kitten videos instead of doing your admin, we might as well just lean into it. Enjoy the distraction. Breathe. You've earned a two-minute break.</p>
                </div>

                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/tnBdfBTEXZE?autoplay=1&mute=1" title="Mandatory Kung-Fu Kitten Distraction" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <h2 class="briefing-title" style="border-color: var(--terminal); color: var(--terminal);">HOW TO GET UNSTUCK:</h2>

                <div class="recovery-grid">
                    <div class="recovery-card">
                        <div class="protocol-title">BACK TO BASECAMP</div>
                        <p style="font-size: 0.9rem; color: var(--signal-med); transition: color 0.3s ease;">Fall back to the <a href="index.php" class="protocol-link">Homepage</a> before you end up in a three-hour YouTube spiral.</p>
                    </div>
                    <div class="recovery-card">
                        <div class="protocol-title">CHUCK IT IN THE 'TOO HARD' BASKET</div>
                        <p style="font-size: 0.9rem; color: var(--signal-med); transition: color 0.3s ease;">Stop trying to fix broken code yourself. Check our <a href="services.php" class="protocol-link">Services</a> and let us handle the tech while you do the actual mahi.</p>
                    </div>
                    <div class="recovery-card">
                        <div class="protocol-title">THE NO. 8 WIRE UPGRADE</div>
                        <p style="font-size: 0.9rem; color: var(--signal-med); transition: color 0.3s ease;">Duct tape won't fix your margins. Read the <a href="blog-survival-blueprint.php" class="protocol-link">Survival Blueprint</a> and get a proper battle plan.</p>
                    </div>
                    <div class="recovery-card">
                        <div class="protocol-title">SING OUT FOR A YARN</div>
                        <p style="font-size: 0.9rem; color: var(--signal-med); transition: color 0.3s ease;">If you are genuinely stuck (in business or on this site), <a href="contact.php" class="protocol-link">Contact Us</a>. We'll put the metaphorical kettle on.</p>
                    </div>
                </div>

                <div class="unit-status">
                    <strong style="color: var(--threat); transition: color 0.3s ease;">KIWI BIZ REALITY CHECK:</strong> Wearing 15 hats at once is exhausting, and it is 100% okay that you wanted to watch cats do martial arts for five minutes. You're doing great. Now, crack your knuckles, close this tab, and let's get back to work. Kia kaha. <br>
                </div>
            </div>
        </main>
        
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>