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
        <a href="../admin/show.php" style="color: white;"><< Volver atrás</a>
                <div class="row">
                        <div class="column">
                            <br>
                            <br>
                            <h2>Ingresar Administrador</h2>
                            <br>
                            <form action="../../controller/add_user.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre" name="name">  
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apellidos" name="lastname">  
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Usuario" name="username">  
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Correo electrónico" name="email">  
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Contraseña" name="password">
                                </div>
                                <button type="submit" class="btn btn-light">Añadir</button>
                            </form>

                        </div>
                </div>
    
        </div>
        <script>

</body>
</html>
