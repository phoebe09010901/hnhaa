// JavaScript Document

$(function(){
	
	$(".light_close").click(function(){
		$(".wapper_01").animate({
			opacity: '1'
		},700);
		$(".light_box_02").animate({
			opacity: '0'
		},700);
		$(".light_box_02").animate({
			top: '-9999px'
		},0);
	});
	
	
	$(".box_01").click(function(){
		$(".wapper_01").animate({
			opacity: '0.2'
		},700);
		$(".light_box_01").animate({
			top: '167px'
		},0);
		$(".light_box_01").animate({
			opacity: '1'
		},700);
	});
	
});
