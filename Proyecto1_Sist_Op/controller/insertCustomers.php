<style>
    h1{
                background: yellowgreen;
                alignment-adjust: central;
                animation: infinite ease-in-out;
                
            }
</style>
<?php
    
    //llama al modelo y la vista
    require_once '../model/customers_model.php';
    
    
    $id = $_POST["id"];
    $name = $_POST["first_name"];
    $mname = $_POST["middle_name"];
    $lname = $_POST["last_name"];
    $slname = $_POST["s_last_name"];
    $province = $_POST["province"];
    $canton = $_POST["canton"];
    $district = $_POST["district"];
    $zip = $_POST["zip"];
    $date_of_birth = $_POST["fecha_nacimiento"];

    $icustomer = new Customers_model();
    $icustomer->insert_customer($id, $name, $mname, $lname, $slname, $province,$district,$canton,$zip, $date_of_birth);


    require_once '../view/consultUser.php';



    