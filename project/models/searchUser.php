<?php

require "db.php";


function searchUser($username,$password){

$conn = DBconnection();
$sql= "SELECT * from userinfo";
$result = mysqli_query($conn, $sql);
$isvalid = "";

while($row = mysqli_fetch_assoc($result)){

    if( $username == $row['name'] && $password == $row['password'] ){
        $isvalid = "validuser" ;
    }
}

if($isvalid == "validuser"){
    return true;
}else{
    return false;
}


}


function getData($username ,$password){

    $conn = DBconnection();
$sql= "SELECT * from userinfo";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)){

    if( $username == $row['name'] && $password == $row['password'] ){
         $type=$row['type'];
    }
}

return $type ;




}


?>