<?php

use \util\LogFactory;
use Monolog\Logger;

include_once "Dulce.php";
include_once('../util/LogFactory.php');
include_once('../pruebaLog.php');

class Cliente
{

    public string $nombre;

    private int $numero;

    private $dulcesComprados = [];

    private int $numDulcesComprados = 0;

    private int $numPedidosEfectuados = 0;

    public function getNumero()
    {
        return $this->numero;
    }

    public function getnumDulcesComprados()
    {
        return $this->numDulcesComprados;
    }

    public function muestraResumen()
    {
        echo "Nombre: " . $this->nombre . ", Nº dulces comprados: " . $this->getnumDulcesComprados();
    }

    private Logger $log;
    public function __construct(string $nombre, int $numero, int $numPedidosEfectuados = 0)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->numPedidosEfectuados = $numPedidosEfectuados;
        $this->log = LogFactory::getLogger();
    }




    public function comprar(Dulce $d)
    {

        if ($d != null) {
            echo "<br>Dulce comprado correctamente: " . $d->getNumero();
            array_push($this->dulcesComprados, $d);
            $this->numDulcesComprados++;
            $this->numPedidosEfectuados++;


        }

    }

    public function valorar(Dulce $d, string $comentario)
    {

        if (in_array($d, $this->dulcesComprados)) {
            echo "Comentario sobre el dulce " . $d->nombre . ": " . $comentario;
        } else {
            $this->log->error("Error dulce" . $d->nombre . " no comprado por el cliente" . $this->nombre );
            throw new DulceNoCompradoException();

        }

    }
    public function listarPedidos(): void
    {
        echo "<br>El cliente tiene pedidos <b>" . $this->numDulcesComprados . "</b> dulces:";
        foreach ($this->dulcesComprados as $d) {
            echo "<br><b>-" . $d->nombre . "</b>";
        }
    }

}
?>