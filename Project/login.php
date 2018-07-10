<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo "Invald User ..";
		}
	}
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
						   <input type="submit" name="submit" value="Submit">
						   <a href="registration.php" > New User ? </a>
			</form>
		</fieldset>

</body>
</html>