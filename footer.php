<style>
    /* --- FOOTER BANNER --- */
    .workshop-banner {
        background-color: var(--surface);
        border-top: 4px solid var(--phoenix);
        border-bottom: var(--border-std);
        padding: 1.5rem;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 2rem;
        text-align: center;
    }

    .banner-text {
        font-family: var(--font-cmd);
        color: var(--signal-high);
        font-size: 1.2rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .banner-timer { display: flex; gap: 10px; }

    .b-time-box {
        background-color: var(--void);
        border: var(--border-std);
        border-radius: 4px; 
        padding: 5px 10px;
        min-width: 50px;
    }

    .b-time-num {
        color: var(--phoenix);
        font-family: var(--font-data);
        font-weight: 800;
        font-size: 1.2rem;
        display: block;
        line-height: 1;
    }

    .b-time-label {
        color: var(--signal-low);
        font-size: 0.6rem;
        font-family: var(--font-brief);
        font-weight: 600;
        text-transform: uppercase;
    }

    .btn-banner {
        background-color: var(--phoenix);
        color: #000;
        font-family: var(--font-cmd);
        font-weight: 700;
        padding: 0.5rem 1.5rem;
        border-radius: 4px; 
        text-decoration: none;
        text-transform: uppercase;
        font-size: 0.9rem;
        transition: 0.2s;
    }
    .btn-banner:hover { filter: brightness(110%); transform: translateY(-1px); }

    /* --- CORE FOOTER --- */
    .tactical-footer {
        background-color: var(--void); 
        color: var(--signal-med); 
        padding-top: 0;
        border-top: none;
        font-family: var(--font-brief);
        font-size: 0.9rem;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); 
        gap: 3rem;
        max-width: 1280px;
        margin: 0 auto;
        padding: 4rem 2rem;
    }

    .footer-col h4 {
        color: var(--signal-high); 
        font-family: var(--font-cmd);
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 1.5rem;
        letter-spacing: 1px;
        border-left: 3px solid var(--phoenix); 
        padding-left: 10px;
    }

    .footer-col ul { list-style: none; padding: 0; }
    .footer-col li { margin-bottom: 0.8rem; }
    
    .footer-col a {
        color: var(--signal-med); 
        text-decoration: none;
        transition: 0.2s;
    }
    .footer-col a:hover { color: var(--phoenix); padding-left: 5px; }

    /* --- INLINE SOCIAL ICONS --- */
    .social-links { display: flex; gap: 15px; margin-top: 10px; }

    .social-icon {
        width: 24px;
        height: 24px;
        color: var(--signal-med); 
        transition: transform 0.2s ease, color 0.2s ease;
    }
    .social-icon:hover { transform: scale(1.1); color: var(--phoenix); }

    .footer-legal {
        border-top: var(--border-std);
        padding: 2rem;
        text-align: center;
        background-color: var(--structure);
        font-family: var(--font-brief);
        font-size: 0.8rem;
        line-height: 1.8;
        color: var(--signal-low);
    }
    
    .footer-legal a { color: var(--signal-med); text-decoration: none; transition: color 0.2s; }
    .footer-legal a:hover { color: var(--phoenix); }

    @media (max-width: 768px) {
        .workshop-banner { flex-direction: column; gap: 1rem; }
    }
</style>

