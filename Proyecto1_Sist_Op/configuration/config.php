<?php 

define('SERVER','163.178.107.2');
define('USER','labsturrialba');
define('PASSWORD','Saucr.2191');
define('DB','find_trip_if7103');

$server = "mysql:dbname=".DB."; host=".SERVER;

try{
    $pdo = new PDO($server, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
}catch(PDOException $e){
    echo "<script>alert('Error de conexión a la base de datos');</script>";
}

$URL = 'http://localhost:3000';
    
?> 