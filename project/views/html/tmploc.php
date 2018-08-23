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
	<u>Location: </u> <span id="location"></span>
	</td>
	<td align="right" valign="top"><input type="text" name="search" value="search" id="fetch">
	<input type="button" name="search1" id="searchButton" value="Search" ></td></hr>
	</tr>
	
	<tr><td width="150px" height="50px">
	<h3>temperature: </h3></td><td width="450px" height="50px"><h2 id="currentTemparature"></h2>
	</td></tr>	
	
	<tr><td width="150px" height="50px">
	<h3>Winds speed: </h3></td><td width="150px" height="50px" align="left" valign="top" id="windSpeed">
	</td></tr>
	
	<tr>
	<table  align="left" valign="top" width="150px" height="50px">
	<tr>
	<td>Cloudiness &nbsp &nbsp  </td>
	<td>Pressure &nbsp &nbsp </td>
	<td>Humidity &nbsp &nbsp </td>
	<td>Sunrise &nbsp &nbsp</td>
	<td>Sunset &nbsp &nbsp</td>
	</tr>
	
	<tr>
	<td id="cloudiness"> </td>
    <td id="pressure"> </td>
	<td id="humidity"> </td>
	<td id="sunrise"> </td>
	<td id="sunset"> </td>	
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

	<button >load</button>

	           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/currentWeather.js"></script>
	
	
</body>

</html>