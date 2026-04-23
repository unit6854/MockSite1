<?php
/**
 * ACF field groups — registered in code so they're portable.
 * Safe to remove if ACF is not installed.
 */
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
    return;
}

acf_add_local_field_group( [
    'key'      => 'group_ppw_hero',
    'title'    => 'Hero Settings',
    'fields'   => [
        [
            'key'   => 'field_ppw_hero_tagline',
            'label' => 'Tagline',
            'name'  => 'ppw_hero_tagline',
            'type'  => 'text',
            'default_value' => 'Industrial Precision. Residential Results.',
        ],
        [
            'key'   => 'field_ppw_hero_badge',
            'label' => 'Trust Badge Text',
            'name'  => 'ppw_hero_badge',
            'type'  => 'text',
            'default_value' => 'Serving the Greater Metro Area',
        ],
    ],
    'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'templates/front-page.html' ] ] ],
] );

acf_add_local_field_group( [
    'key'   => 'group_ppw_testimonials',
    'title' => 'Testimonials',
    'fields' => [
        [
            'key'   => 'field_ppw_testimonials',
            'label' => 'Testimonials',
            'name'  => 'ppw_testimonials',
            'type'  => 'repeater',
            'sub_fields' => [
                [ 'key' => 'field_ppw_testi_quote',  'label' => 'Quote',       'name' => 'quote',       'type' => 'textarea' ],
                [ 'key' => 'field_ppw_testi_name',   'label' => 'Client Name', 'name' => 'client_name', 'type' => 'text' ],
                [ 'key' => 'field_ppw_testi_title',  'label' => 'Title / Co.', 'name' => 'client_title','type' => 'text' ],
                [ 'key' => 'field_ppw_testi_rating', 'label' => 'Rating (1-5)','name' => 'rating',      'type' => 'number', 'min' => 1, 'max' => 5, 'default_value' => 5 ],
            ],
        ],
    ],
    'location' => [ [ [ 'param' => 'options_page', 'operator' => '==', 'value' => 'ppw-options' ] ] ],
] );
