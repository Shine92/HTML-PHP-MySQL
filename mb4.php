<?php
	include 'link.php';	// $link SQL
	
	$account = $_REQUEST['account'];//接收資料
	$passwd = $_REQUEST['passwd'];
	$name=$_REQUEST['name'];
	$sql = "INSERT INTO member (account,passwd,name)" . 
					" VALUES ('{$account}','{$passwd}','{$name}')"; //寫入SQL新增
//   echo $sql; //test
	mysqli_query($link, $sql); 
	header('Location:mb1.php');//返回登入會員
?>