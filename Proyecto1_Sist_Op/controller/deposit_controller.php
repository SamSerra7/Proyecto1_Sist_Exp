<style>
    h1{
                background: yellowgreen;
                alignment-adjust: central;
                animation: infinite ease-in-out;
                
            }
</style>
<?php
    
    //llama al modelo y la vista
    require_once '../model/deposits_Withdrawal_model.php';
    
    
    $userId = $_POST["id"];
    $savingAccount = $_POST["numeroCuenta"];
    $monto = $_POST["monto"];
    $description = $_POST["descripcion"];
    $deposit = new depositWithdrawal_model();
    $deposit->deposit($savingAccount, $monto, $userId, $description);

    header("Location:../index.php");



    