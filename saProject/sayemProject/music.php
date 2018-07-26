<?php
session_start();
if( isset( $_SESSION['userSession']) || isset($_COOKIE['abc']) ) {
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
                                                    <h3>Discover your playlist for Today<br/></h3>

                                                </td>
                                            </tr>

                                            <tr >
                                        <td>

                                        <table border="1"  width="850px">

                                            <tr >
                                            <td width="10px"><img  height="30px"  src="music.jpg"></td>
                                            <td style="border-radius:20px;height:50px" align="center"> Better Now</br><i>Post Malone</i> </td>
                                            <td align="center" width="10px"> 3:14 </td>
                                            </tr>

                                            <tr >
                                            <td width="10px"><img  height="30px"  src="music.jpg"></td>
                                            <td style="border-radius:20px;height:50px" align="center"> Chera Shopno</br><i>Arthohin</i> </td>
                                            <td align="center" width="10px"> 3:14 </td>
                                            </tr>


                                            <tr >
                                            <td width="10px"><img  height="30px"  src="music.jpg"></td>
                                            <td style="border-radius:20px;height:50px" align="center"> Jadur Shoror</br><i>Circut</i> </td>
                                            <td align="center" width="10px"> 3:14 </td>
                                            </tr>


                                            <tr >
                                            <td width="10px"><img  height="30px"  src="music.jpg"></td>
                                            <td style="border-radius:20px;height:50px" align="center"> Protibad</br><i>Cryptic Fate</i> </td>
                                            <td align="center" width="10px"> 3:14 </td>
                                            </tr>


                                            <tr >
                                            <td width="10px"><img  height="30px"  src="music.jpg"></td>
                                            <td style="border-radius:20px;height:50px" align="center"> Shoto Asha</br><i>Sunno</i> </td>
                                            <td align="center" width="10px"> 3:14 </td>
                                            </tr>


                                            <tr >
                                            <td width="10px"><img  height="30px"  src="music.jpg"></td>
                                            <td style="border-radius:20px;height:50px" align="center"> Tomar Bari Jabo</br><i>Bappa</i> </td>
                                            <td align="center" width="10px"> 3:14 </td>
                                            </tr>

                                            <tr >
                                            <td width="10px"><img  height="30px"  src="music.jpg"></td>
                                            <td style="border-radius:20px;height:50px" align="center"> Tumi nai</br><i>Rupom</i> </td>
                                            <td align="center" width="10px"> 3:14 </td>
                                            </tr>


                                            <tr >
                                            <td width="10px"><img  height="30px"  src="music.jpg"></td>
                                            <td style="border-radius:20px;height:50px" align="center"> Nupur</br><i>Yattri</i> </td>
                                            <td align="center" width="10px"> 3:14 </td>
                                            </tr>

                                            <tr >
                                            <td width="10px"><img  height="30px"  src="music.jpg"></td>
                                            <td style="border-radius:20px;height:50px" align="center"> Apekkha</br><i>Shunno</i> </td>
                                            <td align="center" width="10px"> 3:14 </td>
                                            </tr>

                                            <tr >
                                            <td width="10px"><img  height="30px"  src="music.jpg"></td>
                                            <td style="border-radius:20px;height:50px" align="center"> Har kala</br><i>AvoidRafa</i> </td>
                                            <td align="center" width="10px"> 3:14 </td>
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