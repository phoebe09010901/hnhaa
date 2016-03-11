// JavaScript Document

$(function(){
	$(".light_close,.light_all").click(function(){
		$(".light_all").animate({
			top: '-9999px'
		},350);
		$(".wapper_01").animate({
			opacity: '1'
		},350);
		$(".light_box_01").animate({
			opacity: '0'
		},350);
		$(".light_box_01").animate({
			top: '-9999px'
		},0);
		$(".light_box_02").animate({
			opacity: '0'
		},350);
		$(".light_box_02").animate({
			top: '-9999px'
		},0);
	});
	
	$(".left_block_01").click(function(){
		$(".light_all").animate({
			top: '0px'
		},0);
		$(".wapper_01").animate({
			opacity: '0.2'
		},700);
		$(".light_box_01").animate({
			top: '100px'
		},0);
		$(".light_box_01").animate({
			opacity: '1'
		},700);
	});
	$(".left_block_02").click(function(){
		$(".light_all").animate({
			top: '0px'
		},0);
		$(".wapper_01").animate({
			opacity: '0.2'
		},700);
		$(".light_box_02").animate({
			top: '100px'
		},0);
		$(".light_box_02").animate({
			opacity: '1'
		},700);
	});
});