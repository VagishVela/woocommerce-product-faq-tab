<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   WooCommerce_Product_FAQ_Tab
 * @author    Vagish Vela <web@vagish.com>
 * @license   GPL-2.0+
 * @link      http://vagish.com
 * @copyright 2014 Vagish Vela
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce Product FAQ Tab
 * Plugin URI:        http://www.velaseo.com
 * Description:       Creates FAQ tab in the WooCommerce single product pages.
 * Version:           0.1.0
 * Author:            Vagish Vela
 * Author URI:        http://vagish.com
 * Text Domain:       woocommerce-product-faq-tab-en-GB
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/VagishVela/woocommerce-product-faq-tab
 */

//* Add FAQ Tab Filter
add_filter( 'woocommerce_product_tabs', 'wooc_product_faq' );
function wooc_product_faq( $tabs ) {
	// Adds the new tab
	$tabs['FAQ'] = array(
		'title' => __( 'FAQ', 'woocommerce' ),
		'priority' => 99, // Priority effects the order, 99 puts it at the end of the tabs
		'callback' => 'wooc_product_faq_content'
	);
	return $tabs;
}
function wooc_product_faq_content() {
	// The First Extra tab content
	$product_faq_tab_1_values = get_post_custom_values('wooc_product_faq');
	if ( is_array($product_faq_tab_1_values) ) {
		foreach ( $product_faq_tab_1_values as $product_faq_tab_1_key => $product_faq_tab_1_value ) {
			echo '<h2>FAQ</h2>'; // Change to FAQs if you wish.
			echo $product_faq_tab_1_value; 	   
		}
    }
	else  { echo ''; }
}
// Include the FAQ Shortcode
include( plugin_dir_path( __FILE__ ) . 'includes/faq-shortcode.php');
?>