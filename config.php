<?php 
function conn(){
    try{
        //Crear connexio
        $db = new PDO('mysql:host=localhost;dbname=escola;charset=utf8mb4', 'escola', 'escola');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // com extreiem dades (en array associatiu)
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
    } catch (PDOException $e){
        echo $e->getMessage();
    }
}

?>