<?php
	/**
	 * Admin settings page
	 */
 ?> 
<div id="wpcontent-benaceur"><div id="wpcontent-benaceur-top"></div>
<!-- hide/show settings updated -->		
<?php if( isset($_GET['settings-updated']) && $_GET['page'] == 'N-message-Ben' ) { ?>
	<script data-require="jquery@2.0.3" data-semver="2.0.3" <?php echo 'src="' . plugins_url( '../admin/min-ben.js', __FILE__ ) . '"'; ?>></script>
      <div id="Slider" class="slideup">
    <div id="h-s-msg-nab" id="message" class="updated" style="background:#B3006B;color:white;margin:20px 0 20px 0;">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
      </div>
<?php } ?>
<!-- hide/show settings updated -->		
<h2><?php _e('Add a message', 'notification-msg-interface-benaceur'); ?></h2> <form method="post" action="<?php echo esc_attr( $action ); ?>">
<p><?php _e('Note: After activating the plugin Put the following line in the place where you want the message to appear:', 'notification-msg-interface-benaceur'); ?></p>
<div class="code-insert">&lt;?php if (has_action('wp_after_header_benaceur')) wp_after_header_benaceur_(); ?></div>
<p><?php _e('but for text at the top or bottom of the article do not add any code to your theme', 'notification-msg-interface-benaceur'); ?></p>
</br><hr>
 <?php
	settings_fields( 'msg-interface-benaceur-settings-group' );
	do_settings_sections( 'msg-interface-benaceur-settings-group' );
?>
<tr valign="top"><th scope="row"><center><b><font color="#24CD24"><?php _e('Enable', 'notification-msg-interface-benaceur'); ?></font></br></center></b></th><td>&nbsp;&nbsp;<div class="switch demo1"><input type="checkbox" name="msg_interface_benaceur_enable" id="msg_interface_benaceur_enable" value="1"<?php checked( $settings[ 'msg_interface_benaceur_enable_msg' ] ); ?>/><label></label></div></td></tr>
<table  id='msgbeninterface-font-weight'>
<tr valign="top"><th scope="row" ><div class="to-tr2"></div></th></tr>
<tr valign="top"><td  scope="row"><div class="dd"><?php _e('Enable N-message-Ben on admin bar in frontend', 'notification-msg-interface-benaceur'); ?></div></td><td><label class="switch-nab"><input type="checkbox" name="msg_interface_benaceur_enable_nmb_on_admin_bar_in_front" class="switch-input" id="msg_interface_benaceur_enable_nmb_on_admin_bar_in_front" value="1"<?php checked( $settings[ 'msginterfacebenaceur_on_admin_bar_in_front' ] ); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><td scope="row"><div class="dd"><?php _e('Enable N-message-Ben on admin bar in admin panel', 'notification-msg-interface-benaceur'); ?></div></td><td><label class="switch-nab"><input type="checkbox" name="msg_interface_benaceur_enable_nmb_on_admin_bar_in_admin" class="switch-input" id="msg_interface_benaceur_enable_nmb_on_admin_bar_in_admin" value="1"<?php checked( $settings[ 'msginterfacebenaceur_on_admin_bar_in_admin' ] ); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><th scope="row" ><div class="to-tr2"></div></th></tr>
</table>
<p><?php _e('Content of the message:', 'notification-msg-interface-benaceur'); ?></p> <p><textarea name="msg_interface_benaceur_text" style="padding:6px" rows="8"><?php if ($settings['msgbeninterface']) echo $settings[ 'msgbeninterface' ]; else echo "Thank you for your choice of this plugin"; ?></textarea></p> 
&nbsp;&nbsp;<em><?php _e( 'To return to the line add at the end of the line: &lt;/br>', 'notification-msg-interface-benaceur' ); ?></em>
<table class="form-table" id='msgbeninterface-font-weight'>
<tr valign="top"><th scope="row"><div class="dd"><?php _e('Appear only to visitors', 'notification-msg-interface-benaceur'); ?></div></th><td><label class="switch-nab"><input type="checkbox" name="msg_interface_benaceur_for_visitors" class="switch-input" id="msg_interface_benaceur_for_visitors" value="1"<?php checked( $settings[ 'msg_interface_benaceur_enable_visitors' ] ); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><th scope="row"><div class="dd"><?php _e('Appear only to users', 'notification-msg-interface-benaceur'); ?></div></th><td><label class="switch-nab"><input type="checkbox" name="msg_interface_benaceur_for_users" class="switch-input" id="msg_interface_benaceur_for_users" value="1"<?php checked( $settings[ 'msg_interface_benaceur_enable_users' ] ); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><th scope="row"><div class="dd"><?php _e('Appear to all', 'notification-msg-interface-benaceur'); ?></div></th><td><label class="switch-nab"><input type="checkbox" name="msg_interface_benaceur_for_all" class="switch-input" id="msg_interface_benaceur_for_all" value="1"<?php checked( $settings[ 'msg_interface_benaceur_enable_for_all' ] ); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><th scope="row"><?php _e('Appear to group:', 'notification-msg-interface-benaceur'); ?></th><td>
<div class="styled-select">
<select name="msg_interface_benaceur_for_role[]" id="msg_interface_benaceur_for_role" size="10" style="height:auto;" multiple="multiple">
<option style="color: #C4C4C4;" value="<?php echo esc_attr( $role ); ?>" select="select"><?php _e('Remove Selection', 'notification-msg-interface-benaceur'); ?></option>
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
<tr valign="top"><th scope="row"><?php _e('By the ID of the user:', 'notification-msg-interface-benaceur'); ?></th><td>
							<?php
								$msg_interface_benaceur_list_ids = implode( ',', $settings[ 'msg_interface_benaceur_list_ids' ] );
							?>
