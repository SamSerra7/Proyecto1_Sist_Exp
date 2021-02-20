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
        <a href="../trip/show.php" style="color: white;"><< Volver atrás</a>
        <div class="row">
            <div class="column">
                <br>
                <br>
                <h2>MODIFICAR DESTINO</h2>
                <br>
                <form action="../../controller/trip/edit_trip.php" method="get">
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
                        <input type="number" class="form-control" placeholder="Tipo de turismo" name="tourism_type_id" value="<?php echo $_GET["tourism_type_id"]?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="URL de la imágen" name="img" value="<?php echo $_GET["img"]?>">  
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" min=81111111 max=89999999 placeholder="Contacto" name="phone" value="<?php echo $_GET["phone"]?>">  
                    </div>
                    <div class="form-group">
                        <select name="direction" value="<?php echo $_GET["direction"]?>">
                            <option value="Guanacaste">Guanacaste</option>
                            <option value="Puntarenas">Puntarenas</option>
                            <option value="Limón">Limón</option>
                            <option value="Heredia">Heredia</option>
                            <option value="Alajuela">Alajuela</option>
                            <option value="San José">San José</option>
                            <option value="Cartago">Cartago</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="staying" value="<?php echo $_GET["staying"]?>">
                            <option value="1">Visita Rápida</option>
                            <option value="2">Visita Larga</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="access" value="<?php echo $_GET["access"]?>">
                            <option value="Fácil">Fácil</option>
                            <option value="Regular">Regular</option>
                            <option value="Difícil">Difícil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Latitud" name="latitude" value="<?php echo $_GET["latitude"]?>">  
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Longitud" name="longitude" value="<?php echo $_GET["longitude"]?>">  
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="URL de la imagen 2" name="img2" value="<?php echo $_GET["img2"]?>">  
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="URL de la imagen 3" name="img3" value="<?php echo $_GET["img3"]?>">  
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="URL del video" name="video" value="<?php echo $_GET["video"]?>">  
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Descripción" name="description" value="<?php echo $_GET["description"]?>">  
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Link del mapa" name="maps_link" value="<?php echo $_GET["maps_link"]?>">  
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" min=0 placeholder="Categoría" name="category" value="<?php echo $_GET["category"]?>">  
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Internet" name="internet" value="<?php echo $_GET["internet"]?>">  
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Seguridad" name="security" value="<?php echo $_GET["security"]?>">  
                    </div>

                    <button type="submit" class="btn btn-light">Editar</button>
                </form>

            </div>
        </div> 
    </div>
</body>
</html>
