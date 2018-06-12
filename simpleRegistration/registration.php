<?php
error_reporting(0);

?>

<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value="<?= $_POST['name']?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4">&nbsp;</td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<hr style="margin-bottom: 0px"/>
					<input name="email" type="text" value="<?= $_POST['email']?>" >
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text" value="<?= $_POST['userName']?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" value="<?= $_POST['password']?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password" value="<?= $_POST['confirmPassword']?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="male" <?php if( $_POST['gender'] =='male'){ echo "checked"; }?> >Male
						<input name="gender" type="radio" value="Female" <?php if( $_POST['gender'] =='Female'){ echo "checked"; }?> >Female
						<input name="gender" type="radio" value="Other" <?php if( $_POST['gender'] =='Other'){ echo "checked"; }?> >Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2"  name="Day" value="<?= $_POST['Day']?>" />/
						<input type="text" size="2" name="month" value="<?= $_POST['month']?>" />/
						<input type="text" size="4" name="year" value="<?= $_POST['year']?>" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit">
		<input type="reset">
	</form>
</fieldset>