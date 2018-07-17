<?php
	session_start();
	
	if($_SESSION['userSession']=='123' || isset($_COOKIE['abc']) )
	{
?>

<html>

<head>
    <title></title>
</head>

<body >
<table  border="1" align="center"><tr><td >
    <table   height="450px" width="50px">
	     
        <tr><td><a href="tmploc.php">Now</a> </td>       
        </tr>
		
		<tr><td ><a href="weekly.php"> weekly  </a></td></tr>
		<tr><td ><a href="monthly.php"> Monthly  </a></td></tr>
		<tr><td> <a href="hourly.php"> Hourly  </a></td></tr>
		<tr><td > <a href="home.php">Go_Home </a></td></tr>
		<tr><td > <a href="login.php">logout </a></td></tr>
    </table>
    </td>
    
    
	<td align="left" valign="center" ><h3 align="center">Temperature updates</h3>
	<table border="1"  width="550px" height="200px" >
	<tr><td colspan="2">
	<table   width="550px" height="250px">
	
	<tr><td >
	<u>Location: </u> Wari,dhaka
	</td>
	<td align="right" valign="top"><input type="text" name="search" value="search">
	<input type="button" name="search1" value="search"></td></hr>
	</tr>
	
	<tr><td width="150px" height="50px">
	<h3>temperature: </h3></td><td width="450px" height="50px"><h2>32 'C</h2>
	</td></tr>	
	
	<tr><td width="150px" height="50px">
	<h3>Winds: </h3></td><td width="150px" height="50px" align="left" valign="top">south-west
	</td></tr>
	
	<tr>
	<table  align="left" valign="top" width="150px" height="50px">
	<tr>
	<td>Today &nbsp &nbsp  </td>
	<td>Normal &nbsp &nbsp </td>
	<td>Record &nbsp &nbsp </td>
	<td>Date(7/2/18) &nbsp &nbsp</td>
	</tr>
	<tr>
	<td>High</td>
    <td>92' &nbsp &nbsp </td>
	<td>84' &nbsp &nbsp </td>
	<td>&nbsp &nbsp </td>	
    </tr>
	
	<tr>
	<td>Low</td>
    <td>92' </td>
	<td>84' </td>
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