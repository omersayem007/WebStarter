<?php

require "db.php";

function insertMessage($userId,$message,$time){
    $conn = DBconnection();

    $sql= "INSERT into message values('','$userId', '$message' ,'$time' )";

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }

}

?>