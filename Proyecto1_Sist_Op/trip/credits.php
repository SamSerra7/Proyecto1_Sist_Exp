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
    <div id="page-container">
        <div style="padding-top: 1%;padding-left: 1%">
            <a href="../index.php" style="color: white;">
                << Volver al inicio</a>
        </div>
        <h3 class="searchFont">Acerca de</h3>
        <div class="container">
            <div class="card headerDiv2">
                <h5>¿Qué es Find trip?</h5>
            </div>
            <div class="card spaced2">
                <br>
                <h5>Es una aplición que se encarga de ofercerte destinos turísticos a partir de diferentes tipos de búsqueda, asegurandosé además de darte las mejores recomendaciones</h5>
                <br>
            </div>
        </div>
        <div class="container">
            <div class="card headerDiv2">
                <h5>Desarrolladores</h5>
            </div>
            <div class="card spaced2">
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
    </div>
    <div id="footer">
        <?php include("../public/footer.php"); ?>
    </div>
</body>
<style>
    #page-container {
        position: relative;
        min-height: 100vh;
    }

    #content-wrap {
        padding-bottom: 2.5rem;
        /* Footer height */
    }

    #footer {
        position: relative;
        bottom: 0;
        width: 100%;
        height: 2.5rem;
        /* Footer height */
    }

    .searchFont {
        color: whitesmoke;
        margin: 3%;
    }

    .headerDiv {
        width: 30%;
        margin: 5%;
        padding-left: 4%;
        padding-top: 0%;
        padding-bottom: 0.4%;
    }

    .headerDiv2 {
        width: 50%;
        margin: 5%;
        padding-left: 4%;
        padding-top: 0.6%;
        padding-bottom: 0.4%;
        background-color: gray;
        color: white;
    }

    .spaced {
        width: 30%;
        margin: 5%;
        padding-top: 0%;
        padding-left: 4%;
    }

    .spaced2 {
        width: 50%;
        margin: 5%;
        padding-top: 2%;
        padding-left: 4%;
    }

    .siteMap {
        background-color: #866262;
        width: 30%;
        margin: 5%;
    }

    .one {
        float: left;
        margin-left: 5%;
        width: 40%;
    }

    .two {
        float: right;
        margin-right: 5%;
        width: 50%;
    }
</style>