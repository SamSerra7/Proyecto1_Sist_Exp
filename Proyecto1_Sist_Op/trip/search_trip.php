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
    <div>
        <a href="../index.php" style="color: white;">
            << Volver al inicio</a>
    </div>
    <div class="header">

        <div class="one">
            <div class="container selects">
                <h3 class="searchFont">Búsqueda por criterios</h3>
                <br>
                <form name="parameters">
                    <select name="type" onchange="this.form.submit()">
                        <option value="" disabled selected>Tipo de turismo</option>
                        <option value="Descanso">Descanso</option>
                        <option value="Gastronomico">Gastronomico</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Didactico">Didactico</option>
                    </select>
                    <br>
                    <select name="duration" onchange="this.form.submit()">
                        <option value="" disabled selected>Duracion de estadía</option>
                        <option value="rapida">Visita rápida</option>
                        <option value="Larga">Visita Larga</option>
                    </select>
                    <br>
                    <select name="access" onchange="this.form.submit()">
                        <option value="" disabled selected>Dificultad de acceso</option>
                        <option value="facil">Fácil</option>
                        <option value="regular">Regular</option>
                        <option value="dificil">Difícil</option>
                    </select>
                </form>
            </div>
        </div>

        <div class="two">
            <div class="container">
                <h3 class="resultsFont">Resultados</h3>
            </div>
            <div class="card">
                <div class="card-horizontal">
                    <img title="Best Western Jaco Beach All Inclusive Resort" alt="Titulo" class="card-img-top imgDestino" src="../public/img/aerial-view.jpg">

                    <div class="card-body">
                        <h5 align="center" class="card-title"> <b>Best Western Jaco Beach</b></h5>
                        <p class="card-text">

                        <div class="row">
                            <div class="col-6">
                                <h6 align="center"> <b>Ubicacion: </b></h6>
                                <h6 align="center">Puntarenas</h6>
                            </div>
                            <div class="col-6">
                                <h6 align="center"> <b>Categoria: </b> </h6>
                                <h6 align="center">Descanso</h6>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-6">
                                <h6 align="center"> <b>Acceso: </b> </h6>
                                <h6 align="center"> Fácil</h6>
                            </div>
                            <div class="col-6">
                                <h6 align="center"> <b>Precio: </b> </h6>
                                <h6 align="center"> $80.99</h6>
                            </div>
                        </div>


                        </p>
                        <button class="btn btn-primary centradobtn" name="btnAction" value="Agregar" type="submit">
                            Visitar
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-horizontal">
                    <img title="Best Western Jaco Beach All Inclusive Resort" alt="Titulo" class="card-img-top imgDestino" src="../public/img/volcano-lodge-springs.jpg">

                    <div class="card-body">
                        <h5 align="center" class="card-title"> <b>Volcano Lodge</b></h5>
                        <p class="card-text">

                        <div class="row">
                            <div class="col-6">
                                <h6 align="center"> <b>Ubicacion: </b></h6>
                                <h6 align="center">San Carlos</h6>
                            </div>
                            <div class="col-6">
                                <h6 align="center"> <b>Categoria: </b> </h6>
                                <h6 align="center">Descanso</h6>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-6">
                                <h6 align="center"> <b>Acceso: </b> </h6>
                                <h6 align="center"> Fácil</h6>
                            </div>
                            <div class="col-6">
                                <h6 align="center"> <b>Precio: </b> </h6>
                                <h6 align="center"> $90.99</h6>
                            </div>
                        </div>


                        </p>
                        <button class="btn btn-primary centradobtn" name="btnAction" value="Agregar" type="submit">
                            Visitar
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-horizontal">
                    <img title="Best Western Jaco Beach All Inclusive Resort" alt="Titulo" class="card-img-top imgDestino" src="../public/img/secrets-papagayo-costa.jpg">

                    <div class="card-body">
                        <h5 align="center" class="card-title"> <b>Secrets Papagayo Costa Rica</b></h5>
                        <p class="card-text">

                        <div class="row">
                            <div class="col-6">
                                <h6 align="center"> <b>Ubicacion: </b></h6>
                                <h6 align="center">Guanacaste</h6>
                            </div>
                            <div class="col-6">
                                <h6 align="center"> <b>Categoria: </b> </h6>
                                <h6 align="center">Descanso</h6>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-6">
                                <h6 align="center"> <b>Acceso: </b> </h6>
                                <h6 align="center"> Fácil</h6>
                            </div>
                            <div class="col-6">
                                <h6 align="center"> <b>Precio: </b> </h6>
                                <h6 align="center"> $365.99</h6>
                            </div>
                        </div>


                        </p>
                        <button class="btn btn-primary centradobtn" name="btnAction" value="Agregar" type="submit">
                            Visitar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("../public/footer.php");?>
</body>
<script>
    $('[name="carlist"]').change(function() {
        $(this).closest('form').submit();
    });
</script>

<style>
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
</style>
</html>
