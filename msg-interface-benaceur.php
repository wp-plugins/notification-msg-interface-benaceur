<?php
/** 
Plugin Name: Notification msg interface benaceur
Plugin URI: https://wordpress.org/plugins/notification-msg-interface-benaceur/
Description: A message appears below the header or the designated location
Version: 1.2
Author: benaceur
Author URI: http://benaceur-php.com/
License: GPL2
*/

define("NOTIFICATION_MSG_INTERFACE_BENACEUR", "N-message-Ben");

// Add settings link on plugin page
function msg_interface_benaceur_action_links($links){
	$links[] = '<a href="'.get_admin_url(null, '?page='.NOTIFICATION_MSG_INTERFACE_BENACEUR.'').'">'.__("Settings", 'msg-interface-benaceur').'</a>';
	return $links;
}
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'msg_interface_benaceur_action_links');
// Add settings link on plugin page

load_plugin_textdomain( 'msg-interface-benaceur', false, basename( dirname( __FILE__ ) ) . '/languages/' );
		
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
			'msginterfacebenaceur_align_msg_content_bottom' => get_option( 'msg_interface_benaceur_align_msg_content_bottom')
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
        if ( $settings[ 'msg_interface_benaceur_enable_msg' ]  )  {		
        function fmib_f() { add_action('wp_head', 'function_msg_interface_benaceur_f'); }
        function fmib() { add_action('wp_head', 'function_msg_interface_benaceur'); }
		
		if ( $settings[ 'msg_interface_benaceur_enable_for_all' ] && $settings[ 'msginterfacebenaceur_frontend' ]  ) {
    fmib_f();
		} elseif ( $settings[ 'msg_interface_benaceur_enable_for_all' ]  ) {
    fmib();
		}

		if ( $settings[ 'msg_interface_benaceur_enable_visitors' ] && $settings[ 'msginterfacebenaceur_frontend' ] && ( !is_user_logged_in() || current_user_can( 'administrator' )) ) {
    fmib_f();
    	} elseif ( $settings[ 'msg_interface_benaceur_enable_visitors' ] && ( !is_user_logged_in() || current_user_can( 'administrator' )) ) {
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
				if ( (current_user_can( $role ) || current_user_can( 'administrator' )) && $settings[ 'msginterfacebenaceur_frontend' ] ) {
    fmib_f();
		} elseif ( current_user_can( $role ) || current_user_can( 'administrator' ) ) {
    fmib();
		}
			}
		}
		
		$current_user = wp_get_current_user();
		$user_id = get_current_user_id();
		$msg_interface_benaceur_list_ids = $settings[ 'msg_interface_benaceur_list_ids' ];

		if ( !empty( $msg_interface_benaceur_list_ids ) ) {
			foreach ( $msg_interface_benaceur_list_ids as $user_id ) {
				if ( ($current_user->ID == $user_id || current_user_can( 'administrator' )) && $settings[ 'msginterfacebenaceur_frontend' ]  ) {
    fmib_f();
		} elseif ( $current_user->ID == $user_id || current_user_can( 'administrator' ) ) {
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

 ?> 
<div class='wrap'> <h2><?php _e('Add a message', 'msg-interface-benaceur'); ?></h2> <form method="post" action="<?php echo esc_attr( $action ); ?>">
<p><?php _e('Note: After activating the plugin Put the following line in the place where you want the message to appear:', 'msg-interface-benaceur'); ?></p>
<p><code>&lt;?php if (has_action('wp_after_header_benaceur')) wp_after_header_benaceur_(); ?></code></p>
<p><?php _e('but for text at the top or bottom of the article do not add any code to your theme', 'msg-interface-benaceur'); ?></p>
</br><hr>
 <?php
	settings_fields( 'msg-interface-benaceur-settings-group' );
	do_settings_sections( 'msg-interface-benaceur-settings-group' );
?>
<tr valign="top"><th scope="row"><b><font color="#008080"><?php _e('Enable', 'msg-interface-benaceur'); ?></font></b></th><td>&nbsp;&nbsp;<input type="checkbox" name="msg_interface_benaceur_enable" id="msg_interface_benaceur_enable" value="1"<?php checked( $settings[ 'msg_interface_benaceur_enable_msg' ] ); ?>/></td></tr></br></br>
<p><?php _e('Content of the message:', 'msg-interface-benaceur'); ?></p> <p><textarea name="msg_interface_benaceur_text" style="padding:6px" cols="100%" rows="10"><?php echo $settings[ 'msgbeninterface' ]; ?></textarea></p> 
<table class="form-table" id='msgbeninterface-font-weight'>
<tr valign="top"><th scope="row"><?php _e('Appear only to visitors', 'msg-interface-benaceur'); ?></th><td><input type="checkbox" name="msg_interface_benaceur_for_visitors" id="msg_interface_benaceur_for_visitors" value="1"<?php checked( $settings[ 'msg_interface_benaceur_enable_visitors' ] ); ?>/></td></tr>
<tr valign="top"><th scope="row"><?php _e('Appear only to users', 'msg-interface-benaceur'); ?></th><td><input type="checkbox" name="msg_interface_benaceur_for_users" id="msg_interface_benaceur_for_users" value="1"<?php checked( $settings[ 'msg_interface_benaceur_enable_users' ] ); ?>/></td></tr>
<tr valign="top"><th scope="row"><?php _e('Appear to all', 'msg-interface-benaceur'); ?></th><td><input type="checkbox" name="msg_interface_benaceur_for_all" id="msg_interface_benaceur_for_all" value="1"<?php checked( $settings[ 'msg_interface_benaceur_enable_for_all' ] ); ?>/></td></tr>
<tr valign="top"><th scope="row"><?php _e('Appear to group:', 'msg-interface-benaceur'); ?></th><td>
<div class="styled-select">
<select name="msg_interface_benaceur_for_role[]" id="msg_interface_benaceur_for_role" size="10" style="height:auto;" multiple="multiple">
<option style="color: #C4C4C4;" value="<?php echo esc_attr( $role ); ?>" select="select"><?php _e('Remove Selection', 'msg-interface-benaceur'); ?></option>
						    	<?php
									$msg_interface_benaceur_list_roles = $settings[ 'msg_interface_benaceur_list_roles' ];

									foreach ( $roles as $role => $name ) {
								?>
<option value="<?php echo esc_attr( $role ); ?>"<?php selected( in_array( $role, $msg_interface_benaceur_list_roles ) ); ?>><?php echo esc_html( $name ); ?></option>
								<?php
									}
								?>
</select></div>
</td></tr>
<tr valign="top"><th scope="row"><?php _e('By the ID of the user:', 'msg-interface-benaceur'); ?></th><td>
							<?php
								$msg_interface_benaceur_list_ids = implode( ',', $settings[ 'msg_interface_benaceur_list_ids' ] );
							?>
<div class="sm_benaceurlist_caps_input"><input type="text" name="msg_interface_benaceur_for_list_ids" id="msg_interface_benaceur_for_list_ids" placeholder="<?php _e( 'Enter here the user id', 'msg-interface-benaceur' ); ?>" value="<?php echo esc_attr( $msg_interface_benaceur_list_ids ); ?>" size="45"/></div>
&nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'msg-interface-benaceur' ); ?></em>
</td></tr>
<tr valign="top"><th scope="row"><?php _e('or appear in home only', 'msg-interface-benaceur'); ?></th><td><input type="checkbox" name="msg_interface_benaceur_frontend" id="msg_interface_benaceur_frontend" value="1"<?php checked( $settings[ 'msginterfacebenaceur_frontend' ] ); ?>/></td></tr>
<tr valign="top"><th scope="row">&nbsp;</th><td><hr align="right" width="200" size="3"></td></tr>
<tr valign="top"><th scope="row"><?php _e('Appear top the post', 'msg-interface-benaceur'); ?></th><td><input type="checkbox" name="msg_interface_benaceur_top_content" id="msg_interface_benaceur_top_content" value="1"<?php checked( $settings['msginterfacebenaceur_top_content']); ?>/></td></tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select style="width:100px;text-align:center;"  name="msg_interface_benaceur_align_msg_content_top"><option value="center" <?php selected('center', $settings['msginterfacebenaceur_align_msg_content_top']); ?>><?php _e('centering', 'msg-interface-benaceur'); ?></option><option value="right" <?php selected('right', $settings['msginterfacebenaceur_align_msg_content_top']); ?>><?php _e('right', 'msg-interface-benaceur'); ?></option><option value="left" <?php selected('left', $settings['msginterfacebenaceur_align_msg_content_top']); ?>><?php _e('left', 'msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<tr valign="top"><th scope="row"><?php _e('Appear bottom the post', 'msg-interface-benaceur'); ?></th><td><input type="checkbox" name="msg_interface_benaceur_bottom_content" id="msg_interface_benaceur_bottom_content" value="1"<?php checked( $settings[ 'msginterfacebenaceur_bottom_content' ] ); ?>/></td></tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select style="width:100px;text-align:center;"  name="msg_interface_benaceur_align_msg_content_bottom"><option value="center" <?php selected('center', $settings['msginterfacebenaceur_align_msg_content_bottom']); ?>><?php _e('centering', 'msg-interface-benaceur'); ?></option><option value="right" <?php selected('right', $settings['msginterfacebenaceur_align_msg_content_bottom']); ?>><?php _e('right', 'msg-interface-benaceur'); ?></option><option value="left" <?php selected('left', $settings['msginterfacebenaceur_align_msg_content_bottom']); ?>><?php _e('left', 'msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<tr valign="top"><th scope="row">&nbsp;</th><td><hr align="right" width="200" size="3"></td></tr>
<tr valign="top"><th scope="row"><?php _e('Hide message (that outside the post)', 'msg-interface-benaceur'); ?></th><td><input type="checkbox" name="msg_interface_benaceur_disable_msg_head" id="msg_interface_benaceur_disable_msg_head" value="1"<?php checked( $settings[ 'msginterfacebenaceur_disable_msg_head' ] ); ?>/></td></tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select style="width:100px;text-align:center;"  name="msg_interface_benaceur_align_msg"><option value="center" <?php selected('center', $settings['msginterfacebenaceur_align_msg']); ?>><?php _e('centering', 'msg-interface-benaceur'); ?></option><option value="right" <?php selected('right', $settings['msginterfacebenaceur_align_msg']); ?>><?php _e('right', 'msg-interface-benaceur'); ?></option><option value="left" <?php selected('left', $settings['msginterfacebenaceur_align_msg']); ?>><?php _e('left', 'msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<tr valign="top"><th scope="row">&nbsp;</th><td><hr align="right" width="200" size="3"></td></tr>
</table>
</br></br>
<p><?php submit_button(); ?></p>
</form>
    <form action="<?php echo esc_attr( $action ); ?>" method="post">
 <?php
	settings_fields( 'msg-interface-benaceur-settings-group' );
	do_settings_sections( 'msg-interface-benaceur-settings-group' );
?>
      <input type="submit" value="<?php _e('Click to reset properties plugin', 'msg-interface-benaceur');?>" class="button-secondary" />
    </form></br>
</div>
</br><center><div id="msg_interface_benaceur-trait-horizontal"></div></center>
	<div id="msg_interface_benaceur_font">
  <form method="post" action=""  name="options-form1">
	<div class="option-box">
<?php			
$options_f = get_option('msg_interface_benaceur_m_options');
?>
<label><b><font face="Arial" size="4"><?php _e('style properties', 'msg-interface-benaceur');?>:</font></b></label></br></br>
<p><?php _e('To disable any value enter: 00', 'msg-interface-benaceur'); ?></p>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" id="msg_interface_benaceur_colorScheme1" class="msg_interface_benaceur_color_inp" style="text-align:center;" value="<?php if($options_f['mib_msg_background']) echo $options_f['mib_msg_background']; else echo "#F3F3F3"; ?>" name="msg_interface_benaceur_m_options[mib_msg_background]" />
								<div class="msg_interface_benaceur_colsel msg_interface_benaceur_colorScheme1"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The color of the first background",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" id="msg_interface_benaceur_colorScheme2" class="msg_interface_benaceur_color_inp" style="text-align:center;" value="<?php if($options_f['mib_msg_background2']) echo $options_f['mib_msg_background2']; else echo "#FFFFFF"; ?>" name="msg_interface_benaceur_m_options[mib_msg_background2]" />
								<div class="msg_interface_benaceur_colsel msg_interface_benaceur_colorScheme2"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The color of the second background (style1)",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" id="msg_interface_benaceur_txtclr" class="msg_interface_benaceur_color_inp" style="text-align:center;" value="<?php if($options_f['mib_msg_txt_color']) echo $options_f['mib_msg_txt_color']; else echo "#000000"; ?>" name="msg_interface_benaceur_m_options[mib_msg_txt_color]" />
								<div class="msg_interface_benaceur_colsel msg_interface_benaceur_txtclr"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Text color",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_opacity']) echo $options_f['mib_msg_opacity']; else echo "1"; ?>" name="msg_interface_benaceur_m_options[mib_msg_opacity]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The level of transparency 1-0.1",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_border_px']) echo $options_f['mib_msg_border_px']; else echo "1"; ?>" name="msg_interface_benaceur_m_options[mib_msg_border_px]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border px",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" id="msg_interface_benaceur_colorBorder" class="msg_interface_benaceur_color_inp" style="text-align:center;" value="<?php if($options_f['mib_msg_border_color']) echo $options_f['mib_msg_border_color']; else echo "#c6c6c6"; ?>" name="msg_interface_benaceur_m_options[mib_msg_border_color]" />
								<div class="msg_interface_benaceur_colsel msg_interface_benaceur_colorBorder"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border color",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_border_radius']) echo $options_f['mib_msg_border_radius']; else echo ""; ?>" name="msg_interface_benaceur_m_options[mib_msg_border_radius]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border radius",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_width']) echo $options_f['mib_msg_width']; else echo "60%"; ?>" name="msg_interface_benaceur_m_options[mib_msg_width]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Width by adding: px أو %",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_min_width']) echo $options_f['mib_msg_min_width']; else echo ""; ?>" name="msg_interface_benaceur_m_options[mib_msg_min_width]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("min width",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_line_height']) echo $options_f['mib_msg_line_height']; else echo "1.5"; ?>" name="msg_interface_benaceur_m_options[mib_msg_line_height]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The distance between the lines",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_margin_top']) echo $options_f['mib_msg_margin_top']; else echo "10"; ?>" name="msg_interface_benaceur_m_options[mib_msg_margin_top]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin-top",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_margin_bottom']) echo $options_f['mib_msg_margin_bottom']; else echo "10"; ?>" name="msg_interface_benaceur_m_options[mib_msg_margin_bottom]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin-bottom",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_padding_top']) echo $options_f['mib_msg_padding_top']; else echo "8"; ?>" name="msg_interface_benaceur_m_options[mib_msg_padding_top]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding-top",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_padding_bottom']) echo $options_f['mib_msg_padding_bottom']; else echo "8"; ?>" name="msg_interface_benaceur_m_options[mib_msg_padding_bottom]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding-bottom",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_font_family']) echo $options_f['mib_msg_font_family']; else echo "Arial"; ?>" name="msg_interface_benaceur_m_options[mib_msg_font_family]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("font-family",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_font_size']) echo $options_f['mib_msg_font_size']; else echo "20"; ?>" name="msg_interface_benaceur_m_options[mib_msg_font_size]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("font-size",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select  name="msg_interface_benaceur_m_options[mib_msg_font_weight]" class="msg_interface_benaceur_color_inp"><option value="normal" <?php selected('normal', $options_f['mib_msg_font_weight']); ?>><?php _e('Normal', 'msg-interface-benaceur'); ?></option><option value="bold" <?php selected('bold', $options_f['mib_msg_font_weight']); ?>><?php _e('Bold', 'msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("font-weight",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select   name="msg_interface_benaceur_m_options[mib_msg_text_align]" class="msg_interface_benaceur_color_inp"><option value="center" <?php selected('center', $options_f['mib_msg_text_align']); ?>><?php _e('centering', 'msg-interface-benaceur'); ?></option><option value="right" <?php selected('right', $options_f['mib_msg_text_align']); ?>><?php _e('right', 'msg-interface-benaceur'); ?></option><option value="left" <?php selected('left', $options_f['mib_msg_text_align']); ?>><?php _e('left', 'msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select  name="msg_interface_benaceur_m_options[mib_msg_text_shadow]" class="msg_interface_benaceur_color_inp"><option value="no" <?php selected('no', $options_f['mib_msg_text_shadow']); ?>><?php _e('no', 'msg-interface-benaceur'); ?></option><option value="5px 5px 5px" <?php selected('5px 5px 5px', $options_f['mib_msg_text_shadow']); ?>><?php _e('yes', 'msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" id="msg_interface_benaceur_textshadowcolor" class="msg_interface_benaceur_color_inp" style="text-align:center;" value="<?php if($options_f['mib_msg_text_shadow_color']) echo $options_f['mib_msg_text_shadow_color'] ; else echo "#000000"; ?>" name="msg_interface_benaceur_m_options[mib_msg_text_shadow_color]" />
								<div class="msg_interface_benaceur_colsel msg_interface_benaceur_textshadowcolor"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow color",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<hr width="200" size="3">
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_setinterval_clignotement']) echo $options_f['mib_msg_setinterval_clignotement']; else echo "450"; ?>" name="msg_interface_benaceur_m_options[mib_msg_setinterval_clignotement]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("clignotement / default 450",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<hr width="200" size="3">
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_interface_delay_hide']) echo $options_f['mib_msg_interface_delay_hide']; else echo ""; ?>" name="msg_interface_benaceur_m_options[mib_msg_interface_delay_hide]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Hide text after:1000 = 1second (Leave blank to disable it)",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_interface_delay_hide_anim']) echo $options_f['mib_msg_interface_delay_hide_anim']; else echo "2000"; ?>" name="msg_interface_benaceur_m_options[mib_msg_interface_delay_hide_anim]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Time of disappearance:1000 = 1second (Enter to disable it: 00)",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<hr width="200" size="3">
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_interface_delay_show']) echo $options_f['mib_msg_interface_delay_show']; else echo ""; ?>" name="msg_interface_benaceur_m_options[mib_msg_interface_delay_show]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Show text after:1000 = 1second (Leave blank to disable it)",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_interface_delay_show_anim']) echo $options_f['mib_msg_interface_delay_show_anim']; else echo "3000"; ?>" name="msg_interface_benaceur_m_options[mib_msg_interface_delay_show_anim]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Time appearing:1000 = 1second (Enter to disable it: 00)",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<hr width="200" size="3">
					<tr>
						<td>
							<div class="colwrap-display">
