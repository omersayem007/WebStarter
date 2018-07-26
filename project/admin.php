<?php
session_start();
if( isset( $_SESSION['userSession']  ) || isset($_COOKIE['abc']) ){
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
                                        <tr><td ><a href="admin.php"> Feedback </a></td></tr>
                                        <tr><td ><a href="adminTips.php"> Tips  </a></td></tr>
                                        <tr><td> <a href="logout.php"> logout  </a></td></tr>
                                    </table>
                </td>
                
                <td height="455px" width="845px" align="left" valign="top">
                        <table border="1" height="55px" width="845px" >
                                            <tr >
                                                <td colspan="2" align="center" valign="center">
                                                    <h3>WellCome Admin <br/></h3>

                                                </td>
                                            </tr>

                                            <tr align="center" >
                                                <td>
                                                    <table border="1"  width="850px">

                                                        <tr height="100px" align="center" >
                                                        <td>
                                                         Hello your weather forcast isn't working in my area.</br>
                                                         Location : Banani,Dhaka</br>
                                                         <i>5 feb 2018 :: 10:02am</i>
                                                         </br></br>
                                                         <input type="textarea" name="message" value=""></br>
                                                         <input type="submit" name="reply" value="Reply">
                                                        </td>
                                                        </tr>

                                                        <tr height="100px" align="center" >
                                                        <td>
                                                         Hello your weather forcast isn't working in my area.</br>
                                                         Location : Banani,Dhaka</br>
                                                         <i>5 feb 2018 :: 10:02am</i>
                                                         </br></br>
                                                         <input type="textarea" name="message" value=""></br>
                                                         <input type="submit" name="reply" value="Reply">
                                                        </td>
                                                        </tr>

                                                        <tr height="100px" align="center" >
                                                        <td>
                                                         Hello your weather forcast isn't working in my area.</br>
                                                         Location : Banani,Dhaka</br>
                                                         <i>5 feb 2018 :: 10:02am</i>
                                                         </br></br>
                                                         <input type="textarea" name="message" value=""></br>
                                                         <input type="submit" name="reply" value="Reply">
                                                        </td>
                                                        </tr>

                                                         <tr height="100px" align="center" >
                                                        <td>
                                                         Hello your weather forcast isn't working in my area.</br>
                                                         Location : Banani,Dhaka</br>
                                                         <i>5 feb 2018 :: 10:02am</i>
                                                         </br></br>
                                                         <input type="textarea" name="message" value=""></br>
                                                         <input type="submit" name="reply" value="Reply">
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