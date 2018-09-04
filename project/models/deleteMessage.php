<?php

require "db.php";

function deleteMessage($id){
    $conn = DBconnection();

    $sql= "delete from message where id=".$id;

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }

}

?>