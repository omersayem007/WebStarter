<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
<script src="../js/regCheck.js" ></script>
<section class="hero is-primary is-fullheight">
  <div class="hero-body">
    <div class="container">
      <h2 class="subtitle">

	  <fieldset style="position:fixed;top:25%;left:45% ;margin-top: -70px; margin-left: -100px;" >
    <legend><b>REGISTRATION</b></legend>
	<form method="post" action="../../controllers/regCheckController.php">
		<br/>
		<table width="100%"  cellpadding="0" cellspacing="0">
			<tr>
				<td>Name (Min two  character )</td>
				<td>:</td>
				<td><input name="name" type="text" value="" id="name" ><br/><br/></td>
				<td id="nameError" ></td>
			</tr>	
			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="" id="email" ><br/><br/>
				</td>
				<td id="emailError"></td>
			</tr><br/>	
		
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" value="" id="password"><br/><br/></td>
				<td class="errorText"></td>
			</tr>		
		
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password" value="" id="confirmPassword"><br/><br/></td>
				<td class="errorText"></td>
			</tr>		
			
			<tr>
		
				<td colspan="3"> 
				Gender: 
						<input name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio"value="Female">Female
						<input name="gender" type="radio" value="Other"> Other <br/><br/>
				</td>
				<td class="errorText"></td>
			</tr>		
			
			<tr>
				<td colspan="3">
				Date Of Birth:
						<input type="text" size="2" / name="day" value="" id="day">/
						<input type="text" size="2" / name="month" value="" id="month">/
						<input type="text" size="4" / name="year" value="" id="year">
						<font size="2"><i>(dd/mm/yyyy)</i></font><br/><br/>
			
				</td>
				<td class="errorText"></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="reset" href="#">
		<input type="submit" name="submit" value="save and next" onclick="return checkEmpty()" >
		<button > <a href="../../index.php" style="color:black"> Login </a> </button> 

	</form> 
</fieldset>
        




      </h2>
    </div>
  </div>
</section>