<div class="sm_benaceurlist_caps_input"><input type="text" name="msg_interface_benaceur_for_list_ids" id="msg_interface_benaceur_for_list_ids" placeholder="<?php _e( 'Enter here the user id', 'notification-msg-interface-benaceur' ); ?>" value="<?php echo esc_attr( $msg_interface_benaceur_list_ids ); ?>" size="45"/></div>
&nbsp;&nbsp;<em><?php _e( 'Separate between id by commas, for example: 2,16,223', 'notification-msg-interface-benaceur' ); ?></em>
</td></tr>
<tr valign="top"><th scope="row"><div class="dd"><?php _e('Appear for the administrator group in all cases', 'notification-msg-interface-benaceur'); ?></div></th><td><label class="switch-nab"><input type="checkbox" name="msg_interface_benaceur_administrator" class="switch-input" id="msg_interface_benaceur_administrator" value="1"<?php checked( $settings[ 'msginterfacebenaceur_administrator' ] ); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><th scope="row" ><div class="to-tr"></div></th></tr>
<tr valign="top"><th scope="row"><div class="dd"><?php _e('or appear in home only', 'notification-msg-interface-benaceur'); ?></div></th><td><label class="switch-nab"><input type="checkbox" name="msg_interface_benaceur_frontend" class="switch-input" id="msg_interface_benaceur_frontend" value="1"<?php checked( $settings[ 'msginterfacebenaceur_frontend' ] ); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
<tr valign="top"><th scope="row" ><div class="to-tr"></div></th></tr>
<tr valign="top"><th scope="row"><div class="dd"><?php _e('Appear top the post', 'notification-msg-interface-benaceur'); ?></div></th><td><label class="switch-nab"><input type="checkbox" name="msg_interface_benaceur_top_content" class="switch-input" id="msg_interface_benaceur_top_content" value="1"<?php checked( $settings['msginterfacebenaceur_top_content']); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select style="width:100px;text-align:center;"  name="msg_interface_benaceur_align_msg_content_top"><option value="center" <?php selected('center', $settings['msginterfacebenaceur_align_msg_content_top']); ?>><?php _e('centering', 'notification-msg-interface-benaceur'); ?></option><option value="right" <?php selected('right', $settings['msginterfacebenaceur_align_msg_content_top']); ?>><?php _e('right', 'notification-msg-interface-benaceur'); ?></option><option value="left" <?php selected('left', $settings['msginterfacebenaceur_align_msg_content_top']); ?>><?php _e('left', 'notification-msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<tr valign="top"><th scope="row"><div class="dd"><?php _e('Appear bottom the post', 'notification-msg-interface-benaceur'); ?></div></th><td><label class="switch-nab"><input type="checkbox" name="msg_interface_benaceur_bottom_content" class="switch-input" id="msg_interface_benaceur_bottom_content" value="1"<?php checked( $settings[ 'msginterfacebenaceur_bottom_content' ] ); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select style="width:100px;text-align:center;"  name="msg_interface_benaceur_align_msg_content_bottom"><option value="center" <?php selected('center', $settings['msginterfacebenaceur_align_msg_content_bottom']); ?>><?php _e('centering', 'notification-msg-interface-benaceur'); ?></option><option value="right" <?php selected('right', $settings['msginterfacebenaceur_align_msg_content_bottom']); ?>><?php _e('right', 'notification-msg-interface-benaceur'); ?></option><option value="left" <?php selected('left', $settings['msginterfacebenaceur_align_msg_content_bottom']); ?>><?php _e('left', 'notification-msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<tr valign="top"><th scope="row" ><div class="to-tr"></div></th></tr>
<tr valign="top"><th scope="row"><div class="dd"><?php _e('Hide message (that outside the post)', 'notification-msg-interface-benaceur'); ?></div></th><td><label class="switch-nab"><input type="checkbox" name="msg_interface_benaceur_disable_msg_head" class="switch-input" id="msg_interface_benaceur_disable_msg_head" value="1"<?php checked( $settings[ 'msginterfacebenaceur_disable_msg_head' ] ); ?>/><span class="switch-label" data-on="On" data-off="Off"></span><span class="switch-handle"></span></label></td></tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select style="width:100px;text-align:center;"  name="msg_interface_benaceur_align_msg"><option value="center" <?php selected('center', $settings['msginterfacebenaceur_align_msg']); ?>><?php _e('centering', 'notification-msg-interface-benaceur'); ?></option><option value="right" <?php selected('right', $settings['msginterfacebenaceur_align_msg']); ?>><?php _e('right', 'notification-msg-interface-benaceur'); ?></option><option value="left" <?php selected('left', $settings['msginterfacebenaceur_align_msg']); ?>><?php _e('left', 'notification-msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<tr valign="top"><th scope="row" ><div class="to-tr"></div></th></tr>
</table>
</br></br>
<p><?php submit_button(); ?></p>
</form>
    <form action="<?php echo esc_attr( $action ); ?>" method="post">
 <?php
	settings_fields( 'msg-interface-benaceur-settings-group' );
	do_settings_sections( 'msg-interface-benaceur-settings-group' );
?>
      <input type="submit" value="<?php _e('Click to reset properties plugin', 'notification-msg-interface-benaceur');?>" class="button-secondary" />
    </form></br>
</br><center><div id="msg_interface_benaceur-trait-horizontal"></div></center>
	<div id="msg_interface_benaceur_font">
  <form method="post" action=""  name="options-form1">
	<div class="option-box">
<?php			
$options_f = get_option('msg_interface_benaceur_m_options');
?>
<label><b><font face="Arial" size="4"><?php _e('style properties', 'notification-msg-interface-benaceur');?>:</font></b></label></br></br>
<p><?php _e('To disable any value enter: 00', 'notification-msg-interface-benaceur'); ?></p>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" id="msg_interface_benaceur_colorScheme1" class="msg_interface_benaceur_color_inp" style="text-align:center;" value="<?php if($options_f['mib_msg_background']) echo $options_f['mib_msg_background']; elseif (empty($options_f['mib_msg_background'])) echo "#f18bb9"; ?>" name="msg_interface_benaceur_m_options[mib_msg_background]" />
								<div class="msg_interface_benaceur_colsel msg_interface_benaceur_colorScheme1"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The color of the first background",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" id="msg_interface_benaceur_colorScheme2" class="msg_interface_benaceur_color_inp" style="text-align:center;" value="<?php if($options_f['mib_msg_background2']) echo $options_f['mib_msg_background2']; else echo "#FFFFFF"; ?>" name="msg_interface_benaceur_m_options[mib_msg_background2]" />
								<div class="msg_interface_benaceur_colsel msg_interface_benaceur_colorScheme2"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The color of the second background (style1)",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" id="msg_interface_benaceur_txtclr" class="msg_interface_benaceur_color_inp" style="text-align:center;" value="<?php if($options_f['mib_msg_txt_color']) echo $options_f['mib_msg_txt_color']; else echo "#000000"; ?>" name="msg_interface_benaceur_m_options[mib_msg_txt_color]" />
								<div class="msg_interface_benaceur_colsel msg_interface_benaceur_txtclr"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Text color",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_opacity']) echo $options_f['mib_msg_opacity']; else echo "1"; ?>" name="msg_interface_benaceur_m_options[mib_msg_opacity]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The level of transparency 1-0.1",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_border_top']) echo $options_f['mib_msg_border_top']; else echo "1"; ?>" name="msg_interface_benaceur_m_options[mib_msg_border_top]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border top",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_border_bottom']) echo $options_f['mib_msg_border_bottom']; else echo "1"; ?>" name="msg_interface_benaceur_m_options[mib_msg_border_bottom]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border bottom",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_border_right']) echo $options_f['mib_msg_border_right']; else echo "1"; ?>" name="msg_interface_benaceur_m_options[mib_msg_border_right]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border right",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_border_left']) echo $options_f['mib_msg_border_left']; else echo "1"; ?>" name="msg_interface_benaceur_m_options[mib_msg_border_left]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border left",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" id="msg_interface_benaceur_colorBorder" class="msg_interface_benaceur_color_inp" style="text-align:center;" value="<?php if($options_f['mib_msg_border_color']) echo $options_f['mib_msg_border_color']; else echo "#920f1b"; ?>" name="msg_interface_benaceur_m_options[mib_msg_border_color]" />
								<div class="msg_interface_benaceur_colsel msg_interface_benaceur_colorBorder"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border color",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_border_radius']) echo $options_f['mib_msg_border_radius']; else echo "4"; ?>" name="msg_interface_benaceur_m_options[mib_msg_border_radius]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("border radius",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_width']) echo $options_f['mib_msg_width']; else echo "60%"; ?>" name="msg_interface_benaceur_m_options[mib_msg_width]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Width by adding: px or %",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_min_width']) echo $options_f['mib_msg_min_width']; else echo ""; ?>" name="msg_interface_benaceur_m_options[mib_msg_min_width]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("min width",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_line_height']) echo $options_f['mib_msg_line_height']; else echo "1.5"; ?>" name="msg_interface_benaceur_m_options[mib_msg_line_height]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("The distance between the lines",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_margin_top']) echo $options_f['mib_msg_margin_top']; else echo "10"; ?>" name="msg_interface_benaceur_m_options[mib_msg_margin_top]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin-top",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_margin_bottom']) echo $options_f['mib_msg_margin_bottom']; else echo "10"; ?>" name="msg_interface_benaceur_m_options[mib_msg_margin_bottom]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("margin-bottom",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_padding_top']) echo $options_f['mib_msg_padding_top']; else echo "8"; ?>" name="msg_interface_benaceur_m_options[mib_msg_padding_top]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding-top",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_padding_bottom']) echo $options_f['mib_msg_padding_bottom']; else echo "8"; ?>" name="msg_interface_benaceur_m_options[mib_msg_padding_bottom]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("padding-bottom",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_font_family']) echo $options_f['mib_msg_font_family']; else echo "DroidKufi_Ben, Arial"; ?>" name="msg_interface_benaceur_m_options[mib_msg_font_family]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("font-family",'notification-msg-interface-benaceur'); ?> </td></div> /
                               <input type="checkbox"  value="enable" <?php checked('enable', $options_f['mib_msg_interface_disable_this_font']); ?> name="msg_interface_benaceur_m_options[mib_msg_interface_disable_this_font]" />
                        <div class="colwrap-display"><td><?php _e("Disable this font: DroidKufi_Ben ",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_font_size']) echo $options_f['mib_msg_font_size']; else echo "14"; ?>" name="msg_interface_benaceur_m_options[mib_msg_font_size]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("font-size",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select  name="msg_interface_benaceur_m_options[mib_msg_font_weight]" class="msg_interface_benaceur_color_inp"><option value="normal" <?php selected('normal', $options_f['mib_msg_font_weight']); ?>><?php _e('Normal', 'notification-msg-interface-benaceur'); ?></option><option value="bold" <?php selected('bold', $options_f['mib_msg_font_weight']); ?>><?php _e('Bold', 'notification-msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("font-weight",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select   name="msg_interface_benaceur_m_options[mib_msg_text_align]" class="msg_interface_benaceur_color_inp"><option value="center" <?php selected('center', $options_f['mib_msg_text_align']); ?>><?php _e('centering', 'notification-msg-interface-benaceur'); ?></option><option value="right" <?php selected('right', $options_f['mib_msg_text_align']); ?>><?php _e('right', 'notification-msg-interface-benaceur'); ?></option><option value="left" <?php selected('left', $options_f['mib_msg_text_align']); ?>><?php _e('left', 'notification-msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("center/right/left",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-3"><select  name="msg_interface_benaceur_m_options[mib_msg_text_shadow]" class="msg_interface_benaceur_color_inp"><option value="no" <?php selected('no', $options_f['mib_msg_text_shadow']); ?>><?php _e('no', 'notification-msg-interface-benaceur'); ?></option><option value="5px 5px 5px" <?php selected('5px 5px 5px', $options_f['mib_msg_text_shadow']); ?>><?php _e('yes', 'notification-msg-interface-benaceur'); ?></option></select></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" id="msg_interface_benaceur_textshadowcolor" class="msg_interface_benaceur_color_inp" style="text-align:center;" value="<?php if($options_f['mib_msg_text_shadow_color']) echo $options_f['mib_msg_text_shadow_color'] ; else echo "#000000"; ?>" name="msg_interface_benaceur_m_options[mib_msg_text_shadow_color]" />
								<div class="msg_interface_benaceur_colsel msg_interface_benaceur_textshadowcolor"></div>
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("text shadow color",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<tr valign="top"><th scope="row" ><div class="to-tr2"></div></th></tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_setinterval_clignotement']) echo $options_f['mib_msg_setinterval_clignotement']; else echo "450"; ?>" name="msg_interface_benaceur_m_options[mib_msg_setinterval_clignotement]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("clignotement / default 450",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<tr valign="top"><th scope="row" ><div class="to-tr2"></div></th></tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_interface_delay_hide']) echo $options_f['mib_msg_interface_delay_hide']; else echo ""; ?>" name="msg_interface_benaceur_m_options[mib_msg_interface_delay_hide]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Hide text after:1000 = 1second (Leave blank to disable it)",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_interface_delay_hide_anim']) echo $options_f['mib_msg_interface_delay_hide_anim']; else echo "2000"; ?>" name="msg_interface_benaceur_m_options[mib_msg_interface_delay_hide_anim]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Time of disappearance:1000 = 1second (Enter to disable it: 00)",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<tr valign="top"><th scope="row" ><div class="to-tr2"></div></th></tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_interface_delay_show']) echo $options_f['mib_msg_interface_delay_show']; else echo ""; ?>" name="msg_interface_benaceur_m_options[mib_msg_interface_delay_show]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Show text after:1000 = 1second (Leave blank to disable it)",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_interface_delay_show_anim']) echo $options_f['mib_msg_interface_delay_show_anim']; else echo "3000"; ?>" name="msg_interface_benaceur_m_options[mib_msg_interface_delay_show_anim]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Time appearing:1000 = 1second (Enter to disable it: 00)",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<tr valign="top"><th scope="row" ><div class="to-tr2"></div></th></tr>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-4"><div class="bold-3"><select  name="msg_interface_benaceur_m_options[mib_msg_interface_style_clignotement]" class="msg_interface_benaceur_color_inp">
						<option value="style1" <?php selected('style1', $options_f['mib_msg_interface_style_clignotement']); ?>><?php _e('style1', 'notification-msg-interface-benaceur'); ?></option>
						<option value="style2" <?php selected('style2', $options_f['mib_msg_interface_style_clignotement']); ?>><?php _e('style2', 'notification-msg-interface-benaceur'); ?></option>
						</select></div></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Choose the clignement Style",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					</br>
					<tr>
						<td>
							<label class="switch-nab">
<input type="checkbox" class="switch-input" id="msg_interface_benaceur_m_options[msg_enable_fixed_front]"  value="enable" <?php checked('enable', $options_f['mib_msg_interface_disable_clignotement']); ?> name="msg_interface_benaceur_m_options[mib_msg_interface_disable_clignotement]" />
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
							</label>
						</td>
						<div class="colwrap-display"><td><?php _e("disable clignotement",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					</br>
<tr valign="top"><th scope="row" ><div class="to-tr2"></div></th></tr>
					</br>
					<tr>
						<td>
							<label class="switch-nab">
<input type="checkbox" class="switch-input" value="enable" <?php checked('enable', $options_f['mib_msg_interface_disable_b_close']); ?> name="msg_interface_benaceur_m_options[mib_msg_interface_disable_b_close]" />
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
							</label>
						</td>
						<div class="colwrap-display"><td><?php _e("disable button close x",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					</br>
					<tr>
						<td>
                   <input type="radio" name="msg_interface_benaceur_m_options[mib_msg_interface_close_img]" value="img" <?php if( $options_f['mib_msg_interface_close_img'] == 'img' || $options_f['mib_msg_interface_close_img'] == '')echo 'checked';?> >
                    <div class="colwrap-display">&nbsp;&nbsp;<td><img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben1.png', __FILE__ ) . ''; ?>" width="16" height="16"></td></div>
					</tr></br>
					<tr> 
						<td>
                   <input type="radio" name="msg_interface_benaceur_m_options[mib_msg_interface_close_img]" value="img1" <?php if( $options_f['mib_msg_interface_close_img'] == 'img1')echo 'checked';?> >
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben.png', __FILE__ ) . ''; ?>" width="16" height="16"></td></div>
					</tr></br>
					<tr> 
						<td>
                   <input type="radio" name="msg_interface_benaceur_m_options[mib_msg_interface_close_img]" value="img2" <?php if( $options_f['mib_msg_interface_close_img'] == 'img2')echo 'checked';?> >
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben2.png', __FILE__ ) . ''; ?>" width="16" height="16"></td></div>
					</tr></br>
					<tr> 
						<td>
                   <input type="radio" name="msg_interface_benaceur_m_options[mib_msg_interface_close_img]" value="img3" <?php if( $options_f['mib_msg_interface_close_img'] == 'img3')echo 'checked';?> >
						</td>
                    <div class="colwrap-display">&nbsp;&nbsp;<td><img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben3.png', __FILE__ ) . ''; ?>" width="16" height="16"></td></div>
					</tr></br>
					<tr>
						<td>
						<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
						<div class="bold-4"><div class="bold-3"><select  name="msg_interface_benaceur_m_options[mib_msg_interface_time_a_show]" class="msg_interface_benaceur_color_inp">
						<option value="hour" <?php selected('hour', $options_f['mib_msg_interface_time_a_show']); ?>><?php _e('Hour(s)', 'notification-msg-interface-benaceur'); ?></option>
						<option value="minute" <?php selected('minute', $options_f['mib_msg_interface_time_a_show']); ?>><?php _e('Minute(s)', 'notification-msg-interface-benaceur'); ?></option>
						</select></div></div>
						</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Time to appear after closing",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
					<tr>
						<td>
							<div class="colwrap-display"><div class="msg_interface_benaceur_colwrap">
								<input type="text" style="text-align: center; padding-right: 0px; " class="msg_interface_benaceur_color_inp" value="<?php if($options_f['mib_msg_interface_enter_time']) echo $options_f['mib_msg_interface_enter_time']; else echo "0"; ?>" name="msg_interface_benaceur_m_options[mib_msg_interface_enter_time]" />
							</div></div>
						</td>
						<div class="colwrap-display"><td><?php _e("Enter the time (Enter 0 to disable)",'notification-msg-interface-benaceur'); ?> </td></div></br>
					</tr>
<tr valign="top"><th scope="row" ><div class="to-tr2"></div></th></tr>
</br></br>
<p class="submit"><input type="submit" id="msg_interface_benaceur_m_update" name="msg_interface_benaceur_m_update" class="button button-primary" value="<?php _e('Save Changes', 'notification-msg-interface-benaceur');?>"  /></p>
				</div>
			</form>
    <form action="" method="post">
      <input type="submit" value="<?php _e('Click to reset style properties plugin', 'notification-msg-interface-benaceur');?>" class="button-secondary" />
	  <input type="hidden" name="msg_interface_benaceur_m_update" value="true" />
      <input type="hidden" name="msg_interface_benaceur_m_options[mib_msg_interface_close_img]" value="img" <?php if( $options_f['mib_msg_interface_close_img'] == '')echo 'checked';?> >
    </form>
</div>
</div>

	<a href="#top"><div id="to-top"></div></a>
	
<style type="text/css">
#to-top {
  height:60px;
  width:60px;
  <?php if ( is_rtl() ) { ?>
  background: url(<?php echo '' . plugins_url( '../admin/top-r.png', __FILE__ ) . ''; ?>) no-repeat ;
  float:left;
  margin-left:100px;
  <?php } else { ?>
  background: url(<?php echo '' . plugins_url( '../admin/top-l.png', __FILE__ ) . ''; ?>) no-repeat ;
  float:right;
  margin-right:60px;
  <?php } ?>
  }
</style>
