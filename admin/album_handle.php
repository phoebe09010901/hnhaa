<?php
header("content-type:text/html;charset=utf-8");
require_once('set.php');
require_once(Root_Includes_Path.'class_jqx.php');

$main_str   = 'album';
$table_name = Proj_Name.'_'.$main_str;	
$obj_album  = new mysql_page();
$obj_jqx    = new jqx();
$obj_image  = new files();	

$images_num = 1;
$_width  = 326;
$_height = 221;
$_width_s  = $_width * 0.5;
$_height_s = $_height * 0.5;

/*
$category = format_data($category, 'int');

$album_category = "select id, name from " . Proj_Name . "_" . "album_category where id='" . $category . "'"; 
$album_categoryRs = $obj_album->run_mysql_out($album_category);

$page_subtitle = "<a href=album_category.php?category=".$album_categoryRs['id']."><li class='left'>" . $album_categoryRs['name'] . "</li></a>";
*/

if($_POST['action']=='save') {
	$result = $obj_mysqlExec->updateInit(1, $_POST);
	
	if($_POST['id'] == ""){	
		$id = $_SESSION['insert_id'];
	}	else	{
		$id = $_POST['id'];		
	}	
		
	if($result) {
		js_a_l('儲存成功', $main_str.'_handle.php?id=' . $id . '&category='. $_POST['category']);exit;
	}else {
		js_a_l('儲存失敗，請重新輸入並檢查', 'back');exit;
	}
}elseif ($id) {
	$id    = format_data($id, 'int');
	$query = "select * from $table_name where id='".$id."'";
	$album = $obj_album->run_mysql_out($query);
}
?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?=Console_Title?></title>
<?php include("include_head.php"); ?>
<script src="../ckeditor/ckeditor.js"></script>
<script src="../ckeditor/adapters/jquery.js"></script>
<script type="text/javascript" src="../jqwidgets/jqxvalidator.js"></script> 
<script type="text/javascript" src="../jqwidgets/jqxcalendar.js"></script> 
<script type="text/javascript" src="../jqwidgets/jqxdatetimeinput.js"></script>

