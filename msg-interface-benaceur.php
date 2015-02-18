<?php
/** 
Plugin Name: Notification msg interface benaceur
Plugin URI: http://benaceur-php.com/1714.aspx
Description: A message appears below the header or the designated location
Version: 2.1.6
Author: benaceur
Author URI: http://benaceur-php.com/
License: GPL2
*/

define("NOTIFICATION_MSG_INTERFACE_BENACEUR", "N-message-Ben");

// Add settings link on plugin page
function msg_interface_benaceur_action_links($links){
	$links[] = '<a href="'.get_admin_url(null, '?page='.NOTIFICATION_MSG_INTERFACE_BENACEUR.'').'">'.__("Settings", 'notification-msg-interface-benaceur').'</a>';
	return $links;
}
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'msg_interface_benaceur_action_links');
// Add settings link on plugin page

load_plugin_textdomain( 'notification-msg-interface-benaceur', false, basename( dirname( __FILE__ ) ) . '/languages/' );
		
    function wp_after_header_benaceur_() {  
        do_action('wp_after_header_benaceur');
       }
  
	        function function_msg_interface_benaceur_f() {
			$options_f = get_option('msg_interface_benaceur_m_options');
			if ( is_front_page()  ) {
			include('msg-interface-benaceur-page_a.php');
            include('msg-interface-benaceur-page_b.php');
			}
		    }
			
	        function function_msg_interface_benaceur() {
			$options_f = get_option('msg_interface_benaceur_m_options');
			include('msg-interface-benaceur-page_a.php');
            include('msg-interface-benaceur-page_b.php');
			}

			
		
class Site_msg_interface_benaceur {

