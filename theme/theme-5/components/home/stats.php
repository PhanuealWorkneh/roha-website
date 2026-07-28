<!-- ========== STATS BAR ========== -->
<div class="stats-bar" style="padding: 80px 0px 80px;">
  
  <div class="stat-item fade-up">
    <span class="stat-number">300</span>
    <span class="stat-label">Hospital Beds</span>
  </div>

  <div class="stat-item fade-up fade-up-delay-1">
    <span class="stat-number">5</span>
    <span class="stat-label">Centers of Excellence</span>
  </div>

  <div class="stat-item fade-up fade-up-delay-2">
    <span class="stat-number">$110M</span>
    <span class="stat-label">Investment in Healthcare</span>
  </div>

</div>


<script>
  document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-number");

  function animateCounter(counter) {
    const target = Number(counter.dataset.target);

    if (Number.isNaN(target)) {
      console.warn("Invalid counter target:", counter);
      return;
    }

    const prefix = counter.dataset.prefix || "";
    const suffix = counter.dataset.suffix || "";
    const duration = 1800;
    const startTime = performance.now();

    function updateCounter(currentTime) {
      const elapsedTime = currentTime - startTime;
      const progress = Math.min(elapsedTime / duration, 1);

      // Ease-out cubic animation
      const easedProgress = 1 - Math.pow(1 - progress, 3);
      const currentValue = Math.floor(easedProgress * target);

      counter.textContent = `${prefix}${currentValue.toLocaleString()}${suffix}`;

      if (progress < 1) {
        requestAnimationFrame(updateCounter);
      } else {
        counter.textContent = `${prefix}${target.toLocaleString()}${suffix}`;
      }
    }

    requestAnimationFrame(updateCounter);
  }

  if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      (entries, observerInstance) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            observerInstance.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.2
      }
    );

    counters.forEach((counter) => observer.observe(counter));
  } else {
    // Fallback for older browsers
    counters.forEach(animateCounter);
  }
});
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