<?php
    setcookie("selected_idiom",$_GET["idioma"], time()+86400);
    header("location:ver_cookie.php");