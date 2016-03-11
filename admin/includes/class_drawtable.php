<?php
class drawtable {
	private $TableHeadItems, $now_page;
	//construct
	public function __construct() {	
	
	}	
	
	public function drawTable($result_data) {
		global $this_page, $page_go, $page_all, $page_num, $obj_all, $my_query_string;			
		$this->now_page = $this_page;
		
		switch($this->now_page) {			
			case 'pages_category.php':	//頁面類別管理
			case 'news_category.php':	//文章類別管理
			case 'news2_category.php':	//主題分享類別管理
			
			
			
			
			case 'country_category.php':	//國家管理			
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "國家名稱", ""), 
									array("Text", "center", "排　　 序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;			
				
			case 'country.php':				//城市
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "城市名稱", ""), 
									array("Text", "center", "排　　 序", ""), 									
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;									
			case 'products_category.php':	//商品類別管理
				$this->TableHeadItems = array(
									//array("SelectAll", "center", "&nbsp;", 35), 
									array("Text", "center", "&nbsp;", 35), 
									//array("NewItem", "center", "新增", 80), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "類別名稱", ""), 
									array("Text", "center", "排　　序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
			case 'products_category2.php':	//商品類別管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "類別名稱", ""), 
									array("Text", "center", "排　　序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;				
			case 'pages.php':	//頁面編輯管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "標　　題", ""), 
									array("Text", "center", "排　　序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
			case 'banner.php':	//首頁大圖管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "Banner圖片", ""), 
									array("Text", "center", "排　　序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;

			case 'banner2.php':	//產品右側廣告管理⽂
				$this->TableHeadItems = array(array("", "center", "&nbsp;", 35), 
									array("Text", "center", "產品右側廣告管理", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
								
			case 'news.php':	//文章管理
			case 'news2.php':	//主題分享管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "發佈日期", ""), 
									array("Text", "center", "標　　題", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;

			case 'faq_category.php'://FAQ管理
				$this->TableHeadItems = array( 
									array("", "center", "", 65), 
									array("Text", "center", "FAQ上方說明", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;		

			case 'faq.php':			//FAQ管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "標　　題", ""), 
									array("Text", "center", "排　　序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;

			case 'aboutus.php':			//FAQ管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("Text", "center", "標　　題", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;	
				
			case 'contactus.php':			//FAQ管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "標　　題", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;				

			case 'madeofnz_category.php'://紐西蘭原料保證內文管理
				$this->TableHeadItems = array(
									array("", "center", "", 65), 
									array("Text", "center", "紐西蘭原料保證內文 上方說明", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;		

			case 'madeofnz.php':			//紐西蘭原料保證內文管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "標　　題", ""), 
									array("Text", "center", "排　　序", ""), 									
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;				
										
				
			case 'teacher.php':	//教練陣容管理
				$ImagesSetting = array(1=>array("_width"=>100, "_height"=>100, "_width_s"=>(100), "_height_s"=>(100), "ImgFileSize"=>5));
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "圖　　片", 120), 
									array("Text", "center", "教練姓名", ""), 
									array("Text", "center", "教練介紹", ""), 
									array("Text", "center", "排　　序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;

			case 'album_category.php':	//相簿類別管理
				$this->TableHeadItems = array(//array("SelectAll", "center", "&nbsp;", 35), 
									array("", "center", "", ""),									 
									//array("Text", "center", "上架", 35), 
									//array("Text", "center", "ID", ""), 
									//array("Text", "center", "相簿日期", ""), 
									array("Text", "center", "類別名稱(中文)", ""), 
									array("Text", "center", "類別名稱(英文)", ""), 									
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
								
			case 'album.php':	//相簿管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									//array("Text", "center", "上架", 35), 
									//array("Text", "center", "ID", ""), 
									//array("Text", "center", "相簿日期", ""), 
									array("Text", "center", "相簿名稱", ""), 
									array("Text", "center", "規劃", ""), 									
									array("Text", "center", "建築", ""), 									
									array("Text", "center", "室內", ""), 
									array("Text", "center", "排　　序", ""), 																																													
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;

			case 'album_all.php':	//相簿管理
				$this->TableHeadItems = array(//array("SelectAll", "center", "&nbsp;", 35), 
									//array("NewItem", "center", "新增", 65), 
									//array("Text", "center", "上架", 35), 
									//array("Text", "center", "ID", ""), 
									//array("Text", "center", "相簿日期", ""), 
									array("Text", "center", "相簿名稱", ""), 
									array("Text", "center", "排　　序", ""), 									
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
								
			case 'productsindex.php':	//商品資料管理
				$ImagesSetting = array(1=>array("_width"=>120, "_height"=>120, "_width_s"=>(100), "_height_s"=>(100), "ImgFileSize"=>5));
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									//array("Text", "center", "推薦", 35), 
									//array("Text", "center", "ID", ""), 
									//array("Text", "center", "商品圖片", 120), 
									array("Text", "center", "名稱", ""), 
									//array("Text", "center", "售價", ""), 
									array("Text", "center", "排序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
				
			case 'products.php':	//商品資料管理
				$ImagesSetting = array(1=>array("_width"=>120, "_height"=>120, "_width_s"=>(100), "_height_s"=>(100), "ImgFileSize"=>5));
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									//array("Text", "center", "推薦", 35), 
									//array("Text", "center", "ID", ""), 
									//array("Text", "center", "商品圖片", 120), 
									array("Text", "center", "品名", ""), 
									//array("Text", "center", "售價", ""), 
									array("Text", "center", "排序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
			case 'products2.php':	//商品資料管理
				$ImagesSetting = array(1=>array("_width"=>120, "_height"=>120, "_width_s"=>(100), "_height_s"=>(100), "ImgFileSize"=>5));
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									//array("Text", "center", "推薦", 35), 
									//array("Text", "center", "ID", ""), 
									//array("Text", "center", "商品圖片", 120), 
									array("Text", "center", "品名", ""), 
									//array("Text", "center", "售價", ""), 
									array("Text", "center", "排序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;				
			case 'orderlist.php':	//訂單資料管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("Text", "center", "&nbsp;", 65), 
									array("Text", "center", "付款狀態", 35), 
									array("Text", "center", "訂單狀態", 35), 
									array("Text", "center", "訂單編號", ""), 
									array("Text", "center", "收件人", ""), 
									array("Text", "center", "聯絡資料", ""), 
									array("Text", "center", "訂單金額", ""), 
									array("Text", "center", "配送方式", ""), 
									array("Text", "center", "付款方式", ""), 
									array("Text", "center", "訂單建立時間", 180));
				break;
			case 'links.php':	//相關連結管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "連結名稱", ""), 
									array("Text", "center", "排　　序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
			case 'stores.php':	//商家資訊管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "經銷商名稱", ""), 
									array("Text", "center", "聯絡資料", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
			case 'download.php':	//檔案下載管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "檔案名稱", ""), 
									array("Text", "center", "排　　序", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
			case 'contact_form.php':	//聯絡我們表單
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("Text", "center", "&nbsp;", 65), 
									array("Text", "center", "回覆", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "發問者", ""), 
									array("Text", "center", "連絡電話", ""), 
									array("Text", "center", "E-mail", ""), 
									array("Text", "center", "資料建立時間", 180));
				break;
			//=====================================
			case 'member.php':	//會員資料管理
				$this->TableHeadItems = array(
									array("Text", "center", "會員姓名", ""), 
									array("Text", "center", "Email", ""), 									
									array("Text", "center", "加入時間", 180));
				break;
			case 'board.php':	//留言板管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("Text", "center", "&nbsp;", 65), 
									array("Text", "center", "回覆", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "發問者", 125), 
									array("Text", "center", "內　　容", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
			case 'forum.php':	//討論區管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("Text", "center", "&nbsp;", 65), 
									array("Text", "center", "權限", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "發問者", 125), 
									array("Text", "center", "內　　容", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
			case 'forum_reply.php':	//討論區回覆留言管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("Text", "center", "&nbsp;", 65), 
									array("Text", "center", "權限", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "留言者", 125), 
									array("Text", "center", "內　　容", ""), 
									array("Text", "center", "資料建立時間", 180));
				break;
			case 'edm.php':	//EDM 管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "&nbsp;", 60), 
									array("Text", "center", "&nbsp;", 60), 
									array("Text", "center", "上架", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "發佈日期", ""), 
									array("Text", "center", "標　　題", ""), 
									array("Text", "center", "資料建立時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;
			//=====================================
			case 'admin.php':	//帳號管理
				$this->TableHeadItems = array(array("SelectAll", "center", "&nbsp;", 35), 
									array("NewItem", "center", "新增", 65), 
									array("Text", "center", "權限", 35), 
									array("Text", "center", "ID", ""), 
									array("Text", "center", "帳　　號", ""), 
									array("Text", "center", "顯示名稱", ""), 
									array("Text", "center", "權限等級", ""), 
									array("Text", "center", "最近登入時間", 180), 
									array("Text", "center", "最近修改時間", 180));
				break;	
		}
		
		?><div class="mainContent"><?php
		?><div id="data_content"><?php
		$this->drawTableToolBar();
		?><div class="template_black">
        <form method="post" action="<?=$_SERVER['PHP_SELF']?>" name="list_form" id="list_form">
        <input type="hidden" name="action" id="action" value="">
        <input type="hidden" name="row_name" id="row_name" value="">
        <input type="hidden" name="row_value" id="row_value" value="">
        <table width="100%"  cellspacing="0" cellpadding="0" border="0">
        <?php
		$this->drawTableHead();
		$this->drawTableBody($result_data);
		?></table>
        </form>
        </div>
		</div><!--data_content end-->
		<?php
			switch($this->now_page) {			
				case 'album.php':		
				case 'album_all.php':	
				break;
				
				default:
					change_page_jyc($page_go, $page_all, $page_num, $obj_all, $my_query_string);	//分頁				
			}
		?>
        </div><!--mainContent end--><?php
	}
	
	private function drawTableToolBar() {
		global $main_str, $page_go, $page_all, $page_num, $obj_all, $array_search, $search_row, $my_query_string;
		
		?><div class="toolbar"><?php
		search_form($array_search, $search_row, $my_query_string);	//搜尋
		change_page_jyc_s($page_go, $page_all, $page_num, $obj_all, $my_query_string);	//分頁
		
		switch($this->now_page) {
			case "album.php":
			case "album_all.php":
				break;
			
			case "pages.php":
			case "news2.php":
				//$this->drawiFramebutton("類別管理", $main_str."_category.php");
				$this->drawDelallbutton("批次刪除", 'action', 'del_all', 'list_form');
				$this->drawChangebutton("批次復權", 'action', 'change_data', 'row_name', 'pub', 'row_value', '1', 'list_form');
				$this->drawChangebutton("批次停權", 'action', 'change_data', 'row_name', 'pub', 'row_value', '0', 'list_form');
				break;
			case "news.php":
				$this->drawiFramebutton("類別管理", $main_str."_category.php");
				$this->drawDelallbutton("批次刪除", 'action', 'del_all', 'list_form');
				$this->drawChangebutton("批次復權", 'action', 'change_data', 'row_name', 'pub', 'row_value', '1', 'list_form');
				$this->drawChangebutton("批次停權", 'action', 'change_data', 'row_name', 'pub', 'row_value', '0', 'list_form');
				break;
			case "member.php":
				$this->drawDelallbutton("批次刪除", 'action', 'del_all', 'list_form');
				$this->drawChangebutton("批次復權", 'action', 'change_data', 'row_name', 'pub_by_admin', 'row_value', '1', 'list_form');
				$this->drawChangebutton("批次停權", 'action', 'change_data', 'row_name', 'pub_by_admin', 'row_value', '0', 'list_form');
		?>
                <input name="" type="button" value="匯出" onClick="location.href='member_expert.php';">
                <a href="member.csv" target="_blank">Member Csv</a>&nbsp;(更新日期：<?=date ("Y/m/d H:i:s.", filemtime('member.csv'))?>)
		<?
				break;
			case "orderlist.php":
				$this->drawDelallbutton("批次刪除", 'action', 'del_all', 'list_form');
				break;
			case "board.php":
			case "contact_form.php":
				$this->drawDelallbutton("批次刪除", 'action', 'del_all', 'list_form');
				$this->drawChangebutton("批次狀態回覆", 'action', 'change_data', 'row_name', 'pub', 'row_value', '1', 'list_form');
				$this->drawChangebutton("批次狀態未回覆", 'action', 'change_data', 'row_name', 'pub', 'row_value', '0', 'list_form');
				break;
			default:
				$this->drawDelallbutton("批次刪除", 'action', 'del_all', 'list_form');
				$this->drawChangebutton("批次復權", 'action', 'change_data', 'row_name', 'pub', 'row_value', '1', 'list_form');
				$this->drawChangebutton("批次停權", 'action', 'change_data', 'row_name', 'pub', 'row_value', '0', 'list_form');	
				break;
		}
		
		?></div><?php
	}
	private function drawTableHead() {
		echo '<tr>';
		foreach($this->TableHeadItems as $key => $items) {
			echo '<th align="'.$items[1].'" style="width:'.$items[3].'px">';
			switch($items[0]) {
				case "SelectAll":
					echo '<input type="checkbox" name="SelectAll" id="SelectAll" value="1" onclick="real_select_all(this.checked)" />';
					break;
				case "NewItem":
					echo '<button type="button" class="newone" onClick="real_add()">p'.$items[2].'</button>';
					break;
				case "Text":
					echo $items[2];
					break;
			}
			echo '</th>';
		}
		echo '</tr>';
	}
	private function drawTableBody($result_data) {
		global $main_str_banner, $main_str_prof, $main_str_prod, $main_str_down, $table_name_edm;
		global $array_pay_state, $array_orderlist_state, $array_cart_type, $array_pay_type, $twzipcode;
		global $my_query_string;
		$query_string = explode("&", $my_query_string);
		if(count($query_string)>0) {
			foreach($query_string as $key => $value)	{
				$value = explode("=", $value);
				${$value[0]} = $value[1];
			}
		}
		
		switch($this->now_page) {			
			case 'pages_category.php':	//頁面類別管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><a href="<?=($data['lv']<News_Category_Lv_Num)?'pages_category.php?prev='.$data['id']:'#'?>"><?=$data['name']?></a></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;		
			case 'news_category.php':	//文章類別管理
			case 'news2_category.php':	//主題分享類別管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><a href="<?=($data['lv']<News_Category_Lv_Num)?'news_category.php?prev='.$data['id']:'#'?>"><?=$data['name']?></a></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;

			case 'faq_category.php':	//主題分享類別管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center">
                    	<button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
					</td>
                    <td align="left"><a href="faq.php?category=<?=$data['id']?>"><?=strip_tags($data['content'])?></a></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;				
			case 'faq.php':	//主題分享管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['title']?></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>                    
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;

			case 'aboutus.php':	//主題分享管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center">
                    <button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
                    </td>
                    <td align="center"><a href="aboutus_handle.php?id=<?=$data['id']?>">品牌精神內文</a></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;		
				
			case 'contactus.php':	//主題分享管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['title']?></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;				

			case 'madeofnz_category.php':	//主題分享類別管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center">
                    	<button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
					</td>
                    <td align="left"><a href="madeofnz.php?category=<?=$data['id']?>">紐西蘭原料保證內文</a></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;				
			case 'madeofnz.php':	//主題分享管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['title']?></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>                    
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;				
								
			case 'country_category.php':	//國家管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><a href="<?=($data['lv']<News_Category_Lv_Num)?'country.php?category='.$data['id']:'#'?>"><?=$data['name']?></a></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;

			case 'country.php':			//城市管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['name']?></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
												
			case 'products_category.php':	//商品類別管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?>
                    <tr>
                    <!--
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    -->
                    <td align="center">
                    	<button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button>                     
                    	<!--
                        <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button>
                        -->
						<button type="button" class="editbtn edit_w80" title="大類產品" onClick="location.href='products.php?category=<?=$data['id']?>';">大類 產品</button>                        
                    </td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><a href="products_category2.php?prev=<?=$data['id']?>"><?=$data['name']?></a></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" <? if($data['sort'] == 0){echo "disabled";}?> style="width:50px;" onChange="if(this.value == 0){alert('排序無法為0'); this.value = '<?=$data['sort']?>'; }else{change_sort('<?=$data['id']?>', 'sort', this.value, event)}"></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
			case 'products_category2.php':	//商品類別管理2
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center">
                    	<button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
                        <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button>
						<button type="button" class="editbtn edit_w80" title="中類 產品" onClick="location.href='products2.php?prev=<?=$prev?>&category=<?=$data['id']?>';">中類 產品</button>                                                
					</td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['name']?></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;				
			case 'pages.php':	//頁面編輯管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
					<td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['title']?></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
			case 'banner.php':	//首頁大圖管理
				global $main_str_banner, $CategoryList;
				$category   = ($category)?$category:1;				
				$obj_image = new files();	
				
				$cate_str  = $CategoryList[$category]['Title'];
				$_width    = $CategoryList[$category]['Width'];
				$_height   = $CategoryList[$category]['Height'];
				$_width_s  = $CategoryList[$category]['Width_s'];
				$_height_s = $CategoryList[$category]['Height_s'];
				$file_size = $CategoryList[$category]['FileSize'];
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center">
                    <button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
                    <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button>
                    </td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?php $obj_image->show_pic1($main_str_banner.'/'.$data['file1'], $_width_s, $_height_s, $data['title'], 'show_file'.$i) ?></td>
                    <td align="center">
                    	<input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)">
					</td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;

			case 'banner2.php':	//Banner管理	
				global $main_str_banner2, $CategoryList2;
				$category   = ($category)?$category:1;								
				$obj_image = new files();	
				
				$cate_str  = $CategoryList2[$category]['Title'];
				$_width    = $CategoryList2[$category]['Width'];
				$_height   = $CategoryList2[$category]['Height'];
				$_width_s  = $CategoryList2[$category]['Width_s'];
				$_height_s = $CategoryList2[$category]['Height_s'];
				$file_size = $CategoryList2[$category]['FileSize'];
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center">
                    	<button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
					</td>
                    <td align="center"><?php $obj_image->show_pic1($main_str_banner2.'/'.$data['file1'], $_width_s, $_height_s, $data['title'], 'show_file'.$i) ?></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
								
			case 'news.php':	//文章管理
			case 'news2.php':	//主題分享管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['news_date']?></td>
                    <td align="center"><?=$data['title']?></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
			case 'teacher.php':	//教練陣容管理	
				global $main_str_prof, $ImagesSetting;
				$obj_image = new files();	
				
				foreach($ImagesSetting as $key => $value) {
					foreach($value as $key1 => $value1) {
						${$key1.$key} = $value1;
					}
				}
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?php $obj_image->show_pic1($main_str_prof.'/'.$data['file1'], $_width_s1, $_height_s1, $data['name'], 'show_file'.$i) ?></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['name']?></td>
                    <td align="center"><?=$data['content']?></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;

			case 'album_category.php':	//相簿管理

				foreach($result_data as $i => $data) {
                    if($data['id'] == 4){
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?>
                    <tr>
                    <!--<td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>-->
                    <td align="center">                                        
                    <button type="button" class="editbtn edit_w65" title="管理" onClick="location.href='album_all.php'">管理</button>                    
                    <td align="center">作品排序</td>                    
                    <td align="center"></td>                                        
                    </td>

                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr>
					<?php	
					}
				}
								
				foreach($result_data as $i => $data) {
					
                    if($data['id'] < 4){
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?>
                    <tr>
                    <!--<td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>-->
                    <td align="center">                    
                    <button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
                    <!--<button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button>-->
                    <button type="button" class="editbtn edit_w65" title="管理" onClick="location.href='album.php?category=<?=$data['id']?>'">管理</button>
                    <td align="center"><?=$data['name']?></td>
                    <td align="center"><?=$data['name2']?></td>                    
                    </td>        

                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr>
					<?php	
					}
				}
				break;
								
			case 'album.php':	//相簿管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?>
                    <tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center">
                    <button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
                    <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button>
                    <button type="button" class="editbtn edit_w65" title="管理" onClick="location.href='album_photos.php?category=<?=$data['category']?>&album_id=<?=$data['id']?>'">管理</button>
                    </td>
                    <!--<td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>-->
                    <!--
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['album_date']?></td>
                    -->
                    <td align="center"><?=$data['title']?></td>
                    
                    <td align="center"><input type="checkbox" <?php if($data['type1']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'type1', this.checked)"></td>
                    <td align="center"><input type="checkbox" <?php if($data['type2']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'type2', this.checked)"></td>
                    <td align="center"><input type="checkbox" <?php if($data['type3']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'type3', this.checked)"></td>                                                            
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>                                                            
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;

			case 'album_all.php':	//相簿管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?>
                    <tr>
                    <!--
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center">
                    <button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
                    <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button>
                    <button type="button" class="editbtn edit_w65" title="管理" onClick="location.href='album_photos.php?category=<?=$data['category']?>&album_id=<?=$data['id']?>'">管理</button>
                    </td>                    
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>                    
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['album_date']?></td>
                    -->
                    <td align="center"><?=$data['title']?></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>                                        
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;

			case 'productsindex.php':	//商品資料管理		
				global $main_str_prod, $ImagesSetting;
				$obj_image = new files();	
				foreach($ImagesSetting as $key => $value) {
					foreach($value as $key1 => $value1) {
						${$key1.$key} = $value1;
					}
				}

				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center" valign="middle">
                    	<button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
                        <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button>
					</td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>                    
                    <!--
                    <td align="center"><input type="checkbox" name="data_pub" id="data_push<?=$i?>" value="1" <?php if($data['push']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'push', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?php $obj_image->show_pic2($main_str_prod.'/'.$data['file1'], $_width_s1, $_height_s1, $data['name'], 'show_file'.$i) ?></td>
                    <td align="center"><?=$data['name']?></td>                    
                    -->                                        
                    <td align="center"><?=$data['name']?></td>
                    <!--
                    <td align="center"><?=number_format($data['price'])?></td>
                    -->
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>                    
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
								
			case 'products.php':	//商品資料管理		
				global $main_str_prod, $ImagesSetting;
				$obj_image = new files();	
				foreach($ImagesSetting as $key => $value) {
					foreach($value as $key1 => $value1) {
						${$key1.$key} = $value1;
					}
				}

				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center" valign="middle">
                    	<button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
                        <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button>
					</td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>                    
                    <!--
                    <td align="center"><input type="checkbox" name="data_pub" id="data_push<?=$i?>" value="1" <?php if($data['push']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'push', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?php $obj_image->show_pic2($main_str_prod.'/'.$data['file1'], $_width_s1, $_height_s1, $data['name'], 'show_file'.$i) ?></td>
                    -->                    
                    <td align="center"><?=$data['name']?></td>
                    <!--
                    <td align="center"><?=number_format($data['price'])?></td>
                    -->
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>                    
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
			case 'products2.php':	//商品資料管理		
				global $main_str_prod, $ImagesSetting;
				$obj_image = new files();	
				foreach($ImagesSetting as $key => $value) {
					foreach($value as $key1 => $value1) {
						${$key1.$key} = $value1;
					}
				}

				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center" valign="middle">
                    	<button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> 
                        <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button>
					</td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <!--
                    <td align="center"><input type="checkbox" name="data_pub" id="data_push<?=$i?>" value="1" <?php if($data['push']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'push', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?php $obj_image->show_pic2($main_str_prod.'/'.$data['file1'], $_width_s1, $_height_s1, $data['name'], 'show_file'.$i) ?></td>
                    -->
                    <td align="center"><?=$data['name']?></td>
                    <!--
                    <td align="center"><?=number_format($data['price'])?></td>
                    -->
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>                    
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;				
			case 'orderlist.php':	//訂單資料管理
				global $array_pay_state, $array_orderlist_state, $array_cart_type, $array_pay_type;
				foreach($result_data as $i => $data) {
					$data['order_time'] = explode(" ", $data['order_time']);
					$data['order_time'] = $data['order_time'][0].'<br><span class="txtgray">'.$data['order_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit('<?=$data['id']?>')">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del('<?=$data['id']?>', '<?=$data['id']?>')">s</button><button type="button" class="editbtn edit_w65" title="清單" onClick="real_orderlist_detail('<?=$data['id']?>')">清單</button></td>               
                    <td align="center"><select name="order_pay_state_<?=$i?>" id="order_pay_state_<?=$i?>" onChange="change_power('<?=$data['id']?>', 'pay_state', this.value)"><?php
                    if(count($array_pay_state)>0) {
                        foreach($array_pay_state as $key => $value)	 {
                        ?><option value="<?=$key?>" <?php if($key==$data['pay_state']){echo 'selected';} ?>><?=$value?></option><?php	
                        }
                    }
                    ?></select></td>           
                    <td align="center"><select name="order_orderlist_state_<?=$i?>" id="order_orderlist_state_<?=$i?>" onChange="change_power('<?=$data['id']?>', 'orderlist_state', this.value)"><?php
                    if(count($array_orderlist_state)>0) {
                        foreach($array_orderlist_state as $key => $value)	 {
                        ?><option value="<?=$key?>" <?php if($key==$data['orderlist_state']){echo 'selected';} ?>><?=$value?></option><?php	
                        }
                    }
                    ?></select></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['order_name']?></td>
                    <td align="center"><?=$data['order_email'].'<br>'.$data['order_mobile']?></td>
                    <td align="center"><?=number_format($data['total_price'])?></td>
                    <td align="center"><?=$array_cart_type[$data['cart_type']]?></td>
                    <td align="center"><?=$array_pay_type[$data['pay_type']]?></td>
                    <td align="center"><?=$data['order_time']?></td>
					</tr><?php	
				}
				break;
			case 'links.php':	//相關連結管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><a href="<?=($data['url_to'])?$data['url_to']:'#'?>" target="_blank"><?=$data['title']?></a></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
			case 'stores.php':	//商家資訊管理
				global $twzipcode;
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['name']?></td>
                    <td align="center"><?=$data['phone'].'<br>'.$data['email'].'<br>'.$data['zipcode'].$twzipcode[$data['zipcode']]['county'].$twzipcode[$data['zipcode']]['area'].$data['address']?></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
			case 'download.php':	//檔案下載管理
				global $main_str_down;
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button><button type="button" class="editbtn edit_w65" title="下載" onClick="location.href='downfile.php?file=../<?=$main_str_down?>/<?=$data['file1']?>'">下載</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><a href="downfile.php?file=../<?=$main_str_down?>/<?=$data['file1']?>" target="_blank"><?=$data['title']?></a></td>
                    <td align="center"><input type="text" name="data_sort_<?=$i?>" id="data_sort_<?=$i?>" value="<?=$data['sort']?>" style="width:50px;" onChange="change_sort('<?=$data['id']?>', 'sort', this.value, event)"></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
			case 'contact_form.php':	//聯絡我們表單
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button><button type="button" class="editbtn edit_w65" title="查看" onClick="real_cont(<?=$data['id']?>, '<?=$data['name']?>')">查看</button></td>
                    <td align="center"><input type="checkbox" name="data_state" id="data_state<?=$i?>" value="1" <?php if($data['state']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'state', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['name']?></td>
                    <td align="center"><?=$data['phone']?></td>
                    <td align="center"><?=$data['email']?></td>
                    <td align="center"><?=$data['create_time']?></td>
					</tr><?php	
				}
				break;
			//=====================================
			case 'member.php':	//會員資料管理

				foreach($result_data as $i => $data) {
					$data['login_time']  = explode(" ", $data['login_time']);
					$data['login_time']  = $data['login_time'][0].'<br><span class="txtgray">'.$data['login_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?>
                    <tr>
                    <td align="center"><?=$data['name']?></td>
                    <td align="center"><?=$data['email']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr>
					<?php	
				}
			break;
			case 'board.php':	//留言板管理
				foreach($result_data as $i => $data) {
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['name']?>')">s</button><button type="button" class="editbtn edit_w65" title="回覆" onClick="real_board(<?=$data['id']?>, '<?=$data['name']?>')">回覆</button></td>
                    <td align="center"><input type="checkbox" name="data_reply" id="data_reply<?=$i?>" value="1" <?php if($data['reply']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'reply', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['name']?></td>
                    <td align="left"><?=$data['content']?></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
			case 'forum.php':	//討論區管理
				require_once(Root_Includes_Path.'class_getData.php');
				$obj_getData= new getData();
				
				foreach($result_data as $i => $data) {
					$obj_getData->memberData($forum['memberIDkey']);
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button><button type="button" class="editbtn edit_w65" title="留言" onClick="location.href='forum_reply.php?forum_id=<?=$data['id']?>'">留言</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$obj_getData->member['name']?></td>
                    <td align="left"><?='標題：'.$data['title'].'<br>'.$data['content']?></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
			case 'forum_reply.php':	//討論區回覆留言管理
				require_once(Root_Includes_Path.'class_getData.php');
				$obj_getData= new getData();
				
				foreach($result_data as $i => $data) {
					if($data['memberIDkey']!=0) {
						$obj_getData->memberData($data['memberIDkey']);
						$member_name = $obj_getData->member['name'];
					}else {
						$member_name = '網站管理者';	
					}
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$obj_getData->member['name']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$member_name?></td>
                    <td align="left"><?=nl2br($data['content'])?></td>
                    <td align="center"><?=$data['create_time']?></td>
					</tr><?php	
				}
				break;
			case 'edm.php':	//EDM 管理
				global $table_name_edm;
				$obj_log = new mysql_page();
				foreach($result_data as $i => $data) {					
					$query = "select count(id) as counts from ".$table_name_edm."_log  where edm_id='".$data['id']."'";
					$log   = $obj_log->run_mysql_out($query);
					$data['create_time'] = explode(" ", $data['create_time']);
					$data['create_time'] = $data['create_time'][0].'<br><span class="txtgray">'.$data['create_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['title']?>')">s</button></td>
                    <td align="center"><button type="button" class="editbtn edit_w65" title="發送" onClick="enter_email_list('send', '<?=$data['formember']?>', <?=$data['id']?>, '<?=$data['title']?>')">發送</button></td>
                    <td align="center"><button type="button" class="editbtn edit_w65" title="發送測試" onClick="enter_email_list('test_send', '', <?=$data['id']?>, '<?=$data['title']?>')" style="font-size:12px">發送測試</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onChange="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['edm_date']?></td>
                    <td align="center"><?=$data['title'].' (Sent:'.number_format($log['counts']).')'?></td>
                    <td align="center"><?=$data['create_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;
			//=====================================
			case 'admin.php':	//帳號管理
				global $array_admin;
				foreach($result_data as $i => $data) {
					$data['login_time']  = explode(" ", $data['login_time']);
					$data['login_time']  = $data['login_time'][0].'<br><span class="txtgray">'.$data['login_time'][1].'</span>';
					$data['edit_time']   = explode(" ", $data['edit_time']);
					$data['edit_time']   = $data['edit_time'][0].'<br><span class="txtgray">'.$data['edit_time'][1].'</span>';
					?><tr>
                    <td align="center"><input type="checkbox" name="IDlist[]" id="IDlist<?=$i?>" value="<?=$data['id']?>" /></td>
                    <td align="center"><button type="button" class="editbtn edit_w25" title="編輯" onClick="real_edit(<?=$data['id']?>)">r</button> <button type="button" class="editbtn edit_w25" title="刪除" onClick="real_del(<?=$data['id']?>, '<?=$data['account']?>')">s</button></td>
                    <td align="center"><input type="checkbox" name="data_pub" id="data_pub<?=$i?>" value="1" <?php if($data['pub']==1){echo 'checked';} ?> onClick="change_power(<?=$data['id']?>, 'pub', this.checked)" /></td>
                    <td align="center"><?=$data['id']?></td>
                    <td align="center"><?=$data['account']?></td>
                    <td align="center"><?=$data['name']?></td>
                    <td align="center"><?=$array_admin[$data['lv']]?></td>
                    <td align="center"><?=$data['login_time']?></td>
                    <td align="center"><?=$data['edit_time']?></td>
					</tr><?php	
				}
				break;	
		}
	}
	
	public function drawiFramebutton($buttonVal, $iFrame_url) {
		echo '<a class="iFrame" href="'.$iFrame_url.'"><input type="button" class="batchButton1" value="'.$buttonVal.'"></a>　';	
	}
	public function drawDelallbutton($buttonVal, $actionID, $actionVal, $formID) {
		echo '<input type="button" class="batchButton2" value="'.$buttonVal.'" onClick="$(\'#'.$actionID.'\').val(\''.$actionVal.'\');$(\'#'.$formID.'\').submit();">　';	
	}
	public function drawChangebutton($buttonVal, $actionID, $actionVal, $rowNameID, $rowNameVal, $rowValueID, $rowValueVal, $formID) {
		echo '<input type="button" class="batchButton2" value="'.$buttonVal.'" onClick="$(\'#'.$actionID.'\').val(\''.$actionVal.'\');$(\'#'.$rowNameID.'\').val(\''.$rowNameVal.'\');$(\'#'.$rowValueID.'\').val(\''.$rowValueVal.'\');$(\'#'.$formID.'\').submit();">　';	
	}
}	
$obj_drawtable = new drawtable();	
?>