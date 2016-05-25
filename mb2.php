<?php ?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style> 
.alert {
  width: 360px;
  margin: 200px auto;
  border: 2px solid gray;
}
</style>
</head>
<?php
	include 'link.php';	// $link
	
	$account = $_POST['account'];
	$passwd = $_POST['passwd'];
	$sql = "SELECT * FROM member WHERE account='{$account}'" .
			" and passwd='{$passwd}'"; //撈member資料
	$rs = mysqli_query($link, $sql);
	$count = mysqli_num_rows($rs);
	if ($count>0){	//有1筆資料 可進入購物車
		$_SESSION['key'] = 'ok';
		header('Location:mb5.php');
	}else{
?>
	<meta content='3; url=mb1.php' http-equiv='refresh' />
<div class="alert">
    <strong>Warning!</strong><br/><br/> Account/Password Fail. try again!</div>
<!-- 	Account/Password Fail -->
<?php 
	}
?>