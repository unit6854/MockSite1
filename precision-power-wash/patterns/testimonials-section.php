<?php
/**
 * Title: Testimonials Slider
 * Slug: ppw/testimonials-section
 * Categories: ppw-sections
 * Description: Client testimonials with a CSS/JS slider and star ratings.
 */
$star = '<svg width="16" height="16" viewBox="0 0 20 20" fill="#00b4d8"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>';
$five_stars = str_repeat( $star, 5 );
?>
<!-- wp:html -->
<div class="wp-block-group ppw-testimonials" id="testimonials" style="background-color:#0a1628">

  <div class="wp-block-group" style="margin-bottom:4rem">
    <p class="ppw-label" style="color:#00b4d8;font-size:0.7rem;letter-spacing:0.14em;font-weight:700;text-transform:uppercase;margin-bottom:1rem">Client Testimonials</p>
    <h2 style="color:#ffffff;font-weight:800;letter-spacing:-0.03em;margin:0 0 1rem">What Our Clients Are Saying</h2>
    <p style="color:#a0b0c8;font-size:1rem;line-height:1.6">Real words from real customers. We don't pay for reviews — we earn them.</p>
  </div>

  <div class="ppw-testi-slider" id="ppwTestiSlider">
    <div class="ppw-testi-track">

      <div class="ppw-testi-slide">
        <div class="ppw-testi-card">
          <div class="ppw-testi-stars"><?php echo $five_stars; ?></div>
          <blockquote class="ppw-testi-quote">"Honestly the best power washing service I've ever used. They showed up on time with a massive rig, and my driveway went from black to like-new in about 90 minutes. The crew was professional and didn't leave a mess. Booked them again already for the back patio."</blockquote>
          <div class="ppw-testi-author">
            <div class="ppw-testi-avatar" data-initials="MR"></div>
            <div class="ppw-testi-info">
              <strong>Marcus R.</strong>
              <span>Homeowner · Westfield, OH</span>
            </div>
          </div>
        </div>
      </div>

      <div class="ppw-testi-slide">
        <div class="ppw-testi-card">
          <div class="ppw-testi-stars"><?php echo $five_stars; ?></div>
          <blockquote class="ppw-testi-quote">"We manage a 40-truck fleet and needed a reliable on-site washing partner. Precision Power Wash has been showing up every two weeks without fail for 18 months. Their team works around our dispatch schedule. DOT compliance has never been a problem since we hired them."</blockquote>
          <div class="ppw-testi-author">
            <div class="ppw-testi-avatar" data-initials="ST"></div>
            <div class="ppw-testi-info">
              <strong>Sandra T.</strong>
              <span>Fleet Manager · Apex Logistics</span>
            </div>
          </div>
        </div>
      </div>

      <div class="ppw-testi-slide">
        <div class="ppw-testi-card">
          <div class="ppw-testi-stars"><?php echo $five_stars; ?></div>
          <blockquote class="ppw-testi-quote">"Called them for an emergency graffiti removal on our storefront — they were on-site within 4 hours and had it completely gone before we opened the next morning. Incredible response time. The brick looks better than it did before the vandalism, honestly."</blockquote>
          <div class="ppw-testi-author">
            <div class="ppw-testi-avatar" data-initials="JK"></div>
            <div class="ppw-testi-info">
              <strong>James K.</strong>
              <span>Owner · Keller's Hardware</span>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="ppw-testi-controls">
      <button class="ppw-testi-btn ppw-testi-prev" aria-label="Previous testimonial">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      <div class="ppw-testi-dots">
        <button class="ppw-testi-dot ppw-testi-dot--active" data-index="0" aria-label="Testimonial 1"></button>
        <button class="ppw-testi-dot" data-index="1" aria-label="Testimonial 2"></button>
        <button class="ppw-testi-dot" data-index="2" aria-label="Testimonial 3"></button>
      </div>
      <button class="ppw-testi-btn ppw-testi-next" aria-label="Next testimonial">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
    </div>
  </div>

</div>
<!-- /wp:html -->
