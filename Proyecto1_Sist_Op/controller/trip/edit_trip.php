<?php
   require_once '../model/trip_model.php';
    
   $name = $_POST["name"];
   $price = $_POST["price"];
   $direction = $_POST["direction"];
   $staying = $_POST["staying"];
   $tourism_type_id = $_POST["tourism_type_id"];
   $img = $_POST["img"];
   $phone = $_POST["phone"];
   $latitude = $_POST["latitude"];
   $longitude = $_POST["longitude"];
   $img2 = $_POST["img2"];
   $img3 = $_POST["img3"];
   $video = $_POST["video"];
   $description = $_POST["description"];
   $maps_link = $_POST["maps_link"];
   $category = $_POST["category"];
   $internet = $_POST["internet"];
   $security = $_POST["security"];

    $trip = new Trip_model();
    $trip -> edit_user(  
                            $name,$price,$direction,$staying,$tourism_type_id,$img,
                            $phone,$latitude,$longitude,$img2,$img3,$video,$description,
                            $maps_link,$category,$internet,$security
                        );

?>