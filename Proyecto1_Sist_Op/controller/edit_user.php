<?php
   require_once '../model/user_model.php';
    
    $id = $_POST["id"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $icustomer = new Users_model();
    $icustomer->edit_user($id, $name, $lastname, $username, $email, $password);

?>