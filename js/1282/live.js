// JavaScript Document

$(document).ready(function(){
	
	// live 01
	$(".live_banner_left .live_banner_title").mouseenter(function(){
		$(".live_banner_left .live_banner_black").animate({
			opacity:'0.6'
		},500);
	});
	
	$(".live_banner_left .live_banner_title").mouseleave(function(){
		$(".live_banner_left .live_banner_black").animate({
			opacity:'0'
		},500);
	});
	
	$(".live_banner_right .live_banner_title").mouseenter(function(){
		$(".live_banner_right .live_banner_black").animate({
			opacity:'0.6'
		},500);
	});
	
	$(".live_banner_right .live_banner_title").mouseleave(function(){
		$(".live_banner_right .live_banner_black").animate({
			opacity:'0'
		},500);
	});
	
	
	//live 02
	$(".live_banner_left_01").mouseenter(function(){
		$(".live_banner_left_01 .live_banner_black").animate({
			opacity:'0'
		},500);
	});
	
	$(".live_banner_left_01").mouseleave(function(){
		$(".live_banner_left_01 .live_banner_black").animate({
			opacity:'0.6'
		},500);
	});
	
	$(".live_banner_left_02").mouseenter(function(){
		$(".live_banner_left_02 .live_banner_black").animate({
			opacity:'0'
		},500);
	});
	
	$(".live_banner_left_02").mouseleave(function(){
		$(".live_banner_left_02 .live_banner_black").animate({
			opacity:'0.6'
		},500);
	});
	
	$(".live_banner_left_03").mouseenter(function(){
		$(".live_banner_left_03 .live_banner_black").animate({
			opacity:'0'
		},500);
	});
	
	$(".live_banner_left_03").mouseleave(function(){
		$(".live_banner_left_03 .live_banner_black").animate({
			opacity:'0.6'
		},500);
	});
	
	$(".live_banner_left_04").mouseenter(function(){
		$(".live_banner_left_04 .live_banner_black").animate({
			opacity:'0'
		},500);
	});
	
	$(".live_banner_left_04").mouseleave(function(){
		$(".live_banner_left_04 .live_banner_black").animate({
			opacity:'0.6'
		},500);
	});

});