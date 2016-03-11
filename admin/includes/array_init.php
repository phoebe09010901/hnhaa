<?php
//語系
//$array_language = array('tw'=>'繁體中文', 'en'=>'英文', 'cn'=>'簡體中文', 'hk'=>'粵語');
$array_language = array('tw'=>'繁體中文');
//admin
$array_admin = array('admin'=>'系統管理者', 'web'=>'網站管理者');
//對應字串
$array_num_cn = array('', '一', '二', '三', '四', '五', '六', '七', '八', '九', '十');
//運送方式
$array_cart_type = array(1=>'郵寄', 2=>'宅配', 3=>'自取');
//付款方式
$array_pay_type = array('Self'=>'自取付費', 'PayReceive'=>'郵局貨到付款', 'ATM'=>'ATM/匯款/無摺存款', 'WebATM'=>'ATM轉帳', 'Credit'=>'線上刷卡', 'Alipay'=>'支付寶', 'Tenpay'=>'財付通');
//付款狀態
$array_pay_state = array('未付款', '已付款', '付款異常');
//訂單狀態
$array_orderlist_state = array('未處理', '對帳中', '準備中', '已處理');
//允許的檔案格式
$allow_images = array('jpg', 'jpeg', 'png', 'gif') ;

$allow_files  = array('pdf', 'xls', 'xlsx', 'doc', 'docx', 'jpg', 'jpeg', 'dwg', 'stp', 'rar', 'zip') ;

//Category of Banner
$CategoryList = array(1=>array("Title"=>"首頁大圖管理", "Width"=>604, "Height"=>470, "Width_s"=>(694*0.2), "Height_s"=>(470*0.2), "FileSize"=>5),2=>array("Title"=>"首頁小 Banner", "Width"=>240, "Height"=>105, "Width_s"=>(240), "Height_s"=>(105), "FileSize"=>5));

//Category of Banner2
$CategoryList2 = array(1=>array("Title"=>"產品右側廣告管理", "Width"=>270, "Height"=>470, "Width_s"=>(270*0.5), "Height_s"=>(470*0.5), "FileSize"=>5),2=>array("Title"=>"產品右側廣告管理", "Width"=>270, "Height"=>470, "Width_s"=>(270*0.2), "Height_s"=>(470*0.2), "FileSize"=>5));

//Category of MadeOfNZ
$CategoryList3 = array(1=>array("Title"=>"MadeofNZ IMG", "Width"=>963, "Height"=>574, "Width_s"=>(963*0.2), "Height_s"=>(574*0.2), "FileSize"=>5),2=>array("Title"=>"首頁小 Banner", "Width"=>240, "Height"=>105, "Width_s"=>(240), "Height_s"=>(105), "FileSize"=>5));
?>