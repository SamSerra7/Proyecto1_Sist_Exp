<?php
   require_once '../model/trip_model.php';
    
    
    $id = $_POST["id"];

    $trip = new Trip_model();
    $trip -> delete_trip($id);

?>