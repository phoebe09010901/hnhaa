// JavaScript Document

$(function(){
	$(".light_close").click(function(){
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
		$(".wapper_01").animate({
			opacity: '0.2'
		},700);
		$(".light_box_01").animate({
			top: '20%'
		},0);
		$(".light_box_01").animate({
			opacity: '1'
		},700);
	});
	$(".left_block_02").click(function(){
		$(".wapper_01").animate({
			opacity: '0.2'
		},700);
		$(".light_box_02").animate({
			top: '20%'
		},0);
		$(".light_box_02").animate({
			opacity: '1'
		},700);
	});
});