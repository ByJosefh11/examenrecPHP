<?php

include "Chocolate.php";

$Chocolate1 = new Chocolate("Chocolate clásico", 1, 3.5, 3, 4.5); 
echo "<strong>" . $Chocolate1->nombre . "</strong>"; 
echo "<br>Precio: " . $chocolate1->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $chocolate1->getPrecioConIva() . " euros";
$chocolate1->muestraResumen();

?>


