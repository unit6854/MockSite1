<?php
/**
 * Title: About Section
 * Slug: ppw/about-section
 * Categories: ppw-sections
 * Description: Two-column about section with image and key differentiators.
 */
$img_uri = esc_url( get_template_directory_uri() ) . '/assets/images/guy-working.webp';
?>
<!-- wp:html -->
<div class="wp-block-group ppw-about" id="about" style="background-color:#050d1a">
  <div class="wp-block-columns" style="align-items:center">

    <div class="wp-block-column" style="flex-basis:50%">
      <div class="ppw-about__visual">
        <img class="ppw-about__img"
             src="<?php echo $img_uri; ?>"
             alt="Precision Power Wash technician on the job"
             loading="lazy" width="800" height="1000">
        <div class="ppw-about__badge-card">
          <div class="ppw-about__badge-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <div>
            <strong>Fully Insured</strong>
            <span>$2M General Liability</span>
          </div>
        </div>
      </div>
    </div>

    <div class="wp-block-column" style="flex-basis:50%">
      <p class="ppw-label" style="color:#00b4d8;font-size:0.7rem;letter-spacing:0.14em;font-weight:700;text-transform:uppercase;margin-bottom:1rem">About Precision Power Wash</p>
      <h2 style="color:#ffffff;font-weight:800;letter-spacing:-0.03em;margin:0 0 1.25rem">Built on Precision.<br>Driven by Results.</h2>
      <p style="color:#a0b0c8;font-size:1rem;line-height:1.75;margin-bottom:1.5rem">Founded in 2012 by a team of industrial cleaning veterans, Precision Power Wash operates a fleet of mobile pressure washing units equipped with commercial-grade hot and cold water systems, reclaim systems for eco-compliant wastewater management, and surface-specific chemical metering.</p>

      <div class="wp-block-group ppw-about__points" style="display:flex;flex-direction:column;gap:1rem">

        <div class="wp-block-group ppw-about__point" style="display:flex;align-items:flex-start;gap:1rem">
          <div class="ppw-about__check"><svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#00b4d8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <p style="color:#e8f0fe;font-size:0.95rem;line-height:1.55;margin:0"><strong>Hot &amp; Cold Water Systems</strong> — Our mobile units carry both, letting us choose the right treatment for every surface type and soil level.</p>
        </div>

        <div class="wp-block-group ppw-about__point" style="display:flex;align-items:flex-start;gap:1rem">
          <div class="ppw-about__check"><svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#00b4d8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <p style="color:#e8f0fe;font-size:0.95rem;line-height:1.55;margin:0"><strong>Eco-Compliant Wastewater Reclaim</strong> — We capture and properly dispose of runoff on every job site, keeping your property compliant with local environmental regulations.</p>
        </div>

        <div class="wp-block-group ppw-about__point" style="display:flex;align-items:flex-start;gap:1rem">
          <div class="ppw-about__check"><svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#00b4d8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <p style="color:#e8f0fe;font-size:0.95rem;line-height:1.55;margin:0"><strong>Surface-Specific Protocols</strong> — Concrete, brick, wood, vinyl, metal, asphalt — each has a dedicated pressure, temperature, and chemical profile.</p>
        </div>

      </div>

      <div class="wp-block-buttons" style="margin-top:2rem">
        <div class="wp-block-button">
          <a class="wp-block-button__link wp-element-button" href="#quote">Request a Quote</a>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /wp:html -->
