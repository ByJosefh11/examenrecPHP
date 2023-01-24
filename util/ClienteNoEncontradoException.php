<?php

class ClienteNoEncontradoException extends PasteleriaException{

    public function __construct(){

        parent::__construct("Error. Cliente no encontrado.");
    }
}


?>