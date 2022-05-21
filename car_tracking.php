<?php
if(isset($_GET['lat'])){
    $lat = $_GET['lat'];
    $long = $_GET['long'];
    $driver_id = $_GET['driver_id'];
     echo "Latitude : ".$lat." | Longitude : ".$long;
    $tracking_query = "UPDATE `driver` SET `latitude` = '$lat', `longitude` = '$long' WHERE `driver`.`id` = 4;";
}
?>