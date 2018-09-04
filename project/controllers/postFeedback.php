<?php
    require "../models/insertMessage.php";
    
	if(isset($_POST['submit'])){
        
        $message = $_POST['message'];
        $userId = "a123";
        $time = date('Y-m-d H:i:s') ;
        
        if(insertMessage($userId,$message,$time)){

            header("location: ../views/html/feedBack.php ");
        }else{
            header("location: ../views/html/feedBack.php?status=error");
        }


	}else{
	   echo "invalid request";
	}
?>