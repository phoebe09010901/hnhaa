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

<script>
$(function(){
	
	if ( $(window).width() >= '1600' ) {
		
		$(".next_01").click(function(){
			$(".banner_01").animate({
				opacity:'0'
			},500);
			$(".banner_01").animate({
				top:'-11900px'
			},0);
			$(".banner_02").animate({
				top:'119px'
			},0);
			$(".banner_02").animate({
				opacity:'1'
			},500);
		});
		<?php for ( $i=2 ; $i<=4 ; $i++ ) {?>
		$(".pre_0<?php echo $i;?>").click(function(){
			$(".banner_0<?php echo $i;?>").animate({
				opacity:'0'
			},500);
			$(".banner_0<?php echo $i;?>").animate({
				top:'-11900px'
			},0);
			$(".banner_0<?php echo $i-1;?>").animate({
				top:'119px'
			},0);
			$(".banner_0<?php echo $i-1;?>").animate({
				opacity:'1'
			},500);
		});
		$(".next_0<?php echo $i;?>").click(function(){
			$(".banner_0<?php echo $i;?>").animate({
				opacity:'0'
			},500);
			$(".banner_0<?php echo $i;?>").animate({
				top:'-11900px'
			},0);
			$(".banner_0<?php echo $i+1;?>").animate({
				top:'119px'
			},0);
			$(".banner_0<?php echo $i+1;?>").animate({
				opacity:'1'
			},500);
		});
		<?php }?>
		$(".pre_05").click(function(){
			$(".banner_05").animate({
				opacity:'0'
			},500);
			$(".banner_05").animate({
				top:'-11900px'
			},0);
			$(".banner_04").animate({
				top:'119px'
			},0);
			$(".banner_04").animate({
				opacity:'1'
			},500);
		});
		
	} else {
		
		$(".next_01").click(function(){
			$(".banner_01").animate({
				opacity:'0'
			},500);
			$(".banner_01").animate({
				top:'-11900px'
			},0);
			$(".banner_02").animate({
				top:'79px'
			},0);
			$(".banner_02").animate({
				opacity:'1'
			},500);
		});
		<?php for ( $i=2 ; $i<=4 ; $i++ ) {?>
		$(".pre_0<?php echo $i;?>").click(function(){
			$(".banner_0<?php echo $i;?>").animate({
				opacity:'0'
			},500);
			$(".banner_0<?php echo $i;?>").animate({
				top:'-11900px'
			},0);
			$(".banner_0<?php echo $i-1;?>").animate({
				top:'79px'
			},0);
			$(".banner_0<?php echo $i-1;?>").animate({
				opacity:'1'
			},500);
		});
		$(".next_0<?php echo $i;?>").click(function(){
			$(".banner_0<?php echo $i;?>").animate({
				opacity:'0'
			},500);
			$(".banner_0<?php echo $i;?>").animate({
				top:'-11900px'
			},0);
			$(".banner_0<?php echo $i+1;?>").animate({
				top:'79px'
			},0);
			$(".banner_0<?php echo $i+1;?>").animate({
				opacity:'1'
			},500);
		});
		<?php }?>
		$(".pre_05").click(function(){
			$(".banner_05").animate({
				opacity:'0'
			},500);
			$(".banner_05").animate({
				top:'-11900px'
			},0);
			$(".banner_04").animate({
				top:'79px'
			},0);
			$(".banner_04").animate({
				opacity:'1'
			},500);
		});
	
	}
	
});
</script>

</head>

<body>

<div class="wapper_01" style=" overflow-y:hidden;">
  	
    <header>
    
    	<?php include('include_top.php');?>
        
  	</header>
    
</div>

<section class="sectionWidth" style="margin: 0 auto;">

    <?php for ( $i=1 ; $i<=5 ; $i++ ) {?>
        <div class="banner_0<?php echo $i;?>">
            <div class="page_total color_05 font-family_03">/&nbsp;05</div>
            <div class="page_0<?php echo $i;?> color_04 font-family_03">0<?php echo $i;?>&nbsp;</div>
            
            <div class="clear"></div>
            
            <div class="banner_block">
                <a href="javascript:;"><div class="pre_0<?php echo $i;?>"></div></a>
                <div class="pic_0<?php echo $i;?>"><img src="banner/banner_0<?php echo $i;?>.png"></div>
                <a href="javascript:;"><div class="next_0<?php echo $i;?>"></div></a>
            </div>
        </div>
    <? }?>
    
    <div class="clear"></div>
    
    <div class="case_info color_01 font-family_01 line-height_40">
        <div class="case_name">Wei Feng Tong Yui</div>
        <div class="case_Line">|</div>
        <div class="case_place">基地位置：吉林長春</div>
        <div class="case_Line">|</div>
        <div class="case_area">基地面積：<span class="font-family_03">517,500 sqm</span></div>
        <div class="case_totalArea">總樓地板面積：<span class="font-family_03">620,000 sqm</span></div>
        <div class="case_periodDesign">設計期間：<span class="font-family_03">2011/11~2014/11</span></div>
        <div class="case_periodWork">施工期間：<span class="font-family_03">2013/04~2016/06</span>(預定)</div>
    </div>
    
</section>

</body>
</html>