<?php
	session_start();
	
	if($_SESSION['userSession']=='123')
	{
		header("location:home.php");
	}else{
		header("location: login.php");

	}
	
?>
