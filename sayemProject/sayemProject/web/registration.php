<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "Error"){
			echo "Invald Information.";
		}else if($status == "nullvalue"){
			echo "Fields can't be empty";
		}
	}
?>

<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form method="post" action="regCheck.php">
		<br/>
		<table width="100%"  cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value=""></td>
				<td>
					</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td>
				</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User ID</td>
				<td>:</td>
				<td><input name="userId" type="text" value=""></td>
				<td>
				</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" value=""></td>
				<td>
				
				</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password" value=""></td>
				<td>
				
					</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio"value="Female">Female
						<input name="gender" type="radio" value="Other"> Other	
					</fieldset>
				</td>
				<td>
				
					</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" / name="day" value="">/
						<input type="text" size="2" / name="month" value="">/
						<input type="text" size="4" / name="year" value="">
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit"  name="submit" value="Submit">
		<input type="reset">
	</form>
</fieldset>