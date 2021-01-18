<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            h1,h2{
                text-align: center;
                background-color: coral;
                color: darkgreen;
            }
            h4{
                text-align: center;
                background-color: red;
                color: azure;
            }
            table{
                width: 25%;
                background-color: coral;
                border: 4px dotted darkgreen;
                margin: auto;
            }
            .izq{
                text-align:right;
                color: darkgreen;
            }
            .der{
                text-align:left;
                color: darkgreen;
            }
            td{
                text-align: center;
                padding: 15px;
            }
            .button {
                display: inline-block;
                border-radius: 4px;
                background-color: darkolivegreen;
                border: none;
                color: aliceblue;
                text-align: center;
                font-size: 14px;
                padding: 5px;
                width: 100px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
                
            }
            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }
        </style>
    </head>
    <body>
        <?php
            $autentification = false;
            if(isset($_POST["log"])){
                try {
                    $base = new PDO("mysql:host=localhost;dbname=pruebas;","root","");
                    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $query = "SELECT * FROM USUARIOS_LOG WHERE USER = :user AND PASSWORD = :password";
                    $result= $base->prepare($query);
                    $user = htmlentities(addslashes($_POST["user"]));
                    $password = htmlentities(addslashes($_POST["password"]));
                    $result->bindValue(":user", $user);
                    $result->bindValue(":password", $password);
                    $result->execute();
                    if (($result->rowCount())!= 0) {
                        $autentification = true;
                        if (isset($_POST["recordar"])) {
                            setcookie("n_usuario",$_POST["user"], time()+86400);
                        }
                    } else {
                        echo '<h4>Error: Usuario o Contraseña incorrectos</h4>';
                    }
                } 
                catch (Exception $exc) {
                    die("Error: " . $exc->getMessage());
                }
            }
        ?>
        <?php 
            if(!$autentification){
                if(!isset($_COOKIE["n_usuario"])){
                    include ("formulario.html");
                }
            }
        ?>
        <h2>Contenido Web</h2>
        <table width="800" border="0">
                <tr>
                    <td class="izq"><img src="Chrysanthemum.jpg" width="300" height="166"></td>
                    <td class="der"><img src="Desert.jpg" width="300" height="171"></td>
                </tr>
                <tr>
                    <td class="izq"><img src="Hydrangeas.jpg" width="300" height="166"></td>
                    <td class="der"><img src="Jellyfish.jpg" width="300" height="197"></td>
                </tr>
                
        </table>
        
        <?php
            if($autentification || isset($_COOKIE["n_usuario"])){
                include './informacionAdicional.html';
            }
        
        ?>
        
    </body>
</html>
