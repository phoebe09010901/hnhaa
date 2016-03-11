<?
	require_once ("../admin/includes/xprog.php");
	$Conn = DB_Open();		
	
	list($html_title, $keywords, $description) = xheader_r1($Conn, "tw");
	
	$sql1 = "select * from hnhaa_album where type1 = 1 or type2 = 1 or type3 = 1 order by sort desc, title asc";
	$rl1 = mysql_query($sql1, $Conn);
	
	$tmpC = mysql_num_rows($rl1);
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
<link rel="stylesheet" href="css/word.css">
<link rel="stylesheet" href="css/font.css">
<script src="js/jquery-1.11.1.min.js"></script>
<!-- 基本款 結束 -->

<link rel="stylesheet" type="text/css" href="css/style_1024up.css" media="screen and (min-width: 1600px)">
<link rel="stylesheet" type="text/css" href="css/style_1024down.css" media="screen and (max-width: 1600px)">

</head>

<body>

<div class="wapper_01" style=" overflow-y:hidden;">
  	
    <header>
    
    	<?php include('include_top.php');?>
        
  	</header>
    
    <section class="marginTop">
    	<div class="about_banner"><img src="images/about_banner-3-3.jpg"></div>

        <div class="address color_03 font-size_13 font-family_01 letter-spacing_01">
        	<span class="font-family_03">10445</span> 台北市中山區中山北路二段<span class="font-family_03">34</span>號<span class="font-family_03">4</span>樓<br>
            <span class="font-family_03">T：02.2581.4229</span><br>
            <span class="font-family_03">F：02.2581.4762</span><br><br>
            
            <a href="mailto:michael.h@hnhaa.com"><span class="font-family_03">michael.h@hnhaa.com</span></a><br>
            <a href="mailto:jennifer.h@hnhaa.com"><span class="font-family_03">jennifer.h@hnhaa.com</span></a>
        </div>
    </section>    
    
</div>





</body>
</html>