// JavaScript Document

$(document).ready(function(){

	
	$(".pic").click(function(){
		$(".space_picBlock").animate({
			top:'0px',
		},0);
		$(".space_picBlock").animate({
			opacity:'1'
		},500);
	});
	
	$(".space_close").click(function(){
		$(".space_picBlock").animate({
			opacity:'0'
		},500);
		$(".space_picBlock").animate({
			top:'-5000px',
		},0);
	});
	

});