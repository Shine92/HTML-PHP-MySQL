<?php 
	session_start();
	session_destroy();
	header('Location:mb1.php');
?>