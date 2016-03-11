<style>
.banner_01 { background:#FFF; width:1420px; height:827px; opacity:1; position:absolute; z-index:50; top:119px; }

.banner_block {
	width:1420px;
	height:827px;
}

	.banner_block .pre_01 { 
		width:40px; 
		height:65px; 
		float:left;
		margin-top:380px; 
		background:url(banner/btn.png); 
		background-position:top -432px left 0px;
	}
	.banner_block .pic_01 { 
		width:1340px; 
		height:827px;
		float:left;
		text-align:center;
	}
	.banner_block .pic_01 img {
		height:100%;
	}
	.banner_block .next_01 { 
		width:40px; 
		height:65px;
		float:left;
		margin-top:380px; 
		background:url(banner/btn.png); 
		background-position:top -432px right 0px;
	}
	.page_01 { 
		width:30px; 
		height:30px; 
		float:right; 
		text-align:right;
		font-size:17px;
	}
	
	<?php for ( $i=2 ; $i<=5 ; $i++ ) {?>
		.banner_0<?php echo $i;?> { background:#FFF; width:1420px; height:827px; opacity:0; position:absolute; z-index:<?php echo 51-$i;?>; top:-11900px; }
		
		.banner_block {
			width:1420px;
			height:827px;
		}
		
			.banner_block .pre_0<?php echo $i;?> { 
				width:40px; 
				height:65px; 
				float:left;
				margin-top:380px; 
				background:url(banner/btn.png); 
				background-position:top -432px left 0px;
			}
			.banner_block .pic_0<?php echo $i;?> { 
				width:1340px; 
				height:827px;
				float:left;
				text-align:center;
			}
			.banner_block .pic_0<?php echo $i;?> img {
				height:100%;
			}
			.banner_block .next_0<?php echo $i;?> { 
				width:40px; 
				height:65px;
				float:left;
				margin-top:380px; 
				background:url(banner/btn.png); 
				background-position:top -432px right 0px;
			}
			.page_0<?php echo $i;?> { 
				width:30px; 
				height:30px; 
				float:right; 
				text-align:right;
				font-size:17px;
			}
	<? }?>
	
.page_total { width:30px; height:30px; margin-right:36px; float:right; font-size:17px; }
.case_info { width:1340px; margin-left:40px; position:absolute; z-index:33; top:980px; font-size:14px; }
	.case_info .case_name { margin-right:5px; float:left; }
	.case_info .case_place { margin-right:5px; float:left; }
	.case_info .case_area { margin-right:0px; float:left; }
	.case_info .case_totalArea { margin-left:50px; float:left; }
	.case_info .case_periodDesign { margin-left:50px; float:left; }
	.case_info .case_periodWork { margin-left:50px; float:left; }
	.case_info .case_Line { width:30px; text-align:center; margin: 0 5px 0 0; float:left; }
.sectionWidth { width:1420px; }
</style>