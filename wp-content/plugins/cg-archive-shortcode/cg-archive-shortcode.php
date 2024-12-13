<?php
/**
 * CG Archive Shortcode
 *
 * @package     Capgemini_Archive_Shortcode
 * @author      Capgemini MACS PL
 * @copyright   2021 Capgemini
 * @license     GPLv2
 *
 * @wordpress-plugin
 * Plugin Name:    Capgemini Archive Shortcode
 * Plugin URI:        https://github.com/wpcomvip/capgemini
 * Description:       Add settings to archive pages
 * Version:           0.1.0
 * Author:            Capgemini GIT
 * Text Domain:       cg-archive-shortcode
 * License:           GPL-2.0-or-later
 */

namespace CG\Capgemini_Archive_Shortcode;

require_once plugin_dir_path( __FILE__ ) . 'init.php';

require_once plugin_dir_path( __FILE__ ) . 'features-settings.php';

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), function($links){
  $url = admin_url( 'admin.php?page=cg_archive_shortcode_features_settings');
  $_link = '<a href="'.$url.'" target="_blank">' . __( 'Settings', 'cg-archive-shortcode-admin' ) . '</a>';
  $links[] = $_link;
  return $links;
});

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_frontend_assets' );

/**
 * Enqueue frontend JavaScript and CSS assets
 */
function enqueue_frontend_assets() {

    // If in the backend, bail out
    if ( is_admin() ) {
        return;
    }

    $frontend_js_path = '/cg-archive-shortcode/src/client/build/app-cg-archive-shortcode-frontend.production.bundle.min.js';

	/**
	 * Loads Jquery UI JS
	 */
	$jquery_ui_path = '/cg-archive-shortcode/src/client/src/js/lib/jquery-ui-1.13.3/jquery-ui.js';
	wp_register_script( 'jquery_ui', plugins_url($jquery_ui_path), ['jquery'], null, true );
	wp_enqueue_script('jquery_ui');


	/**
	 * Loads jquery UI CSS
	 */
	$jquery_ui_css_path = '/cg-archive-shortcode/src/client/src/js/lib/jquery-ui-1.13.3/jquery-ui.css';
	wp_register_style( 'jquery_ui_css', plugins_url($jquery_ui_css_path) );
	wp_enqueue_style('jquery_ui_css');



    wp_enqueue_script(
        'cg-archive-shortcode-frontend-js',
        plugins_url($frontend_js_path),
        ['lodash','jquery'],
        '2.0.0',
        true
    );

    wp_localize_script('cg-archive-shortcode-frontend-js', 'archive_var', array(
        'pathName' => rtrim(get_site_url(), '/')
    ));

	wp_enqueue_style( 'cg-archive-shortcode-utility-css', plugin_dir_url( __FILE__ ) . 'src/client/build/style.min.css' );


}
