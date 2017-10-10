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
		wp_enqueue_style( $this->kompas_id_footer.'-font-sans', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i' );

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
        $raw_data   	=   self::get_options_raw_data();

		$options_name	=	array(
			    				'options_kompas_theme_footer_custom_ads_products',
			    				'options_kompas_theme_footer_custom_business_phone_numbers',
			    				'options_kompas_theme_footer_custom_editorial_phone_numbers',
			    				'options_kompas_theme_footer_custom_products',
			    				'options_kompas_theme_footer_custom_social_accounts',
			    				'options_kompas_theme_footer_custom_supports',
			    				'options_kompas_theme_footer_left_footer_content',
			    				'options_kompas_theme_footer_right_footer_content',
		    				);
		    				
		$options_number_of_value		=	self::get_all_options_number_of_value( $raw_data, $options_name );		
		
		$others_number_of_value			=	self::get_all_options_number_of_value( $raw_data, array('options_kompas_theme_footer_custom_others', 'options_kompas_theme_footer_custom_about') );

		$footer_custom_support_elements	=	array(
												'kompas_theme_footer_custom_supports_email', 
												'kompas_theme_footer_custom_supports_office_hour', 
												'kompas_theme_footer_custom_supports_telephone', 
												'kompas_theme_footer_custom_supports_whatsapp',
											);
											
		$footer_custom_profile_social_accounts_elements	=	array(
																'kompas_theme_footer_custom_social_account_css_class', 
																'kompas_theme_footer_custom_social_account_name', 
																'kompas_theme_footer_custom_social_account_url', 
															);											
		
		$footer_custom_about_links 				=	self::get_profile_custom_about_content( $raw_data, 'kompas_theme_footer_custom_about', (int) $others_number_of_value[0] );
		$footer_custom_other_links 				=	self::get_profile_custom_about_content( $raw_data, 'kompas_theme_footer_custom_others', (int) $others_number_of_value[1] );		
		$footer_custom_business_address 		= 	wpautop( self::get_profile_text_footer_content( $raw_data, 'kompas_theme_footer_custom_business_address' ) );
		$footer_custom_business_phones			=	self::get_profile_custom_telephones_content( $raw_data, 'kompas_theme_footer_custom_business_phone_number', (int) $options_number_of_value[1] );
		$footer_custom_editorial_address		=	wpautop( self::get_profile_text_footer_content( $raw_data, 'kompas_theme_footer_custom_editorial_address' ) );
		$footer_custom_editorial_phones			=	self::get_profile_custom_telephones_content( $raw_data, 'kompas_theme_footer_custom_editorial_phone_number', (int) $options_number_of_value[2] );
		$footer_custom_products					=	self::get_profile_custom_product_content( $raw_data, array('kompas_theme_footer_custom_product_name', 'kompas_theme_footer_custom_product_url'), (int) $options_number_of_value[3] );
		$footer_custom_ads_products				=	self::get_profile_custom_product_content( $raw_data, array('kompas_theme_footer_custom_ads_product_name', 'kompas_theme_footer_custom_ads_product_url'), (int) $options_number_of_value[0] );
		$footer_custom_profile_text				=	wpautop( self::get_profile_text_footer_content( $raw_data, 'kompas_theme_footer_custom_profile_text' ) );
		$footer_custom_profile_social_accounts	=	self::get_profile_social_footer_content( $raw_data, $footer_custom_profile_social_accounts_elements, (int) $options_number_of_value[4] );
		$footer_custom_support					=	self::get_supports_footer_content( $raw_data, $footer_custom_support_elements, (int) $options_number_of_value[5] );
		$footer_custom_support_email			=	$footer_custom_support ? $footer_custom_support[0]['kompas_theme_footer_custom_supports_email'] : null;
		$footer_custom_support_telephone		=	$footer_custom_support ? $footer_custom_support[0]['kompas_theme_footer_custom_supports_telephone'] : null;
		$footer_custom_support_whatsapp			=	$footer_custom_support ? $footer_custom_support[0]['kompas_theme_footer_custom_supports_whatsapp'] : null;
		$footer_custom_support_office_hour		=	$footer_custom_support ? $footer_custom_support[0]['kompas_theme_footer_custom_supports_office_hour'] : null; 		
		$footer_custom_universal_left			=	self::get_universal_footer_content( $raw_data, array('kompas_theme_footer_left_footer_content_name', 'kompas_theme_footer_left_footer_content_url'), (int) $options_number_of_value[6] );	
		$footer_custom_universal_right			=	self::get_universal_footer_content( $raw_data, array('kompas_theme_footer_right_footer_content_name', 'kompas_theme_footer_right_footer_content_url'), (int) $options_number_of_value[7] );

		$footer_color	=	get_option('kompas_id_footer_right_hex_color') ? get_option('kompas_id_footer_right_hex_color') : '';
		$footer_width	=	get_option('kompas_id_footer_width') ? get_option('kompas_id_footer_width') : '';
		
		include_once plugin_dir_path( __FILE__ ) . 'partials/kompas-id-footer-layanan-pelanggan-public-display.php';
		include_once plugin_dir_path( __FILE__ ) . 'partials/kompas-id-footer-coorporate-public-display.php';
		include_once plugin_dir_path( __FILE__ ) . 'partials/kompas-id-footer-universal-public-display.php';
	}	
	
	private function get_options_raw_data() {
		/**
		 * Description: Get all footer raw data from database using wpdb
		 * Documentation: https://codex.wordpress.org/Class_Reference/wpdb
		 */
		global $wpdb;
        
        $main_db = $wpdb->base_prefix.'options';
        
        $main_query		=	"SELECT * FROM $main_db op
        					WHERE op.option_name LIKE 'options_kompas_theme_footer%' 
        					AND op.option_name NOT LIKE '%options_kompas_theme_footer_custom_board_members%' 
        					ORDER BY op.option_name ASC
        				";
        				
        return $wpdb->get_results( $main_query );		
	}
	
	private function get_all_options_number_of_value( $raw_data, $options_name = array() ) {
		/**
		 * Description: Count number of each options
		 * Example: Kompas have 4 social media (Facebook, Twitter, Instagram, Youtube)
		 */
		foreach( $raw_data as $data ) :
			if( in_array( $data->option_name, $options_name ) ) :
				$options_value[]	=	$data->option_value;
			endif;
		endforeach;
		
		return $options_value;
	}

	private function get_universal_footer_content( $raw_data, $matches = array(), $number_of_elements ) {
        $footer_custom_universal_name	=	array();
        $footer_custom_universal_url	=	array();		
        $footer_custom_universal		=	array();
		
		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches[0] ) ) :
				array_push( $footer_custom_universal_name, $footer_data->option_value );				
			endif;	
		endforeach;	        

		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches[1] ) ) :
				array_push( $footer_custom_universal_url, $footer_data->option_value );				
			endif;	
		endforeach;			
		
		for ( $i = 0; $i < (int) $number_of_elements; $i++ ) :
			$footer_custom_universal[]	=	array(
												$matches[0]	=>	$footer_custom_universal_name[$i],
												$matches[1]	=>	$footer_custom_universal_url[$i],
											);																					
		endfor;	
		
		return $footer_custom_universal;
	}

	private function get_supports_footer_content( $raw_data, $matches = array(), $number_of_elements ) {
        $footer_custom_supports_email		=	array();
        $footer_custom_supports_office_hour	=	array();
        $footer_custom_supports_telephone	=	array();
        $footer_custom_supports_whatsapp	=	array();
        $footer_custom_supports				=	array();
		
		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches[1] ) ) :
				array_push( $footer_custom_supports_office_hour, $footer_data->option_value );				
			endif;	
		endforeach;	        

		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches[0] ) ) :
				array_push( $footer_custom_supports_email, $footer_data->option_value );				
			endif;	
		endforeach;			

		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches[2] ) ) :
				array_push( $footer_custom_supports_telephone, $footer_data->option_value );				
			endif;	
		endforeach;	        

		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches[3] ) ) :
				array_push( $footer_custom_supports_whatsapp, $footer_data->option_value );				
			endif;	
		endforeach;					
		
		for ( $i = 0; $i < (int) $number_of_elements; $i++ ) :
			$footer_custom_supports[]	=	array(
												$matches[2]	=>	$footer_custom_supports_telephone[$i],
												$matches[3]	=>	$footer_custom_supports_whatsapp[$i],
												$matches[0]	=>	$footer_custom_supports_email[$i],
												$matches[1]	=>	$footer_custom_supports_office_hour[$i],
											);																					
		endfor;	
		
		return $footer_custom_supports;
	}
	
	private function get_profile_social_footer_content( $raw_data, $matches = array(), $number_of_elements ) {
        $footer_custom_social_account_css_class		=	array();
        $footer_custom_social_account_name			=	array();
        $footer_custom_social_account_url			=	array();
        $footer_custom_social						=	array();
		
		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches[0] ) ) :
				array_push( $footer_custom_social_account_css_class, $footer_data->option_value );				
			endif;	
		endforeach;	        

		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches[1] ) ) :
				array_push( $footer_custom_social_account_name, $footer_data->option_value );				
			endif;	
		endforeach;			

		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches[2] ) ) :
				array_push( $footer_custom_social_account_url, $footer_data->option_value );				
			endif;	
		endforeach;	        

		for ( $i = 0; $i < (int) $number_of_elements; $i++ ) :
			$footer_custom_social[]	=	array(
												$matches[0]	=>	$footer_custom_social_account_css_class[$i],
												$matches[1]	=>	$footer_custom_social_account_name[$i],
												$matches[2]	=>	$footer_custom_social_account_url[$i],
											);																					
		endfor;	
		
		return $footer_custom_social;
	}

	private function get_profile_text_footer_content( $raw_data, $matches ) {
		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches ) ) :
				$footer_custom_profile_text	=	$footer_data->option_value;
			endif;	
		endforeach;			
		
		return $footer_custom_profile_text;
	}
	
	private function get_profile_custom_product_content ( $raw_data, $matches = array(), $number_of_elements ) {
        $footer_custom_product_name	=	array();
        $footer_custom_product_url	=	array();		
        $footer_custom_product		=	array();
		
		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches[0] ) ) :
				array_push( $footer_custom_product_name, $footer_data->option_value );				
			endif;	
		endforeach;	        

		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches[1] ) ) :
				array_push( $footer_custom_product_url, $footer_data->option_value );				
			endif;	
		endforeach;			
		
		for ( $i = 0; $i < (int) $number_of_elements; $i++ ) :
			$footer_custom_product[]	=	array(
												$matches[0]	=>	$footer_custom_product_name[$i],
												$matches[1]	=>	$footer_custom_product_url[$i],
											);																					
		endfor;	
		
		return $footer_custom_product;
		
	}
	
	private function get_profile_custom_telephones_content ( $raw_data, $matches, $number_of_elements ) {
        $footer_custom_telephone	=	array();
        $footer_custom_telephones	=	array();
		
		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, $matches ) && ( strlen($footer_data->option_value) > 5 ) ) :
				array_push( $footer_custom_telephone, $footer_data->option_value );				
			endif;	
		endforeach;	        

		for ( $i = 0; $i < (int) $number_of_elements; $i++ ) :
			$footer_custom_telephones[]	=	array(
												$matches	=>	$footer_custom_telephone[$i],
											);																					
		endfor;	
		
		return $footer_custom_telephones;
		
	}
	
	private function get_profile_custom_about_content ( $raw_data, $matches, $number_of_elements ) {
		$footer_custom_about_name = array();
		$footer_custom_about_url = array();
		$footer_custom_about = array();
		
		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, 'kompas_theme_footer_about_repeater_label' ) && strpos( $footer_data->option_name, $matches ) ) :
				array_push( $footer_custom_about_name, $footer_data->option_value );				
			endif;	
		endforeach;	        

		foreach ( $raw_data as $footer_data ) :
			if ( strpos( $footer_data->option_name, 'kompas_theme_footer_about_repeater_url' ) && strpos( $footer_data->option_name, $matches ) ) :
				array_push( $footer_custom_about_url, $footer_data->option_value );				
			endif;	
		endforeach;			
		
		for ( $i = 0; $i < (int) $number_of_elements; $i++ ) :
			$footer_custom_about[]	=	array(
												'kompas_theme_footer_about_repeater_label'	=>	$footer_custom_about_name[$i],
												'kompas_theme_footer_about_repeater_url'	=>	$footer_custom_about_url[$i],
											);						
		endfor;			
		
		return $footer_custom_about;
	}
	
}
