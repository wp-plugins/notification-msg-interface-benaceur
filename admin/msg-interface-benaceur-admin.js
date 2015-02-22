/*-- Admin Script
------------------------------------------*/
var $j = jQuery.noConflict();
$j(document).ready(function(){

	$j('#msg_interface_benaceur_font .handlediv,.hndle').click(function(){
		$j(this).parent().find('.inside').slideToggle("fast");
	});
	
	if ($j("#msg_interface_benaceur_font").length){
		$j('.msg_interface_benaceur_colorScheme1').farbtastic('#msg_interface_benaceur_colorScheme1');
		$j('.msg_interface_benaceur_colorScheme2').farbtastic('#msg_interface_benaceur_colorScheme2');
		$j('.msg_interface_benaceur_txtclr').farbtastic('#msg_interface_benaceur_txtclr');
		$j('.msg_interface_benaceur_colorBorder').farbtastic('#msg_interface_benaceur_colorBorder');
		$j('.msg_interface_benaceur_textshadowcolor').farbtastic('#msg_interface_benaceur_textshadowcolor');
	}
	$j('html').click(function() {$j("#msg_interface_benaceur_font .farbtastic").fadeOut('fast');});
	
	$j('#msg_interface_benaceur_font .msg_interface_benaceur_colsel').click(function(event){
		$j("#msg_interface_benaceur_font .farbtastic").hide();
		$j(this).find(".farbtastic").fadeIn('fast');event.stopPropagation();
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
