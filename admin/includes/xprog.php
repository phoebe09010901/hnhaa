<?
	//error_reporting(E_ALL);
	//session_start();

	//$Conn = DB_Open();
	
	//echo $Conn;	
	//echo 'aa';
	
	function DB_Open(){

		$DB_Host     = "localhost";
		$DB_Name     = "hnhaa_data";
		$DB_Login    = "hnhaa_admin";
		$DB_Password = "wQ#C!#qqoL9_";	

		$DB_Code     = "utf8";
		
		$Conn = mysql_pconnect($DB_Host, $DB_Login, $DB_Password);

		mysql_select_db($DB_Name, $Conn);

		mysql_query("SET NAMES " . $DB_Code . ";");
		
		mysql_query("SET CHARACTER_SET_CLIENT=" . $DB_Code . ";");
		
		mysql_query("SET CHARACTER_SET_RESULTS=" . $DB_Code . ";");
		
		//echo "1";	
		
		return $Conn;	
	}

	function Del($db_name, $iwant) {		
		$Conn = DB_Open();
		$sqlD = "delete from " . $db_name . " where ";
		$sqlD .= $iwant;
		
		//echo $sqlD . '<br>';
		//break;
		mysql_query($sqlD, $Conn);
	}

	function xheader_r1($Conn, $lang){
		$sql1  = "select * from hnhaa_system_set where ";
		$sql1 .= "lang = '$lang' ";				

		$rl1 = mysql_query($sql1, $Conn);
		$row1 = mysql_fetch_array($rl1, MYSQL_ASSOC);
		
		$html_title = $row1['html_title'];		
		$keywords = $row1['keywords'];		
		$description = $row1['description'];						
		//echo $file1 . '--------';
		return array($html_title, $keywords, $description);
		
	}	
	
/*
	function xmember_add1($Conn, $_POST){

		$this->TableFieldsType = array("id"=>"int", "account"=>"text", "password"=>"text", "password_check"=>"text", "name"=>"text", "phone"=>"text", "mobile"=>"text", "email"=>"email", "zipcode"=>"text", "county"=>"text", "area"=>"text", "address"=>"text");		
		
		$table_name = "health_member";
		
		$query = "insert into $table_name(";
		foreach($this->TableFieldsType as $key => $value) {
			if($key!='id' && $key!='password_check')
				$query .= $key.", ";
		}
		
		$query .= "pub_by_admin, pub_by_user, create_time, edit_time) values(";
		foreach($this->TableFieldsType as $key => $value) {
			if($key!='id' && $key!='password_check')
				$query .= "'".$this->requestData[$key]."', ";
		}
		
		$query .= "1, 1, now(), now())";
		echo $query;
		break;
		//mysql_query($query, $Conn);		
	}		
	*/

	function xmails1($Conn, $subject, $u_email, $u_fname, $upload_dir, $html){

		$corp_name = "";		
	
		require_once("../../phpmailer/class.phpmailer.php");
		
		$mail = new PHPMailer();

		// 設定為 SMTP 方式寄信
		$mail->IsSMTP();
		
		// SMTP 伺服器的設定，以及驗證資訊
		$mail->SMTPAuth = true;      
		$mail->Host = "ftm.com.tw"; 										//此處請填寫您的郵件伺服器位置,通常是mail.網址。如果您MX指到外地，那這邊填入www.XXX.com 即可
		$mail->Port = 25; 													//ServerZoo主機的郵件伺服器port為 25 

		// SMTP 驗證的使用者資訊
		$mail->Username = "service@ftm.com.tw";  							//此處為驗証電子郵件帳號,就是您在ServerZoo主機上新增的電子郵件帳號，＠後面請務必一定要打。
		$mail->Password = "p@ss4175";										//此處為上方電子郵件帳號的密碼 (一定要正確不然會無法寄出)
		
		$mail->CharSet = "utf-8";
		//$mail->Encoding = "base64";										//設定信件編碼，大部分郵件工具都支援此編碼方式		
		
		$mail->SetFrom("riley@vastenergy.com.tw", $corp_name);				//從誰寄出
		
		$mail->AddReplyTo("service@ftm.com.tw", $corp_name);				//回信地址
		
		//$mail->AddAddress($address, $corp_name);

		//$mail->AddBCC("service@ftm.com.tw", $corp_name);					//密件給$corp_name


		$sql1 = "select * from ftm2_system_set ";
		$rl1 = mysql_query($sql1, $Conn);		
		
		while($row1 = mysql_fetch_array($rl1, MYSQL_ASSOC)){
			$mail->AddBCC($row1['company_email'], $row1['company']);		//密件給FTM			
		}
		
		//$mail->AddBCC("service@ftm.com.tw", "FTM");						//密件給FTM

		$mail->AddBCC("mars@mars-lab.idv.tw", "FTM");						//密件給FTM		
		
		//$mail->AddBCC("service@ftm.com.tw", "FTM");						//密件給FTM
		
		//$mail->AddAddress($u_email, $u_fname);							//購物User的地址
		
		$mail->IsHTML(true); 												//send as HTML

		if($upload_dir != ''){	
			$mail->AddAttachment($upload_dir); 								//attachment	
		}
		
		// 信件標題	
		$mail->Subject = $subject;	
	
		//信件內容(html版，就是可以有html標籤的如粗體、斜體之類)	
		$mail->Body = $html;
		
		if(!$mail->Send()){
			//如果有錯誤會印出原因		
			//echo "寄信發生錯誤：" . $mail->ErrorInfo;
		}	else	{ 
			//echo "寄信成功";
		}		
	}			

	function xalbum_firstimgr1($Conn, $album_id){
		
		$file1 = "";
		$sql1  = "select * from hnhaa_album_photos where ";
		$sql1 .= "album_id = '$album_id' ";				
		$sql1 .= "order by sort desc, title asc ";						

		$rl1 = mysql_query($sql1, $Conn);
		$tmpC = mysql_num_rows($rl1);
		
		if($tmpC > 0){
			$row1 = mysql_fetch_array($rl1, MYSQL_ASSOC);
			
			$file1 = $row1['file1'];		
		}

		return array($tmpC, $file1);		
	}		
?>	