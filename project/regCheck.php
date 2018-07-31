<?php

require "db.php";
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
                    
					$conn = DBconnection();
					$sql= "INSERT into user values('','$name', '$password')";

					if(mysqli_query($conn, $sql)){
						header("location: login.php");
					}else{
						header("location: regCheck.php?status=error");
					}

					mysqli_close($conn);

				}
					
	else{
		echo "Invalid request";
	}
?>