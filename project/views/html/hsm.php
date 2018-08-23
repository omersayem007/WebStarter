<?php
	session_start();
	
	if($_SESSION['def']=='456')
	{
?>

<html>

<head>
    <title></title>
</head>

<body >
<table  border="1" align="center"><tr><td >
    <table   height="450px" width="50px">
	     
        <tr><td><a href="hsm.php">Now</a> </td>       
        </tr>		
		<tr><td ><a href="weekhsm.php">weekly</a></td></tr>
		<tr><td > <a href="home.php">Go_Home </a></td></tr>
		<tr><td > <a href="login.php">logout </a></td></tr>
    </table>
    </td>
    
    
	<td align="left" valign="center" ><h3 align="center">Humidity,Sunrise/set updates based on location</h3>
	<table border="1"  width="550px" height="200px" >
	<tr><td colspan="2">
	<table   width="550px" height="250px">
	
	<tr><td >
	<u>Location: </u> Wari,dhaka <input type="checkbox" name="currentLocation" >Current location
	</td>
	<td align="right" valign="top"><input align="left" valign="bottom" type="text" name="search" value="search">
	<input type="button" name="search1" value="search"></td></hr>
	</tr>
	
	<tr><td width="150px" height="50px">
	<h3>Humidity:  </h3><br/>feels like 27'<br/>UV 1Low</td><td width="450px" height="50px"><h2>77%</h2>
	</td></tr>	
	
	<tr><td width="150px" height="50px">
	<h3>Sunrise: <br/>Sunset: </h3></td><td width="150px" height="50px" align="left" valign="top">5.33am<br/>
	7.33pm</tr>
	
	<tr><td width="150px" height="50px">
	<h3>Moonrise: <br/>Moonset: </h3></td><td width="150px" height="50px" align="left" valign="top">6.33pm<br/>
	4.49am</tr>
	
	<tr>
	<table  align="left" valign="top" width="150px" height="50px">
	<tr><td colspan="4">Humidity rate:</td></tr>
	<tr>
	<td>Today &nbsp &nbsp  </td>
	<td>Normal &nbsp &nbsp </td>
	<td>Record &nbsp &nbsp </td>
	<td> Date(7/2/18) &nbsp &nbsp</td>
	</tr>
   <tr>
	<td>Low</td>
    <td>71  </td>
	<td>77</td>
	<td> </td>
	</tr>
	
	<tr><td colspan="4">
	&nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
	&nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
	&nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
	&nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
	</td></tr>
	</table>
	
	</table>
			
	</td></tr>
	</table>
	
	</td></tr>
	</table>
	
	
</body>

</html>
<?php
}else{
		header("location: login.php");

	}
?>