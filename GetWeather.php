<!DOCTYPE html>
<html>
    <head>
        <title>| Wunderground API |</title>
        
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
          body {
            background-repeat: no-repeat;
            padding-top: 60px;
            padding-bottom: 40px;
          }
        </style>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->
    
    </head>
    
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="./">Perkiraan Cuaca Hari Ini</a>
                    <div class="nav-collapse collapse">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
<?php

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/mugassari.json");   
    $json_a = json_decode($json_string);

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/forecast10day/q/ID/mugassari.json");   
    $json_b = json_decode($json_string);

        //pencarian variabel
    $cond = $json_a->{"current_observation"}->{"display_location"}->{"city"};
    $cond1 = $json_a->{"current_observation"}->{"observation_location"}->{"city"};
    $cond2 = $json_a->{"current_observation"}->{"observation_location"}->{"country"};
    $f10day = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"weekday"};


    $f10day1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"monthname"};
    $f10day2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"day"};
    $f10day3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"year"};
    $cond6 = $json_a->{"current_observation"}->{"weather"};
    $cond3 = $json_a->{"current_observation"}->{"icon"};
    $cond4 = $json_a->{"current_observation"}->{"temp_f"};
    $cond5 = $json_a->{"current_observation"}->{"temp_c"};
    
    

        //eksekusi variabel
    echo "<h3>${cond} ${cond1} City , ${cond2} \n</h3>";
    echo "${f10day} ${f10day1} ${f10day2}, ${f10day3} \n";
    echo "<br>";
    echo " ${cond6} \n";
    echo "<br>";
    echo "<img src='http://icons.wxug.com/i/c/k/".$cond3.".gif'><br/>";
    echo "<h3>${cond4} F|C ${cond5}\n</h3>";
    echo "<br>";

   

?>
</div>
    </body>
</html>
