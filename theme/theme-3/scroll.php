<!-- GSAP -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js"></script>

<style>
  .story-scroll {
    position: relative;
    height: 100vh;
    background: #000;
    overflow: hidden;
  }

  .story-pin {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    isolation: isolate;
  }

  .story-video {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform: scale(1.08);
    z-index: 1;
  }

  .story-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    background:
      linear-gradient(
        90deg,
        rgba(0,0,0,0.28) 0%,
        rgba(0,0,0,0.14) 35%,
        rgba(0,0,0,0.30) 100%
      );
  }

  .story-top {
    position: absolute;
    top: 124px;
    left: 24px;
    right: 24px;
    z-index: 5;
  }

  .story-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 16px;
    border-radius: 14px;
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: #fff;
  }

  .story-label .dot {
    width: 10px;
    height: 10px;
    border-radius: 2px;
    background: #b7ef63;
    display: inline-block;
  }

  .story-progress {
    margin-top: 44px;
    height: 1px;
    background: rgba(255,255,255,0.25);
    overflow: hidden;
  }

  .story-progress-bar {
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.95);
    transform-origin: left center;
    transform: scaleX(0);
  }

  .story-counter {
    position: absolute;
    top: 230px;
    left: 56px;
    z-index: 5;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 18px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.22);
    background: rgba(255,255,255,0.04);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 600;
    color: rgba(255,255,255,0.92);
  }

  .story-stage {
    position: relative;
    z-index: 4;
    width: min(980px, 72vw);
    height: 100%;
    margin-left: auto;
    margin-right: 7%;
    display: flex;
    align-items: center;
  }

  .story-panel {
    position: absolute;
    width: 100%;
    opacity: 0;
  }

  .story-copy {
    margin: 0;
    max-width: 33ch;
    font-family: 'Poppins', sans-serif;
    font-size: clamp(2rem, 5vw, 3.5rem);
    line-height: 0.98;
    font-weight: 300;
    letter-spacing: -0.04em;
    color: rgba(255,255,255,0.96);
    text-align: left;
  /* text-justify: inter-word;
  hyphens: auto; */
  }

  .story-char {
    display: inline-block;
    opacity: 0;
    transform: translateY(18px);
    white-space: pre;
  }

  .next-section {
    min-height: 100vh;
    padding: 100px 40px;
    background: #f3f3ef;
    color: #102a2a;
  }

  @media (max-width: 991px) {
    .story-top {
      top: 18px;
      left: 18px;
      right: 18px;
    }

    .story-counter {
      top: 100px;
      left: 38px;
      font-size: 15px;
      padding: 10px 16px;
    }

    .story-stage {
      width: calc(100% - 40px);
      margin: 0 auto;
    }

    .story-copy {
      max-width: 100%;
      font-size: clamp(2rem, 5vw, 3.5rem);
      line-height: 1.03;
    }
  }
</style>

<section class="story-scroll" id="storyScroll">
  
  <div class="story-pin">
    <video class="story-video" autoplay muted loop playsinline preload="auto">
      <source src="assets/electric-fusion-gradient-background-2026-01-28-05-23-45-utc.mp4" type="video/mp4">
    </video>

    <div class="story-overlay"></div>

    <div class="story-top">
     <div class="container">  
      <div class="story-label">
        <span class="dot"></span>
        <span>About Roha</span>
      </div>

      <div class="story-progress">
        <div class="story-progress-bar" id="storyProgressBar"></div>
      </div>
</div>
    </div>

    <div class="story-counter">
      <span id="currentStep">01</span>
      <span>/</span>
      <span>03</span>
    </div>

    <div class="story-stage">
      <div class="container"> 
      <div class="story-panel panel-1">
        <p class="story-copy" data-text="Roha Medical Campus is an integrated health campus under development in the heart of Addis Ababa, Ethiopia."></p>
      </div>

      <div class="story-panel panel-2">
        <p class="story-copy" data-text="When complete, it will provide world-class, high-quality, affordable healthcare across extensive medical facilities."></p>
      </div>

      <div class="story-panel panel-3">
        <p class="story-copy" data-text="The campus will also include a medical school, research and innovation spaces, and a lush, sustainable public setting."></p>
      </div>
      </div>
    </div>
  </div>
  
</section>

<!-- <section class="next-section">
  <h2>Next Section</h2>
  <p>Your content continues here.</p>
</section> -->

<script>
  gsap.registerPlugin(ScrollTrigger);

  function splitChars() {
    document.querySelectorAll(".story-copy").forEach(copy => {
      const text = copy.dataset.text || "";
      copy.innerHTML = "";

      [...text].forEach(char => {
        const span = document.createElement("span");
        span.className = "story-char";
        span.textContent = char;
        copy.appendChild(span);
      });
    });
  }

  splitChars();

  const panels = gsap.utils.toArray(".story-panel");
  const progressBar = document.getElementById("storyProgressBar");
  const currentStep = document.getElementById("currentStep");
  const video = document.querySelector(".story-video");

  gsap.set(panels, { autoAlpha: 0, y: 30 });
  gsap.set(panels[0], { autoAlpha: 1, y: 0 });

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: "#storyScroll",
      start: "top top",
      end: "+=3000",
      scrub: 1,
      pin: true,
      anticipatePin: 1,
      onUpdate: self => {
        gsap.set(progressBar, { scaleX: self.progress });

        const step = Math.min(3, Math.max(1, Math.floor(self.progress * 3) + 1));
        currentStep.textContent = String(step).padStart(2, "0");

        gsap.set(video, {
          scale: 1.08,
          y: self.progress * 30
        });
      }
    }
  });

  function panelIn(panelSelector) {
    const chars = document.querySelectorAll(`${panelSelector} .story-char`);

    return gsap.timeline()
      .to(panelSelector, {
        autoAlpha: 1,
        y: 0,
        duration: 0.5,
        ease: "power2.out"
      }, 0)
      .to(chars, {
        autoAlpha: 1,
        y: 0,
        stagger: 0.015,
        duration: 0.25,
        ease: "power2.out"
      }, 0.05);
  }

  function panelOut(panelSelector) {
    return gsap.timeline()
      .to(panelSelector, {
        autoAlpha: 0,
        y: -20,
        duration: 0.45,
        ease: "power2.inOut"
      }, 0);
  }

  tl.add(panelIn(".panel-1"))
    .to({}, { duration: 0.8 })
    .add(panelOut(".panel-1"))

    .add(panelIn(".panel-2"))
    .to({}, { duration: 0.8 })
    .add(panelOut(".panel-2"))

    .add(panelIn(".panel-3"))
    .to({}, { duration: 1.0 });
</script>