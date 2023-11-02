<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'config.php';

$db = conn();

if($_SESSION["user"]["tipus_usuari"] == "alumne"){
    
    if(isset($_POST["nom"]) && isset($_POST["cognom"]) && isset($_POST["email"]) && isset($_POST["telefon"]) && isset($_POST["data_nac"]) && isset($_POST["direccio"])){

        $nom = $_POST["nom"];
        $cognoms = $_POST["cognom"];
        $email = $_POST["email"];
        $telefon = $_POST["telefon"];
        $data_nac = $_POST["data_nac"];
        $direccio = $_POST["direccio"];

        // Realiza un EDIT
        $sql = $db->prepare("UPDATE alumnes SET nom = '$nom', cognoms = '$cognoms', email = '$email', telefon = '$telefon', data_nac = '$data_nac', direccio = '$direccio' WHERE id = ".$_SESSION['person']['id'].";");
        $sql->execute();

        // Verifica si la consulta fue exitosa
        if ($sql == true) {
            header("Location:?url=desktop");
        }
        else {
            header("Location:?url=edit");
        }
    }
}
else if($_SESSION["user"]["tipus_usuari"] == "professor"){
    
    if(isset($_POST["nom"]) && isset($_POST["cognom"]) && isset($_POST["email"]) && isset($_POST["especialitat"])){

        $nom = $_POST["nom"];
        $cognoms = $_POST["cognom"];
        $email = $_POST["email"];
        $especialitat = $_POST["especialitat"];

        // Realiza un EDIT
        $sql = $db->prepare("UPDATE professors SET nom = '$nom', cognoms = '$cognoms', email = '$email', especialitat = '$especialitat' WHERE id = ".$_SESSION['person']['id'].";");
        $sql->execute();

        // Verifica si la consulta fue exitosa
        if ($sql == true) {
           header("Location:?url=desktop");
        }
        else {
            header("Location:?url=edit");
        }
    }
    else {
        header("Location:?url=edit");
    }
}
else {
    header("Location:?url=edit");
}