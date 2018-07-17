<?php
	session_start();
	
	if( $_SESSION['userSession']=='123' || isset($_COOKIE['abc']) )
	{
		$myfile = fopen("user.txt", 'r');
		$data = fread($myfile, filesize("user.txt"));
		$arr = explode("|", $data);
?>

<html>

<head>
    <title></title>
</head>

<body >
    <h3 align="center">welcome <?php echo $arr[0]; ?> to Weather Updates</h3>

    <table border="1" height="50px" width="50%" align="center">
	     
        <tr> <td colspan="5" >
		<table align="center">
        <tr><td><a href="personlinfo.php">personal Information</a></td></tr>	   
        </table></td>
        </tr>
		
		<tr><td colspan="5" >
        <table align="center">
        <tr><td><a href="tmploc.php">Temperature based on Location</a></td></tr>	   
        </table></td>
        </tr>
		
		<tr><td colspan="5" >
        <table align="center">
        <tr><td><a href="hsm.php">Humidity,sunset/rise based on Location</a></td></tr>	   
        </table></td>
        </tr>	

	<tr><td colspan="5" >
        <table align="center">
        <tr><td><a href="prayer.php">prayer timings based on Location</a></td></tr>	   
        </table></td>
		
        </tr>		
          <tr><td colspan="5" >
        <table align="center">
        <tr><td><a href="disasteral.php">Upcoming disaster alert</a></td></tr>	   
        </table></td>
        </tr> 

		</tr>		
          <tr><td colspan="5" >
        <table align="center">
        <tr><td><a href="login.php">logout</a></td></tr>	   
        </table></td>
        </tr>  		
        
    </table>

    
    

</body>

</html>
<?php
}else{
		header("location: login.php");

	}
?>