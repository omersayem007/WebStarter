<?php

require "db.php";

function saveUser($name,$password,$dob){
    $conn = DBconnection();

    $sql= "INSERT into userinfo values('','$name', '$password','','$dob')";

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }

}

?>