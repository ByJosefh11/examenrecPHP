<?php

include "Tarta.php";

$Tarta1 = new Tarta("Tarta clásica", 1, 3.5, array ("chocolate", "vainilla"), 2, 5); 
echo "<strong>" . $Tarta1->nombre . "</strong>"; 
echo "<br>Precio: " . $Tarta1->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $Tarta1->getPrecioConIva() . " euros";
$Tarta1->muestraResumen();

?>


