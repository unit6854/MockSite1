<?php
/**
 * Title: Hero Section — WebGL Water Effect
 * Slug: ppw/hero-section
 * Categories: ppw-sections
 * Block Types: core/group
 * Description: Full-screen hero with Three.js WebGL interactive water cleaning effect.
 */
?>
<!-- wp:html -->
<div class="wp-block-group ppw-hero" id="hero">

  <div id="ppw-webgl-container" aria-hidden="true">
    <canvas id="ppw-webgl-canvas"></canvas>
    <div class="ppw-hero__scan-lines" aria-hidden="true"></div>
  </div>

  <div class="wp-block-group ppw-hero__content">

    <h1 class="ppw-hero__headline" style="color:#ffffff;font-weight:800;line-height:1.0;letter-spacing:-0.04em;margin-top:1rem;margin-bottom:0">
      Industrial<br><span class="ppw-text-cyan">Pressure.</span><br>Proven Results.
    </h1>

    <p class="ppw-hero__sub" style="color:#a0b0c8;font-size:1.2rem;line-height:1.6;margin-top:1rem;margin-bottom:0">
      Mobile power washing for driveways, fleets, commercial buildings,<br class="ppw-br-desktop"> and industrial equipment. We come to you.
    </p>

    <div class="wp-block-buttons ppw-hero__ctas" style="display:flex;flex-wrap:wrap;gap:1rem;margin-top:1.5rem">
      <div class="wp-block-button ppw-btn-primary">
        <a class="wp-block-button__link wp-element-button" href="#quote">Get a Free Quote</a>
      </div>
      <div class="wp-block-button ppw-btn-outline is-style-outline">
        <a class="wp-block-button__link wp-element-button" href="#services">View Services</a>
      </div>
    </div>

    <div class="ppw-hero__scroll-hint" aria-hidden="true">
      <div class="ppw-scroll-line"></div>
      <span>Scroll to explore</span>
    </div>

    <div class="ppw-hero__cursor-hint" id="ppwCursorHint" aria-hidden="true">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="9" stroke="#00b4d8" stroke-width="1.5" stroke-dasharray="4 2"/></svg>
      <span>Move cursor to pressure-wash the surface</span>
    </div>

  </div>
</div>
<!-- /wp:html -->
