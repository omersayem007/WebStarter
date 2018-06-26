<?php
	error_reporting(0);

	function checkAscii($input){
		$flag=0;
		$inputArray = str_split( $input);
  
		for( $i=0 ; $i < strlen($input) ; $i++ ){

			if( (ord($inputArray[$i]) > 97 && ord($inputArray[$i]) < 122) || ord($inputArray[$i]) == 45 || ord($inputArray[$i]) == 46 || (ord($inputArray[$i]) > 65 && ord($inputArray[$i]) <90) ){

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
		$pos = strpos($email, $findme);
  
	  if($inputArray[0] == "@" || $inputArray[0] == "." || $inputArray[$pos+1] == "." ){
		return false;
	  }
	  
			for( $i=0 ; $i < strlen($email) ; $i++ ){
	
		  if( $inputArray[$i] == "@" || $inputArray[$i] == "." ){
			$flag++;
		  }
				
			}
	
			if( $flag == 2){
				return true;
			}
			else{
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

		if( $_POST['name']== "" || $_POST['email']==""  || $_POST['gender']=="" || $_POST['day']=="" || $_POST['month']==""|| $_POST['year']==""|| $_POST['userID']==""|| $_POST['picture']=="" || $_POST['degree']=="" || $_POST['blood']==""){

			echo " Empty data ";
		}
		else{
				if( checkNaming( $_POST['name']) && checkEmail($_POST['email']) && checkDater($_POST['day'],$_POST['month'],$_POST['year']) && checkID($_POST['userID']) ){
					$name 		= $_POST['name'];
					$email 		= $_POST['email'];
					$gender 	= $_POST['gender'];
					$day 		= $_POST['day'];
					$month 		= $_POST['month'];
					$year 		= $_POST['year'];
					$userID		=$_POST['userId'];
					$degree 	=$_POST['degree'];
					$blood		=$_POST['blood'];

					
					echo "Name: ".$name."<br/>";
					echo "Email: ".$email."<br/>";
					echo "Gender: ".$gender."<br/>";
					echo "DOB: ".$day."/".$month."/".$year;
					echo "<br/>";
					print_r($degree);
					echo "<br/>";
					echo "Blood Group:".$blood."<br/>";
				}
				else{
					echo "invalid name/invalid Email/invalid Date ";
				}
				
				
		}
	
	}
	else{
		echo "Invalid request";
	}
?>