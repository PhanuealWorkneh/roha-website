<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Roha Medical Campus — Revolutionary Healthcare in Africa</title>
  
  <!-- Google Fonts + Font Awesome + Bootstrap Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --forest: #0a3d2b;
      --forest-mid: #0f5c3e;
      --forest-light: #1a7a52;
      --sage: #7aad8c;
      --sage-light: #c2dfc9;
      --cream: #f5f0e8;
      --cream-dark: #ede7d9;
      --warm-white: #faf8f4;
      --gold: #c9a84c;
      --gold-light: #e8d4a0;
      --charcoal: #1a1a18;
      --text-mid: #4a4a46;
      --text-muted: #8a8a84;
      --section-pad: clamp(5rem, 10vw, 9rem);
    }

    body {
      font-family: 'DM Sans', sans-serif;
      font-weight: 300;
      background: var(--warm-white);
      color: var(--charcoal);
      overflow-x: hidden;
      line-height: 1.7;
    }

    /* ========== ANIMATED TOP NAVIGATION ========== */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 75px;
      background: #0a2f22;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 40px;
      z-index: 1000;
      transition: all 0.3s ease;
      border-bottom: 1px solid rgba(255,255,255,0.08);
    }
    .navbar.scrolled {
      background: rgba(10, 47, 34, 0.95);
      backdrop-filter: blur(12px);
      height: 68px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }
    .logo {
      color: white;
      font-size: 1.6rem;
      font-weight: 600;
      font-family: 'Cormorant Garamond', serif;
      letter-spacing: -0.01em;
      white-space: nowrap;
    }
    .logo span {
      color: var(--gold);
      font-style: italic;
    }
    .right-nav {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    
    /* HORIZONTAL MENU - ANIMATED EXPAND/COLLAPSE */
    .nav-links {
      display: flex;
      align-items: center;
      gap: 28px;
      max-width: 0;
      opacity: 0;
      overflow: hidden;
      white-space: nowrap;
      transition: max-width 0.55s cubic-bezier(0.2, 0.9, 0.4, 1.1), opacity 0.35s ease;
    }
    .nav-links.active {
      max-width: 650px;
      opacity: 1;
    }
    .nav-links a {
      color: rgba(255,255,255,0.9);
      text-decoration: none;
      font-size: 0.8rem;
      font-weight: 500;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      transition: color 0.25s ease;
      position: relative;
    }
    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--gold);
      transition: width 0.3s ease;
    }
    .nav-links a:hover::after,
    .nav-links a.active::after {
      width: 100%;
    }
    .nav-links a:hover {
      color: var(--gold);
    }
    
    .icon-btn, .menu-toggle-btn {
      background: none;
      border: none;
      color: white;
      font-size: 1.25rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: color 0.2s;
    }
    .icon-btn:hover, .menu-toggle-btn:hover {
      color: var(--gold);
    }
    .menu-toggle-btn {
      font-size: 1.8rem;
      font-weight: 300;
    }
    .expand-menu-btn {
      background: none;
      border: none;
      color: white;
      font-size: 1.3rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: color 0.2s;
    }
    .expand-menu-btn:hover {
      color: var(--gold);
    }
    
    @media (max-width: 800px) {
      .navbar { padding: 0 20px; }
      .nav-links.active { max-width: 420px; }
      .nav-links { gap: 18px; }
      .nav-links a { font-size: 0.7rem; }
      .logo { font-size: 1.3rem; }
    }

    /* ========== HIDDEN SIDEBAR (COLLAPSIBLE TOGGLE) ========== */
    .sidebar-offcanvas {
      position: fixed;
      top: 0;
      right: -100%;
      width: 340px;
      height: 100vh;
      background: var(--forest);
      z-index: 1100;
      transition: right 0.4s ease-in-out;
      box-shadow: -5px 0 30px rgba(0,0,0,0.3);
      padding: 1.8rem 1.5rem;
      display: flex;
      flex-direction: column;
      overflow-y: auto;
    }
    .sidebar-offcanvas.open {
      right: 0;
    }
    .sidebar-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 1050;
      visibility: hidden;
      opacity: 0;
      transition: 0.3s ease;
    }
    .sidebar-overlay.active {
      visibility: visible;
      opacity: 1;
    }
    .sidebar-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid rgba(255,255,255,0.15);
      padding-bottom: 1rem;
      margin-bottom: 1.8rem;
    }
    .sidebar-header h3 {
      font-family: 'Cormorant Garamond', serif;
      color: var(--gold);
      font-size: 1.7rem;
      margin: 0;
    }
    .close-sidebar {
      background: none;
      border: none;
      color: white;
      font-size: 1.8rem;
      cursor: pointer;
      transition: 0.2s;
    }
    .close-sidebar:hover { color: var(--gold); transform: rotate(90deg); }
    .sidebar-menu {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .sidebar-menu li {
      margin-bottom: 0.8rem;
    }
    .sidebar-menu a {
      color: rgba(255,255,255,0.8);
      text-decoration: none;
      font-size: 1rem;
      font-weight: 400;
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 10px 0;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      transition: all 0.2s;
    }
    .sidebar-menu a i {
      width: 28px;
      color: var(--sage);
      font-size: 1.1rem;
    }
    .sidebar-menu a:hover {
      color: var(--gold);
      padding-left: 8px;
    }
    .sidebar-contact {
      margin-top: auto;
      padding-top: 2rem;
      margin-top: 2rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      font-size: 0.8rem;
      color: rgba(255,255,255,0.6);
    }
    .sidebar-contact p { margin-bottom: 0.5rem; }
    .sidebar-contact i { width: 24px; color: var(--gold); margin-right: 8px; }
    .social-sidebar { display: flex; gap: 1rem; margin-top: 1rem; }
    .social-sidebar a { color: rgba(255,255,255,0.6); transition: 0.2s; font-size: 1.2rem; }
    .social-sidebar a:hover { color: var(--gold); }

    /* ========== HERO SECTION ========== */
    .hero {
      position: relative;
      height: 100vh;
      min-height: 680px;
      display: flex;
      align-items: flex-end;
      overflow: hidden;
      background: var(--forest);
      margin-top: 0;
    }
    .hero-bg {
      position: absolute; inset: 0;
      background: linear-gradient(160deg, #062920 0%, #0a3d2b 35%, #0f5c3e 100%);
    }
    .hero-pattern {
      position: absolute; inset: 0; opacity: 0.04;
      background-image: radial-gradient(circle at 20% 50%, #c9a84c 1px, transparent 1px);
      background-size: 60px 60px;
    }
    .hero-arc {
      position: absolute; bottom: -2px; left: 0; right: 0;
      height: 120px;
      background: var(--warm-white);
      clip-path: ellipse(55% 100% at 50% 100%);
    }
    .hero-content {
      position: relative; z-index: 2;
      padding: 0 4rem 7rem;
      max-width: 860px;
    }
    .hero-eyebrow {
      display: inline-flex; align-items: center; gap: 0.7rem;
      font-size: 0.72rem; letter-spacing: 0.18em; text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 1.8rem;
    }
    .hero-eyebrow::before {
      content: ''; display: block;
      width: 2.5rem; height: 1px; background: var(--gold);
    }
    .hero h1 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(3rem, 7vw, 6rem);
      font-weight: 300;
      color: var(--warm-white);
      line-height: 1.05;
      margin-bottom: 2rem;
    }
    .hero h1 em { font-style: italic; color: var(--sage-light); }
    .hero-sub {
      font-size: 1rem;
      color: rgba(250,248,244,0.65);
      max-width: 500px;
      margin-bottom: 2.5rem;
    }
    .btn-primary {
      display: inline-block;
      padding: 0.85rem 2.2rem;
      background: var(--gold);
      color: var(--forest);
      font-size: 0.78rem; font-weight: 500; letter-spacing: 0.08em; text-transform: uppercase;
      text-decoration: none;
      transition: all 0.3s;
    }
    .btn-primary:hover { background: var(--gold-light); }

    /* ========== STATS BAR ========== */
    .stats-bar {
      background: var(--forest);
      padding: 2.5rem 4rem;
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 1px;
    }
    .stat-item { text-align: center; padding: 1.5rem 2rem; border-right: 1px solid rgba(250,248,244,0.1); }
    .stat-item:last-child { border-right: none; }
    .stat-number { font-family: 'Cormorant Garamond', serif; font-size: 3.5rem; font-weight: 300; color: var(--gold); }
    .stat-label { font-size: 0.75rem; letter-spacing: 0.12em; text-transform: uppercase; color: rgba(250,248,244,0.55); }

    /* ========== GENERAL SECTIONS ========== */
    section { padding: var(--section-pad) 4rem; }
    .section-label { display: inline-flex; align-items: center; gap: 0.7rem; font-size: 0.7rem; letter-spacing: 0.2em; text-transform: uppercase; color: var(--forest-light); margin-bottom: 1.2rem; }
    .section-label::before { content: ''; width: 2rem; height: 1px; background: var(--forest-light); }
    h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(2rem, 4vw, 3.4rem); font-weight: 300; }
    h2 em { font-style: italic; color: var(--forest-light); }
    .lead { font-size: 1rem; color: var(--text-mid); max-width: 600px; margin-top: 1rem; }

    /* ========== MISSION ========== */
    .mission-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 6rem; align-items: center; }
    .mission-visual { position: relative; height: 460px; }
    .mission-card.large { position: absolute; top: 0; left: 0; width: 80%; height: 75%; background: var(--forest); padding: 2rem; display: flex; align-items: flex-end; }
    .mission-card.large blockquote { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-style: italic; color: white; }
    .mission-card.accent { position: absolute; bottom: 0; right: 0; width: 55%; background: var(--cream); padding: 1.5rem; box-shadow: 0 8px 20px rgba(0,0,0,0.05); }
    .mission-pill { position: absolute; top: 55%; right: -1rem; background: var(--gold); color: var(--forest); padding: 0.5rem 1rem; font-size: 0.7rem; text-transform: uppercase; }

    /* ========== BUILDING FEATURES ========== */
    .features-grid { display: grid; grid-template-columns: repeat(3, 1fr); border: 1px solid var(--cream-dark); background: var(--cream); margin-top: 2.5rem; }
    .feature-cell { padding: 2rem; border-right: 1px solid var(--cream-dark); border-bottom: 1px solid var(--cream-dark); transition: background 0.3s; }
    .feature-cell:hover { background: var(--warm-white); }
    .feature-icon { width: 44px; height: 44px; background: var(--forest); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; color: white; font-size: 1.2rem; }

    /* ========== ESG ========== */
    .esg { background: var(--forest); color: white; }
    .esg-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; }
    .esg-pillar { padding: 1.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; gap: 1.2rem; }
    .pillar-num { font-size: 2rem; font-family: 'Cormorant Garamond'; color: var(--sage); }
    .esg-forest-card { background: rgba(255,255,255,0.05); padding: 2rem; margin-top: 1.5rem; }
    .tree-count { font-size: 4rem; font-family: 'Cormorant Garamond'; color: var(--gold); }

    /* ========== TIMELINE ========== */
    .timeline { margin-top: 3rem; position: relative; padding-left: 5rem; }
    .timeline-item { display: flex; gap: 2rem; margin-bottom: 2.5rem; position: relative; }
    .timeline-date { min-width: 100px; font-size: 0.75rem; color: var(--text-muted); text-transform: uppercase; }
    .timeline-dot { position: absolute; left: -2.2rem; top: 0.3rem; width: 10px; height: 10px; background: var(--forest); border-radius: 50%; }
    .timeline-dot.gold { background: var(--gold); }

    /* ========== NEWS ========== */
    .news-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; background: var(--cream); margin-top: 2rem; }
    .news-card { background: var(--warm-white); padding: 2rem; transition: 0.2s; }
    .news-card:hover { background: var(--forest); color: white; }
    .news-card:hover .news-card-title { color: white; }

    /* ========== NEWSLETTER ========== */
    .newsletter { background: var(--charcoal); padding: 4rem; text-align: center; }

    /* ========== FOOTER ========== */
    footer { background: var(--forest); padding: 3rem 4rem; color: rgba(255,255,255,0.5); }

    /* ========== ANIMATIONS ========== */
    .fade-up { opacity: 0; transform: translateY(25px); transition: 0.7s; }
    .fade-up.visible { opacity: 1; transform: translateY(0); }
    .fade-up-delay-1 { transition-delay: 0.1s; }
    .fade-up-delay-2 { transition-delay: 0.2s; }
    .fade-up-delay-3 { transition-delay: 0.3s; }

    @media (max-width: 900px) {
      section { padding: 3rem 1.5rem; }
      .mission-inner, .esg-inner { grid-template-columns: 1fr; }
      .features-grid, .news-grid { grid-template-columns: 1fr; }
      .stats-bar { grid-template-columns: 1fr; padding: 1.5rem; }
      .hero-content { padding: 0 1.5rem 5rem; }
      .timeline { padding-left: 2rem; }
    }
  </style>
