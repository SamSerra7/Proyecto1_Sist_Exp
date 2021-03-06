<?php

if(isset($_POST['submit']))
{
   estimation();
} 


function estimation(){
    include_once '../configuration/config.php'; 

    //Variables para los datos provenientes de la bd
    $staying = $_POST['staying'];
    $access = $_POST['access'];
    $direction = $_POST['direction'];

    //Variable a predecir
    $tourist_type;
    $discover_type;
    
    //Clases (vj)
    $classes = array(0 => 1, 1 => 2, 2 => 3, 3 => 4 ); //1 = Descanso, 2 = Gastronomico, 3 = Aventura, 4 = Didactico
    
    //Variables para el calculo de bayes
    $iteration;
    $probability = 0;
    $high_probability = 0;
    $trips;

    //En el siguiente ciclo obtengo las probabilidades de E' (todos los atibutos dados en el form) para cada una de las clases vj.
    //En cada iteracion compara y establece el mayor numero a $probability
    for ($i = 0; $i < count($classes); $i++){
    
        //Llama al procedimiento almacenado get_average que hace el calculo P(aj|vj)
        $stmt = $pdo->prepare("CALL `find_trip_if7103`.`get_trip_probability`(?, ?, ?, ?)");
        $stmt->bindParam(1, $staying, PDO::PARAM_INT, 4000); 
        $stmt->bindParam(2, $access, PDO::PARAM_STR, 4000); 
        $stmt->bindParam(3, $direction, PDO::PARAM_STR, 4000); 
        $stmt->bindParam(4, $classes[$i], PDO::PARAM_INT, 4000); 
        $stmt->execute();

        //Obtiene la salida y la asigna a $iteracion  
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);   
        $iteration = $result[0]['average'];
    
        //Compara y establece el mayor a $probability
        if(($iteration > $high_probability) or $i==0){
            $high_probability = $iteration;
            $discover_type = $classes[$i];
            $tourist_type = "Su perfil coincide con el turismo de tipo: ";
            switch ($classes[$i]) {
                case 1:
                    $tourist_type = $tourist_type."Descanso" ;
                    break;
                case 2:
                    $tourist_type = $tourist_type."Gastronómico" ;
                    break;
                case 3:
                    $tourist_type = $tourist_type."Aventura" ;
                    break;
                case 4:
                    $tourist_type = $tourist_type."Didáctico" ;
                    break;
            }
        }else if($iteration < $probability){
            $probability= $iteration;
            
        }
    }

    $stmt = $pdo->prepare("SELECT * FROM trip, tourism_type WHERE trip.tourism_type_id = $discover_type AND tourism_type.tourism_type_id = trip.tourism_type_id");
    $stmt->execute();
    $trips = $stmt->fetchAll(PDO::FETCH_ASSOC);    
        
   
    include '../trip/stereotype_search.php';
}


?>