<?php
error_reporting(0);
if($_SESSION['userSession']=='123' || isset($_COOKIE['abc']) )
	{
	
	if( isset($_POST['back'])){
		header("location:home.php");
	}
	
	else
	{header("location:personlinfo.php");}
	}
?>