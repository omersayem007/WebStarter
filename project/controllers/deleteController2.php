<?php
    require "../models/deleteTips.php";
    
	if(isset($_POST['delete'])){
        $id = $_POST['id'];
        
        if(deleteTips($id)){
            header("location: ../views/html/userTips.php");
        }else{
            header("location: ../views/html/userTips.php?status=error");
        }


	}else{
	   echo "invalid request";
	}
?>