<?php
	session_start();
	
	if($_SESSION['userSession']=='123' || isset($_COOKIE['abc']) )
	{
?>

<html>

<head>
    <title></title>
</head>

<body>
<table border="1" height="455px" width="550px" align="center">
<tr><td height="455px" width="50px">
    <table border="1" height="450px" width="50px" >
        <tr><tr><td ><a href="tmploc.php">Now</a></td></tr>
		<tr><td ><a href="weekly.php"> weekly  </a></td></tr>
		<tr><td ><a href="monthly.php"> Monthly  </a></td></tr>
		<tr><td> <a href="hourly.php"> Hourly  </a></td></tr>
		<tr><td > <a href="home.php">Go_Home </a></td></tr>
		<tr><td > <a href="login.php">logout </a></td></tr>
    </table>
	</td>
	
	<td height="455px" width="545px" align="left" valign="top">
	<table border="1" height="100px" width="545px" >
                        <tr ><td colspan="2" align="center" valign="center"><h3>Weekly  Weather</h3></td></tr>
						
						
						<tr >
					<td>
					  <table border="1" height="190px" width="550px">
                        <tr >
						<td>info<hr/></td>
                            <td height="90px">Sunday</td>
							<td>monday</td>
							<td>tuesday</td>
							<td>wednessday</td>
							<td>thrusday</td>
							<td>friday</td>
							
							
						</tr>
						 <tr >
						 <td align="left" valign="top"><h3>temperature</h3><br/>wind<br/><br/>speed</td>
                            <td><h3>35 'c</h3><br/>wind: S-W<br/><br/>speed: <12km/h</td>
							<td> <h3>36 'c</h3><br/>wind: S-W<br/><br/>speed: <12km/h</td>
							<td> <h3>32 'c</h3><br/>wind: s-W<br/><br/>speed: <12km/h</td>
							<td> <h3>31 'c</h3><br/>wind: s-W<br/><br/>speed: <12km/h</td>
							<td> <h3>34 'c</h3><br/>wind: s-W<br/><br/>speed: <12km/h </td>
							<td> <h3>30 'c</h3><br/>wind: s-W<br/><br/>speed: <12km/h</td>
							
							
						</tr>
                      </table> 
	</td></tr>
	
	<tr >
					<td >
					  <table border="1" height="190px" width="545px">
                        <tr >
  <td align="left" valign="top"><h4>Weekly wethear base good place:<img src="srimangal.png" width="300px" height="190px" align="right" valign="top"></h4><br/> &nbsp &nbsp ride to Srimangal,Bangladesh
  </td>
							
							
						</tr>
	
	
	

					
</tr></table>
</body>

</html>
<?php
}else{
		header("location: login.php");

	}
?>