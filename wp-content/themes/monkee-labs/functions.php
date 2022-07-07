<?php

/**
 * Enqueue project styles.
 */

function monkee_register_styles() {
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'monkee-style', get_template_directory_uri() . "/style.css", array( 'monkee-reset', 'monkee-fonts', ), '1.0.1' );
	wp_enqueue_style( 'monkee-reset', get_template_directory_uri() . "/assets/css/reset.css", array(), $version );
	wp_enqueue_style( 'monkee-additional', get_template_directory_uri() . "/assets/css/additional.scss", array(), '1.0.2' );
	wp_enqueue_style( 'monkee-fonts', get_template_directory_uri() . "/assets/fonts/fonts.css", array(), $version );
	wp_enqueue_style( 'monkee-header', get_template_directory_uri() . "/assets/css/blocks/header.css", array(), $version );
	wp_enqueue_style( 'monkee-under-header', get_template_directory_uri() . "/assets/css/blocks/under-header.css", array(), $version );
	wp_enqueue_style( 'monkee-section-gut-content', get_template_directory_uri() . "/assets/css/blocks/section-gut-content.css", array(), $version );
	wp_enqueue_style( 'monkee-footer', get_template_directory_uri() . "/assets/css/blocks/footer.css", array(), '1.0.3' );

	if ( is_front_page() ) {
		wp_enqueue_style( 'monkee-front-page-contact-form', get_template_directory_uri() . "/assets/css/blocks/front-page-contact-form.css", array(), $version );
		wp_enqueue_style( 'monkee-faq-container', get_template_directory_uri() . "/assets/css/blocks/faq-container.css", array(), '1.0.1' );
	}

}

add_action( 'wp_enqueue_scripts', 'monkee_register_styles' );

/**
 * Enqueue project js files.
 */

function monkee_register_scripts() {
	$version = wp_get_theme()->get( 'Version' );

	if ( is_front_page() ) {
		wp_enqueue_script( 'monkee-accordion-js', get_template_directory_uri() . "/assets/js/accordion.js", array(), $version, true );
	}

}

add_action( 'wp_enqueue_scripts', 'monkee_register_scripts' );

/**
 * Gutenberg custom stylesheet
 */

add_theme_support( 'editor-styles' );
add_editor_style( 'assets/css/editor-style.css' );

/**
 * Create Options Page for Theme Settings.
 */

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' => 'Theme General Settings',
		'menu_title' => 'Theme Settings',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );

	acf_add_options_sub_page( array(
		'page_title'  => 'Theme Header Settings',
		'menu_title'  => 'Header',
		'parent_slug' => 'theme-general-settings',
	) );

	acf_add_options_sub_page( array(
		'page_title'  => 'Theme Footer Settings',
		'menu_title'  => 'Footer',
		'parent_slug' => 'theme-general-settings',
	) );

}

/**
 * Register New Custom Menu Locations.
 */

function monkee_header_menu() {
	register_nav_menus(
		array(
			'header-menu' => _( 'Header Menu' ),
			'footer-menu' => _( 'Footer Menu' )
		)
	);
}

add_action( 'init', 'monkee_header_menu' );

/**
 * Register a slider block.
 */

add_action( 'acf/init', 'monkee_register_blocks' );
function monkee_register_blocks() {

	// check function exists.
	if ( function_exists( 'acf_register_block_type' ) ) {

		// register a testimonial block.
		acf_register_block_type( array(
			'name'            => 'slider',
			'title'           => __( 'Monkee Labs Slider' ),
			'description'     => __( 'A custom slider block for MonkeeLabs Theme.' ),
			'render_template' => 'template-parts/slider.php',
			'category'        => 'formatting',
			'icon'            => 'images-alt2',
			'align'           => 'full',
			'enqueue_assets'  => function () {
				wp_enqueue_style( 'flickity-min-css', 'https://unpkg.com/flickity@2/dist/flickity.min.css', array(), '2.3.0' );
				wp_enqueue_style( 'monkee-slider', get_template_directory_uri() . '/assets/css/blocks/slider.css', array(), '1.0.0' );
				wp_enqueue_script( 'flickity-pkgd-min-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), '2.3.0', false );
			}
		) );
	}
}

