<?php
include_once "Dulce.php";

class Tarta extends Dulce
{

    private $rellenos = [];

    private int $numPisos;

    private int $minNumComensales;

    private int $maxNumComensales;


    public function __construct(string $nombre, int $numero, float $precio, array $rellenos, int $minNumComensales, int $maxNumComensales)
    {
        parent::__construct($nombre, $numero, $precio);
        $this->rellenos = $rellenos;
        $this->numPisos = count($rellenos);
        $this->minNumComensales = $minNumComensales;
        $this->maxNumComensales = $maxNumComensales;
    }

    public function getNumPisos()
    {
        return $this->numPisos;
    }

    public function setRellenos()
    {
        return $this->rellenos;

    }

    public function muestraComensalesPosibles()
    {
        if ($this->minNumComensales == $this->maxNumComensales) {
            if ($this->minNumComensales == 1) {
                $resultado = "Para un comensal";
            } else {
                $resultado = "Para " . $this->minNumComensales . " comensales";
            }
        } else {
            $resultado = "De " . $this->minNumComensales . " a " . $this->maxNumComensales . " comensales";
        }
        return $resultado;
    }

    public function getRellenosStr()
    {
        $resultado = $this->rellenos[0];
        for ($i = 1; $i < count($this->rellenos); $i++) {
            $resultado .= ", " . $this->rellenos[$i];
        }
        return $resultado;
    }

    public function muestraResumen(){
        echo "<br><u>Resumen</u><br>Nombre: <i>" . $this->nombre . "</i><br>Identificador: <i>" . $this->numero . "</i><br>Precio con IVA:  <i>" . $this->getPrecioConIva() . " €</i><br>Rellenos: <i>" . $this->getrellenosStr() . "</i><br>Numero de comensales: <i>" . $this->muestraComensalesPosibles() . "</i>";
    }
}
?>

