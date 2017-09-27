<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Kompas_Id_Footer
 * @subpackage Kompas_Id_Footer/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Kompas_Id_Footer
 * @subpackage Kompas_Id_Footer/admin
 * @author     Gregorius Andito Herjuno <gregorius.andito@gmail.com>
 */
class Kompas_Id_Footer_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/kompas-id-footer-admin.css', array(), time(), 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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
		 
		$dev_mode		=	strpos( get_home_url(), 'kompas-wp-multimedia.c9users.io' );
		$root_static	=	$dev_mode ? get_template_directory_uri() : 'https://assets.kompas.id/wp-content/themes/mumed_kompas_dot_id_2016';
		$theme			=	wp_get_theme();
		
	    wp_enqueue_script( 'kompas_id_cdn-vuejs', $root_static . '/assets/libs/vue/vue.js', array(), '2.3.4', true );
	    
		wp_enqueue_script( 
			$this->plugin_name, 
			plugin_dir_url( __FILE__ ) . 'js/kompas-id-footer-admin.js', 
			array( 
				'jquery', 
				'kompas_id_cdn-vuejs', 
			), 
			time(), 
			true );			

	}
	
	public function add_menu() {
		//add sidebar menu admin
		add_action( 'admin_menu', array( $this, 'add_sidebar_menu') );
		//call register settings function
		add_action( 'admin_init', array( $this, 'register_kompas_id_footer_settings') );		
	}

	public function add_sidebar_menu() {
		add_options_page('General Footer Settings', 'General Footer', 'administrator', __FILE__, array( $this, 'footer_menu_init') );		
	}	
	
	public function footer_menu_init() {
		//include template file 
		include_once plugin_dir_path( __FILE__ ) . '/partials/kompas-id-footer-admin-display.php';
	}	

	public function get_json_footer_options() {
		//send value to vue in json
		$options	=	array(
								'footer_layanan_pelanggan'	=>	get_option('kompas_id_footer_general_layanan_pelanggan') ? get_option('kompas_id_footer_general_layanan_pelanggan') : 'off',
								'footer_coorporate_status'	=>	get_option('kompas_id_footer_general_status') ? get_option('kompas_id_footer_general_status') : 'off',
								'footer_coorporate_color'	=>	get_option('kompas_id_footer_right_hex_color') ? get_option('kompas_id_footer_right_hex_color') : '#00599A',
								'footer_width_value'		=>	get_option('kompas_id_footer_width') ? get_option('kompas_id_footer_width') : '1000',
						);
		echo json_encode( $options );
		wp_die();
	}
	
	function register_kompas_id_footer_settings() {
		//register our settings
		register_setting( 'kompas-id-footer-settings-group', 'kompas_id_footer_general_layanan_pelanggan' );
		register_setting( 'kompas-id-footer-settings-group', 'kompas_id_footer_general_status' );
		register_setting( 'kompas-id-footer-settings-group', 'kompas_id_footer_right_hex_color' );
		register_setting( 'kompas-id-footer-settings-group', 'kompas_id_footer_width' );
	}	
	
	

}
