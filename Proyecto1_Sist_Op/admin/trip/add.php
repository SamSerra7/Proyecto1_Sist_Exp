<?php 
session_start();


if(!isset($_SESSION['admin_session'])){
    header('Location: '.'../../../index.php');
}

include("../admin_nav.php"); 
?>


<html>

<head>

        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Find Trip</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/styles.css">



</head>

<body>
        <br>
        <div class="container">
        <a href="../../admin/show.php" style="color: white;"><< Volver atrás</a>
                <div class="row">
                        <div class="column">
                            <br>
                            <br>
                            <h2>INGRESAR DESTINO</h2>
                            <br>
                            <form action="../controller/trip/add_trip.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre" name="name">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Precio" name="price">  
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Dirección" name="direction">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Estadía" name="staying">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Tipo de turismo" name="tourism_type_id">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="URL de la imágen" name="img">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" min=81111111 max=89999999 placeholder="Contacto" name="phone">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Latitud" name="latitude">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Longitud" name="longitude">  
                                </div>

                                <button type="submit" class="btn btn-light">Añadir</button>
                            </form>

                        </div>
                </div>
    
        </div>
        <script>

</body>
</html>
