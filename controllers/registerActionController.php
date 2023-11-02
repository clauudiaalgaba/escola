<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require 'config.php';

// Comprobar los campos proporcionados por el usuario
if(isset($_POST["tipo"])){
    $tipo = $_POST["tipo"];
    if($tipo == "alumne"){
        header("Location:?url=registerAlumne");
    }
    else if($tipo == "professor"){
        header("Location:?url=registerProfessor");
    }
}
else {
    header("Location:?url=register");
}