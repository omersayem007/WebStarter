<?php
session_start();
if( isset( $_SESSION['userSession'] ) || isset($_COOKIE['abc']) ){
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
                                        <tr><td ><a href="home.php"> Home </a></td></tr>
                                    </table>
                </td>
                
                <td height="455px" width="845px" align="left" valign="top">
                        <table border="1" height="55px" width="845px" >
                                            <tr >

                                            </tr>

                                            <tr align="center" >
                                                <td>
                                                    <table border="1"  width="850px">
                                                        <tr>
                                                            <td height="280px">

                                                            Elliot
                                                            Abrams</br>
                                                            Experts & Video Broadcasters | Radio Broadcasters & Bloggers</br>
                                                            high school classes. Elliot is one of two people in the world who has earned </br> the accredited status of Certified Consulting Meteorologist along with the </br> American Meteorological Society (AMS) Seal of Approval for both radio and television. Elliot earned the AMS 1993 award for Outstanding Service </br> by a Broadcast Meteorologist "for his decades of significant contributions to radio weather broadcasting and to weather education at all levels,"and followed this up with the AMS 1994 Charles Mitchell Award for "outstanding and unique dissemination of weather forecasts to the nation’s public by radio and television.</br>
                                                            <a href="#">See More</a></br>
                                                            </td>

                                                        </tr>


                                                        <tr>
                                                        <td height="280px">

Elliot
Abrams</br>
Experts & Video Broadcasters | Radio Broadcasters & Bloggers</br>
high school classes. Elliot is one of two people in the world who has earned </br> the accredited status of Certified Consulting Meteorologist along with the </br> American Meteorological Society (AMS) Seal of Approval for both radio and television. Elliot earned the AMS 1993 award for Outstanding Service </br> by a Broadcast Meteorologist "for his decades of significant contributions to radio weather broadcasting and to weather education at all levels,"and followed this up with the AMS 1994 Charles Mitchell Award for "outstanding and unique dissemination of weather forecasts to the nation’s public by radio and television.</br>
<a href="#">See More</a></br>
</td>

                                                        </tr>

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