<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.hayatikodla.com
 * @since             1.0.0
 * @package           Seldos_Special_Days
 *
 * @wordpress-plugin
 * Plugin Name:       Seldos Special Days
 * Plugin URI:        www.seldos.com.tr
 * Description:       Wordpress by following special days on your site. You can send mail automatically or you can popup your site.
 * Version:           1.0.0
 * Author:            Hasan Yüksektepe
 * Author URI:        www.hayatikodla.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       seldos-special-days
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SELDOS_SPECIAL_DAYS_PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-seldos-special-days-activator.php
 */
function activate_seldos_special_days() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-seldos-special-days-activator.php';
	Seldos_Special_Days_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-seldos-special-days-deactivator.php
 */
function deactivate_seldos_special_days() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-seldos-special-days-deactivator.php';
	Seldos_Special_Days_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_seldos_special_days' );
register_deactivation_hook( __FILE__, 'deactivate_seldos_special_days' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-seldos-special-days.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_seldos_special_days() {

	$plugin = new Seldos_Special_Days();
	$plugin->run();

}
run_seldos_special_days();
