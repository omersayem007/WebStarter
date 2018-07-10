




<?php
	error_reporting(0);
	function checkAscii($input){
		$flag=0;
		$inputArray = str_split( $input);
  
		for( $i=0 ; $i < strlen($input) ; $i++ ){
			if( (ord($inputArray[$i]) >= 97 && ord($inputArray[$i]) <= 122) || ord($inputArray[$i]) == 32 || (ord($inputArray[$i]) >= 65 && ord($inputArray[$i]) <=90) ){
				$flag++;
			}
		}
		if( $flag == strlen($input) && $inputArray[0] != "." && $inputArray[0] != "-"){
			return true ;
		}
		else{
			return false;
		}
    }
    
	function checkNaming($name){
		if(strlen($name) >=2 && checkAscii($name)){
			
			return true;
		}else{
			return false;
		}
    }
    
	function checkEmail($email){
		$flag=0;
		$inputArray = str_split( $email);
		$findme   = '@';
    $findme2 =".";
		$pos = strpos($email, $findme);
    $pos2 = strpos($email, $findme2);
  
	  if( ($inputArray[0] != "@" || $inputArray[0] != "." || $inputArray[$pos+1] != "." ) && ($pos && $pos2)) {
		return true;
	  }else{
		return false;
	}
        }
        
		function checkDater($day,$month,$year){
			if( ($day >=0 && $day <=31 ) && ($month >=1 && $month <=12 ) && ($year >=1900 && $year <=2018 ) ){
        return true;
				
			}
			else{
        return false;
				
			}
		}
		function checkID($id){
			if($id > 0){
				return true ;
			}
			else{
				return false;
			}
		}
	
	
	
	if( isset($_POST['submit'])){
		if( $_POST['name']== "" || $_POST['email']==""  || $_POST['gender']=="" || $_POST['day']=="" || $_POST['month']==""|| $_POST['year']==""|| $_POST['confirmPassword']=="" || $_POST['password']=="" || $_POST['userId']==""){
			header("location: registration.php?status=nullvalue");
		}
		else{
				if( checkNaming( $_POST['name']) && checkEmail($_POST['email']) && checkDater($_POST['day'],$_POST['month'],$_POST['year']) && checkID($_POST['userId']) ){

					$name 		= $_POST['name'];
					$email 		= $_POST['email'];
					$gender 	= $_POST['gender'];
					$day 		= $_POST['day'];
					$month 		= $_POST['month'];
					$year 		= $_POST['year'];
					$userID		=$_POST['userId'];
                    $password =$_POST['password'];
                    

                    $myfile = fopen("user.txt", 'a');
			        $data = $name."|".$password."|".$gender."\r\n";
			        fwrite($myfile, $data);
                    fclose($myfile);
                    
			        header("location: login.php");
					
				}
				else{
					header("location: registration.php?status=Error");
					
				}
				
				
		}
	
	}
	else{
		echo "Invalid request";
	}
?>