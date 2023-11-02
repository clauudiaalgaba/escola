<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'config.php';

// Comprobar los campos proporcionados por el usuario
if(isset($_POST["tema"]) && isset($_POST["idioma"])){
    setcookie("tema", $_POST["tema"]);
    setcookie("idioma", $_POST["idioma"]);
    
    if($_POST["idioma"] == "catalan"){
        header("Location:?url=desktopCat");
    }
    else {
        header("Location:?url=desktop");
    }
}
else {
    echo '<script>alert("Tienes que rellenar los dos campos.");window.location.assign("?url=config");</script>';
}