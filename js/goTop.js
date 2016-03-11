// JavaScript Document

$(function(){
	$("#goTop").click(function(){
		$("html,body").stop().animate({scrollTop:0},2000);
		return false;
	});
});