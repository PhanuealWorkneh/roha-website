<?php 
// Page-specific data
$pageTitle = "Progress & Milestones — Roha Medical Campus";
$activeNav = "progress";

require 'header-home.php'; 
?>

<style>
/* ============================================================
   PROGRESS & MILESTONES - FULLY FIXED
   ============================================================ */

/* ---- Progress Hero ---- */
.progress-hero {
    position: relative;
    background: radial-gradient(120% 140% at 18% -10%, rgba(72, 191, 183, 0.92) 0%, rgba(0, 126, 118, 0.98) 38%, rgba(0, 56, 84, 1) 100%), linear-gradient(90deg, #48BFB7 0%, #007E76 52%, #003854 100%);
    color: #fff;
    overflow: hidden;
    padding: 100px 0 80px;
}

.progress-hero-inner {
    position: relative;
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 32px;
}

.progress-hero-tag {
    font-family: 'Poppins', Arial, sans-serif;
    font-size: 12px;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: #fff;
    display: flex;
    gap: 10px;
    align-items: center;
    margin-bottom: 26px;
}

.progress-hero-tag::before {
    content: "";
    width: 26px;
    height: 1px;
    background: #F6F222;
}

.progress-hero h1 {
    margin: 0;
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 500;
    font-size: clamp(34px, 4.8vw, 56px);
    line-height: 1.1;
    letter-spacing: -0.01em;
    color: #fff;
    max-width: 640px;
}

.progress-hero h1 em {
    font-style: italic;
    color: #F6F222;
}

.progress-hero-sub {
    margin: 22px 0 0;
    max-width: 480px;
    color: rgba(255, 255, 255, 0.82);
    font-size: 16px;
    line-height: 1.7;
}

@media (max-width: 860px) {
    .progress-hero {
        padding: 72px 0 56px;
    }
}

/* ============================================================
   SCROLLYTELLING - FIXED STICKY
   ============================================================ */
.progress-scrolly {
    background: #fff;
    padding: 20px 0 60px;
    position: relative;
    overflow: visible;
}

.progress-scrolly-grid {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 32px;
    display: flex;
    gap: 60px;
    align-items: flex-start;
    position: relative;
}

/* ---- Left Column: Text Steps ---- */
.progress-text-steps {
    flex: 1;
    padding: 20px 0;
    min-width: 0;
}

.progress-step {
    padding: 80px 0;
    min-height: 80vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    border-bottom: 1px solid rgba(0, 56, 84, 0.06);
    opacity: 0.3;
    transition: opacity 0.7s ease;
}

.progress-step:last-child {
    border-bottom: none;
}

.progress-step.active {
    opacity: 1;
}

.progress-step-date {
    font-family: 'Poppins', Arial, sans-serif;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.progress-step-title {
    margin: 0 0 14px;
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 600;
    font-size: 26px;
    color: #003854;
    line-height: 1.3;
}

.progress-step-body {
    margin: 0;
    font-size: 16px;
    line-height: 1.75;
    color: #566B75;
    max-width: 480px;
}

/* ============================================================
   RIGHT COLUMN: FIXED MEDIA PANEL
   THIS IS THE CRITICAL FIX
   ============================================================ */
.progress-media-wrapper {
    flex: 0 0 480px;
    position: sticky;
    top: 100px;
    height: calc(100vh - 160px);
    min-height: 400px;
    max-height: 600px;
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid rgba(0, 56, 84, 0.12);
    background: #F7FAF9;
    /* CRITICAL: This ensures the sticky works */
    align-self: flex-start;
}

.progress-media-panel {
    position: relative;
    width: 100%;
    height: 100%;
}

.progress-media-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.7s ease;
    border-radius: 8px;
    overflow: hidden;
}

.progress-media-slide.active {
    opacity: 1;
}

.progress-media-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.progress-media-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 30px;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.progress-media-caption {
    font-size: 13px;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    font-weight: 500;
    color: #fff;
}

/* ---- Placeholder ---- */
.progress-placeholder {
    max-width: 1280px;
    margin: 0 auto;
    padding: 40px 32px 20px;
}

.progress-placeholder p {
    font-size: 13px;
    font-style: italic;
    color: #566B75;
    margin: 0;
    border: 1px dashed rgba(0, 56, 84, 0.2);
    border-radius: 4px;
    padding: 18px 22px;
}

/* ============================================================
   MOBILE
   ============================================================ */
@media (max-width: 860px) {
    .progress-scrolly-grid {
        flex-direction: column;
        padding: 0 20px;
    }
    
    .progress-media-wrapper {
        flex: none;
        width: 100%;
        position: relative;
        top: 0;
        align-self: auto;
        height: 300px;
        min-height: 300px;
        max-height: 300px;
        margin-bottom: 20px;
        /* Remove sticky on mobile */
        position: relative !important;
    }
    
    .progress-step {
        min-height: auto;
        padding: 50px 0;
    }
    
    .progress-step-title {
        font-size: 22px;
    }
}

@media (max-width: 640px) {
    .progress-hero h1 {
        font-size: clamp(28px, 8vw, 38px);
    }
    .progress-hero-sub {
        font-size: 14px;
    }
    .progress-step-title {
        font-size: 20px;
    }
    .progress-media-wrapper {
        height: 220px;
        min-height: 220px;
        max-height: 220px;
    }
}

/* ---- Newsletter ---- */
.progress-newsletter {
    padding: 80px 0;
    background: #007E76;
}

.progress-newsletter-inner {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 32px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 40px;
    flex-wrap: wrap;
}

.progress-newsletter-text {
    max-width: 480px;
}

.progress-eyebrow {
    font-family: 'Poppins', Arial, sans-serif;
    font-size: 12px;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    font-weight: 700;
    color: #fff;
    margin-bottom: 14px;
}

.progress-newsletter-text h2 {
    margin: 0 0 12px;
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 600;
    font-size: clamp(22px, 2.6vw, 28px);
    line-height: 1.25;
    color: #fff;
}

.progress-newsletter-text h2 em {
    font-style: italic;
    color: #fff;
}

.progress-newsletter-text p {
    margin: 0;
    color: rgba(255, 255, 255, 0.82);
    font-size: 14.5px;
    line-height: 1.6;
}

.progress-newsletter-form {
    display: flex;
    gap: 12px;
    flex: 1;
    min-width: 280px;
    max-width: 440px;
}

.progress-newsletter-form input {
    flex: 1;
    box-sizing: border-box;
    padding: 14px 16px;
    border: 1px solid rgba(255, 255, 255, 0.4);
    border-radius: 4px;
    background: rgba(255, 255, 255, 0.08);
    color: #fff;
    font-family: 'Roboto Serif', Georgia, serif;
    font-size: 14px;
}

.progress-newsletter-form input::placeholder {
    color: rgba(255, 255, 255, 0.5);
}

.progress-newsletter-form input:focus {
    outline: none;
    border-color: rgba(255, 255, 255, 0.7);
}

.progress-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    border-radius: 4px;
    font-family: 'Poppins', Arial, sans-serif;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 0.03em;
    padding: 14px 28px;
    text-decoration: none;
    border: 1px solid transparent;
    cursor: pointer;
    white-space: nowrap;
}

