<?php

include("../public/nav.php");
?>

<html>

<head>

    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Find Trip</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../public/css/styles.css">

</head>

<body>
    <div id="page-container">
        <div style="padding-top: 1%;padding-left: 1%">
            <a href="../index.php" style="color: white;">
                << Volver al inicio</a>
        </div>

        <div class="header">

            <div class="one">
                <div class="container selects">
                    <h3 class="searchFont">Búsqueda por criterios</h3>
                    <br>
                    <form name="final" action="../controller/search_trip.php" method="post">
                        <select name="type">
                            <option value="" disabled selected>Tipo de turismo</option>
                            <option value=1>Descanso</option>
                            <option value=2>Gastronomico</option>
                            <option value=3>Aventura</option>
                            <option value=4>Didactico</option>
                        </select>
                        <br>
                        <select name="duration">
                            <option value="" disabled selected>Duracion de estadía</option>
                            <option value=1>Visita rápida</option>
                            <option value=2>Visita Larga</option>
                        </select>
                        <br>
                        <select name="access">
                            <option value="" disabled selected>Dificultad de acceso</option>
                            <option value=Fácil>Fácil</option>
                            <option value=Regular>Regular</option>
                            <option value=Difícil>Difícil</option>
                        </select>
                        <br>
                        <select name="internet">
                            <option value="" disabled selected>Acceso a internet</option>
                            <option value=1>Sí</option>
                            <option value=2>No</option>
                        </select>
                        <br>
                        <select name="security">
                            <option value="" disabled selected>Seguridad privada</option>
                            <option value=1>Sí</option>
                            <option value=2>No</option>
                        </select>
                        <div class="form-group">
                            <input value="BUSCAR" type="submit" name="submit" style="width: 30%; margin: 1%; background: #25533b; color:blanchedalmond;">
                        </div>
                        <br>
                        <div class="form-group">
                            <input name="submit" type="submit" style="width: 30%; margin: 1%;" value="REINICIAR">
                        </div>
                    </form>
                </div>

            </div>

            <div class="two">
            <h3 class="searchFont">Resultados acuerdo a sus criterios</h3>
                <div class="container">
                    <h3 class="resultsFont"><?php if (isset($tourist_type)) {
                                                echo $tourist_type;
                                            } ?></h3>
                </div>
                <?php
                if (isset($trips)) {
                    foreach ($trips as $trip) {
                ?>
                        <br>
                        <div class="card">
                            <div class="card-horizontal">
                                <img title=<?php echo  $trip['name'] ?> alt="Titulo" class="card-img-top imgDestino" src=<?php echo  $trip['img'] ?>>
                                <div class="card-body">
                                    <h5 align="center" class="card-title"> <b><?php echo  $trip['name'] ?></b></h5>
                                    <p class="card-text">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 align="center"> <b>Ubicacion: </b></h6>
                                            <h6 align="center"><?php echo  $trip['direction'] ?></h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 align="center"> <b>Categoria: </b> </h6>
                                            <h6 align="center"><?php echo  $trip['tourism'] ?></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 align="center"> <b>Acceso: </b> </h6>
                                            <h6 align="center"><?php echo  $trip['access'] ?></h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 align="center"> <b>Precio: </b> </h6>
                                            <h6 align="center"><?php if ($trip['price'] == 1) {
                                                                    echo 'Barato';
                                                                } else if ($trip['price'] == 2) {
                                                                    echo 'Cómodo';
                                                                } else if ($trip['price'] == 3) {
                                                                    echo 'Caro';
                                                                } else {
                                                                    echo '-';
                                                                } ?>

                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 align="center"> <b>Internet: </b> </h6>
                                            <h6 align="center"><?php if ($trip['internet'] == 1) {
                                                                    echo 'Disponible';
                                                                } else {
                                                                    echo 'No disponible';
                                                                } ?></h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 align="center"> <b>Seguridad: </b> </h6>
                                            <h6 align="center"><?php if ($trip['security'] == 1) {
                                                                    echo 'Seguridad 24/7';
                                                                } else {
                                                                    echo 'Sin seguridad privada';
                                                                } ?></h6>

                                        </div>
                                    </div>
                                    </p>
                                    <button id="link" style="transform: translateX(-50%); margin-left: 50%;" class="open-my-modal btn btn-primary centradobtn" name=" btnAction" value="Agregar" type="submit" data-toggle="modal" data-target="#tripModal" data-id="<?php echo $trip['tripId'] ?>" data-name="<?php echo  $trip['name'] ?>" data-location="<?php echo  $trip['direction'] ?>" data-staying="<?php if ($trip['staying'] == 1) {
                                                                                                                                                                                                                                                                                                                                                                                                                    echo 'Visita rápida';
                                                                                                                                                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                                                                                                                                                    echo 'Visita larga';
                                                                                                                                                                                                                                                                                                                                                                                                                } ?>" data-phone="<?php echo  $trip['phone'] ?>" data-img="<?php echo  $trip['img'] ?>" data-img2="<?php echo  $trip['img2'] ?>" data-img3="<?php echo  $trip['img3'] ?>" data-video="<?php echo  $trip['video'] ?>" data-description="<?php echo  $trip['description'] ?>" data-maps="<?php echo  $trip['maps_link'] ?>" data-internet="<?php if ($trip['internet'] == 1) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                echo 'Disponible';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                echo 'No disponible';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            } ?>" data-security="<?php if ($trip['security'] == 1) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        echo 'Seguridad 24/7';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        echo 'Sin seguridad privada';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    } ?>">
                                        Visitar
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <hr>
                    <h3 class="searchFont">Resultados similares </h3>

                    <?php
                    if (isset($recomended)) {
                        foreach ($recomended as $trip) {
                    ?>
                            <br>
                            <div class="card">
                                <div class="card-horizontal">
                                    <img title=<?php echo  $trip['name'] ?> alt="Titulo" class="card-img-top imgDestino" src=<?php echo  $trip['img'] ?>>
                                    <div class="card-body">
                                        <h5 align="center" class="card-title"> <b><?php echo  $trip['name'] ?></b></h5>
                                        <p class="card-text">
                                        <div class="row">
                                            <div class="col-6">
                                                <h6 align="center"> <b>Ubicacion: </b></h6>
                                                <h6 align="center"><?php echo  $trip['direction'] ?></h6>
                                            </div>
                                            <div class="col-6">
                                                <h6 align="center"> <b>Categoria: </b> </h6>
                                                <h6 align="center"><?php echo  $trip['tourism'] ?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6 align="center"> <b>Acceso: </b> </h6>
                                                <h6 align="center"><?php echo  $trip['access'] ?></h6>
                                            </div>
                                            <div class="col-6">
                                                <h6 align="center"> <b>Precio: </b> </h6>
                                                <h6 align="center"><?php if ($trip['price'] == 1) {
                                                                        echo 'Barato';
                                                                    } else if ($trip['price'] == 2) {
                                                                        echo 'Cómodo';
                                                                    } else if ($trip['price'] == 3) {
                                                                        echo 'Caro';
                                                                    } else {
                                                                        echo '-';
                                                                    } ?>

                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6 align="center"> <b>Internet: </b> </h6>
                                                <h6 align="center"><?php if ($trip['internet'] == 1) {
                                                                        echo 'Disponible';
                                                                    } else {
                                                                        echo 'No disponible';
                                                                    } ?></h6>
                                            </div>
                                            <div class="col-6">
                                                <h6 align="center"> <b>Seguridad: </b> </h6>
                                                <h6 align="center"><?php if ($trip['security'] == 1) {
                                                                        echo 'Seguridad 24/7';
                                                                    } else {
                                                                        echo 'Sin seguridad privada';
                                                                    } ?></h6>

                                            </div>
                                        </div>
                                        </p>
                                        <button id="link" style="transform: translateX(-50%); margin-left: 50%;" class="open-my-modal btn btn-primary centradobtn" name=" btnAction" value="Agregar" type="submit" data-toggle="modal" data-target="#tripModal" data-id="<?php echo $trip['tripId'] ?>" data-name="<?php echo  $trip['name'] ?>" data-location="<?php echo  $trip['direction'] ?>" data-staying="<?php if ($trip['staying'] == 1) {
                                                                                                                                                                                                                                                                                                                                                                                                                        echo 'Visita rápida';
                                                                                                                                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                                                                                                                                        echo 'Visita larga';
                                                                                                                                                                                                                                                                                                                                                                                                                    } ?>" data-phone="<?php echo  $trip['phone'] ?>" data-img="<?php echo  $trip['img'] ?>" data-img2="<?php echo  $trip['img2'] ?>" data-img3="<?php echo  $trip['img3'] ?>" data-video="<?php echo  $trip['video'] ?>" data-description="<?php echo  $trip['description'] ?>" data-maps="<?php echo  $trip['maps_link'] ?>" data-internet="<?php if ($trip['internet'] == 1) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    echo 'Disponible';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    echo 'No disponible';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                } ?>" data-security="<?php if ($trip['security'] == 1) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            echo 'Seguridad 24/7';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            echo 'Sin seguridad privada';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        } ?>">
                                            Visitar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }
                } else {
                    include_once '../configuration/config.php';
                    $query = $pdo->prepare("SELECT * FROM trip, tourism_type where tourism_type.tourism_type_id = trip.tourism_type_id");
                    $query->execute();
                    $trips = $query->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($trips as $trip) {


                        ?>
                        <br>
                        <div class="card">
                            <div class="card-horizontal">
                                <img title=<?php echo  $trip['name'] ?> alt="Titulo" class="card-img-top imgDestino" src=<?php echo  $trip['img'] ?>>
                                <div class="card-body">
                                    <h5 align="center" class="card-title"> <b><?php echo  $trip['name'] ?></b></h5>
                                    <p class="card-text">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 align="center"> <b>Ubicacion: </b></h6>
                                            <h6 align="center"><?php echo  $trip['direction'] ?></h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 align="center"> <b>Categoria: </b> </h6>
                                            <h6 align="center"><?php echo  $trip['tourism'] ?></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 align="center"> <b>Acceso: </b> </h6>
                                            <h6 align="center"><?php echo  $trip['access'] ?></h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 align="center"> <b>Precio: </b> </h6>
                                            <h6 align="center"><?php if ($trip['price'] == 1) {
                                                                    echo 'Barato';
                                                                } else if ($trip['price'] == 2) {
                                                                    echo 'Cómodo';
                                                                } else if ($trip['price'] == 3) {
                                                                    echo 'Caro';
                                                                } else {
                                                                    echo '-';
                                                                } ?>

                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 align="center"> <b>Internet: </b> </h6>
                                            <h6 align="center"><?php if ($trip['internet'] == 1) {
                                                                    echo 'Disponible';
                                                                } else {
                                                                    echo 'No disponible';
                                                                } ?></h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 align="center"> <b>Seguridad: </b> </h6>
                                            <h6 align="center"><?php if ($trip['security'] == 1) {
                                                                    echo 'Seguridad 24/7';
                                                                } else {
                                                                    echo 'Sin seguridad privada';
                                                                } ?></h6>

                                        </div>
                                    </div>
                                    </p>
                                    <button id="link" style="transform: translateX(-50%); margin-left: 50%;" class="open-my-modal  btn btn-primary centradobtn" name=" btnAction" value="Agregar" type="submit" data-toggle="modal" data-target="#tripModal" data-id="<?php echo $trip['tripId'] ?>" data-name="<?php echo  $trip['name'] ?>" data-location="<?php echo  $trip['direction'] ?>" data-staying="<?php if ($trip['staying'] == 1) {
                                                                                                                                                                                                                                                                                                                                                                                                                    echo 'Visita rápida';
                                                                                                                                                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                                                                                                                                                    echo 'Visita larga';
                                                                                                                                                                                                                                                                                                                                                                                                                } ?>" data-phone="<?php echo  $trip['phone'] ?>" data-img="<?php echo  $trip['img'] ?>" data-img2="<?php echo  $trip['img2'] ?>" data-img3="<?php echo  $trip['img3'] ?>" data-video="<?php echo  $trip['video'] ?>" data-description="<?php echo  $trip['description'] ?>" data-maps="<?php echo  $trip['maps_link'] ?>" data-internet="<?php if ($trip['internet'] == 1) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                echo 'Disponible';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                echo 'No disponible';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            } ?>" data-security="<?php if ($trip['security'] == 1) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        echo 'Seguridad 24/7';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        echo 'Sin seguridad privada';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    } ?>">
                                        Visitar
                                    </button>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
            <br>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="tripModal" aria-labelledby="triplabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document" id="mdialTamanio">
            <div class="modal-content prueba">
                <div class="modal-body">
                    <h4 align="center"><b>
                            <div id="name">
                        </b></h4>
                    <div>
                        <div class="col-md-12 ">

                            <div id="carouselExampleIndicators" class="carousel slide d" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" id="img" height="445" ; alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" id="img2" height="445" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" id="img3" height="445" alt="Third slide">
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

                    <div class="row infoColor">
                        <br>

                        <div class="col-md-6 ">

                            <h6> <b>Ubicacion: </b>
                                <div id="location">
                            </h6> <br>
                            <h6> <b>Estadía: </b>
                                <div id="staying">
                            </h6> <br>
                            <h6> <b>Contacto: </b>
                                <div id="phone">
                            </h6> <br>
                            <h6> <b>Internet </b>
                                <div id="internet">
                            </h6> <br>
                            <h6> <b>Seguridad </b>
                                <div id="security">
                            </h6>

                        </div>

                        <div class="col-md-6 ">
                            <iframe id="maps" width="400" height="300" frameborder="5" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                            </iframe>
                        </div>



                        <div class="col-md-12 ">
                            <br>
                            <hr>

                            <h5 align="left"><b>Descripción</b></h5>

                            <div class="infoColor">
                                <h6 style=>
                                    <div id="description">
                                </h6>
                            </div>
                        </div>
                        <iframe id="video" width="400" height="300" frameborder="5" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End modal -->
    <div id="footer">
        <?php include("../public/footer.php"); ?>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('.open-my-modal').click(function() {
            $('#name').html($(this).data('name'));
            $('#location').html($(this).data('location'));
            $('#staying').html($(this).data('staying'));
            $('#phone').html($(this).data('phone'));
            $('#description').html($(this).data('description'));
            $('#img').attr('src', $(this).data('img'));
            $('#img2').attr('src', $(this).data('img2'));
            $('#img3').attr('src', $(this).data('img3'));
            $('#video').attr('src', $(this).data('video'));
            $('#maps').attr('src', $(this).data('maps'));
            $('#internet').html($(this).data('internet'));
            $('#security').html($(this).data('security'));

            // show Modal
            $('#tripModal').modal('show');
        });
    });
