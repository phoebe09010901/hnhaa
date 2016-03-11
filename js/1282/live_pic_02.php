<?php 
	require_once("../../admin/includes/xprog.php");
	
	$Conn = DB_Open();

	$album_no = (int)$_REQUEST['type'];
	$album_id = (int)$_REQUEST['id'];		
?>

// JavaScript Document

$(document).ready(function(){
<?
	$sql1  = "select ";
	$sql1 .= "A.id as album_id, ";
	$sql1 .= "A.title as titleA, ";
	$sql1 .= "A.content as contentA, ";
	$sql1 .= "B.file1, ";
	$sql1 .= "B.alt ";
	$sql1 .= "from trendyinterior_album2 as A, trendyinterior_album2_photos as B where ";
	
	$sql1 .= "A.id = B.album_id and ";								
	$sql1 .= "A.id = '$album_id' ";										
	$sql1 .= "order by A.title desc, A.sort desc, B.sort desc ";
	//echo $sql1;
	
	$rl1 = mysql_query($sql1, $Conn);
	$tmpC = mysql_num_rows($rl1);
?>

<?
	for($i=1; $i<=$tmpC; $i++){
		if($i == 1){
?>
            //第一張banner，space_pre_0x要無動作（請確認有無下一張banner）
            $(".space_pre_01").click(function(){
                
            });

<?			if($tmpC == 1){	?>
            $(".space_next_01").click(function(){

            }); 
<?			
			exit;
			}	else	{	?>
            $(".space_next_01").click(function(){
                $(".space_pic_02").animate({
                    top:'49%'
                },0);
                $(".space_pic_02").animate({
                    opacity:'1'
                },1000);
                $(".space_pic_01").animate({
                    opacity:'0'
                },1000);
                $(".space_pic_01").animate({
                    top:'-5000px'
                },0);
            }); 
<?			}	?>       
                  
<?			
		}

		if($i > 1 && $i < $tmpC){
?>
            $(".space_pre_0<?=$i?>").click(function(){
                $(".space_pic_0<?=$i - 1?>").animate({
                    top:'49%'
                },0);
                $(".space_pic_0<?=$i - 1?>").animate({
                    opacity:'1'
                },1000);
                $(".space_pic_0<?=$i?>").animate({
                    opacity:'0'
                },1000);
                $(".space_pic_0<?=$i?>").animate({
                    top:'-5000px'
                },0);
            });
            
            $(".space_next_0<?=$i?>").click(function(){
                $(".space_pic_0<?=$i + 1?>").animate({
                    top:'49%'
                },0);
                $(".space_pic_0<?=$i + 1?>").animate({
                    opacity:'1'
                },1000);
                $(".space_pic_0<?=$i?>").animate({
                    opacity:'0'
                },1000);
                $(".space_pic_0<?=$i?>").animate({
                    top:'-5000px'
                },0);
            });

<?			
			
		}

		if($i == $tmpC){
?>
            //最後一張banner，space_next_0x要無動作
            $(".space_pre_0<?=$i?>").click(function(){
                $(".space_pic_0<?=$i - 1?>").animate({
                    top:'49%'
                },0);
                $(".space_pic_0<?=$i - 1?>").animate({
                    opacity:'1'
                },1000);
                $(".space_pic_0<?=$i?>").animate({
                    opacity:'0'
                },1000);
                $(".space_pic_0<?=$i?>").animate({
                    top:'-5000px'
                },0);
            });
            
            $(".space_next_0<?=$i?>").click(function(){
                
            });            
<?			
		}		
	}
?>    
});