<?php if ( $options_f['mib_msg_interface_delay_show']  )  { ?>
<script type = "text/javascript">
 $(document).ready(function(){
   setTimeout(function(){
  $("div#mib-msg-delay-show").fadeIn(<?php if (!empty($options_f['mib_msg_interface_delay_show_anim'])) echo $options_f['mib_msg_interface_delay_show_anim'] ; else  echo '3000'; ?>, function () {
      });
 
}, <?php  echo $options_f['mib_msg_interface_delay_show'] ;  ?>);
 });
</script>
<?php } ?>

<?php if ( $options_f['mib_msg_interface_delay_hide']  )  { ?>
<script type = "text/javascript">
 $(document).ready(function(){
   setTimeout(function()  {
  $("div#mib-msg-delay-hide").fadeOut(<?php if (!empty($options_f['mib_msg_interface_delay_hide_anim'])) echo $options_f['mib_msg_interface_delay_hide_anim'] ; else  echo '2000'; ?>, function () {
  $("div#mib-msg-delay-hide").remove();
      });
}, <?php  echo $options_f['mib_msg_interface_delay_hide'] ;  ?>);
 });
</script>
<?php } ?>
