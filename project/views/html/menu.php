<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.
css">
<link rel="stylesheet" href="../css/menuStyle.css">
<link rel="stylesheet" href="../css/weather-icons.min.css">




<body>

<div class="columns">
  <div class="column is-one-fifth">

      <aside class="menu">
  <p class="menu-label" style="color:white">
    General
  </p>
  <ul class="menu-list" >

    <li>
        <a class="navbar-item" href="#" style="color:white" >
        Now 
        </a>
    </li>

    <li>
        <a class="navbar-item" href="social.php" style="color:white">
        social 
        </a>
    </li>

    <li>
        <a class="navbar-item" href="experts.php" style="color:white">
        Experts Analysis
        </a>
    </li>

  </ul>
  <p class="menu-label" style="color:white">
    Recommendation 
  </p>

  <ul class="menu-list">
        <li>
            <a class="navbar-item" href="health.php" style="color:white">
                            Personalized Forecast
            </a>
        </li>

        <li>
            <a class="navbar-item" href="recommendation.php" style="color:white">
                Recommendation
            </a>

        </li>

        <li>
        <a class="navbar-item" href="tips.php" style="color:white">
            Tips 
            
        </a>

        </li>

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

        <?php

        include "tile.php";

        ?>
        


  <!-- tiles End -->

  </div>
  


</div>

</body>

