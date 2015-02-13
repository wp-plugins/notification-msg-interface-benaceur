<?php

function msgiben2() {
$ben_style2 = '
<div class="quick3-2">
<div id="mib-msg-delay-show">
<div id="mib-msg-delay-hide">
<div id="mib_msg_interface-note-msgmea" class="msg_quick_ben"><span id="close_mib">x</span>'. get_option('msg_interface_benaceur_text') .'</div>
</div>
</div>
</div>

<script type="text/javascript">
document.getElementById("close_mib").addEventListener("click", function(e) {
    e.preventDefault();
    this.parentNode.style.display = "none";
}, false);
</script>

';

if ( get_option('msg_interface_benaceur_align_msg') == 'center' ) {
echo '<div align="center">' 	
. $ben_style2 . 
'</div>';
 }
elseif ( get_option('msg_interface_benaceur_align_msg') == 'right' ) {
echo '<div align="right">' 	
. $ben_style2 . 
'</div>'; 
}
elseif ( get_option('msg_interface_benaceur_align_msg') == 'left' ) {
echo '<div align="left">' 	
. $ben_style2 . 
'</div>';
 }

 }

function add_text_content_benaceur_style2_av($content){
 $ben_style2_av = '
<div class="quick3-2-2">
<div id="mib-msg-delay-show">
<div id="mib-msg-delay-hide">
<div id="mib_msg_interface-note-msgmea-2-av" class="msg_quick_ben">'. get_option('msg_interface_benaceur_text') .'</div>
</div>
</div>
</div>
';

	if(is_single()){
if ( get_option('msg_interface_benaceur_align_msg_content_top') == 'center' ) {
    $custom_content = '
<div align="center">' 	
. $ben_style2_av . 
'</div>		
	';
 }
elseif ( get_option('msg_interface_benaceur_align_msg_content_top') == 'right' ) {
    $custom_content = '
<div align="right">' 	
. $ben_style2_av . 
'</div>		
	';
 }
elseif ( get_option('msg_interface_benaceur_align_msg_content_top') == 'left' ) {
    $custom_content = '
<div align="left">' 	
. $ben_style2_av . 
'</div>		
	';
 }
	
	return $custom_content . $content;
}
return $content;	
}	

function add_text_content_benaceur_style2_ap($content){
 $ben_style2_ap = '
<div class="quick3-2-2">
<div id="mib-msg-delay-show">
<div id="mib-msg-delay-hide">
<div id="mib_msg_interface-note-msgmea-2-ap" class="msg_quick_ben">'. get_option('msg_interface_benaceur_text') .'</div>
</div>
</div>
</div>
';

	if(is_single()){
if ( get_option('msg_interface_benaceur_align_msg_content_bottom') == 'center' ) {
    $custom_content = '
<div align="center">' 	
. $ben_style2_ap . 
'</div>		
	';
 }
elseif ( get_option('msg_interface_benaceur_align_msg_content_bottom') == 'right' ) {
    $custom_content = '
<div align="right">' 	
. $ben_style2_ap . 
'</div>		
	';
 }
elseif ( get_option('msg_interface_benaceur_align_msg_content_bottom') == 'left' ) {
    $custom_content = '
<div align="left">' 	
. $ben_style2_ap . 
'</div>		
	';
 }
	
    return $content . $custom_content;
}
return $content;	
}

