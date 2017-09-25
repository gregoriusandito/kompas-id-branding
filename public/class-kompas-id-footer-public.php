<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Kompas_Id_Footer
 * @subpackage Kompas_Id_Footer/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Kompas_Id_Footer
 * @subpackage Kompas_Id_Footer/public
 * @author     Gregorius Andito Herjuno <gregorius.andito@gmail.com>
 */
class Kompas_Id_Footer_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $kompas_id_footer;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $kompas_id_footer, $version ) {

		$this->kompas_id_footer = $kompas_id_footer;
		$this->version = $version;

	}
	
	private $kompas_id_site_ID = 1;

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->kompas_id_footer, plugin_dir_url( __FILE__ ) . 'css/kompas-id-footer-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// wp_enqueue_script( $this->kompas_id_footer, plugin_dir_url( __FILE__ ) . 'js/kompas-id-footer-public.js', array( 'jquery' ), $this->version, false );

	}
	
	public function kompas_id_footer_init() {
    	add_action( 'wp_footer', array ( __CLASS__, 'kompas_id_universal_init' ) );
	}
	
	public static function kompas_id_universal_init() {
		$res				=	'';					
	    $network_mode		=   strpos( get_home_url(), 'kompas.id' );
	    
	    //check if current site has relation with kompas.id
	    if ( $network_mode ) : 
			if ( is_multisite() ) :
				//switch to kompas.id main site
				//since we get cURL error 60 when using 'https://kompas.id/wp-json/wp/v2/footer' API (in kompas.id environment), better to use switch blog to get the data
			    switch_to_blog( 1 );	    	
			    
			    //call the bucket
				$res	=	function_exists('kompas_wp_api_get_footer') ? kompas_wp_api_get_footer() : null;	    
				
			    //restore to current site
			    restore_current_blog();
			endif;    
	    else :
	    	//this condition appear in case this plugin installed outside kompas.id environment
	    	//consume API from 'https://kompas.id/wp-json/wp/v2/footer'
		    $api_url                =   'https://kompas.id/wp-json/wp/v2/footer';
		    $footer_req             =   wp_remote_get( $api_url );
		
		    if( is_wp_error( $footer_req ) ) :
		    	return false;
		    endif;
		
		    $res = json_decode( wp_remote_retrieve_body( $footer_req ), true );
	    
	    endif;	

		$footer_custom_business_address 		= 	$res['footer_custom_business_address'] ? $res['footer_custom_business_address'] : null;
		$footer_custom_business_phones			=	$res['footer_custom_business_phones'] ? $res['footer_custom_business_phones'] : null;
		$footer_custom_editorial_address 		= 	$res['footer_custom_editorial_address'] ? $res['footer_custom_editorial_address'] : null;
		$footer_custom_editorial_phones			=	$res['footer_custom_editorial_phones'] ? $res['footer_custom_editorial_phones'] : null;
		$footer_custom_products					= 	$res['footer_custom_products'] ? $res['footer_custom_products'] : null;
		$footer_custom_ads_products				= 	$res['footer_custom_ads_products'] ? $res['footer_custom_ads_products'] : null;
		$footer_custom_profile_text 			=	$res['footer_custom_profile_text'] ? $res['footer_custom_profile_text'] : null;
		$footer_custom_profile_social_accounts	=	$res['footer_custom_profile_social_accounts'] ? $res['footer_custom_profile_social_accounts'] : null;
		$footer_custom_about_links 				=	$res['footer_custom_about_links'] ? $res['footer_custom_about_links'] : null;
		$footer_custom_other_links 				=	$res['footer_custom_other_links'] ? $res['footer_custom_other_links'] : null;
		$footer_custom_support					=	$res['footer_custom_support'] ? $res['footer_custom_support'] : null;
		$footer_custom_support_email			=	$footer_custom_support ? $footer_custom_support[0]['kompas_theme_footer_custom_supports_email'] : null;
		$footer_custom_support_telephone		=	$footer_custom_support ? $footer_custom_support[0]['kompas_theme_footer_custom_supports_telephone'] : null;
		$footer_custom_support_whatsapp			=	$footer_custom_support ? $footer_custom_support[0]['kompas_theme_footer_custom_supports_whatsapp'] : null;
		$footer_custom_support_office_hour		=	$footer_custom_support ? $footer_custom_support[0]['kompas_theme_footer_custom_supports_office_hour'] : null; 	
		$footer_custom_universal_left 			= 	$res['footer_custom_universal_left'] ? $res['footer_custom_universal_left'] : null;
		$footer_custom_universal_right			=	$res['footer_custom_universal_right'] ? $res['footer_custom_business_right'] : null;
		
		$footer_color	=	get_option('kompas_id_footer_right_hex_color') ? get_option('kompas_id_footer_right_hex_color') : '';
		$footer_width	=	get_option('kompas_id_footer_width') ? get_option('kompas_id_footer_width') : '';
		
		include_once plugin_dir_path( __FILE__ ) . 'partials/kompas-id-footer-layanan-pelanggan-public-display.php';
		include_once plugin_dir_path( __FILE__ ) . 'partials/kompas-id-footer-coorporate-public-display.php';
		include_once plugin_dir_path( __FILE__ ) . 'partials/kompas-id-footer-universal-public-display.php';
	}	

}
