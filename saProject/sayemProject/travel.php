<?php
session_start();
if( isset( $_SESSION['userSession'] )  || isset($_COOKIE['abc']) ){
    include "horizontalNav.php";
    ?>

<html>

<head>
    <title></title>
</head>

<body>
<table border="1"  height="550px" width="850px" align="center">
        <tr>
                <td height="550px" width="50px">

                                    <table  height="555px" width="50px" >
                                        <tr><tr><td ><a href="#">Now</a></td></tr>
                                        <tr><td ><a href="recommendation.php"> Movie  </a></td></tr>
                                        <tr><td ><a href="music.php"> Music  </a></td></tr>
                                        <tr><td> <a href="food.php"> Food  </a></td></tr>
                                        <tr><td > <a href="travel.php"> Travel </a></td></tr>
                                        <tr><td > <a href="home.php"> Home </a></td></tr>
                                    </table>
                </td>
                
                <td height="455px" width="845px" align="left" valign="top">
                        <table border="1" height="55px" width="845px" >
                                            <tr >
                                                <td colspan="2" align="center" valign="center">
                                                    <h3>This Weekend destinations ! <br/></h3>

                                                </td>
                                            </tr>

                                            <tr >
                                        <td>

                                        <table border="1"  width="850px">
                                            <tr height="230px"> 
                                                <td>
                                                <img src="saintmartin.jpg"></br>
                                                Saint Martin </br>
                                                Temparature : 25 °C</br>
                                                humidity : 50%
                                                 </td>
                                                <td>
                                                <img src="saintmartin.jpg">
                                                </br>
                                                Saint Martin </br>
                                                Temparature : 25 °C</br>
                                                humidity : 50%
                                                 </td>
                                             <tr>

                                             <tr height="230px"> 
                                                <td>
                                                <img src="saintmartin.jpg"></br>
                                                Saint Martin </br>
                                                Temparature : 25 °C</br>
                                                humidity : 50%
                                                 </td>
                                                <td>
                                                <img src="saintmartin.jpg">
                                                </br>
                                                Saint Martin </br>
                                                Temparature : 25 °C</br>
                                                humidity : 50%
                                                 </td>
                                             <tr>

                                        </table>
                                        </td>

                                        </tr>

                                        </table>
                        </td>
                        
                        </tr>

                </td>

        </tr>



</table>
</body>

</html>

    <?php 
}
else{
    header('location: login.php');
}
?>