<?php 
session_start();


if(!isset($_SESSION['admin_session'])){
    header('Location: '.'../index.php');
}

include("admin_nav.php"); 
?>

<html>

<head>

        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Find Trip</title>
        <link rel="stylesheet" type="text/css" href="../public/css/styles.css">


</head>

<body>
        <br>
        <div class="container">
                <div class="row">
                        <div class="column">
                                <h1>¡Bienvenido <?php echo $_SESSION["admin_session"];?>!</h1><br>
                
                        </div>
                        <div class="column">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img class="d-block w-100" src="../public/img/cataratas.gif" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                        <img class="d-block w-100" src="../public/img/monteverde.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                        <img class="d-block w-100" src="../public/img/rioceleste.jpg" alt="Third slide">
                                </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                </a>
                                </div>
                
                        </div>
                </div>
        </div>
</body>
</html>
