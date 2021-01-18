<!DOCTYPE html>
<!-<!-- 
    Document   : newUser.php
    Created on : 28/11/2018, 01:03:35 AM
    Author     : Samuel
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Proyecto 3</title>
        
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            .bg {
                height: 1000%; 
                background-color: darkkhaki;
                background-position: center;
                background-repeat: no-repeat;
                background-size: contain;
            }
            .bg-1 {
                background: -webkit-linear-gradient(#111, #000);
            }
            .bl{
                -webkit-text-fill-color: #fff;
            }
            .default {  
                -webkit-text-fill-color: #777;
            }
        </style>

    </head>
    <body class="bg">

                   <!-- NavBar-->   
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="../index.php">Inicio</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Usuarios
                            <span class="caret"></span>
                        </a>
                        
                        <ul class="dropdown-menu"> 
                            <li><a href="newUser.html">Agregar nuevo</a></li>
                            <li><a href="consultUser.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Cuentas
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="newAccount.php">Agregar nuevo</a></li>
                            <li><a href="consultAccount.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Depositos/Retiros
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="newDepositWithdrawal.php">Realizar nuevo</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Transferencias
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="newTransfer.php">Realizar nueva</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

    
    <!-- container -->
    <div class="container"> 
        <form method="post" action="../controller/deposit_controller.php" class="form-signin">
            <div class="panel panel-info" >
                <div class="panel panel-heading" align="center">
                    <h2 class="form-signin-heading">Dep&oacute;sito</h2>
<hr/>
                </div>
                <div class="panel-body">
                    <label>N&uacute;mero de c&eacute;dula</label>
                    <?php
                    
                        $id = $_POST["id"];
                        echo ' 
                                <input type="text" id="id" name="id"  class="form-control" placeholder="N&uacute;mero de C&eacute;nta" value="'.$id.'" readonly/>
                            ';
                    ?>
                    <label>N&uacute;mero de cuenta a la cual desea realizar el dep&oacute;sito</label>
                    <input type="text" id="numeroCuenta" name="numeroCuenta"  class="form-control" placeholder="NumeroCuenta" required/>
                    <label>Monto que desea transferir</label>
                    <input type="text" id="monto" name="monto"  class="form-control" placeholder="Monto" required/>
                    <label>Descripci&oacute;n</label>
                    <input type="text" id="descripcion" name="descripcion"  class="form-control" placeholder="Descripcion" required/>
                    <br/>
                    <button class="btn btn-lg btn-primary btn-block" >Registrar</button>
                </div>
            </div>
        </form>

    </div>


    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>

        
    </body>
</html>