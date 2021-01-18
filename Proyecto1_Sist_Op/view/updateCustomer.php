<!--

    Document   : updateAuthor
    Created on : 01/11/2018, 10:58:37 PM
    Author     : Samuel

-->
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Proyecto 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body >

        <!-- NavBar-->   
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="/Proyecto2_BasesDatos/view/showVideos.html">Reproductor</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Autores
                            <span class="caret"></span>
                        </a>
                        
                        <ul class="dropdown-menu"> 
                            <li><a href="../view/newAuthor.html">Agregar nuevo</a></li>
                            <li><a href="../view/consultAuthor.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Grupos
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../view/newGroup.php">Agregar nuevo</a></li>
                            <li><a href="../view/consultGroup.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Videos
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../view/newVideo.php">Agregar nuevo</a></li>
                            <li><a href="../view/consultVideo.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Lista de Reproducción
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../view/newPlaylist.php">Agregar nueva</a></li>
                            <li><a href="../view/consultPlaylist.php">Buscar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        

     
     
<?php    
    
    $id = $_GET["Id"];
    $name = $_GET["name"];
    $mname = $_GET["mname"];
    $lname = $_GET["lname"];
    $slname = $_GET["slname"];
    $province = $_GET["province"];
    $canton = $_GET["canton"];
    $district = $_GET["district"];
    $zip = $_GET["zip"];
    $date_of_birth = $_GET["date_of_birth"];

    echo ' 
        <!-- container -->
    <div class="container"> 
        <form method="post" action="../controller/updateCustomers.php" class="form-signin">
            <div class="panel panel-info" >
                <div class="panel panel-heading" align="center">
                    <h2 class="form-signin-heading">Llene el formulario para modificar un usuario</h2>
                    <hr/>
                </div>
                <div class="panel-body">
                    <label>Cédula</label>
                    <input type="text" id="id" name="id"  class="form-control" placeholder="Cédula"  value="'.$id.'"  required readonly/>
                    <label>Nombre</label>
                    <input type="text" id="first_name" name="first_name"  class="form-control" placeholder="Nombre"  value="'.$name.'"  required/>
                    <label>Segundo Nombre</label>
                    <input type="text" id="middle_name" name="middle_name"  class="form-control" placeholder="Segundo Nombre"  value="'.$mname.'"   required/>
                    <label>Primer Apellido</label>
                    <input type="text" id="last_name" name="last_name"  class="form-control" placeholder="Primer Apellido"  value="'.$lname.'"    required/>
                    <label>Segundo Apellido</label>
                    <input type="text" id="s_last_name" name="s_last_name" class="form-control" placeholder="Segundo Apellido"  value="'.$slname.'"     required/>
                    <label>Provincia</label>
                    <input type="text" id="province" name="province" class="form-control" placeholder="Provincia"   value="'.$province.'"     required/>
                    <label>Canton</label>
                    <input type="text" id="canton" name="canton" class="form-control" placeholder="Canton"   value="'.$canton.'"   required/>
                    <label>Distrito</label>
                    <input type="text" id="district" name="district" class="form-control" placeholder="Distrito"   value="'.$district.'"     required/>
                    <label>Código Zip</label>
                    <input type="text" id="zip" name="zip" class="form-control" placeholder="Zip"    value="'.$zip.'"     required/>
                    <label>Fecha de naciemiento</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control"    value="'.$date_of_birth.'"    required/>
                    
                    <br/>
                    <button class="btn btn-lg btn-primary btn-block" >Modificar</button>
                </div>
            </div>
        </form>

    </div>

    ';
?>
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>