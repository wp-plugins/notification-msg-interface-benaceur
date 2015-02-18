<?php if ( $options_f['mib_msg_interface_time_a_show'] == 'hour' || $options_f['mib_msg_interface_time_a_show'] == 'minute' ) { ?>	

<script type="text/javascript">
function CheckCookie(mib2){
 if (cookie(mib2)){
  document.getElementById(mib2).style.display='none';
 }
}

function setcookie(mib2,days){
 <?php if ( $options_f['mib_msg_interface_time_a_show'] == 'hour' ) { ?>	
 document.cookie=mib2+'=true;expires='+(new Date(new Date().getTime()+days*<?php echo $options_f['mib_msg_interface_enter_time'] ?>*60*60*1000).toGMTString())+';path=/';
 <?php } elseif ( $options_f['mib_msg_interface_time_a_show'] == 'minute' ) { ?>	
 document.cookie=mib2+'=true;expires='+(new Date(new Date().getTime()+days*<?php echo $options_f['mib_msg_interface_enter_time'] ?>*60*1000).toGMTString())+';path=/';
 <?php } ?>	
 document.getElementById(mib2).style.display='none';
}

function cookie(mib2){
 var re=new RegExp(mib2+'[^;]+','i');
 if (document.cookie.match(re)){
  return document.cookie.match(re)[0].split("=")[1];
 }
 return null;
}

 CheckCookie('mib2');
</script>

<?php } else { ?>	

<script type="text/javascript">
document.getElementById("close_mib_av").addEventListener("click", function(e) {
    e.preventDefault();
    this.parentNode.style.display = "none";
}, false);
</script>

<?php } ?>	
