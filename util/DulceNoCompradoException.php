<?php

class DulceNoCompradoException extends PasteleriaException{

    public function __construct(){

        parent::__construct("Error. Dulce no comprado");
    }
}

?>