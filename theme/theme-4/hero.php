<?php
// hero.php - Hybrid animated hero section with horizontal slideshow
// This replaces the original hero section and flows directly into stats
?>
<style>
/* ========== HERO HYBRID STYLES ========== */
.h-hero-wrapper {
  position: relative;
  height: 100vh;
  width: 100%;
  overflow: hidden;
  background: var(--black);
}

/* horizontal slider container */
.h-hero-slider {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
}

.h-hero-track {
  display: flex;
  width: 400%;
  height: 100%;
  transition: transform 0.8s cubic-bezier(0.77, 0, 0.175, 1);
  will-change: transform;
}

/* individual slides */
.h-hero-slide {
  width: 25%;
  height: 100%;
  flex-shrink: 0;
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
  padding: 0 80px;
}

/* slide backgrounds */
.slide-bg-0 {
  background: radial-gradient(ellipse 80% 60% at 65% 45%, #1e7a50 0%, #0a3d26 40%, #080a0e 100%);
}
.slide-bg-0::after {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse 35% 50% at 5% 65%, rgba(110,20,160,.4) 0%, transparent 65%);
  pointer-events: none;
}
.slide-bg-1 {
  background: radial-gradient(ellipse 70% 60% at 55% 50%, #0f4d2e 0%, #060f0a 55%, #080a0e 100%);
}
.slide-bg-2 {
  background: radial-gradient(ellipse 75% 70% at 30% 55%, #1a0940 0%, #0a0616 60%, #080a0e 100%);
}
.slide-bg-2::after {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse 40% 50% at 80% 30%, rgba(20,100,55,.25) 0%, transparent 60%);
  pointer-events: none;
}
.slide-bg-3 {
  background: radial-gradient(ellipse 70% 65% at 60% 45%, #1a4d30 0%, #080e0a 55%, #080a0e 100%);
}
.slide-bg-3::after {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse 40% 60% at 10% 40%, rgba(100,15,170,.3) 0%, transparent 65%);
  pointer-events: none;
}

/* hero content styles */
.hero-slide-content {
  max-width: 780px;
  position: relative;
  z-index: 2;
}
.hero-tag {
  font-size: 10px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--muted);
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 32px;
}
.hero-tag::before {
  content: '';
  width: 30px;
  height: 1px;
  background: rgba(255,255,255,.2);
}
.hero-tag span {
  border: 1px solid rgba(255,255,255,.15);
  border-radius: 20px;
  padding: 4px 12px;
}
.hero-slide-content h1 {
  font-weight: 900;
  font-size: clamp(2.4rem, 4.5vw, 4.2rem);
  line-height: 1.06;
  margin-bottom: 36px;
  letter-spacing: -.5px;
}
.hero-location {
  font-size: 13px;
  color: var(--muted);
  letter-spacing: 1px;
  display: flex;
  align-items: center;
  gap: 10px;
}
.hero-location::before {
  content: '';
  width: 18px;
  height: 1px;
  background: var(--muted);
}

/* scroll arrow */
.hero-scroll-arrow {
  position: absolute;
  right: 52px;
  bottom: 44px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
  color: var(--muted);
  font-size: 10px;
  letter-spacing: 2px;
  text-transform: uppercase;
  z-index: 10;
}
.arr-row {
  display: flex;
  gap: 4px;
}
.arr-row span {
  display: block;
  width: 6px;
  height: 6px;
  border-right: 2px solid var(--muted);
  border-bottom: 2px solid var(--muted);
  transform: rotate(-45deg);
  animation: aBounce 1.4s ease-in-out infinite;
}
.arr-row span:nth-child(2) { animation-delay: .15s; opacity: .6; }
.arr-row span:nth-child(3) { animation-delay: .3s; opacity: .35; }
@keyframes aBounce {
  0%,100% { transform: rotate(-45deg) translate(0,0); opacity: 1; }
  50% { transform: rotate(-45deg) translate(4px,4px); opacity: .4; }
}

