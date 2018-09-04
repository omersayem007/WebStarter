<?php

require "db.php";

function getPost(){
    $conn = DBconnection();

    $sql= "SELECT * from social";
    $result = mysqli_query($conn, $sql);
    
    return $result ;

}

?>