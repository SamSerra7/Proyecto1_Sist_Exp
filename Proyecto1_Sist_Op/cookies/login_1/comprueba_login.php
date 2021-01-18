<?php
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
        if (($result->rowCount())!=0) {
            session_start();
           $_SESSION["person"] = $_POST["user"];
            header("location:usr_registr.php");
        } else {
            header("location:LogIn.html");
        }
    } 
    catch (Exception $exc) {
        die("Error: " . $exc->getMessage());
    }
