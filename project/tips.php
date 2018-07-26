<?php
session_start();
if( isset( $_SESSION['userSession'] ) || isset($_COOKIE['abc']) ) {
    include "navbar.php";
    ?>


<table  width="100%" border=1 height="450px">


<tr style="position:fixed;top:40%;left:30% ;margin-top: -50px;
  margin-left: -100px;"  >
<td>

<h2> Hello today is 35°C now !</h2>

<ul>

<li>
Dont forget to Use Sunscreen if you go outside
</li>
<li>
Drink plenty of water
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