<!-- uploadify -->
<script type="text/javascript" src="../uploadify/jquery.uploadify-3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../uploadify/uploadify.css" />
<script type="text/javascript">
$(document).ready(function () {
	var theme = '<?=jqxStyle?>';

	//upload file
	<?php 
	for($i=1; $i<=$images_num; $i++) { 
		$obj_image->uploadify_js('file'.$i.'_upload', 'file'.$i, 'show_file'.$i, array("action", "main_str", "category", "id", "file_o", "key", "_width_s", "_height_s", "need_thumb", "thumb_path"), array("upload_images", $main_str, $category, $album["id"], "", $i, $_width_s, $_height_s, "N", ""));
	} 
	?>
			
	$('#sendButton').bind('click', function () {
		$('#<?=$main_str?>_form').jqxValidator('validate');
		
	});
	$('#<?=$main_str?>_form').bind('validationSuccess', function (event) { 
		$('#<?=$main_str?>_form').submit();
	});
	$('.text-input').addClass('jqx-input');
	$('.text-input').addClass('jqx-rc-all');
	if (theme.length > 0) {
		$('.text-input').addClass('jqx-input-' + theme);
		$('.text-input').addClass('jqx-widget-content-' + theme);
		$('.text-input').addClass('jqx-rc-all-' + theme);
	}
	
	<?php //$obj_jqx->datepicker('album_date', $album['album_date']); ?>
	
	// initialize validator.
	$('#<?=$main_str?>_form').jqxValidator({
		rules: [
		{ input: '#title', message: '專案名稱(中文)', action: 'keyup, blur', rule: 'required' }, 
		{ input: '#title2', message: '專案名稱(英文)', action: 'keyup, blur', rule: 'required' }, 
		{ input: '#building_site_tw', message: '基地位置(中文)', action: 'keyup, blur', rule: 'required' }, 
		{ input: '#building_site_en', message: '基地位置(英文)', action: 'keyup, blur', rule: 'required' }, 
		{ input: '#construction_area', message: '基地面積', action: 'keyup, blur', rule: 'required' }, 
		{ input: '#total_floor_area', message: '總樓地板面積', action: 'keyup, blur', rule: 'required' }, 
		{ input: '#datetime1', message: '設計期間', action: 'keyup, blur', rule: 'required' }, 												
		{ input: '#datetime2', message: '施工期間', action: 'keyup, blur', rule: 'required' }
		], 														
		theme: theme
	});
});
</script>
</head>
<body>
<?php include("include_top.php"); ?>
<div class="admin-panel">
  <?php include("include_menu.php"); ?><!--slidebar end-->
  <div class="main set_page_h page_shadow">
   <?php $obj_drawpage->drawPageWelcome($page_subtitle); ?>
   <div class="mainContent">
   	 <div id="data_content">
   		<form method="post" id="<?=$main_str?>_form" action="<?=$_SERVER['PHP_SELF']?>">
            <input type="hidden" name="action" value="save" />
            <input type="hidden" name="id" value="<?=$album['id']?>" />
            <input type="hidden" name="category" value="<?=$category?>" />            
            <input type="hidden" name="sort" value="<?=$album['sort']?>" />                        
            <input type="hidden" name="type1" value="<?=$album['type1']?>" />                        
            <input type="hidden" name="type2" value="<?=$album['type2']?>" />                        
            <input type="hidden" name="type3" value="<?=$album['type3']?>" />                                                            
            <table class="<?=$main_str?>-table">
            	<?php 
				echo '<tr>';
				echo '<td valign="top"><h2>上傳圖片</h2></td>';
				echo '<td>';				
				for($i=1; $i<=$images_num; $i++) { 
                	$obj_image->uploadify_row('images', 1, $i, "上傳圖片".$i, $main_str, $album['file'.$i], $album['title'], $_width_s, $_height_s, $_width, $_height, $file_size);
                } 
				echo '</td>';
				echo '</tr>';				
                ?>
                <!--
                <tr>
                    <td height="60">專案日期：</td>
                    <td align="left"><div id="album_date" style="width:400px"></div></td>
                </tr>            
                -->
                <tr>
                    <td height="60">專案名稱(中文)：</td>
                    <td align="left"><input type="text" name="title" id="title" value="<?=$album['title']?>" class="frome" style="width:400px" /></td>
                </tr>
                <tr>
                    <td height="60">專案名稱(英文)：</td>
                    <td align="left"><input type="text" name="title2" id="title2" value="<?=$album['title2']?>" class="frome" style="width:400px" /></td>
                </tr>                
                <tr>
                    <td height="60">基地位置(中文)：</td>
                    <td align="left"><input type="text" name="building_site_tw" id="building_site_tw" value="<?=$album['building_site_tw']?>" class="frome" style="width:400px" /></td>
                </tr>
                <tr>
                    <td height="60">基地位置(英文)：</td>
                    <td align="left"><input type="text" name="building_site_en" id="building_site_en" value="<?=$album['building_site_en']?>" class="frome" style="width:400px" /></td>
                </tr>
                <tr>
                    <td height="60">基地面積：</td>
                    <td align="left"><input type="text" name="construction_area" id="construction_area" value="<?=$album['construction_area']?>" class="frome" style="width:400px" /></td>
                </tr>
                <tr>
                    <td height="60">總樓地板面積：</td>
                    <td align="left"><input type="text" name="total_floor_area" id="total_floor_area" value="<?=$album['total_floor_area']?>" class="frome" style="width:400px" /></td>
                </tr>
                <tr>
                    <td height="60">設計期間：</td>
                    <td align="left"><input type="text" name="datetime1" id="datetime1" value="<?=$album['datetime1']?>" class="frome" style="width:400px" /></td>
                </tr>
                <tr>
                    <td height="60">施工期間(中文)：</td>
                    <td align="left"><input type="text" name="datetime2" id="datetime2" value="<?=$album['datetime2']?>" class="frome" style="width:400px" /></td>
                </tr>
                <tr>
                    <td height="60">施工期間(英文)：</td>
                    <td align="left"><input type="text" name="datetime2_en" id="datetime2_en" value="<?=$album['datetime2_en']?>" class="frome" style="width:400px" /></td>
                </tr>
                <tr>
                    <td height="60">其他(中文)：</td>
                    <td align="left">
                    	<textarea name="others" id="others" cols="80" rows="15"><?=$album['others']?></textarea>
                    </td>
                </tr>  
                <tr>
                    <td height="60">其他(英文)：</td>
                    <td align="left">
                    	<textarea name="others_en" id="others_en" cols="80" rows="15"><?=$album['others_en']?></textarea>
                    </td>
                </tr>                                
                <tr>
                    <td colspan="2" style="text-align: center;"><button type="button" id="sendButton" class="editbtn enter" title="儲存" >儲 存</button></td>
                </tr>
            </table>
            </form>
     </div><!--content end-->
   </div><!--mainContent end-->
   <?php include("include_footer.php"); ?>
  </div><!--main end-->
</div><!--admin-panel end-->
</body>
</html>