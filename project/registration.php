<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form method="post" action="regCheck.php">
		<br/>
		<table width="100%"  cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value="" id="name"></td>
				<td>
					</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="" id="email">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td>
				</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User ID</td>
				<td>:</td>
				<td><input name="userId" type="text" value="" id="userId"></td>
				<td>
				</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" value="" id="password"></td>
				<td>
				
				</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password" value="" id="confirmPassword"></td>
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
						<input type="text" size="2" / name="day" value="" id="day">/
						<input type="text" size="2" / name="month" value="" id="month">/
						<input type="text" size="4" / name="year" value="" id="year">
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="reset" href="registration.php">
		<input type="submit" name="submit" value="save and next" onClick="return checkEmpty()">
	</form>
</fieldset>

<script>

function checkAscii(input){
		var flag=0;
		var inputArray = input.split('');

		for(var i=0 ; i < input.length ; i++ ){
			if( (input.charCodeAt(i) >= 97 && input.charCodeAt(i) <= 122) || input.charCodeAt(i) == 32 || ( input.charCodeAt(i) >= 65 && input.charCodeAt(i) <=90) ){
				flag++;
			}
		}
		if( flag == input.length && inputArray[0] != "." && inputArray[0] != "-"){
			return true ;
		}
		else{
			return false;
		}
    }
    
	function checkNaming(name){

		if( name.length >=2 && checkAscii(name)){
			return true;
		}else{
			return false;
		}
    }
    
function checkEmail(email){
		var flag=0;
		var inputArray = email.split('');
		var findme   = '@';
    var findme2 =".";
		var pos = email.indexOf(findme);
		var pos2 =  email.indexOf(findme2);

    console.log(inputArray[0]);
	
		if( (inputArray[0] !== "@" || inputArray[0] !== "." || inputArray[pos+1] != "." ) && (pos !=-1  && pos2 !=-1)) {
		return true;
		}	else{
		return false;
		}

    }

        
function checkDater(day,month,year){
			if( (day >=0 && day <=31) && (month >=1 && month <=12 ) && (year >=1900 && year <=2018 ) ){
        return true;
				
			}
			else{
        return false;
				
			}
		}
		function checkID(id){
			if(id > 0){
				return true ;
			}
			else{
				return false;
			}
		}

	function checkValid(name,email,day,month,year,userId){
		if( checkNaming(name) && checkEmail(email) && checkDater(day,month,year) && checkID(userId) ){

			return true ;
		}
		else{

			return false ;
		}
	} 

function getValue(id){
	return document.getElementById(id).value ;
	}


function checkEmpty(){

	const name = getValue("name");
	const email = getValue("email");
	const userId = getValue("userId");
	const password = getValue("password");
	const confirmPassword = getValue("confirmPassword");
	const day = getValue("day");
	const month = getValue("month");
	const year = getValue("year");

	if( name=="" || email =="" || userId =="" || password =="" || confirmPassword =="" || day=="" || month=="" || year =="" ){
		alert("Don't leave these field Empty !");
		return false ;
	}
	else{
		if( checkValid(name,email,userId,day,month,year ))
		{
			return true ;
		}
		else{
			alert("Invalid peramiters !")
		}
		
	}
}

</script>