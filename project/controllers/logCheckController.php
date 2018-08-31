
<?php
	require "../models/searchUser.php";
	session_start();
	
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$userType = $_POST['userType'];

		 $exits = searchUser($username,$password);

			if($exits){


				if($userType =="Admin"){

					$_SESSION['userSession'] = "123";
				header("location: ../views/html/admin.php ");

				}
				else{

					$_SESSION['userSession'] = "123";
				header("location: ../views/html/home.php ");

				}

				
			}else{
				header("location: ../index.php?status=invaliduser");
			}

	}

?>