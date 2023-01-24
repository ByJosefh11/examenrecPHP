<?php
include_once "Dulce.php";
class Chocolate extends Dulce{

    private int $porcentajeCacao;

    private int $peso;

    public function getporcentajeCacao(){
        return $this->porcentajeCacao;
    }

    public function getpeso(){
        return $this->peso;
    }
    
    public function __construct (String $nombre, int $numero, float $precio, int $porcentajeCacao, float $peso){
        parent::__construct($nombre, $numero, $precio);
        $this -> porcentajeCacao = $porcentajeCacao;
        $this -> peso = $peso;
    }


    public function muestraResumen(){
        echo "<br><u>Resumen</u><br>Nombre: <i>".$this->nombre."</i><br>Identificador: <i>".$this->numero."</i><br>Precio con IVA: <i>".$this->getPrecioConIva()." €</i><br>Porcentaje de cacao: <i>".$this->porcentajeCacao."</i><br>Peso: <i>".$this->peso."</i>";
    }
	
}
?>

