<!-- 
    Document   : consultAuthor
    Author     : Samuel
-->
<!DOCTYPE html>
<!-- <%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>-->


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Proyecto 3</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            .bg {
                height: 180%; 
                background-color:  #fff;
                background: -webkit-linear-gradient(#fff, #000);
                background-position: center;
                background-repeat: no-repeat;
                background-size: contain;
            }
            .bg-1 {
                background: -webkit-linear-gradient(#111, #000);
            }
            .bg-2 {
                background: -webkit-linear-gradient(#fff, #777);
            }
            .bl{
                -webkit-text-fill-color:  #fff;
            }
            .default {  
                -webkit-text-fill-color: #777;
            }
        </style>

    </head>
    <body class="bg-2">

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
                            <li><a href="../view/newAccount.php">Agregar nuevo</a></li>
                            <li><a href="../view/consultAccount.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Depositos/Retiros
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../view/newDepositWithdrawal.php">Realizar nuevo</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Transferencias
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../view/newTransfer.php">Realizar nueva</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    

        <?php
        
        
            require_once '../controller/accounts_controller.php';
            
            
            
        ?>
            
        
        <script>
            $(document).ready(function () {
                $("#myInput").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").each(function () {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                    });
                });
            });
        </script>
    </body>
</html>