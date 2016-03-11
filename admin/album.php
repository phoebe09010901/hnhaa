<?php
header("content-type:text/html;charset=utf-8");
require_once('set.php');
require_once(Root_Includes_Path.'function_page.php');

$main_str   = 'album';
$table_name = Proj_Name.'_'.$main_str;	
$obj_album  = new mysql_page();	

$page_num   = 10; //設定每頁顯示數目
$page_go    = ($page_go)?format_data($page_go, 'int'):1;
$category   = format_data($category, 'int');

/*
$album_category = "select id, name from " . Proj_Name . "_" . "album_category where id='" . $category . "'"; 
$album_categoryRs = $obj_album->run_mysql_out($album_category);

$page_subtitle = "<a href=album_category.php?category=".$album_categoryRs['id']."><li class='left'>" . $album_categoryRs['name'] . "</li></a>";
*/

if($action=='del') {
	$obj_mysqlExec->deleteInit($id);
}elseif($_POST['action']=='del_all') {
	$obj_mysqlExec->batchDelete($_POST['IDlist']);
}elseif($_POST['action']=='change_data') {	//批次修改狀態
	$obj_mysqlExec->batchUpdate($_POST['row_name'], $_POST['row_value'], $_POST['IDlist']);
}


//data list
if($search_row) {
	$where_str = "and ".$search_row." like '%".$keywords."%'";	
}

//$query = "select id, category, album_date, title, pub, create_time, edit_time from $table_name where lang='".$_SESSION[Login_System_User]['lang']."' and category = '$category' $where_str order by album_date desc";	
$query = "select id, category, album_date, title, type1, type2, type3, sort, pub, create_time, edit_time from $table_name where lang='".$_SESSION[Login_System_User]['lang']."' $where_str order by sort desc, title asc";	
//$obj_album->count_page($query, $page_go, $page_num);
//$page_all = $obj_album->page_all;
//$obj_all  = $obj_album->obj_all;

$obj_album->run_mysql_list($query);
		
?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?=Console_Title?></title>
<?php include("include_head.php"); ?>
<script type="text/javascript">
$(document).ready(function () {
	var theme = '<?=jqxStyle?>';
});
</script>
</head>
<body>
<?php include("include_top.php"); ?>
<div class="admin-panel">
  <?php include("include_menu.php"); ?><!--slidebar end-->
  <div class="main set_page_h page_shadow">
   <?php $obj_drawpage->drawPageWelcome($page_subtitle); ?>
   <?php $obj_drawtable->drawTable($obj_album->result_data); ?>
   <?php include("include_footer.php"); ?>
  </div><!--main end-->
</div><!--admin-panel end-->
</body>
</html>