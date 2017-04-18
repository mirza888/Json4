<title>| Wunderground API |</title>
<div class="container">
<?php
 
	error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
    $QueryState = $_GET['state'];
    $QueryCity = str_replace(' ', '_', $_GET['city']);

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/" . $QueryState . "/" . $QueryCity . ".json");   
    $json_a = json_decode($json_string);

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/forecast10day/q/" . $QueryState . "/" . $QueryCity . ".json");   
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