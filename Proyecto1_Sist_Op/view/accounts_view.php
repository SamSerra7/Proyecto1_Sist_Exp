<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto 3</title>
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
        
            <tr><td>Cuenta de Ahorros </td>
            <td>Cuenta Cliente </td>
            <td>Tipo de Cambio</td>
            <td>Balance de la cuenta</td>
            <td>Eliminar</td></tr>
            
            
            <?php
                foreach ($accountList as $register){
                    $savingAccount = $register["savingAccount"];
                    $customerAccount = $register["customerAccount"];
                    $currencyType = $register["currencyType"];
                    $balance = $register["balance"];
                  
                    echo "<tr><td>" . $savingAccount ."</td>";  
                    echo "<td>"     . $customerAccount ."</td>";
                    echo "<td>"     . $currencyType ."</td>";
                    echo "<td>"     . $balance ."</td>";
                    echo '<td><a href="../controller/deleteAccounts.php?Id='.$savingAccount.' id="eliminar" class="button">Eliminar</a></td></tr>';
                }   

            ?>
            
        </table>
    </body>
</html>
