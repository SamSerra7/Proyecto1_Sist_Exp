<?php
    if (!$_COOKIE["selected_idiom"]) {
    header("location:pag1.php");
    } 
    else if ($_COOKIE["selected_idiom"] == "es") {
    header("location:esp.php");
    } 
    else if ($_COOKIE["selected_idiom"] == "en") {
    header("location:ing.php");
    }