.progress-btn-newsletter {
    background: #F6F222;
    color: #003854;
    border-color: #F6F222;
}

.progress-btn-newsletter:hover {
    background: #E8DE1A;
    border-color: #E8DE1A;
}

@media (max-width: 860px) {
    .progress-newsletter {
        padding: 56px 0;
    }
    .progress-newsletter-inner {
        flex-direction: column;
        align-items: flex-start;
        padding: 0 20px;
    }
    .progress-newsletter-form {
        max-width: 100%;
        min-width: auto;
        width: 100%;
    }
}
</style>

<style> 
/* Force the container to respect sticky positioning */
.progress-scrolly-grid {
    display: flex;
    gap: 60px;
    align-items: flex-start;
    position: relative;
    min-height: 100vh;
    overflow: visible;
}

.progress-media-wrapper {
    position: sticky !important;
    top: 100px !important;
    align-self: flex-start !important;
    flex: 0 0 480px !important;
}
</style>

<!-- HERO -->
<header class="progress-hero">
    <div class="progress-hero-inner">
        <div class="progress-hero-tag">Roha Milestones</div>
        <h1>Scroll through <em>the journey</em></h1>
        <p class="progress-hero-sub">Keep scrolling — the visual on the right follows each milestone as you read.</p>
    </div>
</header>

