<?php

    //llama al modelo y la vista
    require_once '../model/accounts_model.php';


    $id = $_POST["id"];
    $currency = $_POST["currency"];
    
    if(isset($_POST["cuentaCliente"])){
        $ca = numAleatorios();
        $iaccount = new account_model();
        $iaccount->insert_account($id,$currency,$ca );
    }else{
    $iaccount = new account_model();
    $iaccount->insert_account($id,$currency," ");
    }
        
    
    require_once '../view/consultAccount.php';
    
        
        
    function numAleatorios(){
        $str="";
        for ($index = 0; $index < 15; $index++) {
            $str=$str.mt_rand(0,9);
            if($index==2 || $index==7 ){$str=$str."-";}
            
        }
        return $str;
    } 