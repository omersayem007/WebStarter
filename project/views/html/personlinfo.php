<?php
error_reporting(0);
session_start();
if( $_SESSION['userSession']=="123"  || $_COOKIE['abc'] == "123" ){

    ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.
css">
<link rel="stylesheet" href="../css/menuStyle.css">
<link rel="stylesheet" href="../css/weather-icons.min.css">
<link rel="stylesheet" href="../css/postStyle.css">




<div class="columns">
  <div class="column is-one-fifth">

      <aside class="menu">

  <ul class="menu-list" >

    <li>
        <a class="navbar-item" href="home.php" style="color:white" >
        Now 
        </a>
    </li>

    <li>
        <a class="navbar-item" href="social.php" style="color:white">
        social 
        </a>

        <a class="navbar-item" href="feedBack.php" style="color:white">
        Feedback
        </a>
    </li>

    <li>
        <a class="navbar-item" href="experts.php" style="color:white">
        Experts Analysis
        </a>
    </li>

  </ul>

    <ul class="menu-list">
    
    <li>
      <a style="color:white" >Forecast</a>
      <ul>
        <li><a style="color:white">Hourly</a></li>
        <li><a style="color:white">Weekly</a></li>
      </ul>
    </li>
  </ul>


<ul class="menu-list">
    
    <li>
      <a style="color:white" >Recommendation </a>
      <ul>
        <li><a style="color:white">Personalized </a></li>
        <li><a style="color:white" href="recommendation.php">Recommendation</a></li>
        <li><a style="color:white" href="recommendation.php">Movie</a></li>
        <li><a style="color:white" href="recommendation.php">Music</a></li>
        <li><a style="color:white" href="recommendation.php">Food</a></li>
        <li><a style="color:white" href="recommendation.php">Travel</a></li>
      </ul>
    </li>
  </ul>

  <ul class="menu-list">
    
    <li>
      <a style="color:white"  href="prayer.php">Prayer Time </a>
    </li>
  </ul>
        <ul>
        <li>
            <a class="navbar-item" href="userTips.php" style="color:white">
                Tips 
            </a>
            <a class="navbar-item" href="tips.php" style="color:white">
                UV index
            </a>
            <a class="navbar-item" href="tips.php" style="color:white">
                Profile
            </a>
        </li>
        </ul>

        <li>
            <a class="navbar-item" href="moreNav.php" style="color:white">
            More
            </a>
        </li>

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

require "../../models/getPost.php"; 

$result = getPost();

while($row = mysqli_fetch_assoc($result)){
    echo "<div class='card' id='flex-item'>
                <div class='card-content'>.
                    <p class='title' id='post'>".$row['post']."</p>
                    <p class='subtitle' id='name'>".$row['name']."</p>
                </div>
                
            </div>" ;
        }

?>

               

            </aside>

        </section>

  <!-- tiles End -->

  </div>
  


</div>


<?php 
}
else{
    header('location: ../../index.php');
}
?>

