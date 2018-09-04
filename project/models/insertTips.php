<?php

require "db.php";

function insertTips($tips,$time){
    $conn = DBconnection();

    $sql= "INSERT into tips values('','$time', '$tips' )";

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }

}

?>