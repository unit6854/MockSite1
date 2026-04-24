<?php
/**
 * Title: Gallery — Before & After
 * Slug: ppw/gallery-section
 * Categories: ppw-sections
 * Description: Before/after photo gallery section.
 */
$base = get_template_directory_uri() . '/assets/images/gallery';
?>
<!-- wp:group {"className":"ppw-gallery","anchor":"gallery","style":{"color":{"background":"#050d1a"},"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|24"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ppw-gallery" id="gallery" style="background-color:#050d1a">

  <!-- Section Header -->
  <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"flex-end"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|12"}}}} -->
  <div class="wp-block-group" style="margin-bottom:3rem">
    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","rowGap":"0.75rem"}} -->
    <div class="wp-block-group">
      <!-- wp:paragraph {"className":"ppw-label","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.14em","fontWeight":"700","textTransform":"uppercase"},"color":{"text":"#00b4d8"}}} -->
      <p class="ppw-label" style="color:#00b4d8;font-size:0.7rem;letter-spacing:0.14em;font-weight:700;text-transform:uppercase">Our Work</p>
      <!-- /wp:paragraph -->
      <!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"800","letterSpacing":"-0.03em"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
      <h2 style="color:#ffffff;font-weight:800;letter-spacing:-0.03em;margin:0">Results Speak Loudest</h2>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
    <!-- wp:buttons -->
    <div class="wp-block-buttons">
      <!-- wp:button {"className":"ppw-btn-ghost is-style-outline","style":{"color":{"text":"#00b4d8"},"border":{"color":"rgba(0,180,216,0.3)","width":"1px","radius":"0.375rem"},"typography":{"fontSize":"0.8rem","fontWeight":"600","letterSpacing":"0.04em","textTransform":"uppercase"},"spacing":{"padding":{"top":"0.65rem","bottom":"0.65rem","left":"1.5rem","right":"1.5rem"}}}} -->
      <div class="wp-block-button ppw-btn-ghost is-style-outline"><a class="wp-block-button__link wp-element-button" href="#quote">Book Your Clean</a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  </div>
  <!-- /wp:group -->

  <!-- Gallery Grid -->
  <!-- wp:html -->
  <div class="ppw-gallery__grid">

    <!-- Item 1 — Driveway -->
    <div class="ppw-gallery-item">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img"
             src="<?php echo $base; ?>/concrete.webp"
             alt="Concrete driveway pressure washing — before and after"
             loading="lazy" width="900" height="600">
        <div class="ppw-gallery-overlay">
          <span>View Project</span>
        </div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Residential</span>
        <span class="ppw-gallery-item__title">Concrete Driveway</span>
      </div>
    </div>

    <!-- Item 2 — Projects (tall) -->
    <div class="ppw-gallery-item ppw-gallery-item--tall">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img"
             src="<?php echo $base; ?>/projects.webp"
             alt="Power washing projects showcase"
             loading="lazy" width="900" height="1200">
        <div class="ppw-gallery-overlay">
          <span>View Project</span>
        </div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Projects</span>
        <span class="ppw-gallery-item__title">Featured Projects</span>
      </div>
    </div>

    <!-- Item 3 — Roof -->
    <div class="ppw-gallery-item">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img"
             src="<?php echo $base; ?>/roof.webp"
             alt="Residential roof soft wash — algae removal"
             loading="lazy" width="900" height="600">
        <div class="ppw-gallery-overlay">
          <span>View Project</span>
        </div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Roof Wash</span>
        <span class="ppw-gallery-item__title">Shingle Algae Removal</span>
      </div>
    </div>

    <!-- Item 4 — Fleet -->
    <div class="ppw-gallery-item">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img"
             src="<?php echo $base; ?>/fleet.webp"
             alt="Fleet truck washing — commercial vehicle detailing"
             loading="lazy" width="900" height="600">
        <div class="ppw-gallery-overlay">
          <span>View Project</span>
        </div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Fleet</span>
        <span class="ppw-gallery-item__title">Delivery Fleet Wash</span>
      </div>
    </div>

    <!-- Item 5 — Building -->
    <div class="ppw-gallery-item">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img"
             src="<?php echo $base; ?>/brick-store.webp"
             alt="Brick storefront exterior pressure washing"
             loading="lazy" width="900" height="600">
        <div class="ppw-gallery-overlay">
          <span>View Project</span>
        </div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Exterior</span>
        <span class="ppw-gallery-item__title">Brick Storefront</span>
      </div>
    </div>

    <!-- Item 6 — Patio -->
    <div class="ppw-gallery-item">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img"
             src="<?php echo $base; ?>/patio.webp"
             alt="Paver patio pressure washing — stone revival"
             loading="lazy" width="900" height="600">
        <div class="ppw-gallery-overlay">
          <span>View Project</span>
        </div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Residential</span>
        <span class="ppw-gallery-item__title">Paver Patio Revival</span>
      </div>
    </div>

  </div>
  <!-- /wp:html -->

</div>
<!-- /wp:group -->
