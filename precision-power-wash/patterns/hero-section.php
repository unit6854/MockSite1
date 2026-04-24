<?php
/**
 * Title: Hero Section — WebGL Water Effect
 * Slug: ppw/hero-section
 * Categories: ppw-sections
 * Block Types: core/group
 * Description: Full-screen hero with Three.js WebGL interactive water cleaning effect.
 */
?>
<!-- wp:group {"className":"ppw-hero","anchor":"hero","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100svh"},"position":{"type":"relative"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ppw-hero" id="hero">

  <!-- WebGL Canvas (injected by water-effect.js) -->
  <!-- wp:html -->
  <div id="ppw-webgl-container" aria-hidden="true">
    <canvas id="ppw-webgl-canvas"></canvas>
    <div class="ppw-hero__scan-lines" aria-hidden="true"></div>
  </div>
  <!-- /wp:html -->

  <!-- Hero Content Overlay -->
  <!-- wp:group {"className":"ppw-hero__content","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|24"}}}} -->
  <div class="wp-block-group ppw-hero__content">

    <!-- Main Headline -->
    <!-- wp:heading {"level":1,"className":"ppw-hero__headline","style":{"typography":{"fontWeight":"800","lineHeight":"1.0","letterSpacing":"-0.04em"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"1.5rem","bottom":"0"}}}} -->
    <h1 class="ppw-hero__headline" style="color:#ffffff;font-weight:800;line-height:1.0;letter-spacing:-0.04em;margin-top:1.5rem;margin-bottom:0">Industrial<br><span class="ppw-text-cyan">Pressure.</span><br>Proven Results.</h1>
    <!-- /wp:heading -->

    <!-- Sub-headline -->
    <!-- wp:paragraph {"className":"ppw-hero__sub","style":{"typography":{"fontSize":"1.2rem","lineHeight":"1.6","fontWeight":"400"},"color":{"text":"#a0b0c8"},"spacing":{"margin":{"top":"1.75rem","bottom":"0"}}}} -->
    <p class="ppw-hero__sub" style="color:#a0b0c8;font-size:1.2rem;line-height:1.6;margin-top:1.75rem;margin-bottom:0">Mobile power washing for driveways, fleets, commercial buildings,<br class="ppw-br-desktop"> and industrial equipment. We come to you.</p>
    <!-- /wp:paragraph -->

    <!-- CTA Row -->
    <!-- wp:buttons {"className":"ppw-hero__ctas","style":{"spacing":{"margin":{"top":"2.5rem"},"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
    <div class="wp-block-buttons ppw-hero__ctas" style="margin-top:2.5rem">
      <!-- wp:button {"className":"ppw-btn-primary","style":{"color":{"background":"#00b4d8","text":"#050d1a"},"typography":{"fontWeight":"700","fontSize":"0.875rem","letterSpacing":"0.04em","textTransform":"uppercase"},"border":{"radius":"0.375rem"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2.25rem","right":"2.25rem"}}}} -->
      <div class="wp-block-button ppw-btn-primary"><a class="wp-block-button__link wp-element-button" href="#quote">Get a Free Quote</a></div>
      <!-- /wp:button -->
      <!-- wp:button {"className":"ppw-btn-outline","style":{"color":{"text":"#e8f0fe"},"border":{"color":"rgba(255,255,255,0.2)","width":"1px","radius":"0.375rem"},"typography":{"fontWeight":"600","fontSize":"0.875rem","letterSpacing":"0.04em","textTransform":"uppercase"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2.25rem","right":"2.25rem"}}}} -->
      <div class="wp-block-button ppw-btn-outline is-style-outline"><a class="wp-block-button__link wp-element-button" href="#services">View Services</a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

    <!-- Scroll Hint -->
    <!-- wp:html -->
    <div class="ppw-hero__scroll-hint" aria-hidden="true">
      <div class="ppw-scroll-line"></div>
      <span>Scroll to explore</span>
    </div>
    <!-- /wp:html -->

    <!-- Mouse Interaction Hint -->
    <!-- wp:html -->
    <div class="ppw-hero__cursor-hint" id="ppwCursorHint" aria-hidden="true">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="9" stroke="#00b4d8" stroke-width="1.5" stroke-dasharray="4 2"/></svg>
      <span>Move cursor to pressure-wash the surface</span>
    </div>
    <!-- /wp:html -->

  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->
