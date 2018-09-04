<?php

require "../models/saveUser.php";
	error_reporting(0);
	
	if( isset($_POST['submit'])){

					$name 		= $_POST['name'];
					$email 		= $_POST['email'];
					$gender 	= $_POST['gender'];
					$day 		= $_POST['day'];
					$month 		= $_POST['month'];
					$year 		= $_POST['year'];
					$userID		=$_POST['userId'];
					$password =$_POST['password'];
					
					$date = $day.'-'.$month.'-'.$year ;

					if(saveUser($name,$password,$date)){
						header("location: ../index.php");
					}else{
						header("location: ../views/html/registration.php?status=error");
					}

				}
					
	else{
		echo "Invalid request";
	}
?>