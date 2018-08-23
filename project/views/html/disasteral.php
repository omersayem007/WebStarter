<?php
	session_start();
	
	if($_SESSION['def']=='456')
	{
?>

<html>

<head>
    <title></title>
</head>

<body>
<table border="1" height="300px" width="550px" align="center">
<tr><td height="300px" width="50px">
    <table  height="150px" width="100px">		
		<tr><td > <a href="home.php">Go_Home </a></td></tr>
		<tr><td > <a href="login.php">logout </a></td></tr>
    </table>
	</td>
	
	<td height="300px" width="545px" align="left" valign="top">
	<table border="1" height="100px" width="545px" ><tr><td>
	<table  height="100px" width="545px" >
                 <tr ><td colspan="2" align="center" valign="center"><h3>Todays Disaster alert
				 </h3 ><h4 align="left" valign="bottom">Sunday,July 15,2018 </h4>
					<p align="left" valign="bottom">chittogong,Bangladesh </td>
					<td align="right" valign="top"><input type="text" name="search" value="search">
	               <input type="button" name="search1" value="search"></td></tr>
				   <tr><td align="right" valign="top"><input type="checkbox" name="currentLocation" >Current location</td></tr>
						
						</table></td></tr>
						<tr >
					<td>
					  <table border="1" height="190px" width="550px">
                        
						 <tr >
                            <td align="left" valign="top"><h3>Temperature: 12 'c</h3>Wind: sounth to west<br/>
							Speed: <23 km/h<br/>Humidity: 88%<br/>
							tropical cyclone can be possible in bandarban</td>
							
						</tr>
                      </table> 
	</td></tr>
</tr></table>
</body>

</html>
<?php
}else{
		header("location: login.php");

	}
?>