<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autores</title>
        <style>
            td{
                border: 4px dotted gainsboro;
            }
            a.button {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;

                text-decoration: none;
                color: initial;
            }
        </style>
    </head>
    <body>
         
        <table>
        
            <tr><td>Deposito</td>
            <td>Retiro </td>
            <td>Transferencia </td>
            <td>Saldo Actual</td></tr>
            
            
<?php
            
            
                require_once '../model/accountStatus_model.php';
            
                $customer = new accountStatus_model();
                $accountStatusList  = $customer->accountStatus("234567851" , "10000000000000043");
            
                foreach ($accountStatusList as $register){
                    $userId = $register["userID"];
                    $savingAccount = $register["firstName"];
                    $amount = $register["middleName"];
                    $lname = $register["lastName"];
                    
                  
                    echo "<tr><td>" . $userId ."</td>";  
                    echo "<td>"     . $savingAccount ."</td>";
                    echo "<td>"     . $amount ."</td>";
                    echo "<td>"     . $lname ."</td>";
                    
                    
                }   

            ?>
            
        </table>
    </body>
</html>