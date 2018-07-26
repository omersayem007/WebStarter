<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo "Invald User ..";
		}
	else if( $status == "nullvalue" ){
		echo " Empty field";
	}
	else{
	}
	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>

		<fieldset >
			<legend>LOGIN</legend>

			<form method="post" action="loginCheck.php">
				
				User Name: <input type="text" name="username"><br/><br/>
        
				Password : <input type="password" name="password"><br/><br/>
				<input type="checkbox" name="remember" value=""> Remember me ?</br>
						   <input type="submit" name="submit" value="Submit" onclick="window.location.href='homeCheck.php'"></br>
						  
						   <a href="registration.php" > Register </a>

			</form>
		</fieldset>

</body>
</html>