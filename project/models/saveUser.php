<?php

require "db.php";

function saveUser($name,$password){
    $conn = DBconnection();

    $sql= "INSERT into userinfo values('','$name', '$password')";

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }

}

?>