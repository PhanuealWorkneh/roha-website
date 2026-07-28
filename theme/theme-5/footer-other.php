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
