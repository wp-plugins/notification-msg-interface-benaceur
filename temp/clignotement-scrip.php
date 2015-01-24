<script type='text/javascript'> 
var clignotement = function(){ 
   if (document.getElementById('mib_msg_interface-note-msgmea').style.visibility=='visible'){ 
      document.getElementById('mib_msg_interface-note-msgmea').style.visibility='hidden'; 
   } 
   else{ 
   document.getElementById('mib_msg_interface-note-msgmea').style.visibility='visible'; 
   }
}; 
periode = setInterval(clignotement,  <?php if (!empty($options_f['mib_msg_setinterval_clignotement'])) echo $options_f['mib_msg_setinterval_clignotement'] ; else  echo '450';?>); 
</script>
<script type='text/javascript'> 
var clignotement = function(){ 
   if (document.getElementById('mib_msg_interface-note-msgmea-2-av').style.visibility=='visible'){ 
      document.getElementById('mib_msg_interface-note-msgmea-2-av').style.visibility='hidden'; 
   } 
   else{ 
   document.getElementById('mib_msg_interface-note-msgmea-2-av').style.visibility='visible'; 
   } 
}; 
periode = setInterval(clignotement,  <?php if (!empty($options_f['mib_msg_setinterval_clignotement'])) echo $options_f['mib_msg_setinterval_clignotement'] ; else  echo '450';?>); 
</script>
<script type='text/javascript'> 
var clignotement = function(){ 
   if (document.getElementById('mib_msg_interface-note-msgmea-2-ap').style.visibility=='visible'){ 
      document.getElementById('mib_msg_interface-note-msgmea-2-ap').style.visibility='hidden'; 
   } 
   else{ 
   document.getElementById('mib_msg_interface-note-msgmea-2-ap').style.visibility='visible'; 
   } 
}; 
periode = setInterval(clignotement,  <?php if (!empty($options_f['mib_msg_setinterval_clignotement'])) echo $options_f['mib_msg_setinterval_clignotement'] ; else  echo '450';?>); 
</script>
