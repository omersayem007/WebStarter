<?php
session_start();
if( isset( $_SESSION['userSession'] ) || isset($_SESSION['abc']) ){
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
                                        <tr><td ><a href="health.php"> health </a></td></tr>
                                        <tr><td ><a href="sports.php"> Sports and Recreation  </a></td></tr>
                                        <tr><td> <a href="home.php"> home  </a></td></tr>
                                    </table>
                </td>
                
                <td height="455px" width="845px" align="left" valign="top">
                        <table border="1" height="55px" width="845px" >
                                            <tr >
                                                <td colspan="2" align="center" valign="center">
                                                    <h3> Very Coldish Weather Today ! <br/></h3>

                                                    <select>
                                                    <option name="health" value="cold"> Cold </option>
                                                    <option name="health" value="sinus">Sinus </option>
                                                    <option name="health" value="asthma"> Asthma </option>
                                                    <option name="health" value="migrain"> Migrain </option>
                                                    
                                                    </select>

                                                </td>
                                            </tr>

                                            <tr align="center" >
                                                <td>
                                                    <table border="1"  width="850px">
                                                        <tr>
                                                            <td height="280px">

                                                            Current Weather</br>
                                                            71°C</br>
                                                            Sunny</br>
                                                            <b>Common Cold</b></br>

                                                            
                                                            </td>
                                                            <td height="200px">

                                                             Current Weather</br>
                                                            71°C</br>
                                                            Sunny</br>
                                                            <b>Benificial For Cold</b></br>
                                                            
                                                            </td>
                                                            <td height="200px">
                                                            Current Weather</br>
                                                            71°C</br>
                                                            Sunny</br>
                                                            <b>Benificial For Cold</b></br>
                                                            
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td height="200px">
                                                            Current Weather</br>
                                                            71°C</br>
                                                            Sunny</br>
                                                            <b>Benificial For Cold</b></br>
                                                            
                                                            </td>
                                                            <td height="200px">
                                                            Current Weather</br>
                                                            71°C</br>
                                                            Sunny</br>
                                                            <b>Benificial For Cold</b></br>
                                                            </td>
                                                            <td height="200px">
                                                            Current Weather</br>
                                                            71°C</br>
                                                            Sunny</br>
                                                            <b>Benificial For Cold</b></br>
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