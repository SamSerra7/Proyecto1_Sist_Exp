<?php
   require_once '../model/user_model.php';
    
    
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $icustomer = new Users_model();
    $icustomer->add_user($name, $lastname, $username, $email, $password);

?>