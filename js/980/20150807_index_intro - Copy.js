// JavaScript Document 980

$(function(){
	
	setTimeout(function () {
		$("body").css("background-color", "#2f2725");　//動畫咖啡底圖出現
		$(".wapper_01").animate({//主區隱藏
			top:'0px',
			opacity:'0'
		},0);
		$(".intro_01").animate({//動畫咖啡底圖出現
			opacity:'1'
		},0);
		
		$(".introPic_02").animate({//花瓶圖片 漸淡出現
			opacity:'1'
		},1000);
		
		$(".introPic_03").animate({//logo 漸淡出現
			opacity:'1'
		},1000);
		$(".introPic_03").delay(4000).animate({//logo 消失
			opacity:'0'
		},3000);
		
		$(".introPic_10").delay(4000).animate({//進入頁面 出現
			top:'466px'
		},3000);
		$(".introPic_10").animate({//進入頁面 出現
			opacity:'1'
		},3000);
		
		$(".tauch_area").delay(4000).animate({//tauch_area 出現
			top:'0',
			opacity:'1'
		},0);
		
		$(".introPic_04").animate({//文字 漸淡出現
			top:'520px',
			opacity:'1'
		},1000);
		$(".introPic_05").delay(500).animate({//文字 漸淡出現
			top:'570px',
			opacity:'1'
		},1000);
		$(".introPic_06").delay(1000).animate({//文字 漸淡出現
			top:'595px',
			opacity:'1'
		},1000);
		$(".introPic_07").delay(1500).animate({//文字 漸淡出現
			top:'620px',
			opacity:'1'
		},1000);
		$(".introPic_08").delay(2000).animate({//文字 漸淡出現
			top:'645px',
			opacity:'1'
		},1000);
		$(".introPic_09").delay(2500).animate({//文字 漸淡出現
			top:'670px',
			opacity:'1'
		},1000);
	}, 0);
	
	
	//設定 進入頁面 及 周圍
	$(".introPic_10,.tauch_area").click(function(){
		$(".wapper_01").animate({//主區隱藏
			top:'0px'
		},0);
		$(".wapper_01").animate({//主區隱藏
			opacity:'1'
		},0);
		$("body").css("background-color", "#d1cfc9");　//動畫咖啡底圖隱藏
		
		$(".introPic_10").animate({//進入頁面 消失
			opacity:'0'
		},1000);
		$(".introPic_02").animate({//花瓶圖片 放大
			width:'750px',
			height:'1188px',
			top:'-600px',
			marginLeft:'-363px'
		},3000);
		
		$(".introPic_04").delay(2000).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".introPic_05").delay(2300).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".introPic_06").delay(2600).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".introPic_07").delay(2900).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".introPic_08").delay(3200).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".introPic_09").delay(3500).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".intro_01").animate({//動畫咖啡底圖透明
			opacity:'0'
		},5000);
		
		$(".intro_01").animate({//動畫咖啡底圖透明
			top:'-5000px'
		},0);
	}, 15000);
	});
	
	
	setTimeout(function () { 
		$(".wapper_01").animate({//主區隱藏
			top:'0px'
		},0);
		$(".wapper_01").animate({//主區隱藏
			opacity:'1'
		},0);
		$("body").css("background-color", "#d1cfc9");　//動畫咖啡底圖隱藏
		
		$(".introPic_10").animate({//進入頁面 消失
			opacity:'0'
		},1000);
		$(".introPic_02").animate({//花瓶圖片 放大
			width:'750px',
			height:'1188px',
			top:'-600px',
			marginLeft:'-363px'
		},3000);
		
		$(".introPic_04").delay(2000).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".introPic_05").delay(2300).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".introPic_06").delay(2600).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".introPic_07").delay(2900).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".introPic_08").delay(3200).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".introPic_09").delay(3500).animate({//文字 漸淡消失
			opacity:'0'
		},500);
		$(".intro_01").animate({//動畫咖啡底圖透明
			opacity:'0'
		},5000);
		
		$(".intro_01").animate({//動畫咖啡底圖透明
			top:'-5000px'
		},0);
	}, 15000);

});