/* last slide down arrow */
.arr-down {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 4px;
}
.arr-down span {
  display: block;
  width: 6px;
  height: 6px;
  border-right: 2px solid var(--gl);
  border-bottom: 2px solid var(--gl);
  transform: rotate(45deg);
  animation: aBounceD 1.4s ease-in-out infinite;
}
.arr-down span:nth-child(2) { animation-delay: .15s; opacity: .6; }
.arr-down span:nth-child(3) { animation-delay: .3s; opacity: .35; }
@keyframes aBounceD {
  0%,100% { transform: rotate(45deg) translate(0,0); opacity: 1; }
  50% { transform: rotate(45deg) translate(0,4px); opacity: .4; }
}

/* deco number */
.hero-deco-num {
  position: absolute;
  right: -20px;
  bottom: -40px;
  font-size: 28vw;
  font-weight: 900;
  line-height: 1;
  color: rgba(255,255,255,.018);
  pointer-events: none;
  user-select: none;
  letter-spacing: -10px;
  font-family: 'Figtree', sans-serif;
}

/* slide-in animations */
.hero-s-in {
  opacity: 0;
  transform: translateX(32px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}
.hero-s-in.d1 { transition-delay: .1s; }
.hero-s-in.d2 { transition-delay: .22s; }
.hero-s-in.d3 { transition-delay: .34s; }
.hero-s-in.d4 { transition-delay: .46s; }
.h-hero-slide.active .hero-s-in {
  opacity: 1;
  transform: translateX(0);
}

/* timeline dots for hero */
.hero-timeline {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 600;
  padding: 0 52px 28px;
  background: linear-gradient(to top, rgba(8,10,14,.8) 0%, transparent 100%);
}
.hero-tl-track {
  position: relative;
  display: flex;
  align-items: center;
  height: 2px;
  background: rgba(255,255,255,.1);
  border-radius: 2px;
}
.hero-tl-fill {
  height: 2px;
  border-radius: 2px;
  background: linear-gradient(90deg, var(--green), var(--pl));
  transition: width 0.5s cubic-bezier(0.77, 0, 0.175, 1);
  position: absolute;
  left: 0;
  top: 0;
}
.hero-tl-dots {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  right: 0;
  display: flex;
  justify-content: space-between;
}
.hero-tl-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: rgba(255,255,255,.15);
  border: 2px solid rgba(255,255,255,.2);
  cursor: pointer;
  transition: background .4s, border-color .4s, transform .3s;
  position: relative;
}
.hero-tl-dot.reached {
  background: var(--gl);
  border-color: var(--gl);
}
.hero-tl-dot.active {
  transform: scale(1.5);
  box-shadow: 0 0 0 4px rgba(74,222,128,.2);
}
.hero-tl-dot .dot-label {
  position: absolute;
  bottom: 18px;
  left: 50%;
  transform: translateX(-50%);
  font-size: 9px;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: var(--muted);
  white-space: nowrap;
  pointer-events: none;
  opacity: 0;
  transition: opacity .2s;
}
.hero-tl-dot.active .dot-label,
.hero-tl-dot:hover .dot-label {
  opacity: 1;
}

/* down hint to scroll to stats */
.hero-down-hint {
  position: absolute;
  right: 52px;
  bottom: 80px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
  color: var(--gl);
  font-size: 10px;
  letter-spacing: 2px;
  text-transform: uppercase;
  cursor: pointer;
  z-index: 15;
  transition: opacity 0.3s;
}
.hero-down-hint:hover {
  opacity: 0.8;
}

/* responsive */
@media (max-width: 900px) {
  .h-hero-slide { padding: 0 24px; }
  .hero-scroll-arrow { right: 24px; bottom: 24px; }
  .hero-down-hint { right: 24px; bottom: 60px; }
  .hero-timeline { padding: 0 24px 20px; }
}
</style>

