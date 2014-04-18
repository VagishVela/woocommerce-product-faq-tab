<?php
/**
 * Plugin Name: FAQ Tab in WooCommerce Single Product Page
 * Plugin URI: http://www.velaseo.com
 * Description: Creates FAQ tab in the WooCommerce single product pages
 * Version: 0.1
 * Author: Vagish Vela
 * Author URI: http://www.vagish.com
 * License: GPL2
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

?>