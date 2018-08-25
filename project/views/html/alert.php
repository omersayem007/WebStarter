<?php
session_start();
if( isset( $_SESSION['userSession'] ) || isset($_COOKIE['abc']) ){
    include "navbar.php";
    ?>


<table  width="70%" border=1 height="450px">


<tr >
    <td align="center">
        <h1>Hourly</h1>

        <h2 id="hourlyUpdate"> </h2>


    </td>

    <td align="center">

    <h1>Weekly OverAll</h1>

    <h2 id="weeklyUpdate">  </h2>

    </td>

</tr>

<button>Load</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/fetchAlert.js"></script>

</table>



    <?php 
}
else{
    header('location: login.php');
}
?>