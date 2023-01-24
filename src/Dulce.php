<?php

include_once "Resumible.php";
include_once("../util/LogFactory.php");

//Al transformar dulce en una clase abstracta, lo que conseguimos es que no se puedan crear objetos de esta clase. Sino solo de las clases hijas.
abstract class Dulce implements Resumible{

    public string $nombre;
    protected int $numero;

    private float $precio;
    private static float  $IVA = 0.21;



    public function __construct(String $nombre, int $numero, float $precio){
        $this -> nombre = $nombre;
        $this -> numero = $numero;
        $this -> precio = $precio;
 
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getPrecioConIva()
    {
        return round ($this->precio + $this->precio * self::$IVA,2);
    }

    public function getNumero()
    {
        return $this->numero;
    }

    
    /* El método muestraResumen() tendrá que sobreescribirse
       si queremos que las clases hijas muestren información específica de la clase.
       En ese caso, no tendría sentido que este método no sea abstracto.*/

    abstract public function muestraResumen();
  
}
?>    
