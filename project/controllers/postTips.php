<?php
    require "../models/insertTips.php";
    
	if(isset($_POST['submit'])){
        
        $message = $_POST['tipText'];
        $time = date('Y-m-d H:i:s') ;
        
        if(insertTips($message,$time)){

            header("location: ../views/html/tips.php ");
        }else{
            header("location: ../views/html/tips.php?status=error");
        }


	}else{
	   echo "invalid request";
	}
?>