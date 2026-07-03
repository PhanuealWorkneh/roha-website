<?php require 'header-home.php'; ?>

 <style>


:root {
    --bg-color: #fbfbf9;
    --text-primary: #333333;
    --text-secondary: #555555;
    --dark-green: #0b4a33;
    --light-green: #298f66;
    --gold: #d5b152;
    --stats-bg: #f5f4ef;
    --border-color: #e0e0e0;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    background-color: var(--bg-color);
    color: var(--text-primary);
    line-height: 1.6;
    overflow-x: hidden;
}

/* Header */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2rem 5%;
    background-color: var(--bg-color);
    position: relative;
    z-index: 100;
}

.logo {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    font-weight: 500;
    color: var(--dark-green);
}

.nav {
    display: flex;
    gap: 2.5rem;
}

.nav a {
    text-decoration: none;
    color: var(--text-secondary);
    font-size: 0.85rem;
    font-weight: 500;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    transition: color 0.3s ease;
}

.nav a:hover, .nav a.active {
    color: var(--dark-green);
}

.btn {
    text-decoration: none;
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    padding: 0.8rem 2rem;
    transition: all 0.3s ease;
    display: inline-block;
}

.btn-outline {
    border: 1px solid var(--dark-green);
    color: var(--dark-green);
}

.btn-outline:hover {
    background-color: var(--dark-green);
    color: #fff;
}

.btn-solid {
    background-color: var(--dark-green);
    color: #fff;
    border: 1px solid var(--dark-green);
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 1rem;
}

.btn-solid:hover {
    background-color: #083826;
}

.mobile-menu-btn {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    flex-direction: column;
    gap: 5px;
}

.mobile-menu-btn span {
    width: 25px;
    height: 2px;
    background-color: var(--dark-green);
    transition: 0.3s;
}

/* New Hero Section */
.new-hero-section {
    position: relative;
    width: 100%;
    min-height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?q=80&w=1600&auto=format&fit=crop');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding: 2rem 5%;
}

.new-hero-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(135deg, rgba(11, 74, 51, 0.95) 0%, rgba(11, 74, 51, 0.7) 100%);
    z-index: 1;
}

.new-hero-content-box {
    position: relative;
    z-index: 2;
    background-color: #ffffff;
    padding: 4rem 3rem;
    max-width: 800px;
    width: 100%;
    border-radius: 4px;
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
    text-align: center;
    margin-top: 2rem;
    border-top: 5px solid var(--gold);
}

.new-hero-content-box .section-label {
    justify-content: center;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    color: var(--light-green);
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
}

.new-hero-content-box .section-label .line {
    width: 40px;
    height: 2px;
    background-color: var(--light-green);
}

.new-hero-content-box .hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 4rem;
    font-weight: 400;
    line-height: 1.1;
    margin-bottom: 1.5rem;
    color: var(--text-primary);
}

.new-hero-content-box .hero-title .highlight {
    color: var(--light-green);
    font-style: italic;
}

.new-hero-content-box .hero-description {
    color: var(--text-secondary);
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
    line-height: 1.8;
}

/* Content Sections */
.content-section {
    padding: 6rem 5%;
}

.content-section.bg-light {
    background-color: var(--stats-bg);
}

.content-container {
    max-width: 900px;
    margin: 0 auto;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: var(--dark-green);
    margin-bottom: 2rem;
    text-align: center;
}

.section-description {
    color: var(--text-secondary);
    font-size: 1.1rem;
    line-height: 1.8;
    text-align: center;
}

.overview-list {
    list-style: none;
    padding-left: 1rem;
}

.overview-list li {
    position: relative;
    padding-left: 2rem;
    margin-bottom: 1.5rem;
    color: var(--text-secondary);
    font-size: 1.05rem;
    line-height: 1.7;
}

.overview-list li::before {
    content: "•";
    color: var(--light-green);
    font-size: 2rem;
    position: absolute;
    left: 0;
    top: -8px;
}

/* Responsive Design */
@media (max-width: 900px) {
    .new-hero-content-box {
        padding: 3rem 2rem;
    }
    .new-hero-content-box .hero-title {
        font-size: 3rem;
    }
}

@media (max-width: 768px) {
    .mobile-menu-btn {
        display: flex;
    }
    
    .nav {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: var(--bg-color);
        flex-direction: column;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 10px 15px rgba(0,0,0,0.05);
    }
    
    .nav.active {
        display: flex;
    }
    
    .contact-btn {
        display: none;
    }
    
    .contact-btn.active {
        display: inline-block;
        margin-top: 1rem;
    }

    .new-hero-content-box .hero-title {
        font-size: 2.5rem;
    }
}

@media (max-width: 480px) {
    .new-hero-content-box {
        padding: 2rem 1.5rem;
    }
    .new-hero-content-box .hero-title {
        font-size: 2rem;
    }
}
/* Feature Grid */
.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.feature-card {
    background-color: #fff;
    border: 1px solid var(--border-color);
    padding: 2.5rem 2rem;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
}

