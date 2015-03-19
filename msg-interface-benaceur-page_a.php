<?php

if ( !$options_f['mib_msg_interface_disable_clignotement'] )  {
?>
<?php include_once 'temp/clignotement-scrip.php'; ?>
<?php }

function msgiben1() {
	
   $options_f = get_option('msg_interface_benaceur_m_options');
   
if ( get_option('msg_interface_benaceur_align_msg') == 'center' ) {	?>
<div align="center" id="mib1">
<?php } elseif ( get_option('msg_interface_benaceur_align_msg') == 'right' ) { ?>
<div align="right" id="mib1">
<?php } elseif ( get_option('msg_interface_benaceur_align_msg') == 'left' ) { ?>
<div align="left" id="mib1">
<?php } ?>
<div class="quick3-2">
<div id="mib-msg-delay-show">
<div id="mib-msg-delay-hide">
<div class="mib_msg_interface_quick2">
<div id="mib_msg_interface-note-msgmea"  class="mib_msg_interface_quick"><div class="mib_msg_interface_quick3"><span id="close_mib" onmouseup="setcookie('mib1',1)">
<?php if ($options_f['mib_msg_interface_close_img']=='img' || empty($options_f['mib_msg_interface_close_img']) ) { ?>
<img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben1.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif ($options_f['mib_msg_interface_close_img']=='img1') {  ?>
<img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif ($options_f['mib_msg_interface_close_img']=='img2') {  ?>
<img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben2.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif ($options_f['mib_msg_interface_close_img']=='img3') {  ?>
<img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben3.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } ?>
</span><?php echo get_option('msg_interface_benaceur_text'); ?></div></div>
</div>
</div>
</div>
</div>
</div>

<?php include 'cook/hide-cook.php'; 

}

function add_text_content_benaceur_style1_av($content){
if (is_single()):

   $options_f = get_option('msg_interface_benaceur_m_options');
   
if ( get_option('msg_interface_benaceur_align_msg_content_top') == 'center' ) {	?>
<div align="center" id="mib2">
<?php } elseif ( get_option('msg_interface_benaceur_align_msg_content_top') == 'right' ) { ?>
<div align="right" id="mib2">
<?php } elseif ( get_option('msg_interface_benaceur_align_msg_content_top') == 'left' ) { ?>
<div align="left" id="mib2">
<?php } ?>
<div class="quick3-2-2">
<div id="mib-msg-delay-show">
<div id="mib-msg-delay-hide">
<div class="mib_msg_interface_quick2">
<div id="mib_msg_interface-note-msgmea-2-av"  class="mib_msg_interface_quick"><div class="mib_msg_interface_quick3"><span id="close_mib_av" onmouseup="setcookie('mib2',1)">
<?php if ($options_f['mib_msg_interface_close_img']=='img' || empty($options_f['mib_msg_interface_close_img']) ) { ?>
<img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben1.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif ($options_f['mib_msg_interface_close_img']=='img1') {  ?>
<img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif ($options_f['mib_msg_interface_close_img']=='img2') {  ?>
<img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben2.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif ($options_f['mib_msg_interface_close_img']=='img3') {  ?>
<img border="0" src="<?php echo '' . plugins_url( 'admin/close/close_ben3.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } ?>
</span><?php echo get_option('msg_interface_benaceur_text') ?></div></div>
</div>
</div>
</div>
</div>
</div>

<?php include 'cook/hide-cook-av.php'; 
	
	return $custom_content . $content;
endif;

return $content;	
}	

function add_text_content_benaceur_style1_ap($content){
   $options_f = get_option('msg_interface_benaceur_m_options');

	if(is_single()):
// mib3 *********************************
   include 'cook/hide-cook-ap-a.php'; 
// mib3 *********************************
     return $content . $mib3 ;
	 endif;
return $content;	
}

if ( $options_f['mib_msg_interface_style_clignotement'] == 'style1' || empty($options_f['mib_msg_interface_style_clignotement']) )  {
if ( !get_option( 'msg_interface_benaceur_disable_msg_head') )   {
add_action( 'wp_after_header_benaceur', 'msgiben1' ); }
if ( get_option( 'msg_interface_benaceur_top_content') )   {
add_filter('the_content','add_text_content_benaceur_style1_av'); }
if ( get_option( 'msg_interface_benaceur_bottom_content') )  {
add_filter('the_content','add_text_content_benaceur_style1_ap'); }
?>

<style type='text/css'>
<?php if ( !$options_f['mib_msg_interface_disable_this_font'] )  { ?>
@font-face {
  font-family: "DroidKufi_Ben";
  src: url(<?php echo '' . plugins_url( 'font/droidkufi-regular.eot' , __FILE__ ) . ''; ?>);
  src: url(<?php echo '' . plugins_url( 'font/droidkufi-regular.eot' , __FILE__ ) . ''; ?>?#iefix) format("embedded-opentype"),
       url(<?php echo '' . plugins_url( 'font/droidkufi-regular.ttf' , __FILE__ ) . ''; ?>) format("truetype");
}
<?php } ?>
.quick3-2 {
	margin-top:<?php if(!empty($options_f['mib_msg_margin_top'])) echo $options_f['mib_msg_margin_top']; elseif ($options_f['mib_msg_margin_top'] == '') echo "10"; else echo "0"; ?>px;
	margin-bottom:<?php if(!empty($options_f['mib_msg_margin_bottom'])) echo $options_f['mib_msg_margin_bottom']; elseif ($options_f['mib_msg_margin_bottom'] == '') echo "10"; else echo "0"; ?>px;
}
.quick3-2-2 {
	margin-top:0px;
	margin-bottom:8px;
}
.mib_msg_interface_quick { 
    background-color:<?php if (!empty($options_f['mib_msg_background'])) echo $options_f['mib_msg_background'] ; else  echo '#f18bb9'; ?>;
	border-radius:<?php if(!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius']; elseif ($options_f['mib_msg_border_radius'] == '') echo "4"; else echo "0"; ?>px;
	-moz-border-radius:<?php if(!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius']; elseif ($options_f['mib_msg_border_radius'] == '') echo "4"; else echo "0"; ?>px;
	-webkit-border-radius:<?php if(!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius']; elseif ($options_f['mib_msg_border_radius'] == '') echo "4"; else echo "0"; ?>px;
}
.mib_msg_interface_quick2 { 
    background-color:<?php if (!empty($options_f['mib_msg_background2'])) echo $options_f['mib_msg_background2'] ; else  echo '#FFFFFF'; ?>;
	<?php if ( !$options_f['mib_msg_min_width'] ) { ?>
    width:<?php if (!empty($options_f['mib_msg_width'])) echo $options_f['mib_msg_width'] ; else  echo '60%'; ?>;
	<?php } ?>
	min-width:<?php echo $options_f['mib_msg_min_width'] ;?>px;
	border-radius:<?php if(!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius']; elseif ($options_f['mib_msg_border_radius'] == '') echo "4"; else echo "0"; ?>px;
	-moz-border-radius:<?php if(!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius']; elseif ($options_f['mib_msg_border_radius'] == '') echo "4"; else echo "0"; ?>px;
	-webkit-border-radius:<?php if(!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius']; elseif ($options_f['mib_msg_border_radius'] == '') echo "4"; else echo "0"; ?>px;
	opacity:<?php if (!empty($options_f['mib_msg_opacity'])) echo $options_f['mib_msg_opacity'] ; else  echo '1'; ?>;
 }
.mib_msg_interface_quick3 { 
	font-family:<?php if (!empty($options_f['mib_msg_font_family'])) echo $options_f['mib_msg_font_family'] ; else  echo 'DroidKufi_Ben, Arial'; ?>;
	font-size:<?php if (!empty($options_f['mib_msg_font_size'])) echo $options_f['mib_msg_font_size'] ; else  echo '14'; ?>px;
	color:<?php if (!empty($options_f['mib_msg_txt_color'])) echo $options_f['mib_msg_txt_color'] ; else  echo '#000000'; ?>; 
	text-align:<?php if (!empty($options_f['mib_msg_text_align'])) echo $options_f['mib_msg_text_align'] ; else  echo 'center'; ?>;
	font-weight:<?php echo $options_f['mib_msg_font_weight'] ;?>;
	padding-top:<?php if(!empty($options_f['mib_msg_padding_top'])) echo $options_f['mib_msg_padding_top']; elseif ($options_f['mib_msg_padding_top'] == '') echo "8"; else echo "0"; ?>px;
	padding-bottom:<?php if(!empty($options_f['mib_msg_padding_bottom'])) echo $options_f['mib_msg_padding_bottom']; elseif ($options_f['mib_msg_padding_bottom'] == '') echo "8"; else echo "0"; ?>px;
	padding-right:6px;
	padding-left:6px;
	line-height:<?php if (!empty($options_f['mib_msg_line_height'])) echo $options_f['mib_msg_line_height'] ; else  echo '1.5'; ?>;
	opacity:<?php if (!empty($options_f['mib_msg_opacity'])) echo $options_f['mib_msg_opacity'] ; else  echo '1'; ?>;
	text-shadow:<?php echo $options_f['mib_msg_text_shadow']; ?> <?php if (!empty($options_f['mib_msg_text_shadow_color'])) echo $options_f['mib_msg_text_shadow_color'] ; else  echo '#000000'; ?>;
	border-top:<?php if(!empty($options_f['mib_msg_border_top'])) echo $options_f['mib_msg_border_top']; elseif ($options_f['mib_msg_border_top'] == '') echo "1"; else echo "0"; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#920f1b'; ?>;
	border-bottom:<?php if(!empty($options_f['mib_msg_border_bottom'])) echo $options_f['mib_msg_border_bottom']; elseif ($options_f['mib_msg_border_bottom'] == '') echo "1"; else echo "0"; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#920f1b'; ?>;
	border-right:<?php if(!empty($options_f['mib_msg_border_right'])) echo $options_f['mib_msg_border_right']; elseif ($options_f['mib_msg_border_right'] == '') echo "1"; else echo "0"; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#920f1b'; ?>;
	border-left:<?php if(!empty($options_f['mib_msg_border_left'])) echo $options_f['mib_msg_border_left']; elseif ($options_f['mib_msg_border_left'] == '') echo "1"; else echo "0"; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#920f1b'; ?>;
	border-radius:<?php if(!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius']; elseif ($options_f['mib_msg_border_radius'] == '') echo "4"; else echo "0"; ?>px;
	-moz-border-radius:<?php if(!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius']; elseif ($options_f['mib_msg_border_radius'] == '') echo "4"; else echo "0"; ?>px;
	-webkit-border-radius:<?php if(!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius']; elseif ($options_f['mib_msg_border_radius'] == '') echo "4"; else echo "0"; ?>px;
    visibility: visible;
}
<?php if ( $options_f['mib_msg_interface_delay_show']  )  { ?>
#mib-msg-delay-show {display: none;}
<?php } ?>

#close_mib { 
    position:relative;
	color:#000;
	width:13px;
    margin-bottom:-2px;
	border-radius:4px;
    border:1px solid transparent;
	font-family:Arial;font-size:18px;font-weight:bold;text-align:center;
	margin-top:-7px;
    <?php if ( is_rtl() ) { ?>
	float:left;
	<?php } else { ?>
	float:right;
	<?php } ?>
	
	<?php if ( $options_f['mib_msg_interface_disable_b_close'] )  { ?>
    display:none;
	<?php } ?>
}
#close_mib:hover {
    cursor:pointer;
}

#close_mib_av { 
    position:relative;
	color:#000;
	width:13px;
    margin-bottom:-2px;
	border-radius:4px;
    border:1px solid transparent;
	font-family:Arial;font-size:18px;font-weight:bold;text-align:center;
	margin-top:-7px;
    <?php if ( is_rtl() ) { ?>
	float:left;
	<?php } else { ?>
	float:right;
	<?php } ?>
	
	<?php if ( $options_f['mib_msg_interface_disable_b_close'] )  { ?>
    display:none;
	<?php } ?>
}
#close_mib_av:hover {
    cursor:pointer;
}

#close_mib_ap { 
    position:relative;
	color:#000;
	width:13px;
    margin-bottom:-2px;
	border-radius:4px;
    border:1px solid transparent;
	font-family:Arial;font-size:18px;font-weight:bold;text-align:center;
	margin-top:-7px;
    <?php if ( is_rtl() ) { ?>
	float:left;
	<?php } else { ?>
	float:right;
	<?php } ?>
	
	<?php if ( $options_f['mib_msg_interface_disable_b_close'] )  { ?>
    display:none;
	<?php } ?>
}
#close_mib_ap:hover {
    cursor:pointer;
}
</style>

<?php include_once 'temp/scrip-s-h.php'; ?>

<?php } 
