<?php

if (isset($_POST['submit'])) {
    search();
}


function search()
{
    include_once '../configuration/config.php';

    
    $sql = "SELECT * FROM trip, tourism_type WHERE tourism_type.tourism_type_id = trip.tourism_type_id";

    //si los parametros estan presentes en el post, como criterios, seran concatenados a la consulta sql
    if(!empty($_POST['type'])){
        $tourism_type = $_POST['type'];
        $sql .= " AND tourism_type.tourism_type_id = $tourism_type";
    }

    if(!empty($_POST['duration'])){
        $staying = $_POST['duration'];
        $sql .= " AND trip.staying = $staying";
    }

    if(!empty($_POST['access'])){
        $access = $_POST['access'];
        $sql .= " AND trip.access = '$access'";
    }

    if(!empty($_POST['internet'])){
        $internet = $_POST['internet'];
        $sql .= " AND trip.internet = $internet";
    }

    if(!empty($_POST['security'])){
        $security = $_POST['security'];
        $sql .= " AND trip.security =$security";
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $trips = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $_POST = array();
    include '../trip/search_trip.php';
}
