<?php
//local
$dbconn = mysqli_connect("localhost", "cityguide", "1234", "cityguide") or die("Databaseconnectie is kneiterhard gefaald!");

//iris
//$dbconn = mysqli_connect("studmysql01.fhict.local", "dbi342465", "ww", "dbi342465") or die("Databaseconnectie is kneiterhard gefaald!");


//Controleert of er iets is ingevoerd:


//Zo ja, dan wordt het ingevoerde in $city gezet.
if (isset($_GET['city'])) {
    $city = ucfirst($_GET['city']);
}

//Zo nee, dan wordt de stad Rome.
else {
    $city = "Rome";
}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="" manifest="cityguide.php"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cityguide</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">City Guide</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" action="cities.php" method="GET">
            <div class="form-group">
              <input type="text" placeholder="Search" name="city" class="form-control">
            </div>
            <!--<button type="submit" class="btn btn-success">Submit</button>-->
            <input type="submit" class="btn btn-success" value="Submit">
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1><?php echo $city; ?></h1>
        <p>Dit is een overzicht van alle bezienswaardigheden in <?php echo $city; ?>!</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
          <?php

          //Selecteert alle bezienswaardigheden van de stad in de variabele.
          $sql = "SELECT * FROM sights WHERE sightcity = '" . $city . "'";
      	$result = mysqli_query($dbconn, $sql);

        //Hier wordt voor elke bezienswaardigheid een klein overzicht met informatie ge-echo'd.
      	while($row = mysqli_fetch_assoc($result)){
            echo '<div class="col-md-16">
              <div class="col-md-10">
              <h2>' . $row['sightname'] . '</h2>
              <div class="collapse-desc" id="sightdesc' . $row['sightid'] . '"><p>' . $row['sightdesc'] . '</p></div>
              <p><a class="btn btn-default" onclick="expand(' . $row['sightid'] . ');" id="viewbutton' . $row['sightid'] . '" role="button">View more</a></p>
              </div>
              <div class="col-md-2">
              <img src="img/' . $row['sightimg'] . '">
              </div></div>';

             //Om het uitklapbare venster mogelijk te maken, wordt er inline een script gemaakt voor elke bezienswaardigheid.
             echo '<script>
              var colstate' . $row['sightid'] . ' = "small";
                function expand(x) {
                    if (colstate' . $row['sightid'] . ' == "small") {
                        document.getElementById("sightdesc" + x).style.maxHeight="10000px";
                        colstate' . $row['sightid'] . ' = "big";
                        document.getElementById("viewbutton" + x).innerHTML="View less";
                    }
                    else if (colstate' . $row['sightid'] . ' == "big") {
                        document.getElementById("sightdesc" + x).style.maxHeight="100px";
                        colstate' . $row['sightid'] . ' = "small";
                        document.getElementById("viewbutton" + x).innerHTML="View more";
                    }
                }
              </script>';
      	}

          ?>
        <!--<div class="col-md-16">
          <div class="col-md-10">
          <h2>Colosseum</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-2">
          <img src="img/colosseum-palatine-hill.jpg">
          </div>
      </div>

      <div class="col-md-16">
        <div class="col-md-10">
        <h2>Colosseum</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-2">
        <img src="img/colosseum-palatine-hill.jpg">
    </div>-->
    </div>
      </div>

      <hr>

      <footer>
        <p style="padding-left:5px"><!--&copy;--> Vincent van der Palen, Arne Reijntjes</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
