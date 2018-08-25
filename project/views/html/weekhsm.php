

<html>

<head>
    <title></title>
</head>

<body>
<form method="post" action="monthCheck.php">
<table border="1"  height="455px" width="850px" align="center">
<tr><td height="455px" width="50px">
    <table  height="455px" width="50px" >
         <tr><td><a href="hsm.php">Now</a> </td>       
        </tr>		
		<tr><td ><a href="weekhsm.php">weekly</a></td></tr>
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
					<td height="200px">
					  <table border="1" height="200px" width="850px">
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
						    <td align="left" valign="top"><h4>Humidity:</h4><br/><br/><br/><br/>Sunrise:<br/>Sunset:<br/><br/>Moonrise:<br/>Moonset</td>
                            <td><h4> 77% </h4><br/>feels like 27'<br/>UV 1Low
							<h4>5.33am<br/> 7.33pm<br/><br/>6.33pm<br/>4.49am</h4></td>
							<td><h4> 77% </h4><br/>feels like 27'<br/>UV 1Low
							<h4>5.33am<br/> 7.33pm<br/><br/>6.33pm<br/>4.49am</h4> </td>
							<td> <h4> 77% </h4><br/>feels like 27'<br/>UV 1Low
							<h4>5.33am<br/> 7.33pm<br/><br/>6.33pm<br/>4.49am</h4></td>
							<td> <h4> 77% </h4><br/>feels like 27'<br/>UV 1Low
							<h4>5.33am<br/> 7.33pm<br/><br/>6.33pm<br/>4.49am</h4></td>
							<td> <h4> 77% </h4><br/>feels like 27'<br/>UV 1Low
							<h4>5.33am<br/> 7.33pm<br/><br/>6.33pm<br/>4.49am</h4> </td>
							<td><h4> 77% </h4><br/>feels like 27'<br/>UV 1Low
							<h4>5.33am<br/> 7.33pm<br/><br/>6.33pm<br/>4.49am</h4></td>
							
							
						</tr>
                      </table> 
	</td></tr>
	
	<tr >
					<td >
					  <table  height="100px" width="845px">
                        <tr >
  <td></td>         <td> todays most nearest sunset location are vhoirob </td>
  
							
							
						</tr>
	
	
	

					
</tr></table>
</form>
</body>

</html>