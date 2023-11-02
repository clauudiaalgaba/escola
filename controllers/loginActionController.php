<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'config.php';

// Comprobar los campos proporcionados por el usuario
if(isset($_POST["email"]) && isset($_POST["password"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $db = conn();
    
    //SELECT amb bucle 
    $sql = $db->prepare("SELECT * FROM usuaris WHERE email = '$email' AND contrasenya = '$password';");
    $sql->execute();
    if ($sql->rowCount() > 0) {
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION["user"] = $row;
            if($row["tipus_usuari"] == "alumne"){
                $sql = $db->prepare("SELECT * FROM alumnes WHERE id = :id_alumne;");
                $sql->execute([':id_alumne'=>$row['id_alumne']]);
                while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                    $_SESSION["person"] = $row;
                    if($_COOKIE["idioma"] == "catalan"){
                        header("Location:?url=desktopCat");
                    }
                    else {
                        header("Location:?url=desktop");
                    }
                }
            }
            else if($row["tipus_usuari"] == "professor"){
                $sql = $db->prepare("SELECT * FROM professors WHERE id = :id_professor;");
                $sql->execute([':id_professor'=>$row['id_professor']]);
                while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                    $_SESSION["person"] = $row;
                    if($_COOKIE["idioma"] == "catalan"){
                        header("Location:?url=desktopCat");
                    }
                    else {
                        header("Location:?url=desktop");
                    }
                }
            }
        }
    }
    else {
        echo '<script>alert("Usuario o contraseña incorrectos.");window.location.assign("?url=login");</script>';
    }
}
else {
    echo '<script>alert("Tienes que rellenar los dos campos.");window.location.assign("?url=login");</script>';
}