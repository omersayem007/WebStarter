
<?php
	
	session_start();

	if(isset($_POST['submit'])){

		$username =  $_POST['username'];
		$password = $_POST['password'];
		
		if($username == "" || $password == ""){
            
			header("location: login.php?status=nullvalue");

		}else{

			$myyfile = fopen("info.txt", 'r');
			$isvalid = "";

			while (!feof($myyfile)) 
			{
				
				$daata = fgets($myyfile);
				$arr = explode("|", $daata);
				
				if($arr[0] == $username && $arr[1] == $password){
					
					$isvalid = "validuser";
					if(isset($_POST['rem'])){
				       setcookie('abc',"123",time()+3600,"/");
					}
					$myfile = fopen("user.txt", 'w');
					$data =$arr[0]."|".$arr[1]."|".$arr[2]."|".$arr[3]."|".$arr[4]."|".$arr[5];
			        fwrite($myfile, $data);
                    fclose($myfile);
					
				}
			}

			//echo $isvalid;

			if($isvalid == "validuser"){

				$_SESSION['abc'] = "123";
				header("location: home.php");
			}else{
				header("location: login.php?status=invaliduser");
			}
			fclose($myyfile);

		}
	}

?>