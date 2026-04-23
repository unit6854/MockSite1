<?php
/**
 * Precision Power Wash — Theme Functions
 */

defined( 'ABSPATH' ) || exit;

define( 'PPW_VERSION',   '1.0.0' );
define( 'PPW_DIR',       get_template_directory() );
define( 'PPW_URI',       get_template_directory_uri() );
define( 'PPW_ASSETS',    PPW_URI . '/assets' );

require_once PPW_DIR . '/inc/theme-setup.php';
require_once PPW_DIR . '/inc/block-patterns.php';
require_once PPW_DIR . '/inc/acf-fields.php';

// ─── Assets ─────────────────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {

    // Google Fonts — Inter (hero) + IBM Plex Sans (body)
    wp_enqueue_style(
        'ppw-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@700;800&family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap',
        [],
        null
    );

    // Core theme stylesheet
    wp_enqueue_style(
        'ppw-theme',
        PPW_ASSETS . '/css/theme.css',
        [ 'ppw-google-fonts' ],
        PPW_VERSION
    );

    // Three.js — local copy for reliability in local dev environments
    wp_enqueue_script(
        'three-js',
        PPW_ASSETS . '/js/three.min.js',
        [],
        'r128',
        true
    );

    // WebGL water effect
    wp_enqueue_script(
        'ppw-water-effect',
        PPW_ASSETS . '/js/water-effect.js',
        [ 'three-js' ],
        PPW_VERSION,
        true
    );

    // General theme interactions
    wp_enqueue_script(
        'ppw-theme',
        PPW_ASSETS . '/js/theme.js',
        [],
        PPW_VERSION,
        true
    );

    // Pass data to JS
    wp_localize_script( 'ppw-theme', 'ppwData', [
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'ppw_nonce' ),
        'homeUrl' => home_url( '/' ),
    ] );
} );

// ─── Quote Form AJAX ─────────────────────────────────────────────────────────

add_action( 'wp_ajax_ppw_submit_quote',        'ppw_handle_quote_submission' );
add_action( 'wp_ajax_nopriv_ppw_submit_quote', 'ppw_handle_quote_submission' );

function ppw_handle_quote_submission() {
    check_ajax_referer( 'ppw_nonce', 'nonce' );

    $name    = sanitize_text_field( $_POST['name']    ?? '' );
    $email   = sanitize_email(      $_POST['email']   ?? '' );
    $phone   = sanitize_text_field( $_POST['phone']   ?? '' );
    $service = sanitize_text_field( $_POST['service'] ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( ! $name || ! $email || ! is_email( $email ) ) {
        wp_send_json_error( [ 'message' => 'Please fill in all required fields.' ] );
    }

    $admin_email = get_option( 'admin_email' );
    $subject     = "New Quote Request from {$name}";
    $body        = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nService: {$service}\n\nMessage:\n{$message}";
    $headers     = [
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: {$name} <{$email}>",
    ];

    $sent = wp_mail( $admin_email, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( [ 'message' => "Thank you, {$name}! We'll be in touch within 24 hours." ] );
    } else {
        wp_send_json_error( [ 'message' => 'Something went wrong. Please call us directly.' ] );
    }
}
