// Progress & Milestones ScrollTrigger Logic
(function() {
    'use strict';

    // Wait for DOM to be ready
    function init() {
        // Check if elements exist
        var steps = document.querySelectorAll('.progress-step');
        var slides = document.querySelectorAll('.progress-media-slide');

        // If no steps, exit
        if (steps.length === 0) {
            console.log('No progress steps found — skipping animation');
            return;
        }

        console.log('Found ' + steps.length + ' steps and ' + slides.length + ' slides');

        // Check if GSAP is loaded
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
            console.warn('GSAP or ScrollTrigger not loaded — using fallback');
            // Use simple intersection observer fallback
            useFallback(steps, slides);
            return;
        }

        try {
            // Register ScrollTrigger plugin
            gsap.registerPlugin(ScrollTrigger);

            // Activate first step and slide by default
            if (steps.length > 0) {
                steps[0].classList.add('active');
            }
            if (slides.length > 0) {
                slides[0].classList.add('active');
            }

            // Create ScrollTriggers for each step
            steps.forEach(function(step, index) {
                var slide = slides[index] || (slides.length > 0 ? slides[0] : null);

                var trigger = ScrollTrigger.create({
                    trigger: step,
                    start: 'top center',
                    end: 'bottom center',
                    onEnter: function() {
                        updateActive(index, steps, slides);
                    },
                    onEnterBack: function() {
                        updateActive(index, steps, slides);
                    }
                });
            });

            // Refresh ScrollTrigger after setup
            setTimeout(function() {
                ScrollTrigger.refresh();
            }, 100);

            console.log('ScrollTrigger initialized successfully');

        } catch (e) {
            console.warn('Error initializing ScrollTrigger:', e);
            useFallback(steps, slides);
        }
    }

    // Update active state
    function updateActive(index, steps, slides) {
        // Update text steps
        steps.forEach(function(s) {
            s.classList.remove('active');
        });
        if (steps[index]) {
            steps[index].classList.add('active');
        }

        // Update media slides
        slides.forEach(function(s) {
            s.classList.remove('active');
        });
        if (slides[index]) {
            slides[index].classList.add('active');
        } else if (slides.length > 0) {
            slides[0].classList.add('active');
        }
    }

    // Fallback using Intersection Observer
    function useFallback(steps, slides) {
        console.log('Using Intersection Observer fallback');

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var step = entry.target;
                    var index = Array.from(steps).indexOf(step);
                    updateActive(index, steps, slides);
                }
            });
        }, {
            threshold: 0.4
        });

        steps.forEach(function(step) {
            observer.observe(step);
        });

        // Activate first by default
        if (steps.length > 0) {
            steps[0].classList.add('active');
        }
        if (slides.length > 0) {
            slides[0].classList.add('active');
        }
    }

    // Run when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        // DOM already loaded
        init();
    }

    // Also run when window loads (in case GSAP loads after DOM)
    window.addEventListener('load', function() {
        // If GSAP is now available but wasn't before, reinit
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            // Check if ScrollTrigger was already initialized
            var steps = document.querySelectorAll('.progress-step');
            if (steps.length > 0 && !steps[0].classList.contains('active')) {
                // Re-run init
                init();
            }
        }
    });

})();