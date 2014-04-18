<?php

/**
 * Queue FAQ Toggle Javascript
 */
function dj_faq_toggle() {
	wp_register_script( 'dj_faq_toggle', plugins_url('js/faq-toggle.js', __FILE__), false, '1.0.0', true );
	wp_register_style( 'dj_faq_css', plugins_url('css/faq-style.css', __FILE__), false, '1.0.0', true );

	wp_enqueue_script( 'dj_faq_toggle' );
	wp_enqueue_style( 'dj_faq_css' );
}
add_action( 'wp_enqueue_scripts', 'dj_faq_toggle' );

// FAQ Shortcode
function wc_faq_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'q' => '',
		'a' => '',
	), $atts ) );

	return "
	<div>
		<div class='faq-button'>{$q}</div>
		<div class='faq-moreinfo' style=/"display:none;/">{$a}</div>
	</div>";
};

add_shortcode( 'wc-faq', 'wc_faq_shortcode' );