<style>
    h1{
                background: yellowgreen;
                alignment-adjust: central;
                animation: infinite ease-in-out;
                
            }
</style>
<?php
    
    //llama al modelo y la vista
    require_once '../model/transference_model.php';
    
    $idUser = $_POST["id"];
    $savingAccountSource = $_POST["account"];
    $receptorAccount = $_POST["t_account"];
    $monto = $_POST["amount"];
    $description = $_POST["desc"];

    $itransfer = new transference_model();
    $itransfer->transference($savingAccountSource,$receptorAccount,$monto,$idUser,$description);


    require_once '../view/consultUser.php';



    