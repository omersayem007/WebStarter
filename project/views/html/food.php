<?php
session_start();
if( isset( $_SESSION['userSession']) || isset($_COOKIE['abc']) ){
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
                                                    <h3>Food offer today<br/></h3>

                                                </td>
                                            </tr>

                                            <tr >
                                        <td>

                                        <table border="1"  width="850px">

                                        <tr height="500px">

                                        <td>
                                            <table border="1" >

                                                <tr >
                                                <td width="420px" height="160px">
                                                <img src="burger.jpg" height="120px" width="200px">
                                                </td>
                                                <td width="100px">Burger King</br><i>Basundhora Road</i></td>
                                                </tr>

                                               <tr >
                                                <td width="420px" height="160px">
                                                <img src="fuchka.jpg" height="120px" width="200px">
                                                </td>
                                                <td width="100px">Burger King</br><i>Basundhora Road</i></td>
                                                </tr>

                                                <tr >
                                                <td width="420px" height="160px">
                                                <img src="chola.jpg" height="120px" width="200px">
                                                </td>
                                                <td width="100px">Burger King</br><i>Basundhora Road</i></td>
                                                </tr>

                                            </table>
                                        
                                        </td>

                                        <td>
                                            <table border="1" >
                                                <tr >
                                                <td width="420px" height="160px">
                                                <img src="dosa.jpg" height="120px" width="200px">
                                                </td>
                                                <td width="100px">Burger King</br><i>Basundhora Road</i></td>
                                                </tr>


                                               <tr >
                                                <td width="420px" height="160px">
                                                <img src="khicuri.jpg" height="120px" width="200px">
                                                </td>
                                                <td width="100px">Burger King</br><i>Basundhora Road</i></td>
                                                </tr>


                                                <tr >
                                                <td width="420px" height="160px">
                                                <img src="kalavhuna.jpg" height="120px" width="200px">
                                                </td>
                                                <td width="100px">Burger King</br><i>Basundhora Road</i></td>
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