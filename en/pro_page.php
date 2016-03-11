<?
	require_once ("../admin/includes/xprog.php");
	$Conn = DB_Open();		
	
	list($html_title, $keywords, $description) = xheader_r1($Conn, "tw");

	$id = (int)$_GET['id'];
	
	$sql1  = "select * from hnhaa_album_photos where ";
	$sql1 .= "album_id = '$id' ";				
	$sql1 .= "order by sort desc, title asc ";	
	//echo $sql1;
	
	$rl1 = mysql_query($sql1, $Conn);
	
	$tmpC = mysql_num_rows($rl1);
	
	if($tmpC == 0){
?>
<script>location.replace('index.php');</script>
<?		
		exit;	
	}
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta name="keywords" content="<?=$keywords?>">
<meta name="description" content="<?=$description?>" />
<title><?=$html_title?></title>
<link rel="icon" type="image/png" href="favicon.png" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

<!-- 基本款 開始 -->
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/word.css">
<script src="js/jquery-1.11.1.min.js"></script>
<!-- 基本款 結束 -->

<link rel="stylesheet" type="text/css" href="css/style_1024up.css" media="screen and (min-width: 1600px)">
<link rel="stylesheet" type="text/css" href="css/style_1024down.css" media="screen and (max-width: 1600px)">

<script>
<?	if($tmpC > 1){	?>
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
		
		<?php for ( $i=2 ; $i<$tmpC ; $i++ ) {?>
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
		
		$(".pre_0<?=$tmpC?>").click(function(){
			$(".banner_0<?=$tmpC?>").animate({
				opacity:'0'
			},500);
			$(".banner_0<?=$tmpC?>").animate({
				top:'-11900px'
			},0);
			$(".banner_0<?=$tmpC - 1?>").animate({
				top:'119px'
			},0);
			$(".banner_0<?=$tmpC - 1?>").animate({
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
		
		<?php for ( $i=2 ; $i<$tmpC ; $i++ ) {?>
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
		
		$(".pre_0<?=$tmpC?>").click(function(){
			$(".banner_0<?=$tmpC?>").animate({
				opacity:'0'
			},500);
			$(".banner_0<?=$tmpC?>").animate({
				top:'-11900px'
			},0);
			$(".banner_0<?=$tmpC - 1?>").animate({
				top:'79px'
			},0);
			$(".banner_0<?=$tmpC - 1?>").animate({
				opacity:'1'
			},500);
		});	
	}	
});
<?	}	?>
</script>

</head>

<body>

<div class="wapper_01" style=" overflow-y:hidden;">
  	
    <header>
    
    	<?php include('include_top.php');?>
        
  	</header>
    
</div>

<section class="sectionWidth" style="margin: 0 auto;">

    <?php 
		$sql1  = "select * from hnhaa_album_photos where ";
		$sql1 .= "album_id = '$id' ";				
		$sql1 .= "order by sort desc, title asc ";			
		//echo $sql1 . "<br>";
		
		$rl1 = mysql_query($sql1, $Conn);		
		$tmpC = mysql_num_rows($rl1);
		
		$i = 1;
		if($tmpC < 10){	$tmpC = "0" . $tmpC; }
		while($row1 = mysql_fetch_array($rl1, MYSQL_ASSOC)){
	?>
        <div class="banner_0<?php echo $i;?>">
            <div class="page_total color_05 font-family_03">/&nbsp;<?=$tmpC?></div>
            <div class="page_0<?php echo $i;?> color_04 font-family_03"><?php if($i < 10){	echo "0" . $i;	}	else	{ echo $i; }	?>&nbsp;&nbsp;</div>
            
            <div class="clear"></div>
            
            <div class="banner_block">
                <a href="javascript:;"><div class="pre_0<?php echo $i;?>"></div></a>
                <div class="pic_0<?php echo $i;?>"><img src="/album_photos/<?=$id?>/<?=$row1['file1']?>"></div>
                <a href="javascript:;"><div class="next_0<?php echo $i;?>"></div></a>
            </div>
        </div>
    <? 
			$i++;
		}
	?>
    
    <div class="clear"></div>
    <?php 
		$sql1  = "select * from hnhaa_album where ";
		$sql1 .= "id = '$id' ";				
		
		$rl1 = mysql_query($sql1, $Conn);		

		if(mysql_num_rows($rl1) > 0){
		$row1 = mysql_fetch_array($rl1, MYSQL_ASSOC);		
	?>
        
    <div class="case_info color_01 font-family_03">
        <div class="case_name line-height_40"><?=$row1['title2']?></div>
        <div class="case_Line line-height_40">|</div>
        <div class="case_place line-height_40">Location：<?=$row1['building_site_en']?></div>
        <div class="case_area line-height_40">Site Area：<span class="font-family_03"><?=$row1['construction_area']?> sqm</span></div>
        <div class="case_totalArea line-height_40">Gross Floor Area：<span class="font-family_03"><?=$row1['total_floor_area']?> sqm</span></div>
        <div class="case_periodDesign line-height_40">Design Period：<span class="font-family_03"><?=$row1['datetime1']?></span></div>
        <div class="case_periodWork line-height_40">Construction Period：<span class="font-family_03"><?=$row1['datetime2_en']?></span></div>
        <div class="clear"></div>
        <div class="case_info_02 color_01"><?=nl2br(str_replace(" ","&nbsp;",$row1['others_en']))?></div>
    </div>
    <?	}	?>
</section>

</body>
</html>