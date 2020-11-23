<?php

/* Load admin scripts and styles */
add_action( 'admin_enqueue_scripts', 'gridlove_load_admin_scripts' );


/**
 * Load scripts and styles in admin
 *
 * It just wrapps two other separate functions for loading css and js files in admin
 *
 * @return void
 * @since  1.0
 */

function gridlove_load_admin_scripts() {
	gridlove_load_admin_css();
	gridlove_load_admin_js();
}


/**
 * Load admin css files
 *
 * @return void
 * @since  1.0
 */

function gridlove_load_admin_css() {

	global $pagenow, $typenow;


	//Load color picker for categories
	if ( in_array( $pagenow, array( 'edit-tags.php', 'term.php' ) ) && isset( $_GET['taxonomy'] ) && $_GET['taxonomy'] == 'category' ) {
		wp_enqueue_style( 'wp-color-picker' );
	}

	if ( $typenow == 'page' && ( $pagenow == 'post.php' || $pagenow == 'post-new.php' ) ) {
		wp_enqueue_style ( 'wp-jquery-ui-dialog' );
	}

	//Load small admin style tweaks
	wp_enqueue_style( 'gridlove-admin', get_parent_theme_file_uri( '/assets/css/admin/global.css' ), false, GRIDLOVE_THEME_VERSION, 'screen, print' );
}


/**
 * Load admin js files
 *
 * @return void
 * @since  1.0
 */

function gridlove_load_admin_js() {

	global $pagenow, $typenow;

	//Load global js
	wp_enqueue_script( 'gridlove-global', get_parent_theme_file_uri( '/assets/js/admin/global.js' ) , array( 'jquery' ), GRIDLOVE_THEME_VERSION );

	//Load post & page js
	if ( $pagenow == 'post.php' || $pagenow == 'post-new.php' ) {
		if ( $typenow == 'post' ) {
			wp_enqueue_script( 'gridlove-post', get_parent_theme_file_uri( '/assets/js/admin/metaboxes-post.js' ), array( 'jquery' ), GRIDLOVE_THEME_VERSION );
		} elseif ( $typenow == 'page' ) {
			wp_enqueue_script( 'gridlove-page', get_parent_theme_file_uri( '/assets/js/admin/metaboxes-page.js' ), array( 'jquery', 'jquery-ui-dialog', 'jquery-ui-sortable', 'jquery-ui-autocomplete' ), GRIDLOVE_THEME_VERSION );
			wp_localize_script( 'gridlove-page', 'gridlove_js_settings', gridlove_get_admin_js_settings() );

		}
	}

	if ( in_array( $pagenow, array( 'edit-tags.php', 'term.php' ) ) && isset( $_GET['taxonomy'] ) && $_GET['taxonomy'] == 'category' ) {
		wp_enqueue_media();
		wp_enqueue_script( 'gridlove-category', get_parent_theme_file_uri( '/assets/js/admin/metaboxes-category.js' ), array( 'jquery', 'wp-color-picker' ), GRIDLOVE_THEME_VERSION );
	}

}


/**
 * Load editor styles
 *
 * @since  1.0
 */

function gridlove_load_editor_styles() {

	if ( $fonts_link = gridlove_generate_fonts_link() ) {
		add_editor_style( $fonts_link );
	}

	add_editor_style( get_parent_theme_file_uri( '/assets/css/admin/editor-style.css' ) );

}

/**
 * Load dynamic editor styles
 *
 * @since  1.0
 */

add_action( 'enqueue_block_editor_assets', 'gridlove_block_editor_styles', 99 );

function gridlove_block_editor_styles() {

	wp_register_style( 'gridlove-editor-styles', false, GRIDLOVE_THEME_VERSION );

	wp_enqueue_style( 'gridlove-editor-styles' );
	wp_add_inline_style( 'gridlove-editor-styles', gridlove_generate_dynamic_editor_css() );

}

?>
