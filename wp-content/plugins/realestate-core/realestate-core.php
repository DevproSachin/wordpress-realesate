
<?php
/**
 * Plugin Name: RealEstate Core
 * Description: Core property functionality for the EstateFlow website.
 * Version: 1.0.0
 * Requires at least: 6.5
 * Requires PHP: 8.1
 * Text Domain: realestate-core
 */

defined( 'ABSPATH' ) || exit;

define( 'RE_CORE_VERSION', '1.0.0' );
define( 'RE_CORE_PATH', plugin_dir_path( __FILE__ ) );


require_once RE_CORE_PATH . 'includes/post-types.php';
require_once RE_CORE_PATH . 'includes/taxonomies.php';