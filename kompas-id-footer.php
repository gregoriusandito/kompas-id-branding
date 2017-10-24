<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://kompas.id
 * @since             1.0.0
 * @package           kompas-id-footer
 *
 * @wordpress-plugin
 * Plugin Name:       Kompas ID Branding
 * Plugin URI:        
 * Description:       Add KOMPAS.ID Branding to KOMPAS.ID Network Site 
 * Version:           1.0.0
 * Author:            Gregorius Andito Herjuno
 * Author URI:        https://kompas.id
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kompas-id-footer
 * Domain Path:       
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_kompas_id_footer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-kompas-id-footer-activator.php';
	Kompas_Id_Footer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_kompas_id_footer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-kompas-id-footer-deactivator.php';
	Kompas_Id_Footer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_kompas_id_footer' );
register_deactivation_hook( __FILE__, 'deactivate_kompas_id_footer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-kompas-id-footer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_kompas_id_footer() {
	if ( is_multisite() && ( get_current_blog_id() != 1 ) ) :
		$plugin = new Kompas_Id_Footer();
		$plugin->run();
	endif;	
}

run_kompas_id_footer();
