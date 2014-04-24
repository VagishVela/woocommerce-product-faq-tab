<?php
/** Step 2 (from text above). */
add_action( 'admin_menu', 'woocommerce_product_faq_tab_menu' );

/** Step 1. */
function woocommerce_product_faq_tab_menu() {
	add_options_page( 'WooCommerce Product FAQ Tab Options', 'WooCommerce Product FAQ Tab', 'manage_options', 'woocfaqtab', 'woocfaqtab_options' );
}

/** Step 3. */
function woocfaqtab_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}
?>