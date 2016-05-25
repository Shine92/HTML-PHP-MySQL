<?php 
	$local_host = 'localhost';
	$local_user = 'root';
	$local_pass = 'root';
	$local_name = 'password';
	
	$link = mysqli_connect($local_host,$local_user,
					$local_pass,$local_name) 
			or die("GAME OVER");
	mysqli_query($link, 'SET NAME utf8');
?>