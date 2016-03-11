<?php 
	require_once("../../admin/includes/xprog.php");
	
	$Conn = DB_Open();
?>

// JavaScript Document

$(document).ready(function(){

	
	$(".pic").click(function(){
		$(".space_picBlock").animate({
			top:'0px',
		},0);
		$(".space_picBlock").animate({
			opacity:'1'
		},500);
		$(".space_pic_01").animate({
			opacity:'1'
		},500);
		$(".space_pic_01").animate({
			top:'50%'
		},0);
	});
	
	$(".space_close").click(function(){
		$(".space_picBlock").animate({
			opacity:'0'
		},500);
		$(".space_picBlock").animate({
			top:'-5000px',
		},0);
		$(".space_pic_01").animate({
			opacity:'0'
		},500);
		$(".space_pic_01").animate({
			top:'-5000px'
		},0);
		$(".space_pic_02").animate({
			opacity:'0'
		},500);
		$(".space_pic_02").animate({
			top:'-5000px'
		},0);
		$(".space_pic_03").animate({
			opacity:'0'
		},500);
		$(".space_pic_03").animate({
			top:'-5000px'
		},0);
		$(".space_pic_04").animate({
			opacity:'0'
		},500);
		$(".space_pic_04").animate({
			top:'-5000px'
		},0);
	});

<?
	$sql1  = "select A.id as album_id, A.title as titleA, A.content as contentA, B.file1, B.alt from trendyinterior_album4 as A, trendyinterior_album4_photos as B where ";
	$sql1 .= "A.id = B.album_id ";								
	$sql1 .= "order by A.title desc limit 0, 12";
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

            $(".space_next_0<?=$i?>").click(function(){
                $(".space_pic_0<?=$i?>").animate({
                    opacity:'0'
                },1000);
                $(".space_pic_0<?=$i?>").animate({
                    top:'-5000px'
                },0);
                $(".space_pic_0<?=$i+1?>").animate({
                    top:'50%'
                },0);
                $(".space_pic_0<?=$i+1?>").animate({
                    opacity:'1'
                },1000);
            });
<?						
		}

		if($i > 1 && $i < $tmpC){
?>
            $(".space_pre_0<?=$i?>").click(function(){
                $(".space_pic_0<?=$i?>").animate({
                    opacity:'0'
                },1000);
                $(".space_pic_0<?=$i?>").animate({
                    top:'-5000px'
                },0);
                $(".space_pic_0<?=$i-1?>").animate({
                    top:'50%'
                },0);
                $(".space_pic_0<?=$i-1?>").animate({
                    opacity:'1'
                },1000);
            });
            
            $(".space_next_0<?=$i?>").click(function(){
                $(".space_pic_0<?=$i?>").animate({
                    opacity:'0'
                },1000);
                $(".space_pic_0<?=$i?>").animate({
                    top:'-5000px'
                },0);
                $(".space_pic_0<?=$i+1?>").animate({
                    top:'50%'
                },0);
                $(".space_pic_0<?=$i+1?>").animate({
                    opacity:'1'
                },1000);
            });
<?			
			
		}

		if($i == $tmpC){
?>
            //最後一張banner，space_next_0x要無動作
            $(".space_pre_0<?=$i?>").click(function(){
                $(".space_pic_0<?=$i?>").animate({
                    opacity:'0'
                },1000);
                $(".space_pic_0<?=$i?>").animate({
                    top:'-5000px'
                },0);
                $(".space_pic_0<?=$i-1?>").animate({
                    top:'50%'
                },0);
                $(".space_pic_0<?=$i-1?>").animate({
                    opacity:'1'
                },1000);
            });
            
            $(".space_next_0<?=$i?>").click(function(){
                
            });
<?			
		}		
	}
?>    	

});