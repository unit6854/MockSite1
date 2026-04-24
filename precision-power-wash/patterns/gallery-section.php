<?php
/**
 * Title: Gallery — Before & After
 * Slug: ppw/gallery-section
 * Categories: ppw-sections
 * Description: Before/after photo gallery section.
 */
$base = esc_url( get_template_directory_uri() ) . '/assets/images/gallery';
?>
<!-- wp:html -->
<div class="wp-block-group ppw-gallery" id="gallery" style="background-color:#050d1a">

  <div class="wp-block-group" style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:flex-end;margin-bottom:3rem">
    <div>
      <p class="ppw-label" style="color:#00b4d8;font-size:0.7rem;letter-spacing:0.14em;font-weight:700;text-transform:uppercase">Our Work</p>
      <h2 style="color:#ffffff;font-weight:800;letter-spacing:-0.03em;margin:0">Results Speak Loudest</h2>
    </div>
    <div class="wp-block-buttons">
      <div class="wp-block-button ppw-btn-ghost is-style-outline">
        <a class="wp-block-button__link wp-element-button" href="#quote">Book Your Clean</a>
      </div>
    </div>
  </div>

  <div class="ppw-gallery__grid">

    <div class="ppw-gallery-item">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img" src="<?php echo $base; ?>/concrete.webp" alt="Concrete driveway pressure washing — before and after" loading="lazy" width="900" height="600">
        <div class="ppw-gallery-overlay"><span>View Project</span></div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Residential</span>
        <span class="ppw-gallery-item__title">Concrete Driveway</span>
      </div>
    </div>

    <div class="ppw-gallery-item ppw-gallery-item--tall">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img" src="<?php echo $base; ?>/projects.webp" alt="Power washing projects showcase" loading="lazy" width="900" height="1200">
        <div class="ppw-gallery-overlay"><span>View Project</span></div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Projects</span>
        <span class="ppw-gallery-item__title">Featured Projects</span>
      </div>
    </div>

    <div class="ppw-gallery-item">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img" src="<?php echo $base; ?>/roof.webp" alt="Residential roof soft wash — algae removal" loading="lazy" width="900" height="600">
        <div class="ppw-gallery-overlay"><span>View Project</span></div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Roof Wash</span>
        <span class="ppw-gallery-item__title">Shingle Algae Removal</span>
      </div>
    </div>

    <div class="ppw-gallery-item">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img" src="<?php echo $base; ?>/fleet.webp" alt="Fleet truck washing — commercial vehicle detailing" loading="lazy" width="900" height="600">
        <div class="ppw-gallery-overlay"><span>View Project</span></div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Fleet</span>
        <span class="ppw-gallery-item__title">Delivery Fleet Wash</span>
      </div>
    </div>

    <div class="ppw-gallery-item">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img" src="<?php echo $base; ?>/brick-store.webp" alt="Brick storefront exterior pressure washing" loading="lazy" width="900" height="600">
        <div class="ppw-gallery-overlay"><span>View Project</span></div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Exterior</span>
        <span class="ppw-gallery-item__title">Brick Storefront</span>
      </div>
    </div>

    <div class="ppw-gallery-item">
      <div class="ppw-gallery-item__img-wrap">
        <img class="ppw-gallery-item__img" src="<?php echo $base; ?>/patio.webp" alt="Paver patio pressure washing — stone revival" loading="lazy" width="900" height="600">
        <div class="ppw-gallery-overlay"><span>View Project</span></div>
      </div>
      <div class="ppw-gallery-item__meta">
        <span class="ppw-gallery-item__tag">Residential</span>
        <span class="ppw-gallery-item__title">Paver Patio Revival</span>
      </div>
    </div>

  </div>
</div>
<!-- /wp:html -->