<!-- HERO HYBRID SECTION -->
<div class="h-hero-wrapper" id="heroSection">
  <div class="h-hero-slider">
    <div class="h-hero-track" id="heroTrack">
      
      <!-- SLIDE 0 -->
      <div class="h-hero-slide slide-bg-0 active" data-index="0">
        <div class="hero-slide-content">
          <div class="hero-tag hero-s-in"><span>01 / 04</span> Introduction</div>
          <h1 class="hero-s-in d1">Roha Medical Campus is an integrated health campus under development in the heart of Addis Ababa, Ethiopia.</h1>
          <p class="hero-location hero-s-in d2">Addis Ababa, Ethiopia</p>
        </div>
        <div class="hero-scroll-arrow hero-s-in d3">
          <div class="arr-row"><span></span><span></span><span></span></div>
          <span>Scroll to explore</span>
        </div>
        <div class="hero-deco-num">01</div>
      </div>

      <!-- SLIDE 1 -->
      <div class="h-hero-slide slide-bg-1" data-index="1">
        <div class="hero-slide-content">
          <div class="hero-tag hero-s-in"><span>02 / 04</span> World-Class Care</div>
          <h1 class="hero-s-in d1">A new benchmark for<br>specialized healthcare excellence in Africa.</h1>
          <p class="hero-location hero-s-in d2">Advanced Multispecialty Hospital</p>
        </div>
        <div class="hero-deco-num">02</div>
      </div>

      <!-- SLIDE 2 -->
      <div class="h-hero-slide slide-bg-2" data-index="2">
        <div class="hero-slide-content">
          <div class="hero-tag hero-s-in"><span>03 / 04</span> Sustainable & Green</div>
          <h1 class="hero-s-in d1">Ethiopia's first IFC-accredited<br><em style="color:var(--gl); font-style:normal;">green hospital</em>.</h1>
          <p class="hero-location hero-s-in d2">12,000 native trees · Net-zero campus</p>
        </div>
        <div class="hero-deco-num">03</div>
      </div>

      <!-- SLIDE 3 (last slide with down arrow) -->
      <div class="h-hero-slide slide-bg-3" data-index="3">
        <div class="hero-slide-content">
          <div class="hero-tag hero-s-in"><span>04 / 04</span> Education & Research</div>
          <h1 class="hero-s-in d1">A campus of learning, discovery,<br>and <em style="color:var(--gl); font-style:normal;">sustainable living</em>.</h1>
          <p class="hero-location hero-s-in d2">Medical School · Research Hub</p>
        </div>
        <div class="hero-deco-num">04</div>
      </div>

    </div>
  </div>

  <!-- Scroll hint on last slide (to go to stats) -->
  <div class="hero-down-hint" id="heroDownHint">
    <div class="arr-down"><span></span><span></span><span></span></div>
    <span>Discover More</span>
  </div>
</div>

<!-- Timeline dots for hero navigation -->
<div class="hero-timeline" id="heroTimeline">
  <div class="hero-tl-track">
    <div class="hero-tl-fill" id="heroTlFill" style="width:0%"></div>
    <div class="hero-tl-dots" id="heroTlDots"></div>
  </div>
</div>

