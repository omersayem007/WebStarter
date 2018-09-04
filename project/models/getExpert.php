<?php

require "db.php";

function getExpert(){
    $conn = DBconnection();

    $sql= "SELECT * from expert";
    $result = mysqli_query($conn, $sql);
    
    return $result ;

}

?>