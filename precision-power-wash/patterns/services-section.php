<?php
/**
 * Title: Services Section
 * Slug: ppw/services-section
 * Categories: ppw-sections
 * Description: Six-service grid with icons, titles, and descriptions.
 */
?>
<!-- wp:group {"className":"ppw-services","anchor":"services","style":{"color":{"background":"#050d1a"},"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|24"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ppw-services" id="services" style="background-color:#050d1a">

  <!-- Section Header -->
  <!-- wp:group {"className":"ppw-section-header","layout":{"type":"constrained","contentSize":"48rem"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|16"}}}} -->
  <div class="wp-block-group ppw-section-header" style="margin-bottom:4rem">
    <!-- wp:paragraph {"className":"ppw-label","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.14em","fontWeight":"700","textTransform":"uppercase"},"color":{"text":"#00b4d8"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
    <p class="ppw-label" style="color:#00b4d8;font-size:0.7rem;letter-spacing:0.14em;font-weight:700;text-transform:uppercase;margin-bottom:1rem">What We Do</p>
    <!-- /wp:paragraph -->
    <!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"800","letterSpacing":"-0.03em"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"0","bottom":"1rem"}}}} -->
    <h2 style="color:#ffffff;font-weight:800;letter-spacing:-0.03em;margin-top:0;margin-bottom:1rem">Every Surface. Every Job.<br>Done Right.</h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.7"},"color":{"text":"#a0b0c8"}}} -->
    <p style="color:#a0b0c8;font-size:1.1rem;line-height:1.7">From residential driveways to large commercial fleets, our mobile units deploy where you need us — with professional-grade equipment and eco-friendly detergents.</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->

  <!-- Services Grid -->
  <!-- wp:columns {"className":"ppw-services__grid","isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
  <div class="wp-block-columns ppw-services__grid">

    <!-- Service Card 1 -->
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"className":"ppw-service-card","style":{"color":{"background":"#0a1628"},"border":{"color":"rgba(0,180,216,0.12)","width":"1px","radius":"0.75rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}}} -->
      <div class="wp-block-group ppw-service-card" style="background-color:#0a1628;border:1px solid rgba(0,180,216,0.12);border-radius:0.75rem;padding:2rem 1.75rem">
        <!-- wp:html --><div class="ppw-service-icon" data-service="residential"><svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><polyline points="9 22 9 12 15 12 15 22" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><!-- /wp:html -->
        <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"1.25rem","bottom":"0.5rem"}}}} --><h3 style="color:#ffffff;font-size:1.125rem;font-weight:700;margin-top:1.25rem;margin-bottom:0.5rem">Residential Driveways</h3><!-- /wp:heading -->
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.6"},"color":{"text":"#a0b0c8"}}} --><p style="color:#a0b0c8;font-size:0.9rem;line-height:1.6">Concrete, pavers, stamped concrete — we remove oil stains, mold, algae, and years of built-up grime without damaging your surfaces.</p><!-- /wp:paragraph -->
        <!-- wp:paragraph {"className":"ppw-service-detail","style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.06em","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#00b4d8"},"spacing":{"margin":{"top":"1.25rem"}}}} --><p class="ppw-service-detail" style="color:#00b4d8;font-size:0.75rem;letter-spacing:0.06em;font-weight:600;text-transform:uppercase;margin-top:1.25rem">Residential · Starts at $149</p><!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- Service Card 2 -->
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"className":"ppw-service-card","style":{"color":{"background":"#0a1628"},"border":{"color":"rgba(0,180,216,0.12)","width":"1px","radius":"0.75rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}}} -->
      <div class="wp-block-group ppw-service-card" style="background-color:#0a1628;border:1px solid rgba(0,180,216,0.12);border-radius:0.75rem;padding:2rem 1.75rem">
        <!-- wp:html --><div class="ppw-service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none"><rect x="1" y="3" width="22" height="13" rx="2" stroke="#00b4d8" stroke-width="1.5"/><path d="M5 20h14M8 16v4m8-4v4" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round"/></svg></div><!-- /wp:html -->
        <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"1.25rem","bottom":"0.5rem"}}}} --><h3 style="color:#ffffff;font-size:1.125rem;font-weight:700;margin-top:1.25rem;margin-bottom:0.5rem">Commercial Properties</h3><!-- /wp:heading -->
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.6"},"color":{"text":"#a0b0c8"}}} --><p style="color:#a0b0c8;font-size:0.9rem;line-height:1.6">Parking lots, loading docks, storefronts, and exterior facades. We schedule around your business hours to minimize disruption.</p><!-- /wp:paragraph -->
        <!-- wp:paragraph {"className":"ppw-service-detail","style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.06em","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#00b4d8"},"spacing":{"margin":{"top":"1.25rem"}}}} --><p class="ppw-service-detail" style="color:#00b4d8;font-size:0.75rem;letter-spacing:0.06em;font-weight:600;text-transform:uppercase;margin-top:1.25rem">Commercial · Custom Quote</p><!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- Service Card 3 -->
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"className":"ppw-service-card","style":{"color":{"background":"#0a1628"},"border":{"color":"rgba(0,180,216,0.12)","width":"1px","radius":"0.75rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}}} -->
      <div class="wp-block-group ppw-service-card" style="background-color:#0a1628;border:1px solid rgba(0,180,216,0.12);border-radius:0.75rem;padding:2rem 1.75rem">
        <!-- wp:html --><div class="ppw-service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M1 3h15v13H1zM16 8l5 3-5 3V8z" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 21h6M8 17v4" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><!-- /wp:html -->
        <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"1.25rem","bottom":"0.5rem"}}}} --><h3 style="color:#ffffff;font-size:1.125rem;font-weight:700;margin-top:1.25rem;margin-bottom:0.5rem">Fleet & Equipment</h3><!-- /wp:heading -->
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.6"},"color":{"text":"#a0b0c8"}}} --><p style="color:#a0b0c8;font-size:0.9rem;line-height:1.6">Trucks, trailers, heavy machinery, and construction equipment. On-site fleet washing keeps your vehicles clean, compliant, and professional.</p><!-- /wp:paragraph -->
        <!-- wp:paragraph {"className":"ppw-service-detail","style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.06em","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#00b4d8"},"spacing":{"margin":{"top":"1.25rem"}}}} --><p class="ppw-service-detail" style="color:#00b4d8;font-size:0.75rem;letter-spacing:0.06em;font-weight:600;text-transform:uppercase;margin-top:1.25rem">Fleet · Per-Unit Pricing</p><!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

  <!-- Row 2 -->
  <!-- wp:columns {"className":"ppw-services__grid","isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"},"margin":{"top":"1.5rem"}}}} -->
  <div class="wp-block-columns ppw-services__grid" style="margin-top:1.5rem">

    <!-- Service Card 4 -->
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"className":"ppw-service-card","style":{"color":{"background":"#0a1628"},"border":{"color":"rgba(0,180,216,0.12)","width":"1px","radius":"0.75rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}}} -->
      <div class="wp-block-group ppw-service-card" style="background-color:#0a1628;border:1px solid rgba(0,180,216,0.12);border-radius:0.75rem;padding:2rem 1.75rem">
        <!-- wp:html --><div class="ppw-service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M3 21l18-18M9 3H3v6l12 12 6-6L9 3z" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><!-- /wp:html -->
        <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"1.25rem","bottom":"0.5rem"}}}} --><h3 style="color:#ffffff;font-size:1.125rem;font-weight:700;margin-top:1.25rem;margin-bottom:0.5rem">Building Exteriors</h3><!-- /wp:heading -->
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.6"},"color":{"text":"#a0b0c8"}}} --><p style="color:#a0b0c8;font-size:0.9rem;line-height:1.6">Brick, stucco, vinyl siding, and EIFS. Soft-wash and pressure-wash options to safely remove biological growth without surface damage.</p><!-- /wp:paragraph -->
        <!-- wp:paragraph {"className":"ppw-service-detail","style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.06em","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#00b4d8"},"spacing":{"margin":{"top":"1.25rem"}}}} --><p class="ppw-service-detail" style="color:#00b4d8;font-size:0.75rem;letter-spacing:0.06em;font-weight:600;text-transform:uppercase;margin-top:1.25rem">Exterior · Starts at $299</p><!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- Service Card 5 -->
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"className":"ppw-service-card ppw-service-card--featured","style":{"color":{"background":"#0d1f35"},"border":{"color":"rgba(0,180,216,0.35)","width":"1px","radius":"0.75rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}}} -->
      <div class="wp-block-group ppw-service-card ppw-service-card--featured" style="background-color:#0d1f35;border:1px solid rgba(0,180,216,0.35);border-radius:0.75rem;padding:2rem 1.75rem">
        <!-- wp:html --><div class="ppw-service-badge">Most Popular</div><div class="ppw-service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><!-- /wp:html -->
        <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"1.25rem","bottom":"0.5rem"}}}} --><h3 style="color:#ffffff;font-size:1.125rem;font-weight:700;margin-top:1.25rem;margin-bottom:0.5rem">Roof Soft Wash</h3><!-- /wp:heading -->
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.6"},"color":{"text":"#a0b0c8"}}} --><p style="color:#a0b0c8;font-size:0.9rem;line-height:1.6">Low-pressure bio-wash treatment kills moss, lichen, and black algae at the root — extending roof life and restoring curb appeal without voiding warranties.</p><!-- /wp:paragraph -->
        <!-- wp:paragraph {"className":"ppw-service-detail","style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.06em","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#00b4d8"},"spacing":{"margin":{"top":"1.25rem"}}}} --><p class="ppw-service-detail" style="color:#00b4d8;font-size:0.75rem;letter-spacing:0.06em;font-weight:600;text-transform:uppercase;margin-top:1.25rem">Roofing · Starts at $399</p><!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- Service Card 6 -->
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"className":"ppw-service-card","style":{"color":{"background":"#0a1628"},"border":{"color":"rgba(0,180,216,0.12)","width":"1px","radius":"0.75rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"}}}} -->
      <div class="wp-block-group ppw-service-card" style="background-color:#0a1628;border:1px solid rgba(0,180,216,0.12);border-radius:0.75rem;padding:2rem 1.75rem">
        <!-- wp:html --><div class="ppw-service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><!-- /wp:html -->
        <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"1.25rem","bottom":"0.5rem"}}}} --><h3 style="color:#ffffff;font-size:1.125rem;font-weight:700;margin-top:1.25rem;margin-bottom:0.5rem">Graffiti Removal</h3><!-- /wp:heading -->
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.6"},"color":{"text":"#a0b0c8"}}} --><p style="color:#a0b0c8;font-size:0.9rem;line-height:1.6">Rapid-response graffiti removal on masonry, metal, glass, and painted surfaces. We match the right chemistry to the substrate for clean results.</p><!-- /wp:paragraph -->
        <!-- wp:paragraph {"className":"ppw-service-detail","style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.06em","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#00b4d8"},"spacing":{"margin":{"top":"1.25rem"}}}} --><p class="ppw-service-detail" style="color:#00b4d8;font-size:0.75rem;letter-spacing:0.06em;font-weight:600;text-transform:uppercase;margin-top:1.25rem">Emergency · 24hr Response</p><!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

</div>
<!-- /wp:group -->
