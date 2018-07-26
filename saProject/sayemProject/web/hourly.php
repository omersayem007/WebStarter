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
<table border="1"  height="550px" width="850px" align="center">
<tr><td height="550px" width="50px">
    <table  height="555px" width="50px" >
        <tr><tr><td ><a href="tmploc.php">Now</a></td></tr>
		<tr><td ><a href="weekly.php"> weekly  </a></td></tr>
		<tr><td ><a href="monthly.php"> Monthly  </a></td></tr>
		<tr><td> <a href="hourly.php"> Hourly  </a></td></tr>
		<tr><td > <a href="home.php">Go_Home </a></td></tr>
		<tr><td > <a href="login.php">logout </a></td></tr>
    </table>
	</td>
	
	<td height="455px" width="845px" align="left" valign="top">
	<table border="1" height="55px" width="845px" >
                        <tr ><td colspan="2" align="center" valign="center"><h3>hourly  Weather Updates<br/>
						<h4 align="left" valign="bottom">Location: Raozan,Chittogong</h3>
						<br/>date: 12/3/18 Sunday</td></tr>
						
						
						<tr >
					<td>
					  <table border="1" height="150px" width="850px">					  
					        <tr  >							
							<td height="5px" width="60px">Time</td><td>&nbsp &nbsp </td><td >weather</td>
							<td width="60px">Time</td><td>&nbsp &nbsp </td><td>weather</td>
							<td width="60px">Time</td><td>&nbsp &nbsp </td><td>weather</td>
							<td width="60px">Time</td><td>&nbsp &nbsp </td><td >weather</td></tr>
					  
                           <tr>

						    <td height="5px" width="55px">00:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
										<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td></td>
						    <td height="5px" width="50px">01:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
						                <h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
						    <td height="5px" width="60px">02:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
										<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
						    <td height="5px" width="65px">03:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
										<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
						  </tr>
						
						 <tr>
							
							<td width="60px">04:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
									<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">05:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
									<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">06:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
									<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">07:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
									<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
						 </tr>
							
						  <tr>						
							<td width="60px">08:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
										<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">09:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
										<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">10:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
										<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">11:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
										<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td></tr>
							
							<tr>
							
							<td width="60px">12:00pm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">01:00pm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">02:00pmm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">03:00pm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							</tr>
							
							<tr>
							
							<td width="60px">04:00pm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">05:00pm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">06:00pmm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">07:00pm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							</tr>
							
							<tr >							
							<td width="60px">08:00pm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">09:00pm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">10:00pm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">11:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							</tr>
							
							<tr >
							<td width="60px">11:00am</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>
							<td width="60px">12:00pm</td><td>&nbsp &nbsp </td><td height="5px" width="100px">
							<h3>35 'c</h3>wind: S-W<br/>speed:<12km/h</td>							
							<td width="60px" colspan="7"></td>
							</tr>
                      </table> 
	</td></tr>
	
	<tr >
					<td >
					 </td>
	
	

					
</tr></table>
</body>

</html>
<?php
}else{
		header("location: login.php");

	}
?>