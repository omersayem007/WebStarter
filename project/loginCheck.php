
<?php
	require "db.php";
	session_start();
	
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == "" || $password == ""){
            
			header("location: login.php?status=nullvalue");

		}else{

			$conn = DBconnection();
			$sql= "SELECT * from user";
			$result = mysqli_query($conn, $sql);
			$isvalid = "";

			while($row = mysqli_fetch_assoc($result)){

				if( $username == $row['userName'] && $password == $row['password'] ){
					$isvalid = "validuser" ;
				}
			}
			

			if($isvalid == "validuser"){

				$_SESSION['userSession'] = "123";
				header("location: home.php ");
			}else{
				header("location: login.php?status=invaliduser");
			}
			fclose($myfile);

		}
	}

?>