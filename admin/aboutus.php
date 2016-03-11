<?php
header("content-type:text/html;charset=utf-8");
require_once('set.php');
require_once(Root_Includes_Path.'function_page.php');

$main_str   = 'aboutus';
$table_name = Proj_Name.'_'.$main_str;
$obj_news   = new mysql_page();	
$obj_cate   = new mysql_page();
$obj_cate1  = new mysql_page();

$page_num   = 10; //設定每頁顯示數目
$page_go    = ($page_go)?format_data($page_go, 'int'):1;

if($action=='del') {
	$obj_mysqlExec->deleteInit($id);
}elseif($_POST['action']=='del_all') {
	$obj_mysqlExec->batchDelete($_POST['IDlist']);
}elseif($_POST['action']=='change_data') {	//批次修改狀態
	$obj_mysqlExec->batchUpdate($_POST['row_name'], $_POST['row_value'], $_POST['IDlist']);
}

//data list
if($category)
	$where_str = "and category=".$category;
if($search_row) {
	$where_str .= " and ".$search_row." like '%".$keywords."%'";	
}
$query = "select id, content, content2, hit_counts, pub, create_time, edit_time from $table_name where lang='".$_SESSION[Login_System_User]['lang']."' $where_str order by id desc";
//echo $query;
$obj_news->count_page($query, $page_go, $page_num);
$page_all = $obj_news->page_all;
$obj_all  = $obj_news->obj_all;
?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?=Console_Title?></title>
<?php include("include_head.php"); ?>
<!-- colorbox -->
<link rel="stylesheet" href="../css/colorbox.css" />
<script type="text/javascript" src="../js/jquery.colorbox.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var theme = '<?=jqxStyle?>';
	
	$(".iFrame").colorbox({iframe:true, width:"50%", height:"80%", onClosed:function(){ location.reload(); }});
});
</script>
</head>
<body>
<?php include("include_top.php"); ?>
<div class="admin-panel">
  <?php include("include_menu.php"); ?><!--slidebar end-->
  <div class="main set_page_h page_shadow">
   <?php $obj_drawpage->drawPageWelcome($page_subtitle); ?>
   <?php $obj_drawtable->drawTable($obj_news->result_data); ?>
   <?php include("include_footer.php"); ?>
  </div><!--main end-->
</div><!--admin-panel end-->
</body>
</html>