</head>
<body>

<!-- ========== TOP NAVIGATION ========== -->
<nav class="navbar" id="mainNavbar">
  <div class="logo">Roha<span>Medical</span> Campus</div>
  <div class="right-nav">
    <!-- ANIMATED HORIZONTAL MENU (expands on click) -->
    <div class="nav-links" id="navLinks">
      <a href="#mission">About</a>
      <a href="#building">Campus</a>
      <a href="#esg">ESG</a>
      <a href="#milestones">Milestones</a>
      <a href="#news">News</a>
      <a href="#contact">Contact</a>
    </div>
    
    <!-- Button to expand/collapse horizontal menu -->
    <button class="expand-menu-btn" id="expandMenuBtn" aria-label="Expand menu">
      <i class="fas fa-chevron-circle-down"></i> <span style="font-size:0.7rem;">MENU</span>
    </button>
    
   
    
    <!-- Sidebar Toggle Button (opens hidden sidebar) -->
    <button class="menu-toggle-btn" id="sidebarToggleBtn" aria-label="Menu">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- ========== HIDDEN SIDEBAR (TOGGLE) ========== -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>
<div class="sidebar-offcanvas" id="sideDrawer">
  <div class="sidebar-header">
    <h3><i class="fas fa-leaf me-2"></i>Roha Campus</h3>
    <button class="close-sidebar" id="closeSidebarBtn">×</button>
  </div>
  <ul class="sidebar-menu">
    <li><a href="#top"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="#mission"><i class="fas fa-bullseye"></i> Our Mission</a></li>
    <li><a href="#building"><i class="fas fa-hospital-user"></i> The Campus</a></li>
    <li><a href="#esg"><i class="fas fa-seedling"></i> ESG & Sustainability</a></li>
    <li><a href="#milestones"><i class="fas fa-chart-line"></i> Milestones</a></li>
    <li><a href="#news"><i class="fas fa-newspaper"></i> Newsroom</a></li>
    <li><a href="#contact"><i class="fas fa-envelope"></i> Contact & Newsletter</a></li>
  </ul>
  <div class="sidebar-contact">
    <p><i class="fas fa-map-marker-alt"></i> 379 Cape Verde Street, A4 Building, 6th Floor, Addis Ababa</p>
    <p><i class="fas fa-phone-alt"></i> +251 1163 93 910</p>
    <p><i class="fas fa-envelope"></i> info@rohamedicalcampus.com</p>
    <div class="social-sidebar">
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
    </div>
  </div>