</script>

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

    .buttonReset {
        display: block;
        width: 115px;
        height: 25px;
        background: #FFFFFF;
        text-align: center;
        color: black;
        font-weight: regular;
        line-height: 25px;
    }

    .cardDestino {
        height: 500px;
        width: 350px;
    }

    .card-horizontal {
        display: flex;
        flex: 1 1 auto;
    }

    .imgDestino {
        height: 250px;
        width: 350px;
    }

    .selects {
        margin-top: 5%;
    }

    .header {
        display: inline-block;
        width: 100%;
    }

    select {
        width: 30%;
        margin: 1%;
    }

    .centradobtn {
        width: 110px;
        /* Para que no se rompa en dos líneas, y lo translade tal cual. */
        margin-left: 50%;
        transform: translateX(-50%);
        background-color: #25533B;
        border-color: #25533B
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

    .searchFont {
        color: whitesmoke;
        margin: 3%;
    }

    .resultsFont {
        color: whitesmoke;
        margin: 3%;
        text-align: center;
    }

    .mdialTamanio {
        width: 100% !important;
        background-color: #25533B;
    }

    .prueba {
        background-color: #709280;
    }

    .infoColor {
        background-color: #FFFFFF;
        padding: 30px;
        border-radius: 10px;
    }

    video {
        width: 100%;
        padding: 20px;
    }

    iframe {
        width: 100%;
    }

    #carouselExampleIndicators {

        width: 100%;
        height: 500px;
        padding: 20px;
    }
</style>

</html>