<?php
namespace Elementor\Core\Schemes;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor color scheme.
 *
 * Elementor color scheme class is responsible for initializing a scheme for
 * colors.
 *
 * @since 1.0.0
<<<<<<< HEAD
 * @deprecated 3.0.0 Use `Global_Colors` instead.
=======
 * @deprecated 3.15.0 Use Global_Colors instead
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
 */
class Color {

	/**
	 * 1st color scheme.
<<<<<<< HEAD
	 * @deprecated 3.0.0 Use `Global_Colors::COLOR_PRIMARY` instead.
=======
	 * @deprecated 3.15.0 Use Global_Colors::COLOR_PRIMARY instead
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
	 */
	const COLOR_1 = '1';

	/**
	 * 2nd color scheme.
<<<<<<< HEAD
	 * @deprecated 3.0.0 Use `Global_Colors::COLOR_SECONDARY` instead.
=======
	 * @deprecated 3.15.0 Use Global_Colors::COLOR_SECONDARY instead
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
	 */
	const COLOR_2 = '2';

	/**
	 * 3rd color scheme.
<<<<<<< HEAD
	 * @deprecated 3.0.0 Use `Global_Colors::COLOR_TEXT` instead.
=======
	 * @deprecated 3.15.0 Use Global_Colors::COLOR_TEXT instead
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
	 */
	const COLOR_3 = '3';

	/**
	 * 4th color scheme.
<<<<<<< HEAD
	 * @deprecated 3.0.0 Use `Global_Colors::COLOR_ACCENT` instead.
=======
	 * @deprecated 3.15.0 Use Global_Colors::COLOR_ACCENT instead
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
	 */
	const COLOR_4 = '4';

	/**
	 * Get color scheme type.
	 *
	 * Retrieve the color scheme type.
	 *
	 * @since 1.0.0
	 * @access public
	 * @static
<<<<<<< HEAD
	 * @deprecated 3.0.0
=======
	 * @deprecated 3.15.0
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
	 *
	 * @return string Color scheme type.
	 */
	public static function get_type() {
		return 'color';
	}

	/**
	 * Get color scheme title.
	 *
	 * Retrieve the color scheme title.
	 *
	 * @since 1.0.0
	 * @access public
<<<<<<< HEAD
	 * @deprecated 3.0.0
=======
	 * @deprecated 3.15.0
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
	 *
	 * @return string Color scheme title.
	 */
	public function get_title() {
		return '';
	}

	/**
	 * Get color scheme disabled title.
	 *
	 * Retrieve the color scheme disabled title.
	 *
	 * @since 1.0.0
	 * @access public
<<<<<<< HEAD
	 * @deprecated 3.0.0
=======
	 * @deprecated 3.15.0
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
	 *
	 * @return string Color scheme disabled title.
	 */
	public function get_disabled_title() {
		return '';
	}

	/**
	 * Get color scheme titles.
	 *
	 * Retrieve the color scheme titles.
	 *
	 * @since 1.0.0
	 * @access public
<<<<<<< HEAD
	 * @deprecated 3.0.0
=======
	 * @deprecated 3.15.0
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
	 *
	 * @return array Color scheme titles.
	 */
	public function get_scheme_titles() {
		return [];
	}

	/**
	 * Get default color scheme.
	 *
	 * Retrieve the default color scheme.
	 *
	 * @since 1.0.0
	 * @access public
<<<<<<< HEAD
	 * @deprecated 3.0.0
=======
	 * @deprecated 3.15.0
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
	 *
	 * @return array Default color scheme.
	 */
	public function get_default_scheme() {
		return [];
	}

	/**
	 * Print color scheme content template.
	 *
	 * Used to generate the HTML in the editor using Underscore JS template. The
	 * variables for the class are available using `data` JS object.
	 *
	 * @since 1.0.0
	 * @access public
<<<<<<< HEAD
	 * @deprecated 3.0.0
=======
	 * @deprecated 3.15.0
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b
	 */
	public function print_template_content() {}
}
