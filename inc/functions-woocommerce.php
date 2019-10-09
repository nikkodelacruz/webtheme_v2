<?php 
// ===========================================
// Place wooocommerce hooks and functions here
// ===========================================


// Declaring WooCommerce support to your theme
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

/**
 * Cart Fragments
 * Ensure cart contents update when products are added to the cart via AJAX
 * Displayed a link to the cart including the number of items present and the cart total
 * @param  array $fragments Fragments to refresh via AJAX.
 * @return array            Fragments to refresh via AJAX
 */

// Price and Cart Fragment for header menu
function header_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	cart_fragment();
	$fragments['.cart-contents'] = ob_get_clean();
	return $fragments;
}
// add_filter( 'woocommerce_add_to_cart_fragments', 'header_cart_fragment' );

// function to call cart counter
function cart_fragment(){
	?>
	<div class="ml-4x cart-contents">
		<?php echo wp_kses_post( WC()->cart->get_cart_subtotal() ); ?> 
		<i class="fas fa-shopping-cart ml-2"></i><span class="count"><?php echo WC()->cart->get_cart_contents_count();?></span>
	</div>
	<?php
}