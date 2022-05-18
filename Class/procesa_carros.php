<?php
include "Carros.php";
include "Conecta.php";

if (isset($_POST["enviar"])) {
   
        $almc=new Carro($_POST['marca'],$_POST['id'],$_POST['placa'],$_POST['descrp'],$_POST['modelo']);
        
        $inserta = "INSERT INTO carros VALUES(
            '$almc->marca',
            '$almc->id',
            '$almc->placa',
            '$almc->descripcion',
            '$almc->modelo'
            )";
        $query = mysqli_query($conecta, $inserta);
 
    header('Location: http://localhost/CRUD-Carros/index.php');
    die();
} else {
    echo "<h1>ERROR EN PROCESA CARROS</h1>";
}
