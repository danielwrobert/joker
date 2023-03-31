<?php
/**
 * Joker functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Joker
 * @since Joker 1.0.0
 */

if ( ! function_exists( 'joker_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since Block Canvas 1.0
	 *
	 * @return void
	 */
	function joker_styles() {
		// Register theme stylesheet.
		wp_register_style(
			'joker-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'joker-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'joker_styles' );