.feature-icon {
    font-size: 2.5rem;
    color: var(--dark-green);
    margin-bottom: 1.5rem;
}

.feature-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.25rem;
    color: var(--dark-green);
    margin-bottom: 1rem;
    font-weight: 600;
}

.feature-text {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.6;
}

/* Specialties Section */
.specialties-section {
    padding: 6rem 5%;
    text-align: center;
    background: linear-gradient(180deg, #ffffff 0%, #f4f6f5 100%);
}

.specialties-intro {
    font-size: 1.2rem;
    color: var(--dark-green);
    font-weight: 600;
    max-width: 800px;
    margin: 0 auto 3rem auto;
    line-height: 1.6;
}

.specialties-bubbles {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
    max-width: 1000px;
    margin: 0 auto;
}

.bubble {
    background-color: var(--dark-green);
    color: #fff;
    padding: 0.8rem 1.5rem;
    border-radius: 50px;
    font-weight: 500;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    cursor: default;
}

.bubble:nth-child(even) {
    background-color: var(--light-green);
}

.bubble:nth-child(3n) {
    background-color: #d1495b; /* A pleasant red-ish for variety like the screenshot */
}
.bubble:nth-child(4n) {
    background-color: #0077b6; /* A pleasant blue */
}

.bubble:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* About Roha Health Section */
.about-roha-health {
    padding: 6rem 5%;
    background-color: #fff;
}

.about-roha-health .content-container {
    max-width: 900px;
}

.about-roha-text {
    color: var(--text-secondary);
    font-size: 1.05rem;
    line-height: 1.8;
    margin-bottom: 1.5rem;
    text-align: justify;
}
/* Feature Grid */
.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.feature-card {
    background-color: #fff;
    border: 1px solid var(--border-color);
    padding: 2.5rem 2rem;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
}

.feature-icon {
    font-size: 2.5rem;
    color: var(--dark-green);
    margin-bottom: 1.5rem;
}

.feature-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.25rem;
    color: var(--dark-green);
    margin-bottom: 1rem;
    font-weight: 600;
}

.feature-text {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.6;
}