<!-- SCROLLYTELLING -->
<section class="progress-scrolly">
    <div class="progress-scrolly-grid">

        <!-- TEXT STEPS -->
        <div class="progress-text-steps" id="stepsContainer">
            
            <?php
            $steps = [
                [
                    'date' => 'April 10, 2021',
                    'title' => 'Roha Medical Campus launches',
                    'body' => 'A $300 million integrated healthcare campus is announced in Addis Ababa, in the presence of H.E. Dr. Abiy Ahmed, Prime Minister of Ethiopia, and other dignitaries.',
                    'color' => '#007E76'
                ],
                [
                    'date' => '2023',
                    'title' => 'Environmental Clearance Certificate obtained',
                    'body' => 'Roha secures its Environmental Clearance Certificate, reinforcing its commitment to responsible, high-standard development from the ground up.',
                    'color' => '#007E76'
                ],
                [
                    'date' => 'October 2, 2023',
                    'title' => 'Nominated for the ACE Award',
                    'body' => 'The US Embassy in Addis Ababa announces Roha Group\'s nomination for the 2023 Award for Corporate Excellence in Innovation.',
                    'color' => '#501195'
                ],
                [
                    'date' => 'February 22, 2024',
                    'title' => '$42 million first equity injection',
                    'body' => 'Initial equity lands as part of a $130 million first-phase investment, placing Ethiopia on the African medical tourism map.',
                    'color' => '#501195'
                ],
                [
                    'date' => 'November 2024',
                    'title' => 'Distinguished guests tour the campus',
                    'body' => 'Mr. John Humphrey visits the Advanced Multi-Specialty Hospital, witnessing construction techniques and environmental features new to Ethiopia.',
                    'color' => '#007E76'
                ],
                [
                    'date' => 'November 27, 2024',
                    'title' => 'Ethiopia\'s first IFC EDGE-certified hospital',
                    'body' => 'Roha Medical Campus becomes the first healthcare development in Ethiopia accredited for sustainability under the World Bank Group\'s IFC EDGE program.',
                    'color' => '#501195'
                ],
                [
                    'date' => '2026 · Target',
                    'title' => 'Advanced Multispecialty Hospital opens',
                    'body' => 'The 350-bed flagship hospital — Ethiopia\'s first internationally accredited facility — is slated to welcome its first patients.',
                    'color' => '#003854'
                ]
            ];

            $imageUrl = 'https://rohamedicalcampus.com/wp-content/uploads/2024/09/RMC-Update-of-Environmental-Clearance-Certificatecp.jpg';

            foreach ($steps as $index => $step):
            ?>
            <div class="progress-step" data-index="<?php echo $index; ?>">
                <div class="progress-step-date" style="color:<?php echo $step['color']; ?>;"><?php echo $step['date']; ?></div>
                <h3 class="progress-step-title"><?php echo $step['title']; ?></h3>
                <p class="progress-step-body"><?php echo $step['body']; ?></p>
            </div>
            <?php endforeach; ?>

        </div>

        <!-- STICKY MEDIA PANEL -->
        <div class="progress-media-wrapper" id="mediaPanel">
            <div class="progress-media-panel">
                
                <?php
                $captions = [
                    'Launch Ceremony, 2021',
                    'Environmental Review',
                    'ACE Award Nomination',
                    'Construction Progress',
                    'Site Visit',
                    'EDGE Certification',
                    'Opening Day'
                ];

                foreach ($captions as $index => $caption):
                ?>
                <div class="progress-media-slide <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>">
                    <img src="<?php echo $imageUrl; ?>" alt="<?php echo $caption; ?>">
                    <div class="progress-media-content">
                        <span class="progress-media-caption"><?php echo $caption; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>

    </div>

    <div class="progress-placeholder">
        <p>Replace the placeholder image with real milestone photos — the image URL is set in the PHP array.</p>
    </div>
</section>

<!-- NEWSLETTER -->
<section class="progress-newsletter">
    <div class="progress-newsletter-inner">
        <div class="progress-newsletter-text">
            <div class="progress-eyebrow">Stay Updated</div>
            <h2>Sign up for our <em>newsletter</em></h2>
            <p>We'll send you the latest in healthcare technology and innovation.</p>
        </div>
        <form class="progress-newsletter-form" method="POST" action="#">
            <input type="email" placeholder="Enter your email" required>
            <button type="submit" class="progress-btn progress-btn-newsletter">Join</button>
        </form>
    </div>
</section>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    var steps = document.querySelectorAll('.progress-step');
    var slides = document.querySelectorAll('.progress-media-slide');
    
    console.log('Found ' + steps.length + ' steps and ' + slides.length + ' slides');
    
    if (steps.length === 0) {
        console.warn('No steps found');
        return;
    }
    
    // Activate first step and slide by default
    steps[0].classList.add('active');
    if (slides.length > 0) {
        slides[0].classList.add('active');
    }
    
    // Create observer for steps
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                var step = entry.target;
                var index = parseInt(step.getAttribute('data-index'));
                
                console.log('Step ' + index + ' is visible');
                
                // Update steps
                steps.forEach(function(s) {
                    s.classList.remove('active');
                });
                step.classList.add('active');
                
                // Update slides
                slides.forEach(function(s) {
                    s.classList.remove('active');
                });
                if (slides[index]) {
                    slides[index].classList.add('active');
                    console.log('Slide ' + index + ' activated');
                }
            }
        });
    }, {
        threshold: 0.3,
        rootMargin: '0px 0px -50px 0px'
    });
    
    // Observe each step
    steps.forEach(function(step) {
        observer.observe(step);
    });
    
    console.log('Progress page loaded - waiting for scroll');
});
</script>

<?php require 'footer-progress.php'; ?>