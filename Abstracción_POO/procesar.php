<?php

require_once("claseCalculo.php");
$calcular = new calculadora();
$val1 = $_GET['val1'];
$val2 = $_GET['val2'];
$opcion = $_GET['opcion'];

echo $calcular->calcularDatos($val1,$val2,$opcion);

?>