<input type="checkbox" id="msg_interface_benaceur_m_options[msg_enable_fixed_front]" class="msg_interface_benaceur_m_options[mib_msg_interface_disable_clignotement]" value="enable" <?php checked('enable', $options_f['mib_msg_interface_disable_clignotement']); ?> name="msg_interface_benaceur_m_options[mib_msg_interface_disable_clignotement]" />
							</div>
						</td>
						<div class="colwrap-display"><td><?php _e("disable clignotement",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-4"><div class="bold-3"><select  name="msg_interface_benaceur_m_options[mib_msg_interface_style_clignotement]" class="msg_interface_benaceur_color_inp">
						<option value="style1" <?php selected('style1', $options_f['mib_msg_interface_style_clignotement']); ?>><?php _e('style1', 'msg-interface-benaceur'); ?></option>
						<option value="style2" <?php selected('style2', $options_f['mib_msg_interface_style_clignotement']); ?>><?php _e('style2', 'msg-interface-benaceur'); ?></option>
						</select></div></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Choose the clignement Style",'msg-interface-benaceur'); ?> </td></div></br>
					</tr>
</br></br>
<p class="submit"><input type="submit" id="msg_interface_benaceur_m_update" name="msg_interface_benaceur_m_update" class="button button-primary" value="<?php _e('Save Changes', 'msg-interface-benaceur');?>"  /></p>
				</div>
			</form>
    <form action="" method="post">
      <input type="submit" value="<?php _e('Click to reset style properties plugin', 'msg-interface-benaceur');?>" class="button-secondary" />
	  <input type="hidden" name="msg_interface_benaceur_m_update" value="true" />
    </form>
<p><?php _e('Note: After Reset options Click on "Save Changes".', 'msg-interface-benaceur'); ?></p>
</div>

<?php }

}
global $site_msg_interface_benaceur;
$site_msg_interface_benaceur = new Site_msg_interface_benaceur();

require ('msg-interface-benaceur-func-style.php');
