
<?php
	require "../models/searchUser.php";
	
	session_start();
	
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

	

		 $exits = searchUser($username,$password);

		 $data = getData($username,$password);

		 echo $data ;

			if($exits){


				if($data =="Admin"){

					$_SESSION['userSession'] = "321";
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