<script>
// ========== HERO HORIZONTAL SLIDER LOGIC ==========
(function() {
  const H_SLIDES_COUNT = 4;
  const slideLabels = ['Intro', 'World-Class', 'Green', 'Education'];
  let currentHeroSlide = 0;
  let isHeroAnimating = false;
  
  const heroTrack = document.getElementById('heroTrack');
  const heroTlFill = document.getElementById('heroTlFill');
  const heroTlDots = document.getElementById('heroTlDots');
  const heroDownHint = document.getElementById('heroDownHint');
  const heroSection = document.getElementById('heroSection');
  
  // Build timeline dots
  slideLabels.forEach((label, i) => {
    const dot = document.createElement('div');
    dot.className = 'hero-tl-dot';
    dot.innerHTML = `<span class="dot-label">${label}</span>`;
    dot.addEventListener('click', () => jumpToHeroSlide(i));
    heroTlDots.appendChild(dot);
  });
  
  const heroDots = document.querySelectorAll('.hero-tl-dot');
  
  // Function to update active slide and timeline
  function updateHeroSlide(index) {
    if (isHeroAnimating) return;
    if (index === currentHeroSlide) return;
    if (index < 0) index = 0;
    if (index >= H_SLIDES_COUNT) index = H_SLIDES_COUNT - 1;
    
    isHeroAnimating = true;
    
    // Remove active class from current slide
    const currentSlideEl = document.querySelector(`.h-hero-slide[data-index="${currentHeroSlide}"]`);
    if (currentSlideEl) currentSlideEl.classList.remove('active');
    
    // Update track position
    const offsetPercent = index * 25; // 25% per slide
    heroTrack.style.transform = `translateX(-${offsetPercent}%)`;
    
    // Add active class to new slide
    const newSlideEl = document.querySelector(`.h-hero-slide[data-index="${index}"]`);
    if (newSlideEl) newSlideEl.classList.add('active');
    
    // Update timeline fill
    const fillPercent = (index / (H_SLIDES_COUNT - 1)) * 100;
    heroTlFill.style.width = fillPercent + '%';
    
    // Update dot states
    heroDots.forEach((dot, i) => {
      dot.classList.toggle('reached', i <= index);
      dot.classList.toggle('active', i === index);
    });
    
    // Show/hide down hint on last slide
    if (index === H_SLIDES_COUNT - 1) {
      heroDownHint.style.opacity = '1';
      heroDownHint.style.pointerEvents = 'auto';
    } else {
      heroDownHint.style.opacity = '0.4';
      heroDownHint.style.pointerEvents = 'auto';
    }
    
    currentHeroSlide = index;
    
    setTimeout(() => {
      isHeroAnimating = false;
    }, 800);
  }
  
  // Jump to specific slide
  function jumpToHeroSlide(idx) {
    if (isHeroAnimating) return;
    updateHeroSlide(idx);
  }
  
  // Next slide (for auto-advance or manual)
  function nextHeroSlide() {
    if (currentHeroSlide < H_SLIDES_COUNT - 1) {
      updateHeroSlide(currentHeroSlide + 1);
    }
  }
  
  function prevHeroSlide() {
    if (currentHeroSlide > 0) {
      updateHeroSlide(currentHeroSlide - 1);
    }
  }
  
  // Mouse wheel navigation on hero section
  let wheelTimeout = null;
  heroSection.addEventListener('wheel', (e) => {
    // Only handle if hero section is in viewport
    const rect = heroSection.getBoundingClientRect();
    if (rect.top > 0 && rect.bottom > 0) {
      if (wheelTimeout) return;
      if (e.deltaY > 0) {
        // scroll down
        if (currentHeroSlide < H_SLIDES_COUNT - 1) {
          e.preventDefault();
          nextHeroSlide();
        }
      } else if (e.deltaY < 0) {
        // scroll up
        if (currentHeroSlide > 0) {
          e.preventDefault();
          prevHeroSlide();
        }
      }
      wheelTimeout = setTimeout(() => { wheelTimeout = null; }, 500);
    }
  }, { passive: false });
  
  // Touch/swipe support for mobile
  let touchStartX = 0;
  let touchEndX = 0;
  heroSection.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
  });
  heroSection.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    const diff = touchEndX - touchStartX;
    if (Math.abs(diff) > 50) {
      if (diff > 0 && currentHeroSlide > 0) {
        prevHeroSlide();
      } else if (diff < 0 && currentHeroSlide < H_SLIDES_COUNT - 1) {
        nextHeroSlide();
      }
    }
  });
  
  // Down hint click → scroll to stats section
  if (heroDownHint) {
    heroDownHint.addEventListener('click', () => {
      const statsSection = document.querySelector('.stats-bar');
      if (statsSection) {
        statsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  }
  
  // Initialize slide 0
  updateHeroSlide(0);
  
  // Auto-advance every 6 seconds, but stop after user interaction
  let autoAdvanceInterval = setInterval(() => {
    if (currentHeroSlide < H_SLIDES_COUNT - 1) {
      updateHeroSlide(currentHeroSlide + 1);
    } else {
      // On last slide, stop auto-advance
      clearInterval(autoAdvanceInterval);
    }
  }, 6000);
  
  // Stop auto-advance on user interaction
  heroSection.addEventListener('click', () => {
    clearInterval(autoAdvanceInterval);
    autoAdvanceInterval = null;
  });
  heroSection.addEventListener('wheel', () => {
    clearInterval(autoAdvanceInterval);
    autoAdvanceInterval = null;
  });
})();
</script>

<!-- STATS BAR - directly follows hero section -->
<div class="stats-bar">
  <div class="stat-item fade-up"><span class="stat-number">350+</span><span class="stat-label">Hospital Beds</span></div>
  <div class="stat-item fade-up fade-up-delay-1"><span class="stat-number">12</span><span class="stat-label">Centers of Excellence</span></div>
  <div class="stat-item fade-up fade-up-delay-2"><span class="stat-number">$130M</span><span class="stat-label">Investment in Healthcare</span></div>
</div>