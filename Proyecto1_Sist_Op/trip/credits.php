<?php

include("../public/nav.php");
?>

<html>

<head>

    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Find Trip</title>
    <link rel="stylesheet" type="text/css" href="../public/css/styles.css">

</head>

<body>
    <div style="padding-top: 1%;padding-left: 1%">
        <a href="../index.php" style="color: white;">
            << Volver al inicio</a>
    </div>
    <h3 class="searchFont">Acerca de</h3>
    <div class="container">
        <div class="card headerDiv">
            <h5>Desarrolladores</h5>
        </div>
        <div class="card spaced">
            <br>
            <h5>Dilan Angulo Ruiz</h5>
            <br>
            <h5>Maria Leiva Fernández</h5>
            <br>
            <h5>Ariel Ortega Brenes</h5>
            <br>
            <h5>Samuel Serrano Guerra</h5>
            <br>
        </div>
        <form action="../public/sitemap.php" method="post"><button class="siteMap" type="submit">
                <h5 style="color: white;">Mapa del sitio</h5>
            </button></form>
    </div>
    <?php include("../public/footer.php"); ?>
</body>
<style>
    .searchFont {
        color: whitesmoke;
        margin: 3%;
    }

    .headerDiv {
        width: 30%;
        margin: 5%;
        padding-left: 4%;
        padding-top: 0.4%;
        padding-bottom: 0.4%;
    }

    .spaced {
        width: 30%;
        margin: 5%;
        padding-top: 1%;
        padding-left: 4%;
    }

    .siteMap {
        background-color: #866262;
        width: 30%;
        margin: 5%;
    }
</style>