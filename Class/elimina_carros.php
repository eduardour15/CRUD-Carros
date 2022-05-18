<?php
include "Conecta.php";
include "Carros.php";

if (isset($_POST["elimina"])) {
    $consulta_elimina = "DELETE FROM carros WHERE placa='$_POST[placa]' ";
    $comprueba = mysqli_query($conecta, $consulta_elimina);
    if ($comprueba) {
        header("Location: http://localhost/CRUD-Carros/index.php");
        die();
    } else {
        echo "<h1>NO SE HA PODIDO ELIMINAR EL CARRO</h1>";
    }
}