<footer class="tactical-footer">
    <div class="workshop-banner">
        <div class="banner-text" id="f-banner-text">Next Workshop: 28 FEB 2026</div>
        <div class="banner-timer">
            <div class="b-time-box"><span class="b-time-num" id="f-d">00</span><span class="b-time-label">DAYS</span></div>
            <div class="b-time-box"><span class="b-time-num" id="f-h">00</span><span class="b-time-label">HRS</span></div>
            <div class="b-time-box"><span class="b-time-num" id="f-m">00</span><span class="b-time-label">MIN</span></div>
        </div>
        <a href="workshop-events.php" class="btn-banner">Book Your Spot</a>
    </div>

    <div class="footer-grid">
        <div class="footer-col">
            <h4>Creative Startup NZ</h4>
            <p>Practical business tools and honest advice for New Zealand founders. No fluff, just what works.</p>
            <p style="margin-top: 1rem; color: var(--terminal); font-weight: 600;">Currently accepting new clients</p>
        </div>

        <div class="footer-col">
            <h4>Our Services</h4>
            <ul>
                <li><a href="service-launch.php">Complete Launch Package</a></li>
                <li><a href="service-5-page-html-website.php">5-Page Custom Website</a></li>
                <li><a href="service-seo.php">SEO Audit</a></li>
                <li><a href="service-consult.php">Startup Consultation</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Service Areas</h4>
            <ul>
                <li><a href="web-design-christchurch.php">Christchurch Web Design</a></li>
                <li><a href="web-design-rolleston.php">Rolleston Web Design</a></li>
                <li><a href="web-design-ashburton.php">Ashburton Web Design</a></li>
                <li><a href="web-design-lincoln.php">Lincoln Web Design</a></li>
                <li><a href="web-design-burnham.php">Burnham Web Design</a></li>
                <li><a href="web-design-rakaia.php">Rakaia Web Design</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Resources</h4>
            <ul>
                <li><a href="blog.php">Startup Guides (Blog)</a></li>
                <li><a href="workshop-events.php">Live Workshops</a></li>
                <li><a href="faq.php">Common Questions</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Contact Us</h4>
            <ul>
                <li><a href="contact.php">Send a Message</a></li>
                <li><a href="mailto:russell@creativestartupnz.com">russell@creativestartupnz.com</a></li>
                <li>Christchurch, NZ</li>
            </ul>
            <div class="social-links">
                <a href="https://www.facebook.com/CreativeStartupNZ" target="_blank" aria-label="Facebook">
                    <svg class="social-icon" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/rgrusselloliver" target="_blank" aria-label="LinkedIn">
                    <svg class="social-icon" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle>
                    </svg>
                </a>
                <a href="https://www.youtube.com/@CREATIVESTARTUPNZ" target="_blank" aria-label="YouTube">
                    <svg class="social-icon" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                        <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33 2.78 2.78 0 0 0 1.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.33 29 29 0 0 0-.46-5.33z"></path>
                        <polygon fill="var(--void)" points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="footer-legal">
        &copy; <span id="tactical-year">2026</span> CREATIVE STARTUP NZ. ALL RIGHTS RESERVED. <br>
        NZBN: 9429053465030 | <a href="terms.php">TERMS & CONDITIONS</a>
    </div>
</footer>

<script>
    // GLOBAL EVERGREEN FOOTER COUNTDOWN LOGIC WITH HOLIDAY CHECK
    (function() {
        var targetDate = new Date(2026, 1, 28, 9, 0, 0); 

        function isNZHoliday(date) {
            const year = date.getFullYear();
            const month = date.getMonth(); 
            const day = date.getDate();
            
            const holidays = [
                { m: 0, d: 1 },  
                { m: 0, d: 2 },  
                { m: 1, d: 6 },  
                { m: 3, d: 3 },  
                { m: 3, d: 6 },  
                { m: 3, d: 25 }, 
                { m: 5, d: 1 },  
                { m: 6, d: 10 }, 
                { m: 9, d: 26 }, 
                { m: 11, d: 25 },
                { m: 11, d: 26 } 
            ];

            return holidays.some(h => h.m === month && h.d === day);
        }

        function formatWorkshopDate(d) {
            var months = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
            var day = d.getDate();
            var month = months[d.getMonth()];
            var year = d.getFullYear();
            return (day < 10 ? "0" + day : day) + " " + month + " " + year;
        }

        var now = new Date();

        while (targetDate.getTime() < now.getTime()) {
            targetDate.setDate(targetDate.getDate() + 28);
        }

        while (isNZHoliday(targetDate)) {
            targetDate.setDate(targetDate.getDate() + 1);
        }

        var fDate = targetDate.getTime();
        var bannerTextEl = document.getElementById("f-banner-text");

        if (bannerTextEl) {
            bannerTextEl.innerHTML = "Next Workshop: " + formatWorkshopDate(targetDate);
        }

        setInterval(function() {
            var currentTime = new Date().getTime();
            var distance = fDate - currentTime;

            if (distance < 0) {
                targetDate.setDate(targetDate.getDate() + 28);
                
                while (isNZHoliday(targetDate)) {
                    targetDate.setDate(targetDate.getDate() + 1);
                }

                fDate = targetDate.getTime();
                if (bannerTextEl) {
                    bannerTextEl.innerHTML = "Next Workshop: " + formatWorkshopDate(targetDate);
                }
            }

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

            var elD = document.getElementById("f-d");
            var elH = document.getElementById("f-h");
            var elM = document.getElementById("f-m");

            if (elD) elD.innerHTML = (days < 10 ? "0" : "") + (days < 0 ? "0" : days);
            if (elH) elH.innerHTML = (hours < 10 ? "0" : "") + (hours < 0 ? "0" : hours);
            if (elM) elM.innerHTML = (minutes < 10 ? "0" : "") + (minutes < 0 ? "0" : minutes);
        }, 1000);
    })();
</script>