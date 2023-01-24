<?php

require '../vendor/autoload.php'; 
//Includes: Faltan

//instanciamos un par de objetos cliente

include "Cliente.php";
include "Chocolate.php";
include "Bollo.php";
include "Tarta.php";

$cliente1 = new Cliente("Bruce Wayne", 23);
$cliente2 = new Cliente("Clark Kent", 33);

//mostramos el número de cada cliente creado 
echo "<br>El identificador del cliente 1 es: " . $cliente1->getNumero();
echo "<br>El identificador del cliente 2 es: " . $cliente2->getNumero();

//instancio algunos dulces 
$Dulce1 = new Bollo(" Bollo clásico", 1, 3.5, "chocolate"); 
$Dulce2 = new Chocolate("Chocolate clásico",2, 3.5, 3, 4.5); 
$Dulce3 = new Tarta("Tarta clásica", 3, 3.5, array ("chocolate", "vainilla"), 2, 5); 

//compro algunos dulces
$cliente1->comprar($Dulce1);
$cliente1->comprar($Dulce2);
$cliente1->comprar($Dulce3);

//voy a intentar comprar de nuevo un dulce que ya tiene comprado
$cliente1->comprar($Dulce1);

//este dulce no lo tiene comprado
$cliente1->valorar(new Tarta("Tarta de zanahoria", 4, 3.4, array("Zanahoria", "Crema"),1, 4), "Esta rico");

//listo los elementos comprados
$cliente1->listarPedidos();

?>
