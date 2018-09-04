<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.
css">
<link rel="stylesheet" href="../css/menuStyle.css">
<link rel="stylesheet" href="../css/adminStyle.css">
<link rel="stylesheet" href="../css/cardStyle.css">
<link rel="stylesheet" href="../css/weather-icons.min.css">

<?php
error_reporting(0);
session_start();
if( $_SESSION['userSession']=="321"  || $_COOKIE['abc'] == "321" ){

    ?>

<body>

<div class="columns">
  <div class="column is-one-fifth">

      <aside class="menu">

  <ul class="menu-list" >

<li>
    <a class="navbar-item" href="admin.php" style="color:white" >
    Home
    </a>
</li>

<li>
    <a class="navbar-item" href="tips.php" style="color:white">
    PostTips
    </a>
</li>

</ul>

</ul>

    <li>
        
            <button class="button is-primary" onclick="window.location.href='logout.php'">Logout</button>
       
    </li>

</ul>

</aside>


  </div>


<!-- tiles starts -->
    <div class="column" >

    <section class="columns" >

        <aside  class="column is-half" id="flex-container">


                        <?php

        require "../../models/getTips.php"; 

        $result = getMessage();

        while($row = mysqli_fetch_assoc($result)){
            echo "<article class='message'>
                            <div class='message-header'>
                                <p>".$row['date']."</p>
                                <form action='../../controllers/deleteController1.php' method='post' >
                                <button class='delete' aria-label='delete' name='delete' value='delete'></button>
                                <input type='hidden' name='id' value='".$row['id']."'/>
                                </form>  
                            </div>
                            <div class='message-body'>".$row['tiptext']."</div>
                        </article>" ;
                    }

                ?>

        <form  action="../../controllers/postTips.php" method="POST" >

            <textarea class="textarea" name="tipText" value="" placeholder="Todays Tips!" rows="10"></textarea>
            <button class="button is-success" name="submit">
            Post
            </button>

        </form>

                

        </aside>

    </section>


        


  <!-- tiles End -->

  </div>
  


</div>

<style>


.textarea{

    width:350px;
}



</style>

</body>

<?php 
}
else{
    header('location: ../../index.php');
}
?>

