<!DOCTYPE html>
<html>
    <head>
        <title>Pag principal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .btn-group .button {
                background-color: #4CAF50; /* Green */
                border: 1px solid green;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
                float: left;
            }
            .btn-group .button:not(:last-child) {
                border-right: none; /* Prevent double borders */
            }
            .btn-group .button:hover {
                background-color: #3e8e41;
            }
        </style>
    </head>
    <body>
        <?php
        
        session_start();
        if(!isset($_SESSION["person"])){
            header("location:LogIn.html");
        }
        
        echo "<h1>USER: ".$_SESSION["person"]."</h1>
                <p>
                    This is page 2.
                </p>
                <div class='btn-group'>
                    <a href='usr_registr.php'><button class='button'>Volver</button></a> 
                </div>
                <div class='btn-group'>
                    <a href='close_session.php'><button class='button'>Cerrar Sesión</button></a>
                </div>"
        ;
        
        
        ?>
    </body>
</html>
