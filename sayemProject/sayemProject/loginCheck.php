
<?php
	
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == "" || $password == ""){
            
			header("location: login.php?status=nullvalue");

		}else{

			$myfile = fopen("user.txt", 'r');
			$isvalid = "";

			while (!feof($myfile)) 
			{
				
				$data = fgets($myfile);
				$arr = explode("|", $data);
				
				if($arr[0] == $username && $arr[1] == $password){
					$isvalid = "validuser";
					
					if( $_POST['remember'] == "on" ){
						setcookie('abc',"123",time()+3600,"/");
					}
				}
			}

			//echo $isvalid;

			if($isvalid == "validuser"){

				$_SESSION['userSession'] = "123";
				header("location: home.php ");
			}else{
				header("location: login.php?status=invaliduser");
			}
			fclose($myfile);

		}
	}

?>