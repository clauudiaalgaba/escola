<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'config.php';

if(isset($_POST["nom"]) && isset($_POST["cognom"]) && isset($_POST["email"]) && isset($_POST["passwd"]) && isset($_POST["telefon"]) && isset($_POST["data_nac"]) && isset($_POST["direccio"])){

    $nom = $_POST["nom"];
    $cognoms = $_POST["cognom"];
    $email = $_POST["email"];
    $passwd = $_POST["passwd"];
    $telefon = $_POST["telefon"];
    $data_nac = $_POST["data_nac"];
    $direccio = $_POST["direccio"];

    // Establecer conexión con la BBDD
    $db = conn();

    $sql = $db->prepare("SELECT MAX(id) AS id FROM alumnes;");
    $sql->execute();
    if ($sql->rowCount() > 0) {
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $lastID = $row["id"]+1;
        }
    }
    else {
        $lastID = 1;
    }

    // Realiza un INSERT
    $sql = $db->prepare("INSERT INTO alumnes (id, nom, cognoms, email, telefon, data_nac, direccio) VALUES ($lastID, '$nom', '$cognoms', '$email', '$telefon', '$data_nac', '$direccio');");
    
    if($sql->execute() == true){
        $sql = $db->prepare("INSERT INTO usuaris (email, contrasenya, tipus_usuari, id_alumne) VALUES ('$email', '$passwd', 'alumne', $lastID);");
        if ($sql->execute() == true) {
            $sql = $db->prepare("SELECT * FROM alumnes WHERE id = $lastID");
            $sql->execute();
            if ($sql->rowCount() > 0) {
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
        else {
            echo '<script>alert("No se ha podido crear el usuario.");window.location.assign("?url=registerAlumne");</script>';
        }
    }
    else {
        echo '<script>alert("No se ha podido crear el alumno.");window.location.assign("?url=registerAlumne");</script>';
    }
}
else {
    echo '<script>alert("Tienes que rellenar todos los campos.");window.location.assign("?url=registerAlumne");</script>';
}