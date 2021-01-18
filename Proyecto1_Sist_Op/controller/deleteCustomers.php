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
    
    
    $id = $_GET["Id"];

    $dcustomer = new Customers_model();
    $dcustomer->delete_customer($id);


    require_once '../view/consultUser.php';



    