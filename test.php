<style>
<?php for($i=2;$i<=100;$i++){ ?>

.banner_0<?php echo $i;?> { background:#FFF; width:1420px; height:827px; opacity:0; position:absolute; z-index:49; top:-11900px; }
	
	.banner_block .pre_0<?php echo $i;?> { 
		width:40px; 
		height:65px; 
		float:left;
		margin-top:380px; 
		background:url(../banner/big_left.png);
		background-size:40px 65px;
	}
	.banner_block .pic_0<?php echo $i;?> { 
		width:1340px; 
		height:827px;
		float:left;
		text-align:center;
	}
	img {
		height:100%;
		max-width:1340px;
	}
.banner_block .next_0<?php echo $i;?> { 
		width:40px; 
		height:65px;
		float:left;
		margin-top:380px; 
		background:url(../banner/big_right.png);
		background-size:40px 65px;
	}
	.page_0<?php echo $i;?> { 
		width:30px; 
		height:30px; 
		float:right; 
		text-align:right;
		font-size:17px;
	}
<?php };?>		
</style>