<?php
/**
 * Activates ACF lite mode and adds custom fields.
 */

if ( ! function_exists( 'themewich_custom_fields_light' ) ) :
	function themewich_custom_fields_light() {
		global $tw_options;

		// If the edit theme options is set to true, don't do light mode
		if ( isset( $tw_options['edit_custom_fields'] ) && $tw_options['edit_custom_fields'] == '1' ) {
			return false;
		}

		// Enable ACF Lite Mode
		define( 'ACF_LITE', true );

		// uncomment to use static custom fields array instead of json loading
		//include( get_template_directory() . '/functions/custom-fields.php' ); // Custom Fields
	}

	add_action( 'after_setup_theme', 'themewich_custom_fields_light' );
endif;

/**
 * Changes json save directory if child theme is activated
 * 
 * @since 1.02
 */
if ( ! function_exists( 'tw_child_theme_save_json' ) ) :
	function tw_child_theme_save_json() {
		return get_stylesheet_directory() . '/acf-json';
	}
	add_filter( 'acf/settings/save_json', 'tw_child_theme_save_json' );
endif;

/**
 * Changes json load directory if child theme is activated
 * 
 * @since 1.02
 */
if ( ! function_exists( 'tw_child_theme_load_json' ) ) :
	function tw_child_theme_load_json( $paths ) {
		$paths = array( get_template_directory() . '/acf-json' );

		if( is_child_theme() ) {
			$paths[] = get_stylesheet_directory() . '/acf-json';
		}

		return $paths;
	}
	add_filter( 'acf/settings/load_json', 'tw_child_theme_load_json' );
endif;