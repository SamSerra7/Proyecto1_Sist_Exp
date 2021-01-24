<?php
   require_once '../model/user_model.php';
    
    
    $id = $_POST["id"];

    $icustomer = new Users_model();
    $icustomer->delete_user($id);

?>