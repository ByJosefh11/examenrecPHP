<?php

include_once "Dulce.php";
$Dulce1 = new Dulce("DORAYAKI", 22, 3); 
echo "<strong>" . $Dulce1->nombre . "</strong>"; 
echo "<br>Precio: " . $Dulce1->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $Dulce1->getPrecioConIVA() . " euros";
$Dulce1->muestraResumen();

//Este bloque solo se podrá ejecutar si la calse soporte no es abstracta
?>