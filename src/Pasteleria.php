<?php

use Monolog\Logger;
use PgSql\Lob;
use util\LogFactory;


include_once('../pruebaLog.php');
include_once "Cliente.php";
include_once "Dulce.php";
include_once "Chocolate.php";
include_once "Bollo.php";
include_once "Tarta.php";


class Pasteleria{

    private String $nombre;
    private $productos = [];

    private int $numProductos = 0;

    private $clientes= [];

    private int $numClientes = 0;


    private Logger $log;

    public function __construct(String $nombre){
        $this->nombre = $nombre;
        $this->log = LogFactory::getLogger();
    }
    
    /**
     * getNombre
     *
     * @return string
     */
    public function getNombre(){

        return $this->nombre;
    }
    
    /**
     * getProductos
     *
     * @return array
     */
    public function getProductos(){

        return $this->productos;
    }    
    /**
     * incluirProducto
     *
     * @param  mixed $dulce
     * @return void
     */
    private function incluirProducto(Dulce $dulce){
     
            array_push($this->productos, $dulce);
            $this->numProductos++;
       
    }
    
    /**
     * incluirChocolate
     *
     * @param  mixed $nombre
     * @param  mixed $precio
     * @param  mixed $numero
     * @param  mixed $porcentajeCacao
     * @param  mixed $peso
     * @return void
     */
    public function incluirChocolate(String $nombre, float $precio, int $numero, int $porcentajeCacao, float $peso) {
        $chocolate = new Chocolate($nombre, $precio, $numero, $porcentajeCacao, $peso);
        $this->incluirProducto($chocolate);
        $this->numProductos++;
    }
    
    /**
     * incluirBollo
     *
     * @param  mixed $nombre
     * @param  mixed $precio
     * @param  mixed $numero
     * @param  mixed $relleno
     * @return void
     */
    public function incluirBollo(String $nombre, float $precio, int $numero, String $relleno) {
        $bollo = new Bollo($nombre, $precio, $numero, $relleno);
        $this->incluirProducto($bollo);
        $this->numProductos++;
    }
    
    /**
     * incluirTarta
     *
     * @param  mixed $nombre
     * @param  mixed $precio
     * @param  mixed $numero
     * @param  mixed $rellenos
     * @param  mixed $maxNumComensales
     * @param  mixed $minNumComensales
     * @return void
     */
    public function incluirTarta(String $nombre, float $precio, int $numero, array $rellenos, int $maxNumComensales, int $minNumComensales) {
        $tarta = new Tarta($nombre, $precio, $numero, $rellenos, $maxNumComensales, $minNumComensales);
        $this->incluirProducto($tarta);
        $this->numProductos++;
    }
    
    /**
     * incluirCliente
     *
     * @param  string $nombre
     * @param  int $numero
     * @return void
     */
    public function incluirCliente(String $nombre, int $numero) {
        $cliente = new Cliente($nombre, $numero);
        array_push($this->clientes, $cliente);
        $this->numClientes++;
    }
    
    /**
     * listarProductos
     *
     * @return void
     */
    public function listarProductos() {
        $out="<h3>Lista de productos</h3><ul>";
        foreach($this->productos as $p)
            $out.="<li>".$p->nombre."</li>";
        $out.="</ul>";
        echo $out;
    }
    
    /**
     * listarclientes
     *
     * @return void
     */
    public function listarclientes() {
        $out="<h3>Lista de clientes</h3><ul>";
        foreach($this->clientes as $s)
            $out.="<li>".$s->nombre."</li>";
        $out.="</ul>";
        echo $out;
    }
    
    /**
     * comprarClienteProducto
     *
     * @param  mixed $numeroCliente
     * @param  mixed $numeroDulce
     * @return void
     */
    public function comprarClienteProducto(int $numeroCliente, int $numeroDulce) {
        $clienteSeleccionado=null;
        $dulceSeleccionado=null;
        foreach($this->clientes as $cliente){
            if($cliente->getNumero() == $numeroCliente){
                $clienteSeleccionado = $cliente;
            }
        }
        foreach($this->productos as $producto){
            if($producto->getNumero() == $numeroDulce){
                $dulceSeleccionado = $producto;
            }
        }

        try {
            if($clienteSeleccionado==null){
                $this->log->error("Error el cliente" . $numeroCliente . "no está incluido");
                throw new ClienteNoEncontradoException();
            }else{
                if($dulceSeleccionado==null){
                    $this->log->error("Error el dulce" . $numeroDulce . "no está en el catálogo");
                    throw new DulceNoEncontradoException();
                }else{
                    $clienteSeleccionado->comprar($dulceSeleccionado);
                }
            }
        } catch (\PasteleriaException $error) {
            echo ($error->getMessage());
        }
    }
}

?>