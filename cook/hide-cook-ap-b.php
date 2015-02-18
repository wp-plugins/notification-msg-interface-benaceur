<?php 
 ob_start();
 
     if ( get_option('msg_interface_benaceur_align_msg_content_bottom') == 'center' ) { ?>
     <div align="center" id="mib3">
     <?php } elseif ( get_option('msg_interface_benaceur_align_msg_content_bottom') == 'right' ) { ?>
     <div align="right" id="mib3">
     <?php } elseif ( get_option('msg_interface_benaceur_align_msg_content_bottom') == 'left' ) { ?>
     <div align="left" id="mib3">
	 <?php } ?>
<div class="quick3-2-2">
<div id="mib-msg-delay-show">
<div id="mib-msg-delay-hide">
<div id="mib_msg_interface-note-msgmea-2-ap" class="msg_quick_ben"><span id="close_mib_ap" onmouseup="setcookie('mib3',1)">

<?php if ($options_f['mib_msg_interface_close_img']=='img' || empty($options_f['mib_msg_interface_close_img']) ) { ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben1.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif ($options_f['mib_msg_interface_close_img']=='img1') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif ($options_f['mib_msg_interface_close_img']=='img2') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben2.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } elseif ($options_f['mib_msg_interface_close_img']=='img3') {  ?>
<img border="0" src="<?php echo '' . plugins_url( '../admin/close/close_ben3.png', __FILE__ ) . ''; ?>" width="16" height="16">
<?php } ?>
</span><?php echo get_option('msg_interface_benaceur_text') ?>
</div>
</div>
</div>
</div>
</div>

<?php if ( $options_f['mib_msg_interface_time_a_show'] == 'hour' || $options_f['mib_msg_interface_time_a_show'] == 'minute' ) { ?>
<script type="text/javascript">
function CheckCookie(mib3){
 if (cookie(mib3)){
  document.getElementById(mib3).style.display='none';
 }
}

function setcookie(mib3,days){
 <?php if ( $options_f['mib_msg_interface_time_a_show'] == 'hour' ) { ?>	
 document.cookie=mib3+'=true;expires='+(new Date(new Date().getTime()+days*<?php echo $options_f['mib_msg_interface_enter_time'] ?>*60*60*1000).toGMTString())+';path=/';
 <?php } elseif ( $options_f['mib_msg_interface_time_a_show'] == 'minute' ) { ?>	
 document.cookie=mib3+'=true;expires='+(new Date(new Date().getTime()+days*<?php echo $options_f['mib_msg_interface_enter_time'] ?>*60*1000).toGMTString())+';path=/';
 <?php } ?>	
 document.getElementById(mib3).style.display='none';
}

function cookie(mib3){
 var re=new RegExp(mib3+'[^;]+','i');
 if (document.cookie.match(re)){
  return document.cookie.match(re)[0].split("=")[1];
 }
 return null;
}

 CheckCookie('mib3');
</script>
<?php } else { ?>	
<script type="text/javascript">
document.getElementById("close_mib_ap").addEventListener("click", function(e) {
    e.preventDefault();
    this.parentNode.style.display = "none";
}, false);
</script>
<?php
}

 $mib3 = ob_get_clean();
