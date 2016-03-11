		<?php
			$path = $_SERVER['PHP_SELF'];
			$file = basename ($path, ".php"); 
		
			if(!isset($Conn)){
				require_once ("../admin/includes/xprog.php");
				$Conn = DB_Open();		
			}
		?>
        
        <a href="index.php">
        <div class="logo_01"><img src="images/logo_01.png"></div>
        <div class="logo_02"><img src="images/logo_02.png"></div>
        </a>
        
        <div class="language_01 color_01 font-family_03">
            <a href="../en/index.php">en</a>
        </div>
        <div class="about_title color_02 font-size_14 font-family_01 letter-spacing_08">
            <a href="about.php">我們</a>
        </div>
        <?
        	$sql1 = "select * from hnhaa_album_category where id < 4 order by id desc";
			$rl1 = mysql_query($sql1, $Conn);
			
			$i = 1;
			while($row1 = mysql_fetch_array($rl1, MYSQL_ASSOC)){
		?>
            <div class="small_title_0<?=$i?> font-family_01 letter-spacing_02">
                <?php if( $_GET['id'] == $row1['id'] ){ ?>
                    <a href="javascript:;" class="action"><?=$row1['name']?></a>
                <?php } else {?>
                    <a href="pro.php?id=<?=$row1['id']?>"><?=$row1['name']?></a>
                <? }?>
            </div>		
		<?		
				$i++;		
			}
		?>

        <div class="big_title_01 font-size_14 font-family_01 letter-spacing_08">
            <?php if( $file != "pro00" ){ ?>
                <a href="pro00.php">作品</a>
            <?php } else {?>
                <a href="javascript:;" class="action">作品</a>
            <? }?>
        </div>