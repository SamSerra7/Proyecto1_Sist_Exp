<?php

if(isset($_POST['submit']))
{
   search();
} 


function search(){
    include_once '../configuration/config.php'; 

    //Variables para los datos provenientes de la bd
    $category = $_POST['category'];

    $stmt = $pdo->prepare("SELECT * FROM trip, tourism_type WHERE tourism_type.tourism_type_id = trip.tourism_type_id AND category = $category");
    $stmt->execute();
    $trips = $stmt->fetchAll(PDO::FETCH_ASSOC);    
        
   
    include '../trip/category_search.php';
}


?>