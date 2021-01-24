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
        <a href="../admin/show.php" style="color: white;"><< Volver atrás</a>
                <div class="row">
                        <div class="column">
                            <br>
                            <br>
                            <h2>MODIFICAR ADMINISTRADOR</h2>
                            <br>
                            <form action="../controller/edit_user.php" method="post">
                            <div class="form-group">
                                    <input type="hidden" class="form-control"name="id" value=" <?php echo $_GET["id"] ?> "> 
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre" name="name" value=" <?php echo $_GET["name"] ?> ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apellidos" name="lastname" value=" <?php echo $_GET["lastname"] ?> ">  
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Usuario" name="username" value=" <?php echo $_GET["username"] ?> ">  
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Correo electrónico" name="email" value=" <?php echo $_GET["email"] ?> ">  
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Contraseña" name="password" value=" <?php echo $_GET["phone"] ?> ">
                                </div>
                                <button type="submit" class="btn btn-light">Modificar</button>
                            </form>

                        </div>
                </div>
    
        </div>
        <script>

</body>
</html>
