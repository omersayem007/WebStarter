
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
						<h3 align="left" valign="bottom">Location: Raozan,Chittogong</h3>
						<br/><span id="currentDate"></span></td></tr>
						
						
						<tr >
					<td>
					  <table border="1" height="150px" width="850px">					  
					        <tr id="row">	
							 					
						
							</tr>
                           <tr id="data">
						   

						  </tr>
							
                      </table> 
	</td></tr>
	
	<tr >
					<td >
					 </td>
	
	

					
</tr></table>

<button>load</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/hourlyWeather.js"></script>

</body>

</html>