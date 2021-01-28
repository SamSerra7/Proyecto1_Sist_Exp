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
                            <h2>MODIFICAR DESTINO</h2>
                            <br>
                            <form action="../controller/trip/edit_trip.php" method="post">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $_GET["id"] ?>"> 
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre" name="name" value="<?php echo $_GET["name"]?>">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Precio" name="price" value="<?php echo $_GET["price"]?>">  
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Dirección" name="direction" value="<?php echo $_GET["direction"]?>">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Estadía" name="staying" value="<?php echo $_GET["staying"]?>">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Tipo de turismo" name="tourism_type_id" value="<?php echo $_GET["tourism_type_id"]?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="URL de la imágen" name="img" value="<?php echo $_GET["img"]?>">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" min=81111111 max=89999999 placeholder="Contacto" name="phone" value="<?php echo $_GET["phone"]?>">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Latitud" name="latitude" value="<?php echo $_GET["latitude"]?>">  
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Longitud" name="longitude" value="<?php echo $_GET["longitude"]?>">  
                                </div>

                                <button type="submit" class="btn btn-light">Añadir</button>
                            </form>

                        </div>
                </div>
    
        </div>
        <script>

</body>
</html>
