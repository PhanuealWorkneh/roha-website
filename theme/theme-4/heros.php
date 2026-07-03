
<style> 
/* Force the background to Black and fix typography */
.bg-black {
    background: #000 !important;
}

.tracking-tight {
    letter-spacing: -0.04em !important;
    line-height: 1.1 !important;
}

.letter-spacing-1 {
    letter-spacing: 0.1em;
}

.bg-dark-grey {
    background-color: #1a1c1e !important;
}

/* Ensure the container takes up the full height of the slider slide */
.consalt-slider-height .container {
    flex: 1;
}

/* Adjust the display-1 size to match the image more closely */
@media (min-width: 992px) {
    .display-1 {
        font-size: 6.5rem !important;
    }
}

/* Smooth button hover */
.custom-btn-hover:hover .bg-dark-grey {
    background-color: #2a2c2e !important;
}
/* Ensure the parent is the reference point */
.position-relative {
    position: relative;
}

.bg-video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: 0;
    transform: translate(-50%, -50%);
    object-fit: cover; /* This keeps the video aspect ratio perfect */
}

/* Darkens the video slightly so white text is easier to read */
.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); /* Adjust 0.4 for more/less darkness */
    z-index: 1;
}

/* Make sure container sits above video and overlay */
.container {
    z-index: 2;
}

</style>
<div class="swiper-slide">
    <div class="consalt-slider-height d-flex flex-column position-relative overflow-hidden" style="min-height: 100vh; margin-top: -130px;">
        
        <video autoplay muted loop playsinline class="bg-video">
            <source src="assets/electric-fusion-gradient-background-2026-01-28-05-23-45-utc.mp4" type="video/mp4">
            <img src="fallback-image.jpg" alt="Background">
        </video>

        <div class="video-overlay"></div>

        <div class="container h-100 d-flex flex-column justify-content-between py-5 position-relative" style="z-index: 2;">
            <div class="row pt-5 mt-5">
                <div class="col-lg-12">
                      <h1 class="consalt-slider-title" style="color:#E9F39E; padding-top: 100px;">
                        World-Class Healthcare, <br/>Built for Africa
                    </h1>
                </div>
            </div>

            <div class="row align-items-end" style="margin-bottom: 100px;">
                <div class="col-lg-5">
                    <p class="text-white opacity-75 fs-5 mb-0">
                        A state-of-the-art 300-bed multispecialty hospital redefining healthcare through advanced technology, modern design, and world-class clinical care.
                    </p>
                </div>
                
                <div class="ms-2 rounded-circle d-flex align-items-center justify-content-center" 
                             style="background-color: #E9F39E; width: 56px; height: 56px; color: black;  pointer-events: none;">
                             <a href="medical-campus.php">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                             </a>
                        </div>
            
            </div>
        </div>
    </div>
</div>