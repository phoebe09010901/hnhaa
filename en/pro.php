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
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/word.css">
<script src="js/jquery-1.11.1.min.js"></script>
<!-- 基本款 結束 -->

<link rel="stylesheet" type="text/css" href="css/style_1024up.css" media="screen and (min-width: 1600px)">
<link rel="stylesheet" type="text/css" href="css/style_1024down.css" media="screen and (max-width: 1600px)">

<script type="text/javascript">
$(function(){
	
	<?php for ( $i=1 ; $i<=$tmpC ; $i++ ) { ?>
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

<?
		$id = $_GET['id'];
		
		$sql1 = "select * from hnhaa_album where type1 = 1 or type2 = 1 or type3 = 1 order by sort desc, title asc";
		$rl1 = mysql_query($sql1, $Conn);
		
		$tmpC = mysql_num_rows($rl1);

		if($tmpC > 0){
			$i = 1;
			$j = 1;
			while($row1 = mysql_fetch_array($rl1, MYSQL_ASSOC)){
				
				list($photos, $file1) = xalbum_firstimgr1($Conn, $row1['id']);
				
				if($row1['file1'] != "" && $row1['type' . $id] == 1){					
					if($j == 1){
?>
		                <div class="proPic_first" id="b_0<?=$i?>">
<?					
					}	else	{
?>
		                <div class="proPic" id="b_0<?=$i?>">
<?								
					}			
				}	else	{
					if($j == 1){
?>
		                <div class="proPic_first">
<?					
					}	else	{
?>
		                <div class="proPic">
<?								
					}								
				}		

				if($row1['file1'] != "" && $row1['type' . $id] == 1){	
					if($photos == 0){
?>                
                    <div class="proPic_block"><img src="/album/<?=$row1['file1']?>"></div>    
                    <div class="proPic_title color_03 font-family_01" id="p_0<?=$i?>"><?=$row1['title2']?></div>
<?				
					}	else	{
?>                
                    <div class="proPic_block"><img src="/album/<?=$row1['file1']?>"></div>    
                    <a href="pro_page.php?id=<?=$row1['id']?>"><div class="proPic_title color_03 font-family_01" id="p_0<?=$i?>"><?=$row1['title2']?></div></a>
<?				
					}
				}	else	{	?>                    

<?				}	?>
                </div>
<?				
				$i++;
				$j++;
				if($j == 5){
					$j = 1;	
				}
			}
		}
?>
    

        
    </section>
    
</div>





</body>
</html>