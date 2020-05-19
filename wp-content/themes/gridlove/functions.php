<?php

/* Define Theme Vars */
define( 'GRIDLOVE_THEME_VERSION', '1.9.5' );

/* Define content width */
if ( !isset( $content_width ) ) {
	$content_width = 770;
}


/* Localization */
load_theme_textdomain( 'gridlove', get_parent_theme_file_path( '/languages' ) );


/* After theme setup main hook */
add_action( 'after_setup_theme', 'gridlove_theme_setup' );

/**
 * After Theme Setup
 *
 * Callback for after_theme_setup hook
 *
 * @return void
 * @since  1.0
 */

function gridlove_theme_setup() {

	/* Add thumbnails support */
	add_theme_support( 'post-thumbnails' );

	/* Add theme support for title tag */
	add_theme_support( 'title-tag' );


	/* Add image sizes */
	$image_sizes = gridlove_get_image_sizes();
	if ( !empty( $image_sizes ) ) {
		foreach ( $image_sizes as $id => $size ) {
			add_image_size( $id, $size['w'], $size['h'], $size['crop'] );
		}
	}

	/* Add post formats support */
	add_theme_support( 'post-formats', array( 'audio', 'gallery', 'video' ) );

	/* Support for HTML5 */
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	/* Automatic Feed Links */
	add_theme_support( 'automatic-feed-links' );

	/* Declare WooCommerce support */
	add_theme_support( 'woocommerce' );

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );


	/* Load editor styles */
	add_theme_support( 'editor-styles' );

	/* Load editor styles */
	if ( is_admin() ) {
		gridlove_load_editor_styles();
	}

	/* Support for alignwide elements */
	add_theme_support( 'align-wide' );

	/* Support for responsive embeds */
	add_theme_support( 'responsive-embeds' );

	/* Support for predefined colors in editor */
	add_theme_support( 'editor-color-palette', gridlove_get_editor_colors() );

	/* Support for predefined font-sizes in editor */
	add_theme_support( 'editor-font-sizes', gridlove_get_editor_font_sizes() );

	wp_enqueue_style( 'custom-hth', get_template_directory_uri() . '/assets/css/custom-hth.css');

}

/* Helpers and utility functions */
include_once get_parent_theme_file_path( '/core/helpers.php' );

/* Default options */
include_once get_parent_theme_file_path( '/core/default-options.php' );

/* Load frontend scripts */
include_once get_parent_theme_file_path( '/core/enqueue.php' );

/* Module-specific functions */
include_once get_parent_theme_file_path( '/core/modules.php' );

/* Template functions */
include_once get_parent_theme_file_path( '/core/template-functions.php' );

/* Menus */
include_once get_parent_theme_file_path( '/core/menus.php' );

/* Sidebars */
include_once get_parent_theme_file_path( '/core/sidebars.php' );

/* Extensions (hooks and filters to add/modify specific features ) */
include_once get_parent_theme_file_path( '/core/extensions.php' );


if ( is_admin() ) {

	/* Admin helpers and utility functions  */
	include_once get_parent_theme_file_path( '/core/admin/helpers.php' );

	/* Load admin scripts */
	include_once get_parent_theme_file_path( '/core/admin/enqueue.php' );

	/* Theme Options */
	include_once get_parent_theme_file_path( '/core/admin/options.php' );

	/* Include plugins - TGM */
	include_once get_parent_theme_file_path( '/core/admin/plugins.php' );

	/* Include AJAX action handlers */
	include_once get_parent_theme_file_path( '/core/admin/ajax.php' );

	/* Extensions ( hooks and filters to add/modify specific features ) */
	include_once get_parent_theme_file_path( '/core/admin/extensions.php' );

	/* Custom metaboxes */
	include_once get_parent_theme_file_path( '/core/admin/metaboxes.php' );

	/* Demo importer panel */
	include_once get_parent_theme_file_path( '/core/admin/demo-importer.php' );

}


?>
