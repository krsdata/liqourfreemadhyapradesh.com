<?php
date_default_timezone_set('Asia/calcutta');
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])){
	mysql_connect('localhost','liquorfr_main','Po&A83x5L&y~') or die(mysql_error());
	mysql_select_db('liquorfr_main');
	
	$future_standing = (!empty($_POST['future_standing'])) ? $_POST['future_standing'] : 'n.a.';
	$sql = "insert into a_users values(NULL,'".mysql_real_escape_string($_POST['name'])."','".mysql_real_escape_string($_POST['email'])."','".mysql_real_escape_string($_POST['phone'])."','".date('Y-m-d H:i:s')."','".mysql_real_escape_string($_POST['message'])."','".mysql_real_escape_string($future_standing)."')";
	mysql_query($sql) or die(mysql_error());
	header('location:thankyou.php');
} else {
	header('location:thankyou.php');	
}


