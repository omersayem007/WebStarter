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
                                                <td colspan="2" align="center" valign="center">
                                                    <h3> Search Hashtag news based on weather <br/></h3>

                                                    <input type="text" name="searchTag" value="search" >

                                                </td>
                                            </tr>

                                            <tr align="center" >
                                                <td>
                                                    <table border="1"  width="850px">
                                                        <tr>
                                                            <td height="280px">

                                                             <img src="harricane.jpg"></br>
                                                                AccuWeather<br>
                                                                <i>9 minutes ago</i></br>
                                        This whirlwind formed over fissure 8 of the Kilauea</br> volcano in Hawaii on July 10.</br>
                                                            <input type="submit" name="upVote" value="Up Vote">
                                                            <input type="submit" name="downVote" value="Down Vote">
                                                            </td>

                                                        </tr>


                                                        <tr>
                                                        <td height="280px">

                                                        <img src="harricane.jpg"></br>
                                                                    AccuWeather<br>
                                                                    <i>9 minutes ago</i></br>
                                                                    This whirlwind formed over fissure 8 of the Kilauea</br> volcano in Hawaii on July 10.
                                                                    </br>
                                                            <input type="submit" name="upVote" value="Up Vote">
                                                            <input type="submit" name="downVote" value="Down Vote">
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