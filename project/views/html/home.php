<?php
error_reporting(0);
session_start();
if( $_SESSION['userSession']=="123"  || $_COOKIE['abc'] == "123" ){
   // include "navbar.php";
   include "menu.php";
    ?>

<html>

<head>
    <title></title>

</head>

<body>

   
   

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/currentWeather.js"></script>
<script src="../js/searchWeather.js"></script>

</html>

<?php 
}
else{
    header('location: ../../index.php');
}
?>