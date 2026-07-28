<section class="standards section">
    <div class="wrap">
        <div class="sec-head">
            <div class="sec-num">02</div>
            <div>
                <div class="sec-lede">Green hospital standards</div>
                <h2 style="color:#fff;">Ethiopia's first <em>EDGE-certified</em> hospital design</h2>
            </div>
        </div>
        
        <!-- Intro & Certificate -->
        <div class="split-grid" style="margin-bottom: 4rem;">
            <div class="split-text">
                <p>EDGE — Excellence in Design for Greater Efficiencies — is a green building standard from the World Bank Group's IFC, awarded only after independent verification of a building's projected energy, water, and material savings.</p>
                <p>In late 2024, Roha earned preliminary EDGE certification for its hospital design: the first time this recognition has gone to a healthcare facility in Ethiopia.</p>
            </div>
            <div class="split-media img-pair">
                <div class="img-ph dark">
                    <img src="assets/images/placeholder-edge-cert.png" alt="EDGE Certificate Placeholder" style="width:100%; height:100%; object-fit:cover; opacity: 0.5;">
                    <span class="cap" style="position: absolute; bottom: 10px; left: 10px; background: rgba(0,0,0,0.5); padding: 5px;">EDGE Certificate</span>
                </div>
            </div>
        </div>

        <!-- Animated Stats -->
        <div class="animated-stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
            <div class="stat-box" data-aos="fade-up" data-aos-delay="100">
                <h3 style="font-size: 3rem; color: var(--gold-soft); margin-bottom: 0.5rem;"><span class="odometer" data-target="35">0</span>%</h3>
                <h4 style="font-size: 1.1rem; color: #fff;">Energy Consumption Reduction</h4>
                <p style="font-size: 0.9rem;">in overall operational energy use.</p>
            </div>
            <div class="stat-box" data-aos="fade-up" data-aos-delay="200">
                <h3 style="font-size: 3rem; color: var(--gold-soft); margin-bottom: 0.5rem;"><span class="odometer" data-target="24">0</span>%</h3>
                <h4 style="font-size: 1.1rem; color: #fff;">Embodied Energy Reduction</h4>
                <p style="font-size: 0.9rem;">in energy tied to building materials.</p>
            </div>
            <div class="stat-box" data-aos="fade-up" data-aos-delay="300">
                <h3 style="font-size: 3rem; color: var(--gold-soft); margin-bottom: 0.5rem;"><span class="odometer" data-target="21">0</span>%</h3>
                <h4 style="font-size: 1.1rem; color: #fff;">Water Usage Reduction</h4>
                <p style="font-size: 0.9rem;">in daily facility water consumption.</p>
            </div>
        </div>

        <!-- 3x2 Green Features Grid -->
        <div class="pillar-grid green-features-grid" style="grid-template-columns: repeat(3, 1fr);">
            <div class="pillar" data-aos="fade-up" data-aos-delay="100">
                <div class="tag">01</div>
                <div class="pillar-icon"><i class="fa-solid fa-temperature-arrow-down"></i></div>
                <h3 style="font-size: 1.25rem;">Thermally Activated Building System (TABS)</h3>
                <p>Chilled water runs through pipes embedded in the building's own concrete structure, turning it into an efficient, low-energy cooling reservoir — the first large-scale use of this system in Ethiopia.</p>
            </div>
            <div class="pillar" data-aos="fade-up" data-aos-delay="200">
                <div class="tag">02</div>
                <div class="pillar-icon"><i class="fa-solid fa-solar-panel"></i></div>
                <h3 style="font-size: 1.25rem;">1MW Solar Power Array</h3>
                <p>A 1MW solar installation paired with battery storage will offset the hospital's reliance on the grid and lower its long-term operating costs.</p>
            </div>
            <div class="pillar" data-aos="fade-up" data-aos-delay="300">
                <div class="tag">03</div>
                <div class="pillar-icon"><i class="fa-solid fa-tree"></i></div>
                <h3 style="font-size: 1.25rem;">Miyawaki Forest</h3>
                <p>A 12,000-tree native forest surrounds the campus, acting as a natural carbon sink while creating a calm, biodiverse setting for patients and staff.</p>
            </div>
            <div class="pillar" data-aos="fade-up" data-aos-delay="400">
                <div class="tag">04</div>
                <div class="pillar-icon"><i class="fa-solid fa-faucet-drip"></i></div>
                <h3 style="font-size: 1.25rem;">Water-Efficient Fixtures</h3>
                <p>Low-flow taps and showers, together with dual-flush toilets, are designed to meaningfully cut water consumption across the campus.</p>
            </div>
            <div class="pillar" data-aos="fade-up" data-aos-delay="500">
                <div class="tag">05</div>
                <div class="pillar-icon"><i class="fa-solid fa-recycle"></i></div>
                <h3 style="font-size: 1.25rem;">Responsible Waste Management</h3>
                <p>A compact, leak-proof sewage treatment plant, along with low-emission systems for hospital waste, protects the surrounding environment.</p>
            </div>
            <div class="pillar" data-aos="fade-up" data-aos-delay="600">
                <div class="tag">06</div>
                <div class="pillar-icon"><i class="fa-solid fa-lightbulb"></i></div>
                <h3 style="font-size: 1.25rem;">Daylighting &amp; Smart Lighting</h3>
                <p>Natural light is maximized throughout the building, supported by occupancy-sensor and zoned lighting that automatically adjusts to reduce electricity use.</p>
            </div>
        </div>

    </div>
</section>

<!-- Simple script for animated stats (Odometer effect) -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const odometers = document.querySelectorAll('.odometer');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                let target = entry.target;
                let finalVal = parseInt(target.getAttribute('data-target'));
                let currentVal = 0;
                let step = finalVal / 40; // frames
                
                let counter = setInterval(() => {
                    currentVal += step;
                    if (currentVal >= finalVal) {
                        target.innerText = finalVal;
                        clearInterval(counter);
                    } else {
                        target.innerText = Math.floor(currentVal);
                    }
                }, 40);
                
                observer.unobserve(target);
            }
        });
    }, { threshold: 0.5 });
    
    odometers.forEach(odo => observer.observe(odo));
});
</script>