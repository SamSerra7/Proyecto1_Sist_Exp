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
        
            <tr><td>Id </td>
            <td>Nombre </td>
            <td>Segundo Nombre </td>
            <td>Primer apellido </td>
            <td>Segundo apellido </td>
            <td>Provincia</td>
            <td>Canton</td>
            <td>Distrito</td>
            <td>Zip</td>
            <td>Fecha de nacimiento</td>
            <td>Eliminar</td>
            <td>Modificar</td></tr>
            
            
            <?php
                foreach ($customersList as $register){
                    $id = $register["userID"];
                    $name = $register["firstName"];
                    $mname = $register["middleName"];
                    $lname = $register["lastName"];
                    $slname = $register["secondLastName"];
                    $province = $register["province"];
                    $canton = $register["canton"];
                    $district = $register["district"];
                    $zip = $register["zip"];
                    $date_of_birth = $register["birthDate"];
                  
                    echo "<tr><td>" . $id ."</td>";  
                    echo "<td>"     . $name ."</td>";
                    echo "<td>"     . $mname ."</td>";
                    echo "<td>"     . $lname ."</td>";
                    echo "<td>"     . $slname ."</td>";
                    echo "<td>"     . $province ."</td>";
                    echo "<td>"     . $canton ."</td>";
                    echo "<td>"     . $district ."</td>";
                    echo "<td>"     . $zip ."</td>";
                    echo "<td>"     . $date_of_birth ."</td>";
                    echo '<td><a href="../controller/deleteCustomers.php?Id='.$id.' id="eliminar" class="button">Eliminar</a></td>';
                    echo '<td><a href="../view/updateCustomer.php?Id='.$id
                                                            .' & name='.$name
                                                            .' & mname='.$mname
                                                            .' & lname='.$lname
                                                            .' & slname='.$slname
                                                            .' & province='.$province
                                                            .' & canton='.$canton
                                                            .' & district='.$district
                                                            .' & zip='.$zip
                                                            .' & date_of_birth='.$date_of_birth
                          .'" id="modificar" class="button">Modificar</a></td>';
                    echo '<td><a href="../view/estadoCuenta.php?Id='.$id.' id="estadoCuenta" class="button">EstadoCuenta</a></td></tr>';
                }   

            ?>
            
        </table>
    </body>
</html>
