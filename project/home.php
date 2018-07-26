<?php
error_reporting(0);
session_start();
if( $_SESSION['userSession']=="123"  || $_COOKIE['abc'] == "123" ){
    include "navbar.php";
    ?>

<html>

<head>
    <title></title>
</head>

<body>

   
    &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 

   <table border="1" width="100%">
   <tr>
   <td>
        <ul style="height: 50px">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ul>
    </td>
    </tr>
    </table>

    &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp

        <table width="100%" height="50px">

            <tr >

                <td>
                    <table border="1" height="300px" width="50%">
                        <tr >
                            <td>
                            Current Weather 
                            </td>
                            <td>
                            Early
                            </td>
                            <td>
                            Today
                            </td>
                            <td>
                            Tonight
                            </td>
                        </tr>
                    </table> 
                </td>   
            
                <td>
                    <table border="1" height="300px" width="50%">
                            <tr >
                                <td>
                                <a href="#">news</a>
                                </td>
                            </tr>
                                <td>
                                <a href="#">news</a>
                                </td>
                            </tr>
                                <td>
                                <a href="#">news</a>
                                </td>
                            </tr>
                                <td>
                                <a href="#">news</a>
                                </td>
                            </tr>
                                <td>
                                <a href="#">news</a>
                                </td>
                            </tr>
                                <td>
                                <a href="#">news</a>
                                </td>
                            </tr>
                            
                    </table> 
                </td>


                </tr> 



                         

        </table>

        &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp



        <table height="100Px" width="100%" border="1">

        <tr >
            <td>

            Footer 
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