/* Specialties Section */
.specialties-section {
    padding: 6rem 5%;
    text-align: center;
    background: linear-gradient(180deg, #ffffff 0%, #f4f6f5 100%);
}

.specialties-intro {
    font-size: 1.2rem;
    color: var(--dark-green);
    font-weight: 600;
    max-width: 800px;
    margin: 0 auto 3rem auto;
    line-height: 1.6;
}

.specialties-bubbles {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
    max-width: 1000px;
    margin: 0 auto;
}

.bubble {
    background-color: var(--dark-green);
    color: #fff;
    padding: 0.8rem 1.5rem;
    border-radius: 50px;
    font-weight: 500;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    cursor: default;
}

.bubble:nth-child(even) {
    background-color: var(--light-green);
}

.bubble:nth-child(3n) {
    background-color: #d1495b;
}
.bubble:nth-child(4n) {
    background-color: #0077b6;
}

.bubble:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* About Roha Health Section */
.about-roha-health {
    padding: 6rem 5%;
    background-color: #fff;
}

.about-roha-health .content-container {
    max-width: 900px;
    margin: 0 auto;
}

.about-roha-text {
    color: var(--text-secondary);
    font-size: 1.05rem;
    line-height: 1.8;
    margin-bottom: 1.5rem;
    text-align: justify;
}
    </style>

    <main class="new-hero-section">
        <div class="new-hero-overlay"></div>
        <div class="new-hero-content-box">
            <div class="section-label">
                <span class="line"></span> THE ROHA VISION
            </div>
            <h1 class="hero-title">
                Pioneering a <span class="highlight">Healthy Future</span><br>
                for All
            </h1>
            <p class="hero-description">
                We believe that world-class healthcare is a fundamental right. At Roha Medical Campus, we are not just building hospitals; we are cultivating a thriving ecosystem of wellness, education, and innovation right in the vibrant core of Addis Ababa.
            </p>
            <p class="hero-description">
                Our commitment goes beyond immediate treatment. By integrating state-of-the-art medical technology with sustainable environmental practices, we aim to elevate the standard of life for generations to come.
            </p>
            <a href="#overview" class="btn btn-solid">EXPLORE OUR VISION &rarr;</a>
        </div>
    </main>

    <section id="overview" class="content-section">
        <div class="content-container">
            <h2 class="section-title">Campus Overview</h2>
            <ul class="overview-list">
                <li>Campus will provide an extensive range of advanced medical services including oncology, neurosurgery, spine surgery, cardiac surgery, maternal and child health services.</li>
                <li>The hospitals will be equipped with state-of-the-art technology and equipment.</li>
                <li>Expected to be the first internationally-accredited hospital in Ethiopia.</li>
                <li>A public urban park built on the campus will enhance the environment’s healing nature and preserve the biodiversity of the land. The park, designed with the Miyawaki forest methodology, will include picnic areas, sculpture gardens, and recreational areas for patients and visitors.</li>
                <li>The campus will be built with green hospital principles including EDGE-certified buildings, renewable energy, optimized waste recycling, and water reuse and treatment.</li>
                <li>The campus has adopted an environment, social, and governance policy to guide the responsible practices of the organization.</li>
                <li>Commitment to offer affordable care for all income levels, including fee discounts/ waivers for low-income patients.</li>
            </ul>
        </div>
    </section>

    <section class="content-section bg-light">
        <div class="content-container">
            <h2 class="section-title">Roha Advanced Multispecialty Hospital</h2>
            <p class="section-description">
                The Advanced Multispecialty Hospital (AMSH) will be the first hospital constructed within Roha Medical Campus. The AMSH will be a 350-bed advanced hospital with state-of-the-art technology and capabilities. The hospital will have a comprehensive range of specialties including internal medicine, surgery, transplant, emergency/trauma unit, and cancer care. It is slated to open in the next couple of years.
            </p>
        </div>
    </section>

    <section class="content-section">
        <div class="content-container" style="max-width: 1200px;">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">✱</div>
                    <h3 class="feature-title">Spacious Atmosphere</h3>
                    <p class="feature-text">A healing atmosphere designed with vast open areas and green elements to ensure patient comfort and improve patient outcomes.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💡</div>
                    <h3 class="feature-title">Natural Light And Airflows</h3>
                    <p class="feature-text">Lighting system built to enhance patient comfort by mimicking the natural circadian rhythm through natural and artificial light.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📍</div>
                    <h3 class="feature-title">Easyway-Finding</h3>
                    <p class="feature-text">Integrated accessible, coordinated, and simple way-finding that allows patients, irrespective of their mobility constraints, and their families to easily navigate within the hospital.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🏢</div>
                    <h3 class="feature-title">Functional Layout</h3>
                    <p class="feature-text">A layout optimized to streamline and ease patient and physician movement, as well as the movement of supplies.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📈</div>
                    <h3 class="feature-title">Flexible And Expandable</h3>
                    <p class="feature-text">The hospital is designed with a view to the future, our flexible approach allows for continuous improvement.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="specialties-section">
        <h2 class="section-title">Specialties</h2>
        <p class="specialties-intro">Advanced surgical procedures performed by highly skilled surgeons, encompassing minimally invasive techniques.</p>
        <div class="specialties-bubbles">
            <div class="bubble">Orthopedics</div>
            <div class="bubble">Cardiothoracic surgery</div>
            <div class="bubble">Vascular surgery</div>
            <div class="bubble">Neurosurgery</div>
            <div class="bubble">Pediatric surgery</div>
            <div class="bubble">Spine Surgery</div>
            <div class="bubble">Plastic and reconstructive Surgery</div>
            <div class="bubble">Hepatobiliary surgery</div>
            <div class="bubble">ENT, Ophthalmology, Dental & Maxillofacial surgery</div>
            <div class="bubble">Urology</div>
        </div>
    </section>

    <section class="about-roha-health">
        <div class="content-container">
            <h2 class="section-title" style="text-align: left; color: var(--dark-green);">About Roha Health</h2>
            <p class="about-roha-text">
                Roha Health is developing Roha Medical Campus. Roha Health is a pan-African healthcare company that invests in building quality-driven, patient-centered, and transformational healthcare infrastructure throughout Africa. We believe that every person is entitled to dignified care and our mission is first and foremost to provide affordable and high-quality healthcare to our patients. Roha aims to be the leading responsible healthcare provider in the region.
            </p>
            <p class="about-roha-text">
                Roha Health was established with the aim of addressing Africa’s healthcare needs by building a healthcare infrastructure and skilled care providers across the continent, to provide high-quality, affordable care for patients through world-class facilities, partnerships with international market leaders, and the latest technologies.
            </p>
            <p class="about-roha-text">
                Roha Health aims to build hospitals that provide specialties that rarely exist in Africa. To effectively deploy them, we have created a flexible operating model and building design that allows us to experiment and adjust our approach as we learn more. We are driven by a belief that these services should be available in all markets and that sustainably profitable business models exist for them – our flexible approach allows for continuous improvement and evolution to find the best solutions.
            </p>
            <p class="about-roha-text">
                Roha Health's goal is to provide these rarely available diagnostics, treatments, and interventions without patients suffering significant financial consequences. As such, we have designed a pricing and operating model that can accommodate up to 20% of patients referred by the public sector and treated at public insurance rates, a discount or pro-bono rates while also extending training opportunities to healthcare workers in the public facilities. It is critical for us to ensure that treatment is widely available to the communities we serve.
            </p>
            <p class="about-roha-text">
                Roha Health's first hospital is Roha Medical Campus located in Addis Ababa, Ethiopia. Roha Health is being developed by Roha Group, an investment firm that responsibly builds companies in Africa.
            </p>
        </div>
    </section>

    <script>
        // Simple mobile menu toggle functionality
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('.nav').classList.toggle('active');
            document.querySelector('.contact-btn').classList.toggle('active');
        });
    </script>


<?php require 'footer-home.php'; ?>
