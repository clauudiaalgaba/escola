<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'config.php';

if(isset($_POST["nom"]) && isset($_POST["cognom"]) && isset($_POST["email"]) && isset($_POST["especialitat"]) && isset($_POST["passwd"])){

    $nom = $_POST["nom"];
    $cognoms = $_POST["cognom"];
    $email = $_POST["email"];
    $especialitat = $_POST["especialitat"];
    $passwd = $_POST["passwd"];

    // Establecer conexión con la BBDD
    $db = conn();

    $sql = $db->prepare("SELECT MAX(id) AS id FROM professors;");
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
    $sql = $db->prepare("INSERT INTO professors (id, nom, cognoms, email, especialitat) VALUES ($lastID, '$nom', '$cognoms', '$email', '$especialitat');");
    
    if($sql->execute() == true){
        $sql = $db->prepare("INSERT INTO usuaris (email, contrasenya, tipus_usuari, id_professor) VALUES ('$email', '$passwd', 'professor', $lastID);");
        if ($sql->execute() == true) {
            $sql = $db->prepare("SELECT * FROM professors WHERE id = $lastID");
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
            echo '<script>alert("No se ha podido crear el usuario.");window.location.assign("?url=registerProfessor");</script>';
        }
    }
    else {
        echo '<script>alert("No se ha podido crear el professor.");window.location.assign("?url=registerProfessor");</script>';
    }
}
else {
    echo '<script>alert("Tienes que rellenar todos los campos.");window.location.assign("?url=registerProfessor");</script>';
}