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
		header("location: views/html/home.php");
	    }
	
	else{
		?>

		<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<script src="views/js/logCheck.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
</head>
<body>


<section class="hero is-info is-fullheight">
  <div class="hero-body">
    <div class="container">

      <h2 class="subtitle">

	  <fieldset style="position:fixed;top:40%;left:45% ;margin-top: -50px; margin-left: -100px;" >
			<legend>LOGIN</legend>
			<form method="post" action="controllers/logCheckController.php">	
				User Name: <input type="text" name="username" id="userName"><br/><br/>
				Password : 	<input type="password" name="password" id="password"><br/><br/>
				<input type="checkbox" name="remember"> Remember me ?</br>
				<input type="submit" name="submit" value="Submit" onclick="return checkEmpty()"></br>
				<a href="views/html/registration.php" > New User ? </a>
			</form> 
		</fieldset>

      </h2>
    </div>
  </div>
</section>


		
</body>

</html>

<?php
	}
	?>



