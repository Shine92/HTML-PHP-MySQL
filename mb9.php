<?php
	include 'link.php';	// $link SQL
	
	$durl = $_REQUEST['durl'];//接收資料
	$daccount = $_REQUEST['daccount'];
	$dpasswd = $_REQUEST['dpasswd'];
	$ddurl = $_REQUEST['ddurl'];
	
	$sql = "INSERT INTO data (durl,daccount,dpasswd,ddurl)" . 
					" VALUES ('{$durl}','{$daccount}','{$dpasswd}','{$ddurl}')"; //寫入SQL新增
// echo $sql; //test
	mysqli_query($link, $sql); 
	header('Location:mb5.php');
?>