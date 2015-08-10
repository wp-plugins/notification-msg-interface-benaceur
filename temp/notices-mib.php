<?php
/* Display a notice that can be dismissed */
add_action('admin_notices', 'MIB_notice');

function MIB_notice() {

if ( current_user_can( 'administrator' ) )
{

	global $current_user;
	$user_id = $current_user->ID;
    $nden = nab_10_08_en_mib;
	
	if ( ! get_user_meta($user_id, 'MIB_notice_ignore_n') ) {
		    ?>
			<div class="updated" id="<?php echo $nden;  ?>" style="margin-top:40px;"><p>
			<span class="hov-mib-en" onmouseup="setcookie('<?php echo $nden;  ?>',1)" style="color:#009999;"><strong><?php _e('Hide', 'notification-msg-interface-benaceur'); ?> &nbsp;</strong></span>
			<?php _e('After this update Click Ctrl+F5 to purge the cache of this page ( For those who have installed the previous version(s) only )', 'notification-msg-interface-benaceur'); ?>
			</p></div>
			
<style>.hov-mib-en:hover {cursor:pointer;}</style>			
			
<script type="text/javascript">
function CheckCookieMib(<?php echo $nden;  ?>){
 if (cookie(<?php echo $nden;  ?>)){
  document.getElementById(<?php echo $nden;  ?>).style.display='none';
 }
}

function setcookie(<?php echo $nden;  ?>,days){
 document.cookie=<?php echo $nden;  ?>+'=true;expires='+(new Date(new Date().getTime()+(1000*60*60*24*30*12)).toGMTString())+';path=/'; //one years
 document.getElementById(<?php echo $nden;  ?>).style.display='none';
}

function cookie(<?php echo $nden;  ?>){
 var re=new RegExp(<?php echo $nden;  ?>+'[^;]+','i');
 if (document.cookie.match(re)){
  return document.cookie.match(re)[0].split("=")[1];
 }
 return null;
}

 CheckCookieMib('<?php echo $nden;  ?>');
</script>

<?php
}
}	
}
?>
