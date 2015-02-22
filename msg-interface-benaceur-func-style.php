<?php

// ADD Styles and Script in head section
add_action('admin_init', 'msg_interface_benaceur_scripts');
add_action('init', 'msg_interface_benaceur_scripts');
function msg_interface_benaceur_scripts() {
	if(is_admin()){
		wp_enqueue_script ('jquery');
		wp_enqueue_script('farbtastic');
		wp_enqueue_script('msg_interface_benaceur_scripts',plugins_url('admin/msg-interface-benaceur-admin.js',__FILE__), array('jquery'));
		wp_enqueue_style('msg_interface_benaceur_scripts',plugins_url('admin/msg-interface-benaceur-admin.css',__FILE__), false, '1.0.0' );
		wp_enqueue_style('farbtastic');	
		if ( (isset($_GET['settings-updated']) || isset($_POST['msg_interface_benaceur_m_options'])) && ($_GET['page'] == 'N-message-Ben' ) ) {
		wp_enqueue_script ('jquery');
		wp_enqueue_script('msg_interface_benaceur_scripts_saved',plugins_url('admin/min-ben.js',__FILE__), array('jquery'));
		}
	}
}

function msg_interface_benaceur_m_defaults(){
	$default = array(
	    'mib_msg_background'    => '#f18bb9',
	    'mib_msg_background2'    => '#FFFFFF',
		'mib_msg_txt_color'    => '#000000',
		'mib_msg_line_height'    => '1.5',
		'mib_msg_width'    => '60%',
		'mib_msg_min_width'    => '',
		'mib_msg_margin_top'    => '10',
		'mib_msg_margin_bottom'    => '10',
		'mib_msg_padding_top'    => '8',
		'mib_msg_padding_bottom'    => '8',
		'mib_msg_border_top'    => '1',
		'mib_msg_border_bottom'    => '1',
		'mib_msg_border_right'    => '1',
		'mib_msg_border_left'    => '1',
		'mib_msg_border_color'    => '#920f1b',
		'mib_msg_border_radius'    => '4',
		'mib_msg_font_family'    => 'DroidKufi_Ben, Arial',
		'mib_msg_font_size'    => '14',
		'mib_msg_font_weight'    => 'normal',
		'mib_msg_text_align'    => 'center',
		'mib_msg_text_shadow'    => '5px 5px 5px',
		'mib_msg_text_shadow_color'    => '#000000',
		'mib_msg_opacity'    => '1',
		'mib_msg_setinterval_clignotement'    => '450',
		'mib_msg_interface_style_clignotement'    => 'style1',
		'mib_msg_interface_delay_hide'    => '',
		'mib_msg_interface_delay_hide_anim'    => '2000',
		'mib_msg_interface_delay_show'    => '',
		'mib_msg_interface_delay_show_anim'    => '3000',
		'mib_msg_interface_time_a_show'    => 'hour',
		'mib_msg_interface_enter_time'    => '0'
		);
return $default;
}

// Runs when plugin is activated and creates new database field
register_activation_hook(__FILE__,'msg_interface_benaceur_m_plugin_install');
function msg_interface_benaceur_m_plugin_install() {
    add_option('msg_interface_benaceur_m_options', msg_interface_benaceur_m_defaults());
}	

// update the msg_interface_benaceur_m_ options_f
if(isset($_POST['msg_interface_benaceur_m_update'])){
	update_option('msg_interface_benaceur_m_options', msg_interface_benaceur_m_updates());
}

function msg_interface_benaceur_m_updates() {
	$options_f = $_POST['msg_interface_benaceur_m_options'];
	    $update_val = array(
		'mib_msg_background' => $options_f['mib_msg_background'],
		'mib_msg_background2' => $options_f['mib_msg_background2'],
    	'mib_msg_txt_color' =>$options_f['mib_msg_txt_color'],
    	'mib_msg_line_height' =>$options_f['mib_msg_line_height'],
    	'mib_msg_min_width' =>$options_f['mib_msg_min_width'],
    	'mib_msg_width' =>$options_f['mib_msg_width'],
    	'mib_msg_margin_top' =>$options_f['mib_msg_margin_top'],
    	'mib_msg_margin_bottom' =>$options_f['mib_msg_margin_bottom'],
    	'mib_msg_padding_top' =>$options_f['mib_msg_padding_top'],
    	'mib_msg_padding_bottom' =>$options_f['mib_msg_padding_bottom'],
    	'mib_msg_border_top' =>$options_f['mib_msg_border_top'],
    	'mib_msg_border_bottom' =>$options_f['mib_msg_border_bottom'],
    	'mib_msg_border_right' =>$options_f['mib_msg_border_right'],
    	'mib_msg_border_left' =>$options_f['mib_msg_border_left'],
    	'mib_msg_border_color' =>$options_f['mib_msg_border_color'],
    	'mib_msg_border_radius' =>$options_f['mib_msg_border_radius'],
    	'mib_msg_font_family' =>$options_f['mib_msg_font_family'],
    	'mib_msg_font_size' =>$options_f['mib_msg_font_size'],
    	'mib_msg_font_weight' =>$options_f['mib_msg_font_weight'],
    	'mib_msg_text_align' =>$options_f['mib_msg_text_align'],
    	'mib_msg_text_shadow' =>$options_f['mib_msg_text_shadow'],
    	'mib_msg_text_shadow_color' =>$options_f['mib_msg_text_shadow_color'],
    	'msg_enable_fixed_front' =>$options_f['msg_enable_fixed_front'],
    	'mib_msg_opacity' =>$options_f['mib_msg_opacity'],
    	'mib_msg_setinterval_clignotement' =>$options_f['mib_msg_setinterval_clignotement'],
    	'mib_msg_interface_disable_clignotement' =>$options_f['mib_msg_interface_disable_clignotement'],
    	'mib_msg_interface_style_clignotement' =>$options_f['mib_msg_interface_style_clignotement'],
    	'mib_msg_interface_exclude_posts' =>$options_f['mib_msg_interface_exclude_posts'],
    	'mib_msg_interface_in_posts_ids' =>$options_f['mib_msg_interface_in_posts_ids'],
    	'mib_msg_interface_delay_hide' =>$options_f['mib_msg_interface_delay_hide'],
    	'mib_msg_interface_delay_hide_anim' =>$options_f['mib_msg_interface_delay_hide_anim'],
    	'mib_msg_interface_delay_show' =>$options_f['mib_msg_interface_delay_show'],
    	'mib_msg_interface_delay_show_anim' =>$options_f['mib_msg_interface_delay_show_anim'],
    	'mib_msg_interface_disable_this_font' =>$options_f['mib_msg_interface_disable_this_font'],
    	'mib_msg_interface_disable_b_close' =>$options_f['mib_msg_interface_disable_b_close'],
    	'mib_msg_interface_close_img' =>$options_f['mib_msg_interface_close_img'],
    	'mib_msg_interface_time_a_show' =>$options_f['mib_msg_interface_time_a_show'],
    	'mib_msg_interface_enter_time' =>$options_f['mib_msg_interface_enter_time']
    );
return $update_val;
}
