
<?
	require_once('includes/xprog.php');
	
	$Conn = DB_Open();

	$fp = fopen('member.csv', 'w');	
	
	$sql1 = "select * from health_member order by edit_time desc limit 0, 50";
	$rl1 = mysql_query($sql1);	
	while($row1 = mysql_fetch_array($rl1, MYSQL_ASSOC)){
		//echo $row1['name'] . "<br>";
		//echo $row1['email'] . "<br><br>";		
		//fputcsv($fp, split(',', $row1['name'] . "," . $row1['email']));
		fwrite($fp, $row1['name'] . "," . $row1['email'] . "\r\n");
	}
	
	fclose($fp);
	
?>
<meta charset="utf-8">

<script>
	location.replace('member.php');
</script>