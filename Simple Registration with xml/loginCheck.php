<?php

	//if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == "" || $password == ""){
            
			header("location: login.php?status=nullvalue");

		}else{

error_reporting(0);

$xml=simplexml_load_file("user.xml");
$isvalid = "";

foreach($xml->children() as $books) {

    $name = $books->name ;
    $gender = $books->gender;
    

   // echo $name."</br>".$gender;
    if($name == $username && $gender == $password){
        $isvalid = "validuser";

        echo "valid!";
      /*if( $_POST['remember'] =="on" ){
            setcookie('abc',"123",time()+3600,"/");
        }*/

    }
}


			if($isvalid == "validuser"){

                //$_SESSION['userSession'] = "123";
                echo " heeeeeey  you are most welcome !" ;
				
			}else{
				header("location: login.php?status=invaliduser");
			}
			

		}
//	}
?> 