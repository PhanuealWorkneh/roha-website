<!-- ========== STATS BAR ========== -->
<div class="stats-bar" style="padding: 80px 0px 80px;">
  
  <div class="stat-item fade-up">
    <span class="stat-number">300+</span>
    <span class="stat-label">Hospital Beds</span>
  </div>

  <div class="stat-item fade-up fade-up-delay-1">
    <span class="stat-number">5</span>
    <span class="stat-label">Centers of Excellence<br>&amp; Many More Specialties</span>
  </div>

  <div class="stat-item fade-up fade-up-delay-2">
    <span class="stat-number">$110 million</span>
    <span class="stat-label">Investment in Healthcare</span>
  </div>

</div>


<script>
//   const counters = document.querySelectorAll(".stat-number");

// const animateCounter = (counter) => {
//   const target = +counter.dataset.target;
//   const prefix = counter.dataset.prefix || "";
//   const suffix = counter.dataset.suffix || "";

//   const duration = 1800;
//   const start = performance.now();

//   function update(now) {
//     const progress = Math.min((now - start) / duration, 1);

//     // Ease-out animation
//     const eased = 1 - Math.pow(1 - progress, 3);

//     const value = Math.floor(eased * target);

//     counter.textContent = `${prefix}${value}${suffix}`;

//     if (progress < 1) {
//       requestAnimationFrame(update);
//     } else {
//       counter.textContent = `${prefix}${target}${suffix}`;
//     }
//   }

//   requestAnimationFrame(update);
// };

// const observer = new IntersectionObserver((entries, obs) => {
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       animateCounter(entry.target);
//       obs.unobserve(entry.target); // Run only once
//     }
//   });
// }, {
//   threshold: 0.5
// });

// counters.forEach(counter => observer.observe(counter));
</script>