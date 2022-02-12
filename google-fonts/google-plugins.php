<?php
/**
 * Google Fonts
 *
 * @package     GoogleFonts
 * @author      Adam Buicke
 * @copyright   2022 Adam Buicke
 * @license     GPL-2.0
 *
 * @wordpress-plugin
 * Plugin Name: Google Fonts
 * Plugin URI:  https://adambuicke.wordpress.com/plugins/google-fonts
 * Description: Adds selection of Google Fonts to wordpress
 * Version:     1.0.0
 * Author:      Adam Buicke
 * Author URI:  https://adambuicke.wordpress.com
 * Text Domain: google-fonts
 * License:     GPL
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

function wpb_add_google_fonts() {
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
