<fieldset style="position:fixed;top:40%;left:45% ;margin-top: -70px; margin-left: -100px;" >
    <legend><b>REGISTRATION</b></legend>
	<form method="post" action="regCheck.php">
		<br/>
		<table width="100%"  cellpadding="0" cellspacing="0">
			<tr>
				<td>Name (Min two  character )</td>
				<td>:</td>
				<td><input name="name" type="text" value="" id="name" onblur="checkNaming()"></td>
				<td id="nameError" ></td>
			</tr></br>		
			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="" id="email" onblur="checkEmail()">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td id="emailError"></td>
			</tr></br>	
			
			<tr>
				<td>User ID</td>
				<td>:</td>
				<td><input name="userId" type="text" value="" id="userId"></td>
				<td class="errorText"></td>
			</tr>		
		
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" value="" id="password"></td>
				<td class="errorText"></td>
			</tr>		
		
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password" value="" id="confirmPassword"></td>
				<td class="errorText"></td>
			</tr>		
			
			<tr>
				<td colspan="3">  
						<input name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio"value="Female">Female
						<input name="gender" type="radio" value="Other"> Other
				</td>
				<td class="errorText"></td>
			</tr>		
			
			<tr>
				<td colspan="3">
						<input type="text" size="2" / name="day" value="" id="day">/
						<input type="text" size="2" / name="month" value="" id="month">/
						<input type="text" size="4" / name="year" value="" id="year">
						<font size="2"><i>(dd/mm/yyyy)</i></font>
			
				</td>
				<td class="errorText"></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="reset" href="registration.php">
		<input type="submit" name="submit" value="save and next" onClick="return checkEmpty()">
	</form>
</fieldset>

<script src="./Js/regCheck.js"> </script>