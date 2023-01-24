<?php
include_once "Dulce.php";
class Bollo extends Dulce {

private String $relleno;

public function getrelleno()
{
    return $this->relleno;
}

public function __construct (String $nombre, int $numero, float $precio, String $relleno){
    parent::__construct($nombre, $numero, $precio);
    $this -> relleno = $relleno;
    
}

public function muestraResumen(){
    echo "<br><u>Resumen</u><br>Nombre: <i>".$this->nombre."</i><br>Identificador: <i>".$this->numero."</i><br>Precio con IVA:  <i>".$this->getPrecioConIva()." €</i><br>Relleno: <i>".$this->relleno."</i>";
}

}

?>