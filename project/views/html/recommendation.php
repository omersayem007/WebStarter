<?php
session_start();
if( isset( $_SESSION['userSession'] ) || isset($_COOKIE['abc']) ) {
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
                                                    <h3>Here's your Movies for Today<br/></h3>

                                                </td>
                                            </tr>

                                            <tr >
                                        <td>
                                        <table border="1" height="150px" width="850px">					  
                                                <tr height="80px" width="850px">

                                                    <td width="50px" align="center" align="center" >
                                                        the secret life of </br>
                                                         walter mitty</br>
                                                        <img src="walter.jpg" width="100px" height="100px">
                                                    </td>

                                                    <td width="50Px" align="center">
                                                    Innerspace</br>
                                                    <img src="innerSpace.jpg" width="100px" height="100px">
                                                    </td>

                                                    <td width="50px" align="center">
                                                    Me Before you</br>
                                                    <img src="meBeforeYou.jpg" width="100px" height="100px" > 
                                                    </td>

                                                </tr> 
                                        
                                            
                                            
                                                </tr>
                                            
                                        </table>

                                        <table border="1"  width="850px">
                                            <tr><td align="center"> Title</td><td align="center">IMDB rating</td></tr>
                                            <tr><td align="center"> The Shawshank Redemption </td><td align="center">9.2</td></tr>
                                            <tr><td align="center"> The Godfather </td><td align="center"> 9.2</td></tr>
                                            <tr><td align="center"> The Godfather: Part II </td><td align="center"> 9.0</td></tr>
                                            <tr><td align="center"> The Dark Knight </td><td align="center"> 9.0 </td></tr>
                                            <tr><td align="center"> 12 Angry Men  </td><td align="center"> 8.9 </td></tr>
                                            <tr><td align="center"> Schindler's List </td><td align="center"> 8.9 </td></tr>
                                            <tr><td align="center"> The Lord of the Rings: The Return of the King </td><td align="center"> 8.9 </td></tr>
                                            <tr><td align="center">  Pulp Fiction </td><td align="center"> 8.9 </td></tr>
                                            <tr><td align="center">  The Good, the Bad and the Ugly </td><td align="center"> 8.8 </td></tr>
                                            <tr><td align="center">  Fight Club </td><td align="center"> 8.7 </td></tr>
                                            <tr><td align="center">  Forrest Gump <t/d><td align="center"> 8.7 </td></tr>
                                            <tr><td align="center">  Inception </td><td align="center"> 8.7 </td></tr>
                                            <tr><td align="center">   City of God </td><td align="center"> 8.7 </td></tr>
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