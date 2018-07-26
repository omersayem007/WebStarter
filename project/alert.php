<?php
session_start();
if( isset( $_SESSION['userSession'] ) || isset($_COOKIE['abc']) ){
    include "navbar.php";
    ?>


<table  width="70%" border=1 height="450px">


<tr >
    <td align="center">

        <h2> Raining With in a Minute  !</h2>

        <ul>

        <li>
         Temparature : 28°C
        </li>
        <li>
         Humidity : 87%
        </li>
        </ul>

    </td>

    <td align="center">

    <h2> Heavy thunderstrom in your area </h2>

    <ul>

    <li>
    Location:</br>
    latitude : 80 </br>
    longitude : 60
    </li>

    </ul>

    </td>

</tr>

</table>



    <?php 
}
else{
    header('location: login.php');
}
?>