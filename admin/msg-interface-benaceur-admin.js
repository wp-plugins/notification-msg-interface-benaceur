/*-- Admin Script
------------------------------------------*/
jQuery(document).ready(function(){

	jQuery('#msg_interface_benaceur_font .handlediv,.hndle').click(function(){
		jQuery(this).parent().find('.inside').slideToggle("fast");
	});
	
	if (jQuery("#msg_interface_benaceur_font").length){
		jQuery('.msg_interface_benaceur_colorScheme1').farbtastic('#msg_interface_benaceur_colorScheme1');
		jQuery('.msg_interface_benaceur_colorScheme2').farbtastic('#msg_interface_benaceur_colorScheme2');
		jQuery('.msg_interface_benaceur_txtclr').farbtastic('#msg_interface_benaceur_txtclr');
		jQuery('.msg_interface_benaceur_colorBorder').farbtastic('#msg_interface_benaceur_colorBorder');
		jQuery('.msg_interface_benaceur_textshadowcolor').farbtastic('#msg_interface_benaceur_textshadowcolor');
	}
	jQuery('html').click(function() {jQuery("#msg_interface_benaceur_font .farbtastic").fadeOut('fast');});
	
	jQuery('#msg_interface_benaceur_font .msg_interface_benaceur_colsel').click(function(event){
		jQuery("#msg_interface_benaceur_font .farbtastic").hide();
		jQuery(this).find(".farbtastic").fadeIn('fast');event.stopPropagation();
	});
	
});

// h/s settings-updated 5 seconds later			
    window.setTimeout(function() {
	$("#Slider").toggleClass("slidedown slideup");
        // This will execute 5 seconds later
        var label = document.getElementById('slidedown slideup');
        if (label != null) {
            label.style.display = 'none';
        }
    }, 600);
	
function showIt() {
	$("#Slider").toggleClass("slidedown slideup");
document.getElementById("slidedown slideup").style.display = "block";
}
setTimeout("showIt()",3500);
// h settings-updated 5 seconds later			
