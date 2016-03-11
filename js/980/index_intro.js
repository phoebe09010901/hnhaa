// JavaScript Document 980

$(document).ready(function(){
	
	$("body").css("background-color", "#2f2725");　//動畫咖啡底圖出現
	$(".wapper_01").animate({//主區隱藏
		top:'0px'
    },0);
	$(".wapper_01").animate({//主區隱藏
		opacity:'1'
    },1000);
	$(".intro_01").animate({//動畫咖啡底圖出現
		opacity:'1'
    },0);
	$(".introPic_02").animate({//花瓶圖片 漸淡出現
		opacity:'1'
    },2000);
	$(".introPic_02").delay(3000).animate({//花瓶圖片 放大
		width:'750px',
		height:'1180px',
		top:'-580px',
		marginLeft:'-363px'
    },3000);
	$(".introPic_02").delay(2850).animate({//花瓶圖片 漸淡消失
		opacity:'0'
    },2000);
	
});


$(document).ready(function(){
	
	$(".introPic_01").delay(8000).animate({//兩排圖片 漸淡出現
		opacity:'1'
    },2000);
	$(".introPic_03").delay(11000).animate({//logo 漸淡出現
		opacity:'1'
    },2000);

});


$(document).ready(function(){
	
	$(".intro_01").delay(16000).animate({//動畫咖啡底圖透明
		opacity:'0'
    },3000);
	
	$(".intro_01").animate({//動畫咖啡底圖透明
		top:'-5000px'
    },0);
	$(".wapper_01").animate({//主區顯示
		opacity:'1',
		top:'0px'
    },0);
	$("body").css("background-color", "#d1cfc9");　//動畫咖啡底圖隱藏

});



/*
$(document).ready(function(){
	
	$(".introPic_02").delay(3000).animate({
		width:'570px',
		height:'936px',
		marginLeft:'-285px', 
		marginTop:'-468px',
		opacity:'1'
    },2000);
	
});
*/

/*
$(document).ready(function(){
	
	var div=$(".intro_01");
  	div.delay(6000).animate({opacity:'0'},1000);
	div.animate({top:'-5000px'},0);
  	
	
});
*/