</div>

<script>
// Navigation & Sidebar JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('mainNavbar');
    const navLinks = document.getElementById('navLinks');
    const expandMenuBtn = document.getElementById('expandMenuBtn');
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
    const sideDrawer = document.getElementById('sideDrawer');
    const overlay = document.getElementById('sidebarOverlay');
    const closeSidebarBtn = document.getElementById('closeSidebarBtn');
    
    let isMenuExpanded = false;
    
    // Expand/Collapse horizontal menu with animation
    if (expandMenuBtn) {
        expandMenuBtn.addEventListener('click', function() {
            if (!isMenuExpanded) {
                navLinks.classList.add('active');
                expandMenuBtn.innerHTML = '<i class="fas fa-chevron-circle-up"></i> <span style="font-size:0.7rem;">CLOSE</span>';
                isMenuExpanded = true;
            } else {
                navLinks.classList.remove('active');
                expandMenuBtn.innerHTML = '<i class="fas fa-chevron-circle-down"></i> <span style="font-size:0.7rem;">MENU</span>';
                isMenuExpanded = false;
            }
        });
    }
    
    // Open Sidebar
    function openSidebar() {
        sideDrawer.classList.add('open');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    // Close Sidebar
    function closeSidebar() {
        sideDrawer.classList.remove('open');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    if (sidebarToggleBtn) sidebarToggleBtn.onclick = openSidebar;
    if (overlay) overlay.onclick = closeSidebar;
    if (closeSidebarBtn) closeSidebarBtn.onclick = closeSidebar;
    
    // Close sidebar when clicking sidebar links
    document.querySelectorAll('.sidebar-menu a').forEach(link => {
        link.addEventListener('click', function() {
            closeSidebar();
        });
    });
    
    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 60) navbar.classList.add('scrolled');
        else navbar.classList.remove('scrolled');
    });
});
</script>