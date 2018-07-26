
<?php

	session_start();
	
	if($_SESSION['userSession']=='123' || isset($_COOKIE['abc']) )
	{
		$myfile = fopen("user.txt", 'r');
		$data = fread($myfile, filesize("user.txt"));
		$arr = explode("|", $data);
		
?>
<html>

<head>
    <title></title>
</head>

<body>



        
		<fieldset  style="position:fixed;top:30%;left:40% ;margin-top: -40px;
  margin-left: -100px;height: 200px; width: 300px">
			<legend  align="center">Personal Information</legend>
<form>
			<table  align="center">
				
				<tr><td>
					
		<?php	
		
	

		echo "Username: ".$arr[0]."<br/>";
		echo "Password: ".$arr[1]."<br/>";
		echo "Gender: ".$arr[2]."<br/>";
		echo "Email: ".$arr[3]."<br/>";
		echo "Date: ".$arr[4]."<br/>";
		echo "User ID: ".$arr[5]."<br/>";	
	}
	fclose($myfile);	
?>

</td></tr>
<tr><td><a href="home.php"><input type="button" name="back" value="back" ></a> </td></tr>
	</table>
	</form>
		</fieldset>

</body>
</html>	