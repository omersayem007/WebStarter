<?php
session_start();
if( isset( $_SESSION['userSession'] ) || isset($_COOKIE['abc']) ){
    include "navbar.php";
    ?>


<table  width="100%" border=1 height="450px">


<tr style="position:fixed;top:40%;left:30% ;margin-top: -50px;
  margin-left: -100px;"  >
<td>

  <h3> Post daily tips </h3></br>

  <textarea name="tips" value="" style="height:"100px";width:"200px"" > </textarea> </br>

  <input type="submit" name="post" value="Post">

</td>
</tr>

</table>



    <?php 
}
else{
    header('location: login.php');
}
?>