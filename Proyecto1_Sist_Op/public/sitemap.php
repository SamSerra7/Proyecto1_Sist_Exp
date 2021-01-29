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
    <div class="container">
        <h3 class="searchFont">Mapa del sitio</h3>
    </div>
    <div class="container">
        <div class="">
            <div class="card headerDiv">
                <a href="../index.php">Página de inicio</a>
            </div>
            <div class="card headerDiv">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Iniciar sesión</a>
                <hr class="solid">
                <a class="nav-link" style="margin-left: 50%;">Cerrar sesión</a>
            </div>
            <div class="card headerDiv">
                <a class="nav-link" href="../trip/credits.php">Acerca de</a>
            </div>
            <div class="card headerDiv">
                <a class="nav-link">Contáctenos</a>
            </div>
            <div class="card headerDiv">
                <a href="../trip/search_trip.php">Búsqueda por criterios</a>
            </div>
            <div class="card headerDiv">
                <a href="../trip/show_all.php" >Mostrar Destinos</a>
            </div>
        </div>
    </div>

    <?php include("../public/footer.php"); ?>
</body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inicio de sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="user">Usuario</label>
                                <input id="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="response">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn_iniciar">Iniciar</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#btn_iniciar').click(function() {
        var admin = $('#user').val();
        var pass = $('#password').val();
        var url = 'login/controller.php';
        $.post(url, {
            admin: admin,
            pass: pass
        }, function(data) {
            $('#response').html(data);
        });
    });

    $('[name="type]').change(function() {
        $(this).closest('form').submit();
    });
</script>

<style>
    .headerDiv {
        width: 50%;
        margin: 5%;
        padding-left: 4%;
        padding-top: 0.7%;
        padding-bottom: 0.4%;
    }

    hr.solid {
        border-top: 3px solid #bbb;
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
        width: 45%;
    }

    .two {
        float: right;
        width: 45%;
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