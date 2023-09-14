<?php
namespace Elementor\Modules\NestedTabs;

use Elementor\Plugin;
<<<<<<< HEAD
use Elementor\Modules\NestedElements\Module as NestedElementsModule;
=======
use  Elementor\Modules\NestedElements\Module as NestedElementsModule;
>>>>>>> b0dafb7cb4672d409986cded5079814d9e056d2b

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Module extends \Elementor\Core\Base\Module {

	public static function is_active() {
		return Plugin::$instance->experiments->is_feature_active( NestedElementsModule::EXPERIMENT_NAME );
	}

	public function get_name() {
		return 'nested-tabs';
	}

	public function __construct() {
		parent::__construct();

		add_action( 'elementor/editor/before_enqueue_scripts', function () {
			wp_enqueue_script( $this->get_name(), $this->get_js_assets_url( $this->get_name() ), [
				'nested-elements',
			], ELEMENTOR_VERSION, true );
		} );
	}
}
