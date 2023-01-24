<?php

use PHPUnit\Framework\TestCase;


class TestPasteleria extends TestCase
{
    public function testIncluirCliente(){

        $pasteleria = new Pasteleria("Pastelería Reina Mercedes");
        $pasteleria->incluirBollo(" Bollo clásico", 1, 3, "chocolate");

        $this->assertSame($pasteleria->getProductos()[0]->getNumero(), 1);
    }

}