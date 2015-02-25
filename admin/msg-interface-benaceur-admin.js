/*-- Admin Script
------------------------------------------*/
var $j_MIB = jQuery.noConflict();
$j_MIB(document).ready(function(){

	$j_MIB('#msg_interface_benaceur_font .handlediv,.hndle').click(function(){
		$j_MIB(this).parent().find('.inside').slideToggle("fast");
	});
	
	if ($j_MIB("#msg_interface_benaceur_font").length){
		$j_MIB('.msg_interface_benaceur_colorScheme1').farbtastic('#msg_interface_benaceur_colorScheme1');
		$j_MIB('.msg_interface_benaceur_colorScheme2').farbtastic('#msg_interface_benaceur_colorScheme2');
		$j_MIB('.msg_interface_benaceur_txtclr').farbtastic('#msg_interface_benaceur_txtclr');
		$j_MIB('.msg_interface_benaceur_colorBorder').farbtastic('#msg_interface_benaceur_colorBorder');
		$j_MIB('.msg_interface_benaceur_textshadowcolor').farbtastic('#msg_interface_benaceur_textshadowcolor');
	}
	$j_MIB('html').click(function() {$j_MIB("#msg_interface_benaceur_font .farbtastic").fadeOut('fast');});
	
	$j_MIB('#msg_interface_benaceur_font .msg_interface_benaceur_colsel').click(function(event){
		$j_MIB("#msg_interface_benaceur_font .farbtastic").hide();
		$j_MIB(this).find(".farbtastic").fadeIn('fast');event.stopPropagation();
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
	
function showIt_mib() {
	$("#Slider").toggleClass("slidedown slideup");
document.getElementById("slidedown slideup").style.display = "block";
}
setTimeout("showIt_mib()",3500);
// h settings-updated 5 seconds later			

// style select for opera (mib)			
var isOpera_mib = !!window.opera || navigator.userAgent.indexOf(" OPR/") >= 0;
if (isOpera_mib) {
document.write("<style>#wpcontent-benaceur select {color:#000;background-color:#909090;}</style>");
}
// style select for opera (mib)			
