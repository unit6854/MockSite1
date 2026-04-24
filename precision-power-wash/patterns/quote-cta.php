<?php
/**
 * Title: Quote CTA — Request a Quote Form
 * Slug: ppw/quote-cta
 * Categories: ppw-sections
 * Description: Full-width quote request section with AJAX form.
 */
?>
<!-- wp:html -->
<div class="wp-block-group ppw-quote" id="quote" style="background-color:#0a1628">
  <div class="wp-block-columns" style="align-items:center">

    <!-- Left: Messaging Column -->
    <div class="wp-block-column" style="flex-basis:42%">

      <p class="ppw-label" style="color:#00b4d8;font-size:0.7rem;letter-spacing:0.14em;font-weight:700;text-transform:uppercase;margin-bottom:1.75rem">Get a Free Quote</p>
      <h2 style="color:#ffffff;font-weight:800;letter-spacing:-0.03em;margin:0 0 1.5rem">Let's Clean It Up.<br>No Obligation.</h2>
      <p style="color:#a0b0c8;font-size:0.95rem;line-height:1.7;margin-bottom:2rem">Tell us what you need cleaned, and we'll get back to you within 24 hours with a firm, no-surprise price. No pressure. No hidden fees.</p>

      <!-- Office Location -->
      <div style="display:flex;align-items:center;gap:1rem;margin-bottom:2.5rem">
        <div class="ppw-contact-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
        <div>
          <p style="color:#4a5568;font-size:0.7rem;letter-spacing:0.06em;font-weight:600;text-transform:uppercase;margin:0 0 0.1rem">Office Location</p>
          <p style="color:#e8f0fe;font-size:0.95rem;font-weight:600;line-height:1.5;margin:0">2847 Commerce Drive, Suite 104<br>Dallas, TX 75247</p>
        </div>
      </div>

      <!-- Contact Info -->
      <div style="display:flex;flex-direction:column;gap:1.25rem;margin-top:2.5rem">

        <div style="display:flex;align-items:center;gap:1rem">
          <div class="ppw-contact-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <div>
            <p style="color:#4a5568;font-size:0.7rem;letter-spacing:0.06em;font-weight:600;text-transform:uppercase;margin:0 0 0.1rem">Call Anytime</p>
            <p style="color:#ffffff;font-size:1.1rem;font-weight:700;margin:0"><a href="tel:+15551234567" style="color:inherit;text-decoration:none">(555) 123-4567</a></p>
          </div>
        </div>

        <div style="display:flex;align-items:center;gap:1rem">
          <div class="ppw-contact-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke="#00b4d8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <div>
            <p style="color:#4a5568;font-size:0.7rem;letter-spacing:0.06em;font-weight:600;text-transform:uppercase;margin:0 0 0.1rem">Email Us</p>
            <p style="color:#00b4d8;font-size:1rem;font-weight:600;margin:0"><a href="mailto:info@precisionpowerwash.com" style="color:inherit;text-decoration:none">info@precisionpowerwash.com</a></p>
          </div>
        </div>

      </div>
    </div>

    <!-- Right: Form Column -->
    <div class="wp-block-column" style="flex-basis:58%">
      <form class="ppw-quote-form" id="ppwQuoteForm" novalidate>
        <input type="hidden" name="action" value="ppw_submit_quote">
        <input type="hidden" name="nonce" id="ppwNonce">

        <div class="ppw-form-row ppw-form-row--2col">
          <div class="ppw-form-group">
            <label for="ppwName">Your Name <span aria-hidden="true">*</span></label>
            <input type="text" id="ppwName" name="name" placeholder="John Smith" required autocomplete="name">
          </div>
          <div class="ppw-form-group">
            <label for="ppwPhone">Phone Number</label>
            <input type="tel" id="ppwPhone" name="phone" placeholder="(555) 000-0000" autocomplete="tel">
          </div>
        </div>

        <div class="ppw-form-group">
          <label for="ppwEmail">Email Address <span aria-hidden="true">*</span></label>
          <input type="email" id="ppwEmail" name="email" placeholder="you@example.com" required autocomplete="email">
        </div>

        <div class="ppw-form-group">
          <label for="ppwService">Service Needed</label>
          <select id="ppwService" name="service">
            <option value="">— Select a Service —</option>
            <option value="residential-driveway">Residential Driveway</option>
            <option value="commercial-property">Commercial Property</option>
            <option value="fleet-equipment">Fleet &amp; Equipment</option>
            <option value="building-exterior">Building Exterior</option>
            <option value="roof-softwash">Roof Soft Wash</option>
            <option value="graffiti-removal">Graffiti Removal</option>
            <option value="other">Other / Not Sure</option>
          </select>
        </div>

        <div class="ppw-form-group">
          <label for="ppwMessage">Tell Us About Your Project</label>
          <textarea id="ppwMessage" name="message" rows="4" placeholder="Describe the surface, approximate square footage, and any specific concerns…"></textarea>
        </div>

        <div class="ppw-form-footer">
          <button type="submit" class="ppw-form-submit">
            <span class="ppw-form-submit__text">Send My Quote Request</span>
            <span class="ppw-form-submit__loading" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2.5" stroke-dasharray="31.416" stroke-dashoffset="10"/></svg>
            </span>
          </button>
          <p class="ppw-form-note">We respond within 24 hours · No obligation · No spam</p>
        </div>

        <div class="ppw-form-success" id="ppwFormSuccess" aria-live="polite" hidden>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#00b4d8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span id="ppwFormSuccessMsg"></span>
        </div>
        <div class="ppw-form-error" id="ppwFormError" aria-live="polite" hidden>
          <span id="ppwFormErrorMsg"></span>
        </div>
      </form>
    </div>

  </div>
</div>
<!-- /wp:html -->
