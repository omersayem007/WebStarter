<?php
error_reporting(0);
if($_SESSION['def']=='456')
	{
	
	if( isset($_POST['back'])){
		header("location:home.php");
	}
	
	else
	{header("location:personlinfo.php");}
	}
?>