if ( $options_f['mib_msg_interface_style_clignotement'] == 'style2' )  {
if ( !get_option( 'msg_interface_benaceur_disable_msg_head') )   {
add_action( 'wp_after_header_benaceur', 'msgiben2' ); }
if ( get_option( 'msg_interface_benaceur_top_content') )   {
add_filter('the_content','add_text_content_benaceur_style2_av'); }
if ( get_option( 'msg_interface_benaceur_bottom_content') )  {
add_filter('the_content','add_text_content_benaceur_style2_ap'); }
 ?>

<style type='text/css'>
<?php if ( !$options_f['mib_msg_interface_disable_this_font'] )  { ?>
@font-face {
    font-family:"DroidKufi_Ben";
    <?php echo 'src: url(' . plugins_url( 'font/droidkufi-regular.eot', __FILE__ ) . '); '; ?>
}
@font-face {
    font-family:"DroidKufi_Ben";
    <?php echo 'src: url(' . plugins_url( 'font/droidkufi-regular.ttf', __FILE__ ) . '); '; ?>
}
<?php } ?>
.quick3-2 {
	margin-top:<?php if (!empty($options_f['mib_msg_margin_top'])) echo $options_f['mib_msg_margin_top'] ; else  echo '10'; ?>px;
	margin-bottom:<?php if (!empty($options_f['mib_msg_padding_top'])) echo $options_f['mib_msg_margin_bottom'] ; else  echo '10'; ?>px;
}
.quick3-2-2 {
	margin-top:0px;
	margin-bottom:8px;
}
.msg_quick_ben { 
    background-color:<?php if (!empty($options_f['mib_msg_background'])) echo $options_f['mib_msg_background'] ; else  echo '#f18bb9'; ?>;
	font-family:<?php if (!empty($options_f['mib_msg_font_family'])) echo $options_f['mib_msg_font_family'] ; else  echo 'DroidKufi_Ben, Arial'; ?>;
	font-size:<?php if (!empty($options_f['mib_msg_font_size'])) echo $options_f['mib_msg_font_size'] ; else  echo '14'; ?>px;
	color:<?php if (!empty($options_f['mib_msg_txt_color'])) echo $options_f['mib_msg_txt_color'] ; else  echo '#000000'; ?>; 
	text-align:<?php if (!empty($options_f['mib_msg_text_align'])) echo $options_f['mib_msg_text_align'] ; else  echo 'center'; ?>;
	font-weight:<?php echo $options_f['mib_msg_font_weight'] ;?>;
	padding-top:<?php if (!empty($options_f['mib_msg_padding_top'])) echo $options_f['mib_msg_padding_top'] ; else  echo '8'; ?>px;
	padding-bottom:<?php if (!empty($options_f['mib_msg_padding_bottom'])) echo $options_f['mib_msg_padding_bottom'] ; else  echo '8'; ?>px;
	padding-right:6px;
	padding-left:6px;
	line-height:<?php if (!empty($options_f['mib_msg_line_height'])) echo $options_f['mib_msg_line_height'] ; else  echo '1.5'; ?>;
	<?php if ( !$options_f['mib_msg_min_width'] ) { ?>
    width:<?php if (!empty($options_f['mib_msg_width'])) echo $options_f['mib_msg_width'] ; else  echo '60%'; ?>;
	<?php } ?>
	min-width:<?php echo $options_f['mib_msg_min_width'] ;?>px;
	height:<?php if (!empty($options_f['mib_msg_height'])) echo $options_f['mib_msg_height'] ; else  echo 'auto'; ?>px;
	border-top:<?php if (!empty($options_f['mib_msg_border_top'])) echo $options_f['mib_msg_border_top'] ; else  echo '1'; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#920f1b'; ?>;
	border-bottom:<?php if (!empty($options_f['mib_msg_border_bottom'])) echo $options_f['mib_msg_border_bottom'] ; else  echo '1'; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#920f1b'; ?>;
	border-right:<?php if (!empty($options_f['mib_msg_border_right'])) echo $options_f['mib_msg_border_right'] ; else  echo '1'; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#920f1b'; ?>;
	border-left:<?php if (!empty($options_f['mib_msg_border_left'])) echo $options_f['mib_msg_border_left'] ; else  echo '1'; ?>px solid <?php if (!empty($options_f['mib_msg_border_color'])) echo $options_f['mib_msg_border_color'] ; else  echo '#920f1b'; ?>;
	border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo '4'; ?>px;
	-moz-border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo '4'; ?>px;
	-webkit-border-radius:<?php if (!empty($options_f['mib_msg_border_radius'])) echo $options_f['mib_msg_border_radius'] ; else  echo '4'; ?>px;
	opacity:<?php if (!empty($options_f['mib_msg_opacity'])) echo $options_f['mib_msg_opacity'] ; else  echo '1'; ?>;
	text-shadow:<?php echo $options_f['mib_msg_text_shadow']; ?> <?php if (!empty($options_f['mib_msg_text_shadow_color'])) echo $options_f['mib_msg_text_shadow_color'] ; else  echo '#000000'; ?>;
}
<?php if ( $options_f['mib_msg_interface_delay_show']  )  { ?>
#mib-msg-delay-show {display: none;}
<?php } ?>

#close_mib { 
    position:relative;
	background-color:;
	color:#000;
	width:13px;
    margin-bottom:-2px;
	border-radius:4px;
    border:1px solid transparent;
	font-family:Arial;font-size:18px;font-weight:bold;text-align:center;
	margin-top:-6px;
    <?php if ( is_rtl() ) { ?>
	float:right;
	<?php } else { ?>
	float:left;
	<?php } ?>
	
	<?php if ( $options_f['mib_msg_interface_disable_b_close'] )  { ?>
    display:none;
	<?php } ?>
}
#close_mib:hover {
    cursor:pointer;
}
</style>

<?php include_once 'temp/scrip-s-h.php'; ?>

<?php } ?>
