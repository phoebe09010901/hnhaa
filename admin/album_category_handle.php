<?php
header("content-type:text/html;charset=utf-8");
require_once('set.php');
require_once(Root_Includes_Path.'class_category.php');

$main_str   = 'album_category';
$table_name = Proj_Name.'_'.$main_str;	
$obj_cate   = new mysql_page();	
$obj_cate1  = new mysql_page();
$sprods     = new show_data_select();	

$obj_image  = new files();	

$category  = ($category)?format_data($category, 'int'):1;

$prev = ($prev)?$prev:0;
if($_POST['action']=='save') {

	$result = $obj_mysqlExec->updateInit(1, $_POST);
	
	if($result) {
		if($_POST['id'] == ""){	
			$id = $_SESSION['insert_id'];
		}	else	{
			$id = $_POST['id'];		
		}			
		
		js_a_l('儲存成功', $main_str.'_handle.php?id=' . $id . '&prev='.$_POST['prev']);exit;
	}else {
		js_a_l('儲存失敗，請重新輸入並檢查', 'back');exit;
	}
}elseif ($id) {
	$id    = format_data($id, 'int');
	$query = "select * from $table_name where id='".$id."'";
	$cate  = $obj_cate->run_mysql_out($query);
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
<script type="text/javascript">
$(document).ready(function () {

		
	$( '#content' ).ckeditor();
	var theme = '<?=jqxStyle?>';
	
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
	// initialize validator.
	$('#<?=$main_str?>_form').jqxValidator({
		rules: [
		{ input: '#name', message: '類別名稱(中文)', action: 'keyup, blur', rule: 'required' },
		{ input: '#name2', message: '類別名稱(英文)', action: 'keyup, blur', rule: 'required' }
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
            <input type="hidden" name="id" value="<?=$cate['id']?>" />
            <table class="<?=$main_str?>-table">
                <tr>
                    <td height="60">類別名稱(中文)：</td>
                    <td align="left"><input type="text" name="name" id="name" value="<?=$cate['name']?>" class="frome" style="width:400px" /></td>
                </tr>
                <tr>
                    <td height="60">類別名稱(英文)：</td>
                    <td align="left"><input type="text" name="name2" id="name2" value="<?=$cate['name2']?>" class="frome" style="width:400px" /></td>
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