<?php
defined( 'ABSPATH' ) || exit;

add_action( 'init', function () {

    register_block_pattern_category( 'ppw-sections', [
        'label' => __( 'Precision Power Wash', 'precision-power-wash' ),
    ] );

    // Patterns are registered via PHP files in /patterns/
    // WordPress 6.4+ auto-registers patterns from that directory.
    // The category assignments live in each pattern's PHP header.
} );
