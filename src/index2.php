<?php

include_once "Dulce.php";

include "Bollo.php";

$bollo1 = new Bollo(" Bollo clásico", 1, 3.5, "chocolate"); 
echo "<strong>" . $bollo1->nombre . "</strong>"; 
echo "<br>Precio: " . $bollo1->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $bollo1->getPrecioConIva() . " euros";
$bollo1->muestraResumen();


?>