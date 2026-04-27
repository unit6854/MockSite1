/**
 * Precision Power Wash — Theme Interactions
 * Header scroll state · Testimonial slider · Stat counter animation
 * · Smooth scroll · Quote form AJAX
 */

(function () {
  'use strict';

  // ─── Header Scroll Behavior ──────────────────────────────────────────────
  (function initHeader() {
    const header = document.querySelector('.ppw-header');
    if (!header) return;

    let lastY = 0;
    let ticking = false;

    function updateHeader() {
      const y = window.scrollY;
      header.classList.toggle('ppw-header--scrolled', y > 40);
      header.classList.toggle('ppw-header--hidden', y > lastY + 5 && y > 300);
      if (y < lastY || y < 100) header.classList.remove('ppw-header--hidden');
      lastY = y;
      ticking = false;
    }

    window.addEventListener('scroll', () => {
      if (!ticking) {
        requestAnimationFrame(updateHeader);
        ticking = true;
      }
    }, { passive: true });
  })();

  // ─── Smooth Scroll for anchor links ──────────────────────────────────────
  (function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
      link.addEventListener('click', function (e) {
        const id     = this.getAttribute('href').slice(1);
        const target = id ? document.getElementById(id) : null;
        if (!target) return;
        e.preventDefault();
        const headerH = document.querySelector('.ppw-header')?.offsetHeight ?? 80;
        window.scrollTo({
          top: target.getBoundingClientRect().top + window.scrollY - headerH,
          behavior: 'smooth',
        });
      });
    });
  })();

  // ─── Testimonials Slider ─────────────────────────────────────────────────
  (function initTestiSlider() {
    const slider = document.getElementById('ppwTestiSlider');
    if (!slider) return;

    const track  = slider.querySelector('.ppw-testi-track');
    const slides = slider.querySelectorAll('.ppw-testi-slide');
    const dots   = slider.querySelectorAll('.ppw-testi-dot');
    const prev   = slider.querySelector('.ppw-testi-prev');
    const next   = slider.querySelector('.ppw-testi-next');

    let current = 0;
    let autoTimer = null;

    function goTo(idx) {
      current = (idx + slides.length) % slides.length;
      track.style.transform = 'translateX(-' + (current * 100) + '%)';
      dots.forEach(function (d, i) {
        d.classList.toggle('ppw-testi-dot--active', i === current);
      });
    }

    function startAuto() {
      autoTimer = setInterval(function () { goTo(current + 1); }, 6000);
    }

    function stopAuto() { clearInterval(autoTimer); }

    prev && prev.addEventListener('click', function () { stopAuto(); goTo(current - 1); startAuto(); });
    next && next.addEventListener('click', function () { stopAuto(); goTo(current + 1); startAuto(); });
    dots.forEach(function (dot) {
      dot.addEventListener('click', function () {
        stopAuto();
        goTo(parseInt(this.dataset.index, 10));
        startAuto();
      });
    });

    // Touch swipe
    let touchStartX = 0;
    slider.addEventListener('touchstart', function (e) { touchStartX = e.touches[0].clientX; }, { passive: true });
    slider.addEventListener('touchend', function (e) {
      const diff = touchStartX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 50) { stopAuto(); goTo(current + (diff > 0 ? 1 : -1)); startAuto(); }
    });

    startAuto();
  })();

  // ─── Stat Counter Animation ───────────────────────────────────────────────
  (function initStatCounters() {
    const stats = document.querySelectorAll('.ppw-stat-number[data-count]');
    if (!stats.length) return;

    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        observer.unobserve(entry.target);
        const el     = entry.target;
        const target = parseInt(el.dataset.count, 10);
        const suffix = el.textContent.replace(/[\d,]/g, '').trim();
        const dur    = 1800;
        const start  = performance.now();

        function step(now) {
          const pct = Math.min((now - start) / dur, 1);
          const ease = 1 - Math.pow(1 - pct, 3); // easeOutCubic
          const val  = Math.round(ease * target);
          el.textContent = val.toLocaleString() + (suffix ? suffix : '');
          if (pct < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
      });
    }, { threshold: 0.4 });

    stats.forEach(function (s) { observer.observe(s); });
  })();

  // ─── Scroll-triggered fade-in ─────────────────────────────────────────────
  (function initScrollReveal() {
    const els = document.querySelectorAll(
      '.ppw-service-card, .ppw-gallery-item, .ppw-testi-card, .ppw-stat-col, .ppw-about__point'
    );
    if (!els.length) return;

    const obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add('ppw-revealed');
          obs.unobserve(e.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    els.forEach(function (el) {
      el.classList.add('ppw-reveal');
      obs.observe(el);
    });
  })();

  // ─── Quote Form AJAX ──────────────────────────────────────────────────────
  (function initQuoteForm() {
    const form = document.getElementById('ppwQuoteForm');
    if (!form) return;

    // Inject nonce from WP
    const nonceEl = document.getElementById('ppwNonce');
    if (nonceEl && typeof ppwData !== 'undefined') {
      nonceEl.value = ppwData.nonce;
    }

    const submitBtn    = form.querySelector('.ppw-form-submit');
    const successPanel = document.getElementById('ppwFormSuccess');
    const errorPanel   = document.getElementById('ppwFormError');
    const successMsg   = document.getElementById('ppwFormSuccessMsg');
    const errorMsg     = document.getElementById('ppwFormErrorMsg');

    function setLoading(on) {
      submitBtn.classList.toggle('ppw-form-submit--loading', on);
      submitBtn.disabled = on;
    }

    function showSuccess(msg) {
      successMsg.textContent = msg;
      successPanel.hidden = false;
      errorPanel.hidden   = true;
      form.reset();
    }

    function showError(msg) {
      errorMsg.textContent = msg;
      errorPanel.hidden   = false;
      successPanel.hidden = true;
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      if (!form.checkValidity()) {
        form.querySelectorAll(':invalid')[0]?.focus();
        return;
      }

      setLoading(true);

      const data = new FormData(form);

      // Fallback: if WP AJAX not available (static mockup), simulate success
      if (typeof ppwData === 'undefined') {
        setTimeout(function () {
          setLoading(false);
          showSuccess('Thank you! We\'ll be in touch within 24 hours.');
        }, 1200);
        return;
      }

      fetch(ppwData.ajaxUrl, {
        method: 'POST',
        credentials: 'same-origin',
        body: data,
      })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          setLoading(false);
          if (res.success) {
            showSuccess(res.data.message);
          } else {
            showError(res.data.message || 'Something went wrong. Please call us directly.');
          }
        })
        .catch(function () {
          setLoading(false);
          showError('Network error. Please call us at (555) 123-4567.');
        });
    });
  })();

  // ─── Left Scroll Progress Bar ────────────────────────────────────────────
  (function initScrollBar() {
    const bar = document.createElement('div');
    bar.id = 'ppw-scrollbar';
    const fill = document.createElement('div');
    fill.id = 'ppw-scrollbar__fill';
    bar.appendChild(fill);
    document.body.appendChild(bar);

    function update() {
      const docH = document.documentElement.scrollHeight - window.innerHeight;
      const pct  = docH > 0 ? (window.scrollY / docH) * 100 : 0;
      fill.style.height = Math.min(pct, 100) + '%';
    }

    window.addEventListener('scroll', update, { passive: true });
    update();
  })();

  // ─── Trust Bar Marquee ───────────────────────────────────────────────────
  (function initTrustMarquee() {
    const bar = document.querySelector('.ppw-trust-bar > .wp-block-group');
    if (!bar) return;

    const track = document.createElement('div');
    track.className = 'ppw-trust-bar__track';

    // Clone items into track twice for seamless loop
    const clone1 = bar.cloneNode(true);
    const clone2 = bar.cloneNode(true);
    clone1.style.cssText = 'display:flex;align-items:center;gap:3rem;flex-shrink:0;padding:0;flex-wrap:nowrap;';
    clone2.style.cssText = clone1.style.cssText;
    track.appendChild(clone1);
    track.appendChild(clone2);

    bar.parentNode.replaceChild(track, bar);
  })();

  // ─── Service card hover tilt ──────────────────────────────────────────────
  (function initCardTilt() {
    if (window.matchMedia('(hover: none)').matches) return;
    document.querySelectorAll('.ppw-service-card').forEach(function (card) {
      card.addEventListener('mousemove', function (e) {
        const r   = card.getBoundingClientRect();
        const x   = (e.clientX - r.left) / r.width  - 0.5;
        const y   = (e.clientY - r.top)  / r.height - 0.5;
        card.style.transform = 'perspective(600px) rotateY(' + (x * 8) + 'deg) rotateX(' + (-y * 6) + 'deg) translateY(-4px)';
      });
      card.addEventListener('mouseleave', function () {
        card.style.transform = '';
      });
    });
  })();

})();
