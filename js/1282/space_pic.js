// JavaScript Document

$(document).ready(function(){

	
	$(".space_block .content_area .title_03 .pic").click(function(){
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
	
	
		
		
	
	
	
	
	$(".space_pre_01").click(function(){
		
	});
	
	$(".space_next_01").click(function(){
		$(".space_pic_01").animate({
			opacity:'0'
		},500);
		$(".space_pic_01").animate({
			top:'-5000px'
		},0);
		$(".space_pic_02").animate({
			top:'50%'
		},0);
		$(".space_pic_02").animate({
			opacity:'1'
		},500);
	});
	
	
	
	
	
	$(".space_pre_02").click(function(){
		$(".space_pic_02").animate({
			opacity:'0'
		},500);
		$(".space_pic_02").animate({
			top:'-5000px'
		},0);
		$(".space_pic_01").animate({
			top:'50%'
		},0);
		$(".space_pic_01").animate({
			opacity:'1'
		},500);
	});
	
	$(".space_next_02").click(function(){
		$(".space_pic_02").animate({
			opacity:'0'
		},500);
		$(".space_pic_02").animate({
			top:'-5000px'
		},0);
		$(".space_pic_03").animate({
			top:'50%'
		},0);
		$(".space_pic_03").animate({
			opacity:'1'
		},500);
	});
	
	
	
	
	$(".space_pre_03").click(function(){
		$(".space_pic_03").animate({
			opacity:'0'
		},500);
		$(".space_pic_03").animate({
			top:'-5000px'
		},0);
		$(".space_pic_02").animate({
			top:'50%'
		},0);
		$(".space_pic_02").animate({
			opacity:'1'
		},500);
	});
	
	$(".space_next_03").click(function(){
		$(".space_pic_03").animate({
			opacity:'0'
		},500);
		$(".space_pic_03").animate({
			top:'-5000px'
		},0);
		$(".space_pic_04").animate({
			top:'50%'
		},0);
		$(".space_pic_04").animate({
			opacity:'1'
		},500);
	});
	
	
	
	
	$(".space_pre_04").click(function(){
		$(".space_pic_04").animate({
			opacity:'0'
		},500);
		$(".space_pic_04").animate({
			top:'-5000px'
		},0);
		$(".space_pic_03").animate({
			top:'50%'
		},0);
		$(".space_pic_03").animate({
			opacity:'1'
		},500);
	});
	
	$(".space_next_04").click(function(){
		
	});
	

});