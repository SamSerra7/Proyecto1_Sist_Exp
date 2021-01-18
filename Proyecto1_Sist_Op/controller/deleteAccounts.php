<style>
    h1{
                background: yellowgreen;
                alignment-adjust: central;
                animation: infinite ease-in-out;
                
            }
</style>
<?php
    
    //llama al modelo y la vista
    require_once '../model/accounts_model.php';
    
    
    $id = $_GET["Id"];

    $daccount = new account_model();
    $daccount->delete_account($id);


    require_once '../view/consultAccount.php';



    