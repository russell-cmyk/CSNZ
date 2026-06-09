<style>
    /* --- THEME & FONT OVERRIDES --- */
    :root, [data-theme="light"] {
        --void: #F8F9FA; 
        --surface: #FFFFFF; 
        --structure: #E9ECEF; 
        --deep-black: #101113; 
        --signal-high: #212529; 
        --signal-med: #495057; 
        --signal-low: #6C757D; 
        --phoenix: #FF6A00; 
        --terminal: #2E7D32;
        --warning: #E57373;
        --border-std: 1px solid var(--structure);
        
        --font-cmd: 'Montserrat', sans-serif; 
        --font-brief: 'Inter', sans-serif; 
        --font-data: 'Montserrat', sans-serif;
    }

    [data-theme="dark"] {
        --void: #1A1B1E;
        --surface: #25262B;
        --structure: #373A40;
        --deep-black: #101113;
        --signal-high: #E4E5E7;
        --signal-med: #A6A7AB;
        --signal-low: #797A7E;
        --phoenix: #FF6A00;
        --terminal: #CCFF00;
        --border-std: 1px solid var(--structure);
        
        --font-cmd: 'Montserrat', sans-serif; 
        --font-brief: 'Inter', sans-serif; 
        --font-data: 'Montserrat', sans-serif;
    }

    /* --- CORE HEADER LAYOUT --- */
    .control-bar {
        background-color: var(--surface);
        border-bottom: var(--border-std);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 2rem;
        height: 80px;
        position: fixed;
        top: 0;
        z-index: 10000;
        width: 100%;
        max-width: 1280px;
        left: 50%;
        transform: translateX(-50%);
        transition: background-color 0.3s ease;
    }
    
    .header-spacer { height: 80px; width: 100%; display: block; }
    .brand-logo { height: 40px; width: auto; display: block; }
    .nav-links { display: flex; list-style: none; gap: 2rem; margin: 0; padding: 0; }

    .nav-item {
        font-family: var(--font-cmd);
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        color: var(--signal-med);
        text-decoration: none;
        border-bottom: 2px solid transparent;
        transition: 0.1s;
        height: 100%;
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .nav-item:hover {
        color: var(--phoenix);
        border-bottom: 2px solid var(--phoenix);
    }

    .header-controls { display: flex; align-items: center; gap: 1rem; }

    .btn-theme-toggle {
        background: transparent;
        color: var(--signal-high);
        border: 1px solid var(--structure);
        font-family: var(--font-cmd);
        font-weight: 700;
        font-size: 0.8rem;
        padding: 0.6rem 0.8rem;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
    }
    .btn-theme-toggle:hover { border-color: var(--phoenix); color: var(--phoenix); }

    .btn-deploy-header { 
        background-color: var(--phoenix); 
        color: #000000; 
        font-family: var(--font-cmd); 
        font-weight: 700; 
        padding: 0.8rem 1.5rem; 
        font-size: 0.9rem;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
        transition: all 0.2s ease;
    }
    .btn-deploy-header:hover { filter: brightness(110%); transform: translateY(-1px); }

    /* --- DROPDOWN MENU LOGIC --- */
    .nav-item-container { position: relative; height: 100%; display: flex; align-items: center; }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: var(--surface);
        min-width: 260px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 9999;
        border: var(--border-std);
        border-top: 3px solid var(--phoenix);
        border-radius: 0 0 4px 4px;
        list-style: none;
        padding: 0;
        margin: 0;
        max-height: 70vh;
        overflow-y: auto;
    }

    .dropdown-menu::-webkit-scrollbar { width: 6px; }
    .dropdown-menu::-webkit-scrollbar-track { background: var(--surface); }
    .dropdown-menu::-webkit-scrollbar-thumb { background: var(--structure); border-radius: 3px; }
    .dropdown-menu::-webkit-scrollbar-thumb:hover { background: var(--phoenix); }

    .nav-item-container:hover .dropdown-menu { display: block; }
    .nav-item-container::after { content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 20px; }

    .dropdown-item {
        color: var(--signal-med);
        padding: 12px 20px;
        text-decoration: none;
        display: block;
        font-family: var(--font-cmd);
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
        border-bottom: var(--border-std);
        transition: 0.1s;
        line-height: 1.4;
    }

    .dropdown-item:hover {
        background-color: var(--structure);
        color: var(--phoenix);
        padding-left: 25px;
    }

    .nav-arrow { font-size: 0.7rem; margin-left: 5px; color: var(--phoenix); }

    /* --- MOBILE RESPONSIVENESS --- */
    @media (max-width: 900px) {
        .control-bar { height: auto; flex-direction: column; padding: 1rem; gap: 1rem; position: fixed; top: 0; width: 100%; }
        .header-spacer { height: 180px; }
        .nav-links { flex-wrap: wrap; justify-content: center; }
        .dropdown-menu { position: static; border: none; box-shadow: none; border-left: 2px solid var(--phoenix); margin-left: 1rem; max-height: 300px; }
    }
</style>

<script>
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
</script>

