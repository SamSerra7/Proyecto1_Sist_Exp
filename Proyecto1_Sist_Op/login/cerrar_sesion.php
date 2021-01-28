<?php 

include_once '../configuration/config.php';
session_start();


if(isset($_SESSION['admin_session'])){
    session_destroy();
    header('Location: '.'../index.php');
    
}else{
    echo 'No existe';
}
?>