<?php
/**
 * Elementor Compatibility File.
 *
 * @package Political_Era
 */
namespace Elementor;


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// If plugin - 'Elementor' not exist then return.
if ( ! class_exists( '\Elementor\Plugin' ) || ! class_exists( 'ElementorPro\Modules\ThemeBuilder\Module' ) ) {
	return;
}
namespace ElementorPro\Modules\ThemeBuilder\ThemeSupport;
use ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager;
use ElementorPro\Modules\ThemeBuilder\Module;

/**
 * Elementor Compatibility
 */
if ( ! class_exists( 'Political_Era_Elementor_Pro' ) ) :

	/**
	 * Elementor Compatibility
	 *
	 * @since 1.0.0
	 */
	class Political_Era_Elementor_Pro {

		/**
		 * Member Variable
		 *
		 * @var object instance
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			// Add locations.
			add_action( 'elementor/theme/register_locations', array( $this, 'register_locations' ) );
			// Override Header  templates.
			add_action( 'political_era_action_header', array( $this, 'do_header' ), 0 );

			// Override Footer Templates.
			add_action( 'political_era_action_footer', array( $this, 'do_footer' ), 0 );

			add_action( 'political_era_action_404_page', array( $this, 'do_template_part_404' ), 0 );

		}
		/**
		 * Register Locations
		 *
		 * @since 1.0.0
		 * @param object $manager Location manager.
		 * @return void
		 */
		public function register_locations( $manager ) {
			$manager->register_all_core_location();
		}		
		
		/**
		 * Header Support
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function do_header() {
			$did_location = Module::instance()->get_locations_manager()->do_location( 'header' );
			if ( $did_location ) {
				remove_action( 'political_era_action_header', 'political_era_top_header', 10 );
				remove_action( 'political_era_action_header', 'political_era_header', 20 );
				remove_action( 'political_era_action_header', 'political_era_banner', 25 );
				remove_action( 'political_era_action_header', 'political_era_header_image', 30 );
				remove_action( 'political_era_action_header', 'political_era_information', 35 );
			}
		}

		/**
		 * Footer Support
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function do_footer() {
			$did_location = Module::instance()->get_locations_manager()->do_location( 'footer' );
			if ( $did_location ) {
				remove_action( 'political_era_action_footer', 'political_era_footer' );
			}
		}

		/**
		 * Override 404 page
		 *
		 * @return void
		 */
		public function do_template_part_404() {
			if ( is_404() ) {
				$did_location = Module::instance()->get_locations_manager()->do_location( 'single' );
				if ( $did_location ) {
					remove_action( 'political_era_action_404_page', 'political_era_404_page_content', 10 );
				}
			}
		}				
		
	}

endif;
Political_Era_Elementor_Pro::get_instance();	