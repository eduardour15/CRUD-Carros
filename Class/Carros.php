<?php
//(id, placa, modelo, marca, descripción)
class Carro
{
    public $marca;
    public $id;
    public $placa;
    public $descripción;
    public $modelo;

    public function __construct($arg_marca = " ", $arg_id = " ", $arg_placa = " ", $arg_descripcion = " ", $arg_modelo = " ")
    {
        $this->marca = $arg_marca;
        $this->id = $arg_id;
        $this->placa = $arg_placa;
        $this->descripcion = $arg_descripcion;
        $this->modelo = $arg_modelo;
    }
    public function imprimir()
    {
        echo "Marca: $this->marca<br/>";
        echo "ID: $this->id <br/>";
        echo "PLACA: $this->placa <br/>";
        echo "Descripcion: $this->descripcion <br/>";;
        echo "Modelo: $this->modelo <br/>";
    }
    public function __destruct()
    {

    }
}
