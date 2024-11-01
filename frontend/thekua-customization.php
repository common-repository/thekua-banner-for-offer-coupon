<?php
 
 // Banner on Cart Page
add_filter( 'woocommerce_before_cart', 'woocommerce_banner_on_cart_thekua_o' ); 

function woocommerce_banner_on_cart_thekua_o() {
	// Fetch Woocommerce Admin input field
	$banner_url =   get_option( 'wc_settings_tab_thekua_o_banner_url', true );  
	$banner_width =   get_option( 'wc_settings_tab_thekua_o_banner_width', true );  
	if($banner_url==1){ $banner_url= ''; }
	if($banner_width==1){ $banner_width= '600px'; }
	?>
		<img class='wbanner' src='<?php echo esc_url( $banner_url); ?>' />
	<style>
		.wbanner { width: <?php echo esc_attr( $banner_width); ?>; margin: 0 auto; }
	</style>
	<?php
} 

 // Banner on Checkout Page
add_filter( 'woocommerce_before_checkout_form', 'woocommerce_banner_on_checkout_thekua_o' ); 

function woocommerce_banner_on_checkout_thekua_o() {
	// Fetch Woocommerce Admin input field
	$banner_url =   get_option( 'wc_settings_tab_thekua_o_banner_url', true );  
	$banner_width =   get_option( 'wc_settings_tab_thekua_o_banner_width', true );
	if($banner_width==1){ $banner_width= '600px'; }
	if($banner_url==1){ $banner_url= ''; }
	?>
		<img class='wbanner' src='<?php echo esc_url( $banner_url); ?>' />
	<style>
		.wbanner { width: <?php echo esc_attr( $banner_width); ?>; margin: 0 auto; }
	</style>
	<?php
}

