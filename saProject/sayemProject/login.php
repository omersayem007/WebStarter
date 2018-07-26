<?php
  error_reporting(0);
  session_start();
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo "Invalid user info! <a href=login.php>try again...</a>";
		}else if($status == "nullvalue"){
			echo "Username/password can't be empty <a href=login.php>try again...</a>";
		}
    }
	else if($_SESSION['userSession']=="123" || $_COOKIE['abc']=="123"){
		header("location: home.php");
	    }
	
	else{
		?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>



        
		<fieldset style="position:fixed;top:40%;left:45% ;margin-top: -50px;
  margin-left: -100px;" >
			<legend>LOGIN</legend>

			<form method="post" action="loginCheck.php">
				
				User Name: <input type="text" name="username"><br/><br/>
        
				Password : <input type="password" name="password"><br/><br/>
							<input type="checkbox" name="remember"> Remember me ?</br>
						   <input type="submit" name="submit" value="Submit"></br>
						   
						   <a href="registration.php" > New User ? </a>
			</form>
		</fieldset>

</body>
</html>

<?php
	}
	?>