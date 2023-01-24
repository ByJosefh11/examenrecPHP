<?php

include "Chocolate.php";

$Chocolate1 = new Chocolate("Chocolate clásico", 1, 3.5, 3, 4.5); 
echo "<strong>" . $Chocolate1->nombre . "</strong>"; 
echo "<br>Precio: " . $Chocolate1->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $Chocolate1->getPrecioConIva() . " euros";
$Chocolate1->muestraResumen();

?>


