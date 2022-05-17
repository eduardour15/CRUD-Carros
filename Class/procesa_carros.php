<?php
include_once("Class/Carros.php");
include_once("Class/Conecta.php");

if (isset($_POST["enviar"])) {
    try {
        $inserta = "INSERT INTO datos VALUES(
            'aguacate',
            'sas144',
            '1111',
            'asasasas',
            'asasasas'
            )";
        $query = mysqli_query($conecta, $inserta);
    } catch (Exception $e) {
        echo "Error enviar" ;
    }

    header('Location: http://localhost/CRUD-Carros/index.php');
    die();
} else {
    echo "<h1>ERROR EN PROCESA CARROS</h1>";
}
