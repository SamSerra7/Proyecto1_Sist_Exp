<?php
include_once '../app/config.php';
session_start();

$admin = $_POST['admin'];
$pass = $_POST['pass'];

$dbName='';
$dbPass='';

$query = $pdo->prepare("SELECT * FROM `users` WHERE `username` = '$admin' AND `pass` = '$pass'");
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($users as $user){
    $dbName = $user['username'];
    $dbPass = $user['pass'];

}

if(($admin == $dbName) AND ($pass == $dbPass) AND ($admin != "") AND ($pass != "")){
    ?>
        <div class="alert alert-success" role="alert">
            Usuario correcto
        </div>
        <script>location.href = "../admin/principal.php"</script>
    <?php
    $_SESSION['admin_session'] = $admin;
}else{
    ?>
        <div class="alert alert-danger" role="alert">
            Usuario no registrado
        </div>
    <?php
}

?>