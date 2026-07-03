<!-- ========== FOOTER ========== -->
<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <h3>Roha Medical Campus</h3>
      <p>An integrated health campus under development in Addis Ababa, Ethiopia — built for the continent.</p>
      <address>379 Cape Verde Street<br>+251 1163 93 910<br>info@rohamedicalcampus.com</address>
    </div>
    <div class="footer-col">
      <h4>Explore</h4>
      <ul>
        <li><a href="#mission">About</a></li>
        <li><a href="#building">Campus</a></li>
        <li><a href="#esg">ESG</a></li>
        <li><a href="#milestones">Milestones</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Resources</h4>
      <ul>
        <li><a href="#">Press Releases</a></li>
        <li><a href="#">Newsroom</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">© 2025 Roha Medical Campus. All rights reserved.</div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const navbar = document.getElementById('mainNavbar');
  const navLinks = document.getElementById('navLinks');
  const expandMenuBtn = document.getElementById('expandMenuBtn');
  const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
  const sideDrawer = document.getElementById('sideDrawer');
  const overlay = document.getElementById('sidebarOverlay');
  const closeSidebarBtn = document.getElementById('closeSidebarBtn');
  let isMenuExpanded = false;

  if (expandMenuBtn) {
    expandMenuBtn.addEventListener('click', function() {
      isMenuExpanded = !isMenuExpanded;
      navLinks.classList.toggle('active', isMenuExpanded);
      const icon = isMenuExpanded ? 'fa-chevron-circle-up' : 'fa-chevron-circle-down';
      const label = isMenuExpanded ? 'CLOSE' : 'MENU';
      expandMenuBtn.innerHTML = `<i class="fas ${icon}"></i>&nbsp;<span style="font-size:0.65rem;font-family:'Poppins',sans-serif;font-weight:700;letter-spacing:0.12em;">${label}</span>`;
    });
  }

  function openSidebar() { sideDrawer.classList.add('open'); overlay.classList.add('active'); document.body.style.overflow='hidden'; }
  function closeSidebar() { sideDrawer.classList.remove('open'); overlay.classList.remove('active'); document.body.style.overflow=''; }
  if (sidebarToggleBtn) sidebarToggleBtn.onclick = openSidebar;
  if (overlay) overlay.onclick = closeSidebar;
  if (closeSidebarBtn) closeSidebarBtn.onclick = closeSidebar;
  document.querySelectorAll('.sidebar-menu a').forEach(link => link.addEventListener('click', closeSidebar));

  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
  });
});

