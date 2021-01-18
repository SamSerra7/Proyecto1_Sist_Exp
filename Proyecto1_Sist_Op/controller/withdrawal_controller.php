<style>
    h1{
                background: yellowgreen;
                alignment-adjust: central;
                animation: infinite ease-in-out;
                
            }
</style>
<?php
    
    //llama al modelo y la vista
    require_once '../model/deposits_Withdrawal_model.php' ;
    
    
   
    $userId = $_POST["id"];
    $savingAccount = $_POST["account"];
    $monto = $_POST["amount"]; 
    
    
    $deposit = new depositWithdrawal_model();
    $deposit->withdrawal($savingAccount, $monto, $userId);
    
    
    
    header("Location:../index.php");
    



    