<header class="control-bar">
    <a href="index.php">
        <img src="images/logo.png" alt="Creative Startup NZ" class="brand-logo">
    </a>
    <nav>
        <ul class="nav-links">
            <li class="nav-item-container">
                <a href="index.php" class="nav-item" id="home-link">Home <span class="nav-arrow">▼</span></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php" class="dropdown-item">Home</a></li>
                    <li><a href="startup-network.php" class="dropdown-item">Start-up Network (FB Group)</a></li>
                    <li><a href="workshop-events.php" class="dropdown-item">Workshop Events</a></li>
                </ul>
            </li>
            
            <li class="nav-item-container">
                <a href="services.php" class="nav-item" id="services-link">Services <span class="nav-arrow">▼</span></a>
                <ul class="dropdown-menu">
                    <li><a href="service-logo.php" class="dropdown-item">Logo Design</a></li>
                    <li><a href="service-website.php" class="dropdown-item">5-Page Google Site</a></li>
                    <li><a href="service-5-page-html-website.php" class="dropdown-item">5-Page Custom HTML</a></li>
                    <li><a href="service-seo.php" class="dropdown-item">SEO Audit</a></li>
                    <li><a href="service-video.php" class="dropdown-item">Video Intros</a></li>
                    <li><a href="service-social-post-planner.php" class="dropdown-item">Weekly Social Planner</a></li>
                    <li><a href="service-social.php" class="dropdown-item">Social Media Audit</a></li>
                    <li><a href="service-consult.php" class="dropdown-item">Startup Consultation</a></li>
                    <li><a href="service-launch.php" class="dropdown-item" style="color: var(--phoenix);">Complete Launch Package</a></li>
                </ul>
            </li>

            <li class="nav-item-container">
                <a href="blog.php" class="nav-item" id="blog-link">Guides <span class="nav-arrow">▼</span></a>
                <ul class="dropdown-menu">
                    <li><a href="blog-hobby-to-business.php" class="dropdown-item" style="color: var(--terminal);">The NZ Business Playbook</a></li>
                    <li><a href="blog-ai-vs-designer-logo.php" class="dropdown-item">Got $500 for a logo?</a></li>
                    <li><a href="blog-website-scam.php" class="dropdown-item">The Website Scam</a></li>
                    <li><a href="blog-survival-blueprint.php" class="dropdown-item">The Survival Blueprint</a></li>
                    <li><a href="blog-digital-hostage.php" class="dropdown-item">Digital Hostage</a></li>
                    <li><a href="blog-seminar-trap.php" class="dropdown-item">The Seminar Trap</a></li>
                    <li><a href="blog-ugly-website.php" class="dropdown-item">Ugly vs Perfect Website</a></li>
                    <li><a href="blog-newsletter-revenue.php" class="dropdown-item">Newsletter Revenue</a></li>
                    <li><a href="blog-ai-trap.php" class="dropdown-item">The AI Trap</a></li>
                    <li><a href="blog-cowboy-check.php" class="dropdown-item">The Cowboy Check</a></li>
                    <li><a href="blog-ownership-trap.php" class="dropdown-item">The Ownership Trap</a></li>
                    <li><a href="blog-vetting-partners.php" class="dropdown-item">Vetting Partners</a></li>
                    <li><a href="blog-forged-in-fire.php" class="dropdown-item">Forged in Fire</a></li>
                    <li><a href="blog-comfortable-coffin.php" class="dropdown-item">The Comfortable Coffin</a></li>
                    <li><a href="blog.php" class="dropdown-item" style="color: var(--phoenix);">View All Articles</a></li>
                </ul>
            </li>

            <li><a href="about.php" class="nav-item">About Us</a></li>
            <li><a href="contact.php" class="nav-item">Contact</a></li>
        </ul>
    </nav>
    <div class="header-controls">
        <button id="theme-toggle-btn" class="btn-theme-toggle">
            <script>document.write(localStorage.getItem('theme') === 'dark' ? '☀️ LIGHT' : '🌙 DARK');</script>
        </button>
        <a href="contact.php" class="btn-deploy-header">GET IN TOUCH</a>
    </div>
</header>
<div class="header-spacer"></div>

<script>
    // THEME TOGGLE LOGIC
    const themeBtn = document.getElementById('theme-toggle-btn');
    themeBtn.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        themeBtn.innerText = newTheme === 'light' ? '🌙 DARK' : '☀️ LIGHT';
    });

    // SMART HIGHLIGHTING LOGIC
    const currentPath = window.location.pathname.split("/").pop();
    const navLinks = document.querySelectorAll('.nav-item');

    navLinks.forEach(link => {
        const href = link.getAttribute('href');

        if (href === currentPath || 
           (currentPath.includes('service-') && href === 'services.php') ||
           (currentPath.includes('blog-') && href === 'blog.php') ||
           ((currentPath === 'startup-network.php' || currentPath === 'workshop-events.php') && href === 'index.php') ||
           ((currentPath === "" || currentPath === "index.php") && href === "index.php")) {
            
            link.style.color = 'var(--phoenix)';
            link.style.borderBottom = '2px solid var(--phoenix)';
        } 
    });
</script>