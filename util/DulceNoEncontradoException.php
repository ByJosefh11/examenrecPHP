<?php

class DulceNoEncontradoException extends PasteleriaException{

    public function __construct(){

        parent::__construct("Error. Dulce no encontrado");
    }
}

?>