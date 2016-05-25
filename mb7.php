<?php
	session_start();
	include 'link.php';	// $link
	
	//if (!isset($_SESSION['key'])) header('Location:mb1.php');
	
	$id = $_REQUEST['id'];
	$durl=$_REQUEST['durl'];
	$daccount = $_REQUEST['daccount'];
	$dpasswd = $_REQUEST['dpasswd'];
	$ddurl = $_REQUEST['ddurl'];
	$sql = "UPDATE data SET durl='{$durl}', daccount='{$daccount}', dpasswd='{$dpasswd}',ddurl='{$ddurl}' WHERE id='{$id}'";
 	//echo $sql;
	mysqli_query($link, $sql);
	header('Location: mb5.php');

?>