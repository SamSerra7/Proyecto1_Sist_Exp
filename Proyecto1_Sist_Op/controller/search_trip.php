<?php

if (isset($_POST['submit'])) {
    search();
}


function search()
{
    include_once '../configuration/config.php';


    $sql = "SELECT * FROM trip, tourism_type WHERE tourism_type.tourism_type_id = trip.tourism_type_id";

    //creo metodos para realizar el calculo de distancia en registros que sean string
    function accessToNum($access){
        if($access == 'Fácil'){
            return 1;
        }else if ($access == 'Regular'){
            return 2;
        }else if ($access == 'Difícil'){
            return 3;
        }
    }

    //si los parametros estan presentes en el post, como criterios, seran concatenados a la consulta sql
    //ademas los voy agregando en el arreglo que utilizare mas adelante para el calculo euclidiano
    $sampleArray = array();

    if (!empty($_POST['type'])) {
        $tourism_type = $_POST['type'];
        $sql .= " AND tourism_type.tourism_type_id = $tourism_type";

        //agrego al arreglo
        $tempArray = array($tourism_type);
        $sampleArray = array_merge($sampleArray, $tempArray);
    }

    if (!empty($_POST['duration'])) {
        $staying = $_POST['duration'];
        $sql .= " AND trip.staying = $staying";

        //agrego al arreglo
        $tempArray = array($staying);
        $sampleArray = array_merge($sampleArray, $tempArray);
    }

    if (!empty($_POST['access'])) {
        $access = $_POST['access'];
        $sql .= " AND trip.access = '$access'";

        //agrego al arreglo
        $tempArray = array(accessToNum($access));
        $sampleArray = array_merge($sampleArray, $tempArray);
    }

    if (!empty($_POST['internet'])) {
        $internet = $_POST['internet'];
        $sql .= " AND trip.internet = $internet";

        //agrego al arreglo
        $tempArray = array($internet);
        $sampleArray = array_merge($sampleArray, $tempArray);
    }

    if (!empty($_POST['security'])) {
        $security = $_POST['security'];
        $sql .= " AND trip.security =$security";

        //agrego al arreglo
        $tempArray = array($security);
        $sampleArray = array_merge($sampleArray, $tempArray);
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $trips = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Teniendo los registros que cumplen con los criterios dados por el usuario, ahora por medio del calculo de distancia
    //le ofrezco destinos los cuales pertenezcan a la provincia con menos distancia en relación a los criterios dados

    //creamos un arreglo formado de estos 5 criterios del usuario
    //$sampleArray = array(
        //$tourism_type, $staying, accessToNum($access), $internet, $security
    //);


    //agrego el metodo de calculo de distancia euclidiana
    function dist($arrayA, $arrayB)
    {
        //la variable sum se encarga de acumular la sumatoria de la diferencia
        //entre los nodos comparados
        $sum = 0;
        //este for recorre la cantidad de nodos que hayan en los arreglos brindados, osea
        //sus atributos o columnas a restar
        for ($i = 0; $i < count($arrayA); $i++) {
            //con pow elevamos al cuadrado
            $sum += pow($arrayA[$i] - $arrayB[$i], 2);
        }
        //utilizando la funcion sqrt extraigo la raiz cuadrada de la sumatoria
        $distancia = sqrt($sum);

        //retorno el valor de la distancia
        return $distancia;
    }

    //asignamos variable para guardar el mejor valor y compararlo en cada iteracion
    $bestSample = null;
    //en esta variable guardaremos el estilo del registro que tenga una menor distancia euclidiana con los datos del usuario actual
    $sampleUbicacion = null;
    //con esta variable nos aseguramos de que solo el primer valor que retorne la funcion dist() sea asignada automaticamente
    //para que bestSample no tenga un valor de nulo
    $primerContador = 0;
    //Creamos un ciclo para comparar los datos del usuario actual con los guardados en la base de datos
    foreach ($trips as $item) {
        $baseArray = array(
            $item['tourism_type_id'],
            $item['staying'],
            accessToNum($item['access']),
            $item['internet'],
            $item['security'],
            $item['direction']

        );

        $distanciaEuclidiana = dist($sampleArray, $baseArray);
        //nos aseguramos de tener la mejor muestra, en menor es mejor
        if ($distanciaEuclidiana <= $bestSample || $primerContador == 0) {
            $bestSample = $distanciaEuclidiana;
            $sampleUbicacion = $baseArray[5]; //obtiene el atributo ubicacion en el indice 5, que seria el lugar del destino que necesito para recomendar
            $primerContador++;
        }
    }


    


    

    //una vez que tengo el lugar con menor distancia, me traigo los registros que lo compartan
    $sqlUbicacion = "SELECT * FROM trip, tourism_type WHERE tourism_type.tourism_type_id = trip.tourism_type_id AND direction = '$sampleUbicacion'";

    $stmt2 = $pdo->prepare($sqlUbicacion);
    $stmt2->execute();
    $recomended = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    $_POST = array();
    include '../trip/search_trip.php';
}
