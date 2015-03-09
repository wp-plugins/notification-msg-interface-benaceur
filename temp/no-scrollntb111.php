
<?php

$ntb_color_back_title = get_option( 'news_ticker_benaceur_color_back_title' );
$ntb_color_text_back = get_option( 'news_ticker_benaceur_color_text_back' );
$ntb_color_text_title = get_option( 'news_ticker_benaceur_color_text_title' );
?>
<style>
	#ntbne {
		float: left;
		margin-left: 0;
		<?php  if($ntb_st == 'TickerNTB' || $ntb_st == '' ){ ?>
		padding: 4px 0 3px 0;
		<?php } else { ?>
		padding: 0px 0 3px 0;
		<?php } ?>
	}
	#ntbne li {
		list-style: none;
		margin-top:4px;
		display: block;
	}
	.news-ticker-ntb ul a {
		display:block;
		white-space:nowrap;
	    color:<?php if (!empty($ntb_color_text_back)) { echo $ntb_color_text_back; } else {echo "#000000";} ?>;
		text-decoration: none!important;
	}
	.news-ticker-ntb ul a:hover {
		color: #333;
		text-decoration: none!important;
	}
	.news-ticker-ntb span {
		color:<?php if (!empty($ntb_color_text_title)) { echo $ntb_color_text_title; } else {echo "#FFFFFF";} ?>;
		background-color:<?php if (!empty($ntb_color_back_title)) { echo $ntb_color_back_title; } else {echo "#CE0000";} ?>;
		display:block;
		float:left;
		padding:4px 10px 2px;
	    font-family: Arial;
		font-size:12pt;
		font-weight: bold;
		margin-right: 10px;
		-moz-box-shadow: 0px 1px 3px 0 #b5b5b5;
		-webkit-box-shadow: 0px 1px 3px 0 #B5B5B5;
		height:32px;
	}
	.news-ticker-ntb {
	border-radius: 1px;
	-moz-border-radius: 1px;
	-webkit-border-radius: 1px;
	box-shadow: 0px 1px 3px 0 #B5B5B5;
	-moz-box-shadow: 0px 1px 3px 0 #b5b5b5;
	-webkit-box-shadow: 0px 1px 3px 0 #B5B5B5;
	width:100%;
	height:32px;
	margin:-5px auto 25px;
	overflow:hidden;
	position:relative;	
	}
</style>