	/**
	 * Setup init
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'init' ), 8 );

		if ( is_admin() ) {
			add_action( 'admin_init', array( $this, 'admin_init' ) );
			add_action( 'admin_menu', array( $this, 'admin_menu' ) );
		}
	}

	/**
	 * Admin init
	 */
	public function admin_init() {
	
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_enable' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_for_all' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_for_visitors' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_for_users' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_for_role' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_for_list_ids' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_text' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_text2' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_frontend' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_for_list_ids_posts' );
		register_setting( 'msg-interface-benaceur-settings-group', 'mib_msg_interface_in_posts_ids' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_top_content' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_bottom_content' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_disable_msg_head' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_align_msg' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_align_msg_content_top' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_align_msg_content_bottom' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_administrator' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_enable_nmb_on_admin_bar_in_front' );
		register_setting( 'msg-interface-benaceur-settings-group', 'msg_interface_benaceur_enable_nmb_on_admin_bar_in_admin' );
	}

	/**
	 * Get plugin settings
	 *
	 * @return array
	 */
	public function get_settings( $inherit = false ) {

		$settings = array( 
			'msg_interface_benaceur_enable_msg' => get_option( 'msg_interface_benaceur_enable'),
			'msg_interface_benaceur_enable_visitors' => (boolean) get_option( 'msg_interface_benaceur_for_visitors', 0 ),
			'msg_interface_benaceur_enable_users' => get_option( 'msg_interface_benaceur_for_users', 0 ),
			'msg_interface_benaceur_list_roles' => (array) get_option( 'msg_interface_benaceur_for_role', array() ),
			'msg_interface_benaceur_list_ids' => get_option( 'msg_interface_benaceur_for_list_ids', '' ),
			'msg_interface_benaceur_enable_for_all' => (boolean) get_option( 'msg_interface_benaceur_for_all', 0 ),
			'msgbeninterface' => get_option( 'msg_interface_benaceur_text'),
			'msgbeninterface_t2' => get_option( 'msg_interface_benaceur_text2'),
			'msginterfacebenaceur_frontend' => get_option( 'msg_interface_benaceur_frontend', 0 ),
			'mib_msg_interface_in_posts_ids' => get_option( 'mib_msg_interface_in_posts_ids', 0 ),
			'msginterfacebenaceur_top_content' => get_option( 'msg_interface_benaceur_top_content'),
			'msginterfacebenaceur_bottom_content' => get_option( 'msg_interface_benaceur_bottom_content'),
			'msginterfacebenaceur_disable_msg_head' => get_option( 'msg_interface_benaceur_disable_msg_head'),
			'msginterfacebenaceur_align_msg' => get_option( 'msg_interface_benaceur_align_msg'),
			'msginterfacebenaceur_align_msg_content_top' => get_option( 'msg_interface_benaceur_align_msg_content_top'),
			'msginterfacebenaceur_align_msg_content_bottom' => get_option( 'msg_interface_benaceur_align_msg_content_bottom'),
			'msginterfacebenaceur_administrator' => get_option( 'msg_interface_benaceur_administrator'),
			'msginterfacebenaceur_on_admin_bar_in_front' => get_option( 'msg_interface_benaceur_enable_nmb_on_admin_bar_in_front'),
			'msginterfacebenaceur_on_admin_bar_in_admin' => get_option( 'msg_interface_benaceur_enable_nmb_on_admin_bar_in_admin')
		);

		$settings[ 'msg_interface_benaceur_list_roles' ] = array_map( 'trim', array_unique( array_filter( $settings[ 'msg_interface_benaceur_list_roles' ] ) ) );
		
		$settings[ 'msg_interface_benaceur_list_ids' ] = explode( ',', $settings[ 'msg_interface_benaceur_list_ids' ] );
		$settings[ 'msg_interface_benaceur_list_ids' ] = array_map( 'trim', array_unique( array_filter( $settings[ 'msg_interface_benaceur_list_ids' ] ) ) );

		return $settings;
		
	}
	
	/**
	 * Disable msg interface benaceur based on settings
	 *
	 * @return bool
	 */
	public function init() {

		$settings = $this->get_settings( true );
		$admin = current_user_can( 'administrator' );
        if ( $settings[ 'msg_interface_benaceur_enable_msg' ]  )  {		
        function fmib_f() { add_action('wp_head', 'function_msg_interface_benaceur_f'); }
        function fmib() { add_action('wp_head', 'function_msg_interface_benaceur'); }
		
		if ( $settings[ 'msg_interface_benaceur_enable_for_all' ] && $settings[ 'msginterfacebenaceur_frontend' ]  ) {
    fmib_f();
		} elseif ( $settings[ 'msg_interface_benaceur_enable_for_all' ]  ) {
    fmib();
		}

		if ( $settings[ 'msg_interface_benaceur_enable_visitors' ] && $settings[ 'msginterfacebenaceur_frontend' ] && ( !is_user_logged_in() || ( $settings[ 'msginterfacebenaceur_administrator' ] && $admin ) ) ) {
    fmib_f();
    	} elseif ( $settings[ 'msg_interface_benaceur_enable_visitors' ] && ( !is_user_logged_in() || ( $settings[ 'msginterfacebenaceur_administrator' ] && $admin ) ) ) {
    fmib();
		}
		
		if ( $settings[ 'msg_interface_benaceur_enable_users' ] && $settings[ 'msginterfacebenaceur_frontend' ] && is_user_logged_in() ) { 
    fmib_f();
		} elseif ( $settings[ 'msg_interface_benaceur_enable_users' ] && is_user_logged_in() ) {
    fmib();
		}

		$msg_interface_benaceur_list_roles = $settings[ 'msg_interface_benaceur_list_roles' ];

		if ( !empty( $msg_interface_benaceur_list_roles ) ) {
			if ( !is_array( $msg_interface_benaceur_list_roles ) ) {
				$msg_interface_benaceur_list_roles = array( $msg_interface_benaceur_list_roles );
			}

			foreach ( $msg_interface_benaceur_list_roles as $role ) {
				if ( (current_user_can( $role ) || ( $settings[ 'msginterfacebenaceur_administrator' ] && $admin )) && $settings[ 'msginterfacebenaceur_frontend' ] ) {
    fmib_f();
		} elseif ( current_user_can( $role ) || ( $settings[ 'msginterfacebenaceur_administrator' ] && $admin ) ) {
    fmib();
		}
			}
		}
		
		$current_user = wp_get_current_user();
		$user_id = get_current_user_id();
		$msg_interface_benaceur_list_ids = $settings[ 'msg_interface_benaceur_list_ids' ];

		if ( !empty( $msg_interface_benaceur_list_ids ) ) {
			foreach ( $msg_interface_benaceur_list_ids as $user_id ) {
				if ( ($current_user->ID == $user_id || ( $settings[ 'msginterfacebenaceur_administrator' ] && $admin )) && $settings[ 'msginterfacebenaceur_frontend' ]  ) {
    fmib_f();
		} elseif ( $current_user->ID == $user_id || ( $settings[ 'msginterfacebenaceur_administrator' ] && $admin ) ) {
    fmib();
		}
			}
		}
		
		}

		return false;

	}
	/**
	 * Add menu item
	 */
	public function admin_menu() {

		add_menu_page( __( 'N-message-Ben', 'n-message-Ben' ), __( 'N-message-Ben', 'n-message-Ben' ), 'manage_options', 'N-message-Ben', array( $this, 'settings_page' ), WP_PLUGIN_URL.'/notification-msg-interface-benaceur/admin/mib.png' );
		}

	/**
	 * Admin settings page
	 */
 public function settings_page() {
		$settings = $this->get_settings();
		$action = 'options.php';
		
		global $wp_roles;

		if ( !isset( $wp_roles ) ) {
			$wp_roles = new WP_Roles();
		}
		$roles = $wp_roles->get_names();
        $roles = array_map( 'translate_user_role', $roles );
		
        require_once ('temp/msg-interface-benaceur-settings-page.php');
		
 }		

}
global $site_msg_interface_benaceur;
$site_msg_interface_benaceur = new Site_msg_interface_benaceur();


    add_action( 'wp_before_admin_bar_render', 'mib_links_on_admin_bar', 102 );
    function mib_links_on_admin_bar() {
        if (current_user_can( 'manage_options' ) && get_option( 'msg_interface_benaceur_enable_nmb_on_admin_bar_in_front') && !is_admin() && get_option( 'msg_interface_benaceur_enable')) {
        global $wp_admin_bar;
        $wp_admin_bar->add_menu( array(
        'id' => 'lien-mib',
        'title' => 'N-message-Ben',
        'href' =>  admin_url('/admin.php?page=N-message-Ben')));
		} elseif (current_user_can( 'manage_options' ) && get_option( 'msg_interface_benaceur_enable_nmb_on_admin_bar_in_admin') && is_admin() && get_option( 'msg_interface_benaceur_enable'))  {
        global $wp_admin_bar;
        $wp_admin_bar->add_menu( array(
        'id' => 'lien-mib',
        'title' => 'N-message-Ben',
        'href' =>  admin_url('/admin.php?page=N-message-Ben')));
		}	
    }

require ('msg-interface-benaceur-func-style.php');
