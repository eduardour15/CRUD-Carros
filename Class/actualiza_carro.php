<?php
include "Conecta.php";
include "Carros.php";
if (isset($_POST["edita"])) {
    $car_temporary = new Carro();
    $car_temporary->marca = $_POST["marca"];
    $car_temporary->modelo = $_POST["modelo"];
    $car_temporary->descripcion = $_POST["descrp"];
    $car_temporary->id = $_POST["id"];
    $car_temporary->placa = $_POST["placa"];

    $consulta_actualiza = "UPDATE carros SET
                        marca='$car_temporary->marca', 
                        id='$car_temporary->id',
                        placa='$car_temporary->placa',
                        descripcion='$car_temporary->descripcion',
                        modelo= '$car_temporary->modelo'                        
                        WHERE placa='$_POST[placa]' ";

    $comprueba = mysqli_query($conecta, $consulta_actualiza);
    if ($comprueba) {
        header("Location: http://localhost/CRUD-Carros/index.php");
        die();
    } else {
        echo "<h1>HUBO UN PROBLEMA EN LA ACTUALIZACIÓN</h1>";
    }
}