// Hero Slider
(function() {
  const H_SLIDES = 4;
  let currentIndex = 0;
  let isAnimating = false;
  let autoInterval;

  const track = document.getElementById('heroTrack');
  const tlFill = document.getElementById('heroTlFill');
  const tlDots = document.getElementById('heroTlDots');
  const downHint = document.getElementById('heroDownHint');
  const heroSection = document.getElementById('heroSection');
  const heroTimeline = document.getElementById('heroTimeline');

  const slideLabels = ['Intro', 'World-Class', 'Green', 'Education'];

  slideLabels.forEach((label, i) => {
    const dot = document.createElement('div');
    dot.className = 'hero-tl-dot';
    dot.innerHTML = `<span class="dot-label">${label}</span>`;
    dot.addEventListener('click', () => goToSlide(i));
    tlDots.appendChild(dot);
  });

  const dots = document.querySelectorAll('.hero-tl-dot');

  function goToSlide(index) {
    if (isAnimating || index === currentIndex) return;
    if (index < 0) index = 0;
    if (index >= H_SLIDES) index = H_SLIDES - 1;
    isAnimating = true;
    document.querySelectorAll('.h-hero-slide').forEach((slide, i) => slide.classList.toggle('active', i === index));
    track.style.transform = `translateX(-${index * 25}%)`;
    tlFill.style.width = ((index / (H_SLIDES - 1)) * 100) + '%';
    dots.forEach((dot, i) => {
      dot.classList.toggle('reached', i <= index);
      dot.classList.toggle('active', i === index);
    });
    if (downHint) downHint.style.opacity = index === H_SLIDES - 1 ? '1' : '0.4';
    currentIndex = index;
    setTimeout(() => { isAnimating = false; }, 750);
  }

  function updateTimelineVisibility() {
    if (heroSection && heroTimeline) {
      const heroBottom = heroSection.offsetTop + heroSection.offsetHeight;
      heroTimeline.classList.toggle('hidden', window.scrollY + 100 > heroBottom);
    }
  }

  let wheelActive = true;
  heroSection.addEventListener('wheel', function(e) {
    const rect = heroSection.getBoundingClientRect();
    if (rect.top <= 100 && rect.bottom >= 100 && wheelActive) {
      e.preventDefault();
      if (e.deltaY > 0 && currentIndex < H_SLIDES - 1) goToSlide(currentIndex + 1);
      else if (e.deltaY < 0 && currentIndex > 0) goToSlide(currentIndex - 1);
    }
  }, { passive: false });

  let touchStart = 0;
  heroSection.addEventListener('touchstart', (e) => { touchStart = e.changedTouches[0].screenX; });
  heroSection.addEventListener('touchend', (e) => {
    const diff = e.changedTouches[0].screenX - touchStart;
    if (Math.abs(diff) > 40) {
      if (diff > 0 && currentIndex > 0) goToSlide(currentIndex - 1);
      else if (diff < 0 && currentIndex < H_SLIDES - 1) goToSlide(currentIndex + 1);
    }
  });

  if (downHint) downHint.addEventListener('click', () => {
    const stats = document.querySelector('.stats-bar');
    if (stats) stats.scrollIntoView({ behavior: 'smooth' });
  });

  function startAutoAdvance() {
    if (autoInterval) clearInterval(autoInterval);
    autoInterval = setInterval(() => {
      if (currentIndex < H_SLIDES - 1) goToSlide(currentIndex + 1);
      else clearInterval(autoInterval);
    }, 6000);
  }

  heroSection.addEventListener('click', () => clearInterval(autoInterval));
  heroSection.addEventListener('wheel', () => clearInterval(autoInterval));
  window.addEventListener('scroll', updateTimelineVisibility);

  goToSlide(0);
  startAutoAdvance();
  updateTimelineVisibility();
})();

// Fade-up on scroll
const fadeEls = document.querySelectorAll('.fade-up');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
}, { threshold: 0.1 });
fadeEls.forEach(el => observer.observe(el));

// Smooth anchor scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    const hash = this.getAttribute('href');
    if (hash === '#' || hash === 'javascript:void(0)') return;
    const target = document.querySelector(hash);
    if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
  });
});
</script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
AOS.init({
    duration: 1000,
    once: false,
    offset: 120
});

</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const milestoneTrack = document.querySelector(".milestone-track");

    if (!milestoneTrack) return;

    milestoneTrack.addEventListener("wheel", function (e) {

        const maxScrollLeft = milestoneTrack.scrollWidth - milestoneTrack.clientWidth;

        const canScrollRight = milestoneTrack.scrollLeft < maxScrollLeft;
        const canScrollLeft = milestoneTrack.scrollLeft > 0;

        if (
            (e.deltaY > 0 && canScrollRight) ||
            (e.deltaY < 0 && canScrollLeft)
        ) {
            e.preventDefault();
            milestoneTrack.scrollLeft += e.deltaY;
        }

    }, { passive: false });

});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const milestoneTrack = document.querySelector(".milestone-track");

    if (!milestoneTrack) return;

    const observer = new IntersectionObserver((entries) => {

        entries.forEach((entry) => {

            if (entry.isIntersecting) {
                milestoneTrack.classList.add("animate-line");
                observer.unobserve(milestoneTrack);
            }

        });

    }, {
        threshold: 0.35
    });

    observer.observe(milestoneTrack);

});
</script>

</body>
</html>
