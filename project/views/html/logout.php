<?php
	
	session_start();
	session_destroy();
	setcookie('abc',"123",time()-1,"/");
	header("location: login.php");
	
?>