<?php 

include_once '../app/config.php';
session_start();


if(isset($_SESSION['admin_session'])){
    session_destroy();
    header("Location: ".$URL);
    
}else{
    echo 'No existe';
}
?>