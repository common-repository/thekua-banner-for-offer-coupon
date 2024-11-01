<?php

class WC_Settings_Tab_Thekua_o{
 
    public static function init() {
        add_filter( 'woocommerce_settings_tabs_array', __CLASS__ . '::add_settings_tab', 50 );
        add_action( 'woocommerce_settings_tabs_settings_tab_thekua', __CLASS__ . '::settings_tab' );
        add_action( 'woocommerce_update_options_settings_tab_thekua', __CLASS__ . '::update_settings' );
    }
   
    public static function add_settings_tab( $settings_tabs ) {
        $settings_tabs['settings_tab_thekua'] = __( 'Settings Thekua', 'woocommerce-settings-tab-thekua-o' );
        return $settings_tabs;
    }
 
    public static function settings_tab() {
        woocommerce_admin_fields( self::get_settings() );
    }
  
    public static function update_settings() {
        woocommerce_update_options( self::get_settings() );
    }

  
    public static function get_settings() {
			$imagemanagerurl = get_site_url().'/wp-admin/upload.php';
			$banner_url =   get_option( 'wc_settings_tab_thekua_o_banner_url', true );  
			
			if($banner_url==1){ $banner_url= ''; }
        $settings = array(
            'section_title' => array(
                'name'     => __( 'Offer or Coupon Banner for Cart', 'woocommerce-settings-tab-thekua-o' ),
                'type'     => 'title',
                'desc'     => '',
                'id'       => 'wc_settings_tab_thekua_o_section_title'
            ),
            'title' => array(
                'name' => __( 'Banner Image URL', 'woocommerce-settings-tab-thekua-o' ),
                'type' => 'text', 
                'desc' => __( 'You Can Get Image URL from here:- <a href='.$imagemanagerurl.'>Image Manager</a><br/><img src='.$banner_url.' width="50%" /> ', 'woocommerce-settings-tab-thekua-o' ),
                'id'   => 'wc_settings_tab_thekua_o_banner_url'
            ),
            'width' => array(
                'name' => __( 'Banner Image Width (Optional)', 'woocommerce-settings-tab-thekua-o' ),
                'type' => 'text', 
                'placeholder' => '600px', 
                'id'   => 'wc_settings_tab_thekua_o_banner_width'
            ),  
            'section_end' => array(
                 'type' => 'sectionend',
                 'id' => 'wc_settings_tab_thekua_o_section_end'
            )
        );

        return apply_filters( 'wc_settings_tab_thekua_o_settings', $settings );
    }

}

WC_Settings_Tab_Thekua_o::init();