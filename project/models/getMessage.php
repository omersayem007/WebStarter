<?php

require "db.php";

function getMessage(){
    $conn = DBconnection();

    $sql= "SELECT * from message";
    $result = mysqli_query($conn, $sql);
    
    return $result ;

}

?>