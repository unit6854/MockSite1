<?php
/**
 * Title: About Section
 * Slug: ppw/about-section
 * Categories: ppw-sections
 * Description: Two-column about section with image placeholder and key differentiators.
 */
?>
<!-- wp:group {"className":"ppw-about","anchor":"about","style":{"color":{"background":"#050d1a"},"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|24"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ppw-about" id="about" style="background-color:#050d1a">

  <!-- wp:columns {"isStackedOnMobile":true,"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"5rem"}}}} -->
  <div class="wp-block-columns" style="align-items:center">

    <!-- Image Column -->
    <!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"right":"0"}}}} -->
    <div class="wp-block-column" style="flex-basis:50%">
      <!-- wp:html -->
      <div class="ppw-about__visual">
        <img class="ppw-about__img"
             src="<?php echo get_template_directory_uri(); ?>/assets/images/guy-working.webp"
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
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- Content Column -->
    <!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="flex-basis:50%">

      <!-- wp:paragraph {"className":"ppw-label","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.14em","fontWeight":"700","textTransform":"uppercase"},"color":{"text":"#00b4d8"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
      <p class="ppw-label" style="color:#00b4d8;font-size:0.7rem;letter-spacing:0.14em;font-weight:700;text-transform:uppercase;margin-bottom:1rem">About Precision Power Wash</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"800","letterSpacing":"-0.03em"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"0","bottom":"1.25rem"}}}} -->
      <h2 style="color:#ffffff;font-weight:800;letter-spacing:-0.03em;margin:0 0 1.25rem">Built on Precision.<br>Driven by Results.</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.75"},"color":{"text":"#a0b0c8"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
      <p style="color:#a0b0c8;font-size:1rem;line-height:1.75;margin-bottom:1.5rem">Founded in 2012 by a team of industrial cleaning veterans, Precision Power Wash operates a fleet of mobile pressure washing units equipped with commercial-grade hot and cold water systems, reclaim systems for eco-compliant wastewater management, and surface-specific chemical metering.</p>
      <!-- /wp:paragraph -->

      <!-- Differentiators -->
      <!-- wp:group {"className":"ppw-about__points","layout":{"type":"flex","orientation":"vertical","rowGap":"1rem"}} -->
      <div class="wp-block-group ppw-about__points">

        <!-- wp:group {"className":"ppw-about__point","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"flex-start","columnGap":"1rem"}} -->
        <div class="wp-block-group ppw-about__point">
          <!-- wp:html --><div class="ppw-about__check"><svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#00b4d8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><!-- /wp:html -->
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.55"},"color":{"text":"#e8f0fe"}}} --><p style="color:#e8f0fe;font-size:0.95rem;line-height:1.55"><strong>Hot & Cold Water Systems</strong> — Our mobile units carry both, letting us choose the right treatment for every surface type and soil level.</p><!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"ppw-about__point","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"flex-start","columnGap":"1rem"}} -->
        <div class="wp-block-group ppw-about__point">
          <!-- wp:html --><div class="ppw-about__check"><svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#00b4d8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><!-- /wp:html -->
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.55"},"color":{"text":"#e8f0fe"}}} --><p style="color:#e8f0fe;font-size:0.95rem;line-height:1.55"><strong>Eco-Compliant Wastewater Reclaim</strong> — We capture and properly dispose of runoff on every job site, keeping your property compliant with local environmental regulations.</p><!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"ppw-about__point","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"flex-start","columnGap":"1rem"}} -->
        <div class="wp-block-group ppw-about__point">
          <!-- wp:html --><div class="ppw-about__check"><svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="#00b4d8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><!-- /wp:html -->
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.55"},"color":{"text":"#e8f0fe"}}} --><p style="color:#e8f0fe;font-size:0.95rem;line-height:1.55"><strong>Surface-Specific Protocols</strong> — Concrete, brick, wood, vinyl, metal, asphalt — each has a dedicated pressure, temperature, and chemical profile.</p><!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

      </div>
      <!-- /wp:group -->

      <!-- CTA -->
      <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
      <div class="wp-block-buttons" style="margin-top:2rem">
        <!-- wp:button {"style":{"color":{"background":"#00b4d8","text":"#050d1a"},"typography":{"fontWeight":"700","fontSize":"0.8rem","letterSpacing":"0.04em","textTransform":"uppercase"},"border":{"radius":"0.375rem"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#quote">Request a Quote</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->

    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

</div>
<!-- /wp:group -->
