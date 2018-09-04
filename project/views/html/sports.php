
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
    <link rel="stylesheet" href="../css/menuStyle.css">
    <link rel="stylesheet" href="../css/cardStyle.css">
    <link rel="stylesheet" href="../css/weather-icons.min.css">
</head>

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
                        <div class="column "  >

                            <section class="columns" style="border:1px solid red" >

                                <aside  class="column is-half" id="flex-container">

                                <div class="select">
                                    <select>
                                        <option selected="selected">Football</option>
                                        <option>Cricket</option>
                                        <option>tenis</option>
                                    </select>
                                </div>

                                </aside>


                            </section>


                    <!-- tiles End -->

                    </div>
                    


                    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/sportRecom.js"></script>


</body>

</html>