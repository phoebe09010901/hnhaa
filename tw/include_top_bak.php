		<?php
		$path = $_SERVER['PHP_SELF'];
		$file = basename ($path, ".php"); 
		
			require_once ("../admin/includes/xprog.php");
			$Conn = DB_Open();
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
        
        <div class="small_title_01 font-family_01 letter-spacing_02">
            <?php if( $file == "pro03" ){ ?>
                <a href="javascript:;" class="action">室內</a>
            <?php } else {?>
                <a href="pro03.php">室內</a>
            <? }?>
        </div>
        <div class="small_title_02 font-family_01 letter-spacing_02">
            <?php if( $file == "pro02" ){ ?>
                <a href="javascript:;" class="action">建築</a>
            <?php } else {?>
                <a href="pro02.php">建築</a>
            <? }?>
        </div>
        <div class="small_title_03 font-family_01 letter-spacing_02">
            <?php if( $file == "pro01" ){ ?>
                <a href="javascript:;" class="action">規劃</a>
            <?php } else {?>
                <a href="pro01.php">規劃</a>
            <? }?>
        </div>
        <div class="big_title_01 font-size_14 font-family_01 letter-spacing_08">
            <?php if( $file != "pro00" ){ ?>
                <a href="pro00.php">作品</a>
            <?php } else {?>
                <a href="javascript:;" class="action">作品</a>
            <? }?>
        </div>