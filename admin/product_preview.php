<?

	header("content-type:text/html;charset=utf-8");
	require_once("includes/xprog.php");

	$id = $_REQUEST['id'];	
	$style = $_REQUEST['style'];
	$tbn = $_REQUEST['tbn'];		

	//var_dump($_REQUEST);
	if($id != ""){	
		$Conn = DB_Open();		
		//echo $Conn;
		
		$query = "select * from $tbn where id='" . $id . "'";
		//echo $query;
		$rl1 = mysql_query($query, $Conn);
		$row1 = mysql_fetch_array($rl1, MYSQL_ASSOC);		
		
		$content = $row1['content'];

		$filename = "css/" . $style . ".php";	
		$handle = @fopen($filename, "r");
		if ($handle)
		{
			  while (!feof($handle))
			  {
					//fgets為每次讀取一列文字
					$css .= fgets($handle);
			  }
		}

		$filename = "product_preview.html";
		$handle = @fopen($filename, "r");
		if ($handle)
		{
			  while (!feof($handle))
			  {
					//fgets為每次讀取一列文字
					$tmp = fgets($handle);
					$tmp = str_replace('<?=$content?>', html_entity_decode($content), $tmp);
					$tmp = str_replace('<?=$css?>', $css, $tmp);					
					$tmp = str_replace('<?=$style?>', $style, $tmp);	
					$tmp = str_replace('<?=$prod_id?>', $id, $tmp);																		
					$html .= $tmp;
			  }
		}
		
		//echo $html . "<br>";
		//break;
		fclose($handle);
		
		echo $html;	
	}
?>

