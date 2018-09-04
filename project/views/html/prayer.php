<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.
css">
<link rel="stylesheet" href="../css/menuStyle.css">
<link rel="stylesheet" href="../css/weather-icons.min.css">


<?php
error_reporting(0);
session_start();
if( $_SESSION['userSession']=="123"  || $_COOKIE['abc'] == "123" ){
  
    ?>


<body>

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
    <li><a style="color:white" href="hourly.php">Hourly</a></li>
    <li><a style="color:white" href="weekly.php">Weekly</a></li>
  </ul>
</li>
</ul>


<ul class="menu-list">

<li>
  <a style="color:white" >Recommendation </a>
  <ul>
    <li><a style="color:white" href="health.php">Personalized </a></li>
    <li><a style="color:white" href="food.php">Food</a></li>
    <li><a style="color:white" href="travel.php">Travel</a></li>
    <li><a style="color:white" href="#">Movie</a></li>
    <li><a style="color:white" href="#">Music</a></li>
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
    </li>
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

                      <table class='table'>
                      <thead id="head">
                      <tr><th>Date</th><th>fajr</th>
                      <th>shurooq</th><th>dhuhr</th>
                      <th>asr</th><th>maghrib</th>
                      <th>isha</th></tr>
                      </thead>

                      <tbody id="data">
                      
                      </tbody>

                      </table>

                    

										</aside>
									</section>
        


  <!-- tiles End -->

  </div>
  


</div>

<style>
  section{

      position: absolute ;
      top:220px;
      right:200px;
  }



</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/prayerTime.js"></script>


</body>

<?php 
}
else{
    header('location: ../../index.php');
}
?>

