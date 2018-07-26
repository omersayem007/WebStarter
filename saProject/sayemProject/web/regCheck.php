<?php
	error_reporting(0);
	
	if( isset($_POST['submit'])){
		if( $_POST['name']== "" || $_POST['email']==""  || $_POST['gender']=="" || $_POST['day']=="" || $_POST['month']==""|| $_POST['year']==""|| $_POST['confirmPassword']=="" || $_POST['password']=="" || $_POST['userId']==""){
			header("location: registration.php?status=nullvalue");
		}
		else{
				if( validname( $_POST['name']) && validmail($_POST['email']) && validDate($_POST['day'],$_POST['month'],$_POST['year']) && validId($_POST['userId']) ){

					$name 		= $_POST['name'];
					$email 		= $_POST['email'];
					$gender 	= $_POST['gender'];
					$day 		= $_POST['day'];
					$month 		= $_POST['month'];
					$year 		= $_POST['year'];
					$userID		=$_POST['userId'];
                    $password =$_POST['password'];
                    

                    $myfile = fopen("user.txt", 'a');
			        $data = $name."|".$password."|".$gender."|"."\r\n";
			        fwrite($myfile, $data);
                    fclose($myfile);
					
					$myyfile = fopen("info.txt", 'a');
			        $daata = $name."|".$password."|".$gender."|".$email."|".$day."/".$month."/".$year."|".$userID."|"."\r\n";
			        fwrite($myyfile, $daata);
                    fclose($myyfile);
                    
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
	function validasc($input){
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
    
	function validname($name){
		if(strlen($name) >=2 && validasc($name)){
			
			return true;
		}else{
			return false;
		}
    }
    
	function validmail($email){
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
        
		function validDate($day,$month,$year){
			if( ($day >=0 && $day <=31 ) && ($month >=1 && $month <=12 ) && ($year >=1900 && $year <=2018 ) ){
        return true;
				
			}
			else{
        return false;
				
			}
		}
		function validId($id){
			if($id > 0){
				return true ;
			}
			else{
				return false;
			}
		}
	
	
?>