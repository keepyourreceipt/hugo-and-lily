<?php

// Setup shop page markup
add_action( 'woocommerce_before_main_content', 'row' );
// Wrap breadcrumb navigation
add_action( 'woocommerce_before_main_content', 'col_sm_12');
add_action( 'woocommerce_before_main_content', 'woocommerce_catalog_ordering');

// Close row
add_action( 'woocommerce_before_shop_loop', 'closing_div' );


// If sidebar is active, wrap production in appropriate column width
if ( is_active_sidebar( 'shop_sidebar' ) ) {
  add_action( 'woocommerce_before_shop_loop', 'col_sm_8_has_sidebar' );
  add_action( 'woocommerce_after_shop_loop', 'closing_div' );
  add_action( 'woocommerce_after_shop_loop', 'shop_sidebar' );
} else {
  add_action( 'woocommerce_before_shop_loop', 'col_sm_12' );
}

// Clear floats after checkout form
add_action( 'woocommerce_after_checkout_form', 'clearfix' );

// Wrap checkout form
add_action( 'woocommerce_checkout_before_customer_details', 'wrap_woocommerce_checkout_form' );
add_action( 'woocommerce_checkout_after_customer_details', 'clearfix' );
add_action( 'woocommerce_checkout_after_customer_details', 'closing_div' );

// Wrap checkout form
add_action( 'woocommerce_checkout_after_customer_details', 'wrap_woocommerce_checkout_form' );
add_action( 'woocommerce_checkout_after_order_review', 'closing_div' );

// Wrap checkout form
add_action( 'woocommerce_before_checkout_form', 'start_checkout_form_wrap' );
add_action( 'woocommerce_after_checkout_form', 'closing_div' );

// Wrap login form
add_action( 'woocommerce_before_customer_login_form', 'start_login_form_wrap' );
add_action( 'woocommerce_after_customer_login_form', 'closing_div' );

// Wrap cart
add_action( 'woocommerce_before_cart', 'col_sm_12' );
add_action( 'woocommerce_after_cart', 'closing_div' );
