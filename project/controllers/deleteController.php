<?php
    require "../models/deleteMessage.php";
    
	if(isset($_POST['delete'])){
        $id = $_POST['id'];
        
        if(deleteMessage($id)){
            header("location: ../views/html/admin.php ");
        }else{
            header("location: ../views/html/admin.php?status=error");
        }


	}else{
	   echo "invalid request";
	}
?>