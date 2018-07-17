<?php
	session_start();
	
	if($_SESSION['userSession']=='123' || isset($_COOKIE['abc']) )
	{
		if(isset($_GET['status'])){
		$status = $_GET['status'];
		}
   else	
	   $status="";
		
?>

<html>

<head>
    <title></title>
</head>

<body>
<form method="post" action="monthCheck.php">
<table border="1"  height="455px" width="850px" align="center">
<tr><td height="455px" width="50px">
    <table  height="455px" width="50px" >
        <tr><tr><td ><a href="tmploc.php">Now</a></td></tr>
		<tr><td ><a href="weekly.php"> weekly  </a></td></tr>
		<tr><td ><a href="monthly.php"> Monthly  </a></td></tr>
		<tr><td> <a href="hourly.php"> Hourly  </a></td></tr>
		<tr><td > <a href="home.php">Go_Home </a></td></tr>
		<tr><td > <a href="login.php">logout </a></td></tr>
    </table>
	</td>
	
	<td height="455px" width="845px" align="left" valign="top">
	<table border="1" height="100px" width="845px" >
                        <tr ><td colspan="2" align="center" valign="center"><h3>Monthly  Weather
<table  height="40px" width="40px"align="right" valign="top" ><tr><td align="right" valign="top">		
<select >
<option selected value="2018">2016</option>
<option value="2019">2017</option>
<option selected value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2022</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
</select>
</td>

<td align="left" valign="top" colspan="2">		
<select >
<option selected value="January">January</option>
<option value="Fabruary">Fabruary</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
</select>
</td>
</tr>

<tr>
<td align="right" valign="top">Location:</td>
<td colspan="2" align="right" valign="top"><input type="text" name="search" >
	<input type="submit" name="search1" value="search"></td></hr></tr>
</table>	
				
						<br/>
						<h4 align="left" valign="bottom">
						<?php 
						
						echo $status;
						?>
						Location: Raozan,Chittogong.2018</h3>
		

						</td></tr>
						
						
						<tr >
					<td>
					  <table border="1" height="190px" width="850px">
                        <tr >
						    <td>info<hr/></td>
                            <td height="90px">January</td>
							<td>Fabruary</td>
							<td>March</td>
							<td>April</td>
							<td>May</td>
							<td>June</td>
							<td>July</td>
							<td>August</td>
							<td>September</td>
							<td>October</td>
							<td>November</td>
							<td>December</td>
							
							
						</tr>
						 <tr >
						    <td align="left" valign="top"><h3>temperature</h3><br/>wind<br/><br/>speed</td>
                            <td><h3>35 'c</h3><br/>wind: S-W<br/><br/>speed: <12km/h</td>
							<td> <h3>36 'c</h3><br/>wind: S-W<br/><br/>speed: <12km/h</td>
							<td> <h3>32 'c</h3><br/>wind: s-W<br/><br/>speed: <12km/h</td>
							<td> <h3>31 'c</h3><br/>wind: s-W<br/><br/>speed: <12km/h</td>
							<td> <h3>34 'c</h3><br/>wind: s-W<br/><br/>speed: <12km/h </td>
							<td> <h3>30 'c</h3><br/>wind: s-W<br/><br/>speed: <12km/h</td>
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
					  <table  height="190px" width="845px">
                        <tr >
  <td align="left" valign="top" ><h4>monthly wethear base good place:<img src="bichanakandi.png" width="800px" height="190px" align="right" valign="top"></h4><br/> &nbsp &nbsp Bichanakandi, in Sylhet,Bangladesh
  
							
							
						</tr>
	
	
	

					
</tr></table>
</form>
</body>

</html>
<?php
}else{
		header("location: login.php");

	}
?>