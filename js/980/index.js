// JavaScript Document

$(document).ready(function(){
	
	// live 01
	$(".index_banner_left").mouseenter(function(){
		$(".index_banner_left .index_banner_black").animate({
			opacity:'0'
		},500);
	});
	
	$(".index_banner_left").mouseleave(function(){
		$(".index_banner_left .index_banner_black").animate({
			opacity:'0.6'
		},500);
	});
	
	$(".index_banner_right").mouseenter(function(){
		$(".index_banner_right .index_banner_black").animate({
			opacity:'0'
		},500);
	});
	
	$(".index_banner_right").mouseleave(function(){
		$(".index_banner_right .index_banner_black").animate({
			opacity:'0.6'
		},500);
	});
	

});