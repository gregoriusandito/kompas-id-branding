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
		
		// wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/kompas-id-footer-admin.css', array(), $this->version, 'all' );

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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/kompas-id-footer-admin.js', array( 'jquery' ), $this->version, false );

	}
	
	public function add_menu() {
		add_action( 'admin_menu', array( $this, 'add_sidebar_menu') );
		//call register settings function
		add_action( 'admin_init', array( $this, 'register_kompas_id_footer_settings') );		
	}
	
	public function admin_init() {
		
	}
	
	public function footer_menu_init() {
		
		include_once plugin_dir_path( __FILE__ ) . '/partials/kompas-id-footer-admin-display.php';
	}	
	
	public function add_sidebar_menu() {
		$user = wp_get_current_user();
		$user_capabilities = $user->allcaps;
		
		if ( $user_capabilities['level_7'] ) :
			add_options_page('General Footer Settings', 'General Footer', 'administrator', __FILE__, array( $this, 'footer_menu_init') );		
		endif;
	}	
	
	function register_kompas_id_footer_settings() {
		//register our settings
		register_setting( 'kompas-id-footer-settings-group', 'kompas_id_footer_general_layanan_pelanggan' );
		register_setting( 'kompas-id-footer-settings-group', 'kompas_id_footer_general_status' );
		register_setting( 'kompas-id-footer-settings-group', 'kompas_id_footer_right_hex_color' );
		register_setting( 'kompas-id-footer-settings-group', 'kompas_id_footer_disable_subsite_theme_footer' );
	}	

}
