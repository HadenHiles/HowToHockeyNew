<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/HadenHiles
 * @author			  Haden Hiles
 * @since             1.0.0
 * @package           Content_Library_Custom_Fields
 *
 * @wordpress-plugin
 * Plugin Name:       Popup Offer
 * Plugin URI:        popup-offer
 * Description:       Allow displaying of a popup offer via shortcode, primarily used for The Pond. Will not work for more than one popup per page.
 * Version:           1.0.0
 * Author:            Haden Hiles
 * Author URI:        https://github.com/HadenHiles
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       popup-offer
 * Domain Path:       /languages
 */

require_once('enqueue.php');
require_once('shortcodes.php');

?>