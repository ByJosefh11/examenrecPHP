<?php

class PasteleriaException extends Exception{

    public function __construct(String $errorHijo){

        parent::__construct("PasteleriaException.". $errorHijo);
    }
}


?>