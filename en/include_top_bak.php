		<?php
		$path = $_SERVER['PHP_SELF'];
		$file = basename ($path, ".php"); 
		?>
        
        <a href="index.php">
        <div class="logo_01"><img src="images/logo_01.png"></div>
        <div class="logo_02"><img src="images/logo_02.png"></div>
        </a>
        
        <div class="language_01 color_01 font-family_03">
            <a href="../tw/index.php">中文</a>
        </div>
        <div class="about_title color_02 font-size_14 font-family_01">
            <a href="about.php">About Us</a>
        </div>
        
        <div class="small_title_01 font-family_01">
            <?php if( $file == "pro03" ){ ?>
                <a href="javascript:;" class="action">Interior</a>
            <?php } else {?>
                <a href="pro03.php">Interior</a>
            <? }?>
        </div>
        <div class="small_title_02 font-family_01">
            <?php if( $file == "pro02" ){ ?>
                <a href="javascript:;" class="action">Architecture</a>
            <?php } else {?>
                <a href="pro02.php">Architecture</a>
            <? }?>
        </div>
        <div class="small_title_03 font-family_01">
            <?php if( $file == "pro01" ){ ?>
                <a href="javascript:;" class="action">Planning</a>
            <?php } else {?>
                <a href="pro01.php">Planning</a>
            <? }?>
        </div>
        <div class="big_title_01 font-size_14 font-family_01">
            <?php if( $file != "pro00" ){ ?>
                <a href="pro00.php">Projects</a>
            <?php } else {?>
                <a href="javascript:;" class="action">Projects</a>
            <? }?>
        </div>