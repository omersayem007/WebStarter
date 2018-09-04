<?php

require "db.php";

function deleteTips($id){
    $conn = DBconnection();

    $sql= "delete from tips where id=".$id;

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }

}

?>