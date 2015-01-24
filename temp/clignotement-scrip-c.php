<script type="text/javascript"> 
var signe = -1; 
var clignotementFading = function(){ 
   var obj = document.getElementById('style-clignotement-style3'); 
   if (obj.style.opacity >= 0.96){ 
      signe = -1; 
   } 
   if (obj.style.opacity <= 0.04){ 
      signe = 1; 
   } 
   obj.style.opacity = (obj.style.opacity * 1) + (signe * 0.04); 
}; 

// mise en place de l appel de la fonction toutes les 0.085 secondes 
// Pour arrêter le clignotement : clearInterval(periode); 
periode = setInterval(clignotementFading, <?php if (!empty($options_f['mib_msg_setinterval_clignotement_s3'])) echo $options_f['mib_msg_setinterval_clignotement_s3'] ; else  echo '55';?> ); 
</script>
<script type="text/javascript"> 
var signe = -1; 
var clignotementFading = function(){ 
   var obj = document.getElementById('style-clignotement-style3-2'); 
   if (obj.style.opacity >= 0.96){ 
      signe = -1; 
   } 
   if (obj.style.opacity <= 0.04){ 
      signe = 1; 
   } 
   obj.style.opacity = (obj.style.opacity * 1) + (signe * 0.04); 
}; 

// mise en place de l appel de la fonction toutes les 0.085 secondes 
// Pour arrêter le clignotement : clearInterval(periode); 
periode = setInterval(clignotementFading, <?php if (!empty($options_f['mib_msg_setinterval_clignotement_s3'])) echo $options_f['mib_msg_setinterval_clignotement_s3'] ; else  echo '55';?> ); 
</script>
<script type="text/javascript"> 
var signe = -1; 
var clignotementFading = function(){ 
   var obj = document.getElementById('style-clignotement-style3-2-1'); 
   if (obj.style.opacity >= 0.96){ 
      signe = -1; 
   } 
   if (obj.style.opacity <= 0.04){ 
      signe = 1; 
   } 
   obj.style.opacity = (obj.style.opacity * 1) + (signe * 0.04); 
}; 

// mise en place de l appel de la fonction toutes les 0.085 secondes 
// Pour arrêter le clignotement : clearInterval(periode); 
periode = setInterval(clignotementFading, <?php if (!empty($options_f['mib_msg_setinterval_clignotement_s3'])) echo $options_f['mib_msg_setinterval_clignotement_s3'] ; else  echo '55';?> ); 
</script>
