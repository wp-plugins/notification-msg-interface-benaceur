<?php if ( $options_f['mib_msg_interface_time_a_show'] == 'hour' || $options_f['mib_msg_interface_time_a_show'] == 'minute' ) { ?>	

<script type="text/javascript">
function CheckCookie(mib1){
 if (cookie(mib1)){
  document.getElementById(mib1).style.display='none';
 }
}

function setcookie(mib1,days){
 <?php if ( $options_f['mib_msg_interface_time_a_show'] == 'hour' ) { ?>	
 document.cookie=mib1+'=true;expires='+(new Date(new Date().getTime()+days*<?php echo $options_f['mib_msg_interface_enter_time'] ?>*60*60*1000).toGMTString())+';path=/';
 <?php } elseif ( $options_f['mib_msg_interface_time_a_show'] == 'minute' ) { ?>	
 document.cookie=mib1+'=true;expires='+(new Date(new Date().getTime()+days*<?php echo $options_f['mib_msg_interface_enter_time'] ?>*60*1000).toGMTString())+';path=/';
 <?php } ?>	
 document.getElementById(mib1).style.display='none';
}

function cookie(mib1){
 var re=new RegExp(mib1+'[^;]+','i');
 if (document.cookie.match(re)){
  return document.cookie.match(re)[0].split("=")[1];
 }
 return null;
}

 CheckCookie('mib1');
</script>

<?php } else { ?>	

<script type="text/javascript">
document.getElementById("close_mib").addEventListener("click", function(e) {
    e.preventDefault();
    this.parentNode.style.display = "none";
}, false);
</script>

<?php } ?>	







