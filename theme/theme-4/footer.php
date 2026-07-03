<!-- Footer -->
<footer>
  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; max-width: 1400px; margin: 0 auto;">
    <div>
      <h3 style="color: white; font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; margin-bottom: 0.7rem;">Roha Medical Campus</h3>
      <p style="font-size: 0.8rem;">An integrated health campus under development in the heart of Addis Ababa, Ethiopia — delivering world-class healthcare to all Africans.</p>
      <div style="margin-top: 1.2rem; font-size: 0.78rem;">
        <div>379 Cape Verde Street, A4 Building, 6th Floor</div>
        <div>Addis Ababa, Ethiopia</div>
        <div style="margin-top: 0.5rem;"><a href="tel:+251116393910" style="color: inherit; text-decoration: none;">+251 1163 93 910</a></div>
        <div><a href="mailto:info@rohamedicalcampus.com" style="color: inherit; text-decoration: none;">info@rohamedicalcampus.com</a></div>
      </div>
    </div>
    <div>
      <h4 style="color: var(--gold); font-size: 0.7rem; letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 1rem;">Explore</h4>
      <ul style="list-style: none;">
        <li><a href="#mission" style="color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.83rem;">About RMC</a></li>
        <li><a href="#building" style="color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.83rem;">The Campus</a></li>
        <li><a href="#esg" style="color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.83rem;">ESG Policy</a></li>
        <li><a href="#milestones" style="color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.83rem;">Milestones</a></li>
      </ul>
    </div>
    <div>
      <h4 style="color: var(--gold); font-size: 0.7rem; letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 1rem;">Resources</h4>
      <ul style="list-style: none;">
        <li><a href="#" style="color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.83rem;">News & Updates</a></li>
        <li><a href="#" style="color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.83rem;">Press Releases</a></li>
        <li><a href="#" style="color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.83rem;">Partners</a></li>
        <li><a href="#" style="color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.83rem;">ESG Documents</a></li>
      </ul>
    </div>
    <div>
      <h4 style="color: var(--gold); font-size: 0.7rem; letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 1rem;">Legal</h4>
      <ul style="list-style: none;">
        <li><a href="#" style="color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.83rem;">Privacy Policy</a></li>
        <li><a href="#" style="color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.83rem;">Site Map</a></li>
      </ul>
    </div>
  </div>
  <div style="border-top: 1px solid rgba(255,255,255,0.08); margin-top: 3rem; padding-top: 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
    <p style="font-size: 0.75rem;">© 2025 Roha Medical Campus. All rights reserved.</p>
    <div style="display: flex; gap: 1.2rem;">
      <a href="#" style="color: rgba(255,255,255,0.4); text-decoration: none; font-size: 0.72rem;">Twitter</a>
      <a href="#" style="color: rgba(255,255,255,0.4); text-decoration: none; font-size: 0.72rem;">Instagram</a>
      <a href="#" style="color: rgba(255,255,255,0.4); text-decoration: none; font-size: 0.72rem;">Facebook</a>
      <a href="#" style="color: rgba(255,255,255,0.4); text-decoration: none; font-size: 0.72rem;">LinkedIn</a>
    </div>
  </div>
</footer>

<script>
// Fade-up animation observer
const fadeEls = document.querySelectorAll('.fade-up');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
}, { threshold: 0.12 });
fadeEls.forEach(el => observer.observe(el));

// Smooth anchor scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const targetHash = this.getAttribute('href');
        if(targetHash === "#" || targetHash === "javascript:void(0)") return;
        const target = document.querySelector(targetHash);
        if(target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});
</script>
</body>
</html>