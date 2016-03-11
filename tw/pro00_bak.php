<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>H&H DESIGN 寬合設計</title>

<!-- 基本款 開始 -->
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/word.css">
<script src="js/jquery-1.11.1.min.js"></script>
<!-- 基本款 結束 -->

<link rel="stylesheet" type="text/css" href="css/style_1024up.css" media="screen and (min-width: 1600px)">
<link rel="stylesheet" type="text/css" href="css/style_1024down.css" media="screen and (max-width: 1600px)">

<script type="text/javascript">
$(function(){
	
	<?php for ( $i=0 ; $i<=8 ; $i++ ) { ?>
	$('#b_0<?php echo $i?>').hover(function(){
		$('#p_0<?php echo $i?>').stop().animate({ //滑鼠進來
			opacity: 1,
			top: '0px',
		},0);
	}, function(){
		$('#p_0<?php echo $i?>').stop().animate({ //滑鼠出去
			opacity: 0,
			top:'-9999px'
		},0);
	});
	<? }?>
	
});
</script> 

</head>

<body>

<div class="wapper_01" style=" overflow-y:hidden;">
  	
    <header>
    
    	<?php include('include_top.php');?>
        
  	</header>
    
	<section class="marginTop">
    	
        <div class="proPic_first" id="b_01">
            <div class="proPic_block"><img src="images/pro_01.png"></div>
            <a href="pro_page.php"><div class="proPic_title color_03 font-family_01" id="p_01">長春．偉峰東樾(規劃)</div></a>
        </div>
        <div class="proPic" id="b_02">
            <div class="proPic_block"><img src="images/pro_02.png"></div>
            <a href="pro_page.php"><div class="proPic_title color_03 font-family_01" id="p_02">澳門．湯臣主教山壹號</div></a>
        </div>
        <div class="proPic" id="b_03">
            <div class="proPic_block"><img src="images/pro_03.png"></div>
            <a href="pro_page.php"><div class="proPic_title color_03 font-family_01" id="p_03">高雄．S Hotel</div></a>
        </div>
        <div class="proPic" id="b_04">
            <div class="proPic_block"><img src="images/pro_04.png"></div>
            <a href="pro_page.php"><div class="proPic_title color_03 font-family_01" id="p_04">高雄．大境二</div></a>
        </div>
        
        <div class="proPic_first" id="b_05">
            <div class="proPic_block"><img src="images/pro_05.png"></div>
            <a href="pro_page.php"><div class="proPic_title color_03 font-family_01" id="p_05">高雄．大境一(規劃)</div></a>
        </div>
        <div class="proPic" id="b_06">
            <div class="proPic_block"><img src="images/pro_06.png"></div>
            <a href="pro_page.php"><div class="proPic_title color_03 font-family_01" id="p_06">長春．偉峰南部新城</div></a>
        </div>
        <div class="proPic" id="b_07">
            <div class="proPic_block"><img src="images/pro_07.png"></div>
            <a href="pro_page.php"><div class="proPic_title color_03 font-family_01" id="p_07">高雄．爾承</div></a>
        </div>
        <div class="proPic" id="b_08">
            <div class="proPic_block"><img src="images/pro_08.png"></div>
            <a href="pro_page.php"><div class="proPic_title color_03 font-family_01" id="p_08">長春．偉峰東第(規劃)</div></a>
        </div>
        
    </section>
   
</div>





</body>
</html>