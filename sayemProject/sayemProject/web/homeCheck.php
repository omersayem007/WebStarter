<?php
	session_start();
	
	if($_SESSION['userSession']=='123' || isset($_COOKIE['abc']) )
	{
		header("location:home.php");
	}else{
		header("location: login.php");

	}
	
?>
