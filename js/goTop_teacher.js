$(function(){
	
	$(window).scroll(function(){
		
		var HEIGHT = $(window).scrollTop() + $(window).innerHeight()-100; //$(window).scrollTop 視窗捲軸座標
		
		if( $(window).scrollTop() > 200 ){
			//飛出來
			$("#TOP").stop().animate({top:HEIGHT});
			
		}else{
			//飛回去
			$("#TOP").stop().animate({top:-100});
			
		}
		
	});
	
	$("#TOP").click(function goTop(){
		
		$("html,body").animate({scrollTop:0},1000);
		
	});
		 
});