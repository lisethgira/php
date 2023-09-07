<?php
require_once "calcular.php";

$inst = new promedio(); //Creamos la instancia del objeto

$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$val3 = $_POST['val3'];
$nombre = $_POST['nombre'];

$inst->num1=$val1;
$inst->num2 = $val2;
$inst->num3 = $val3;
$inst->nombre = $nombre;
//$result = $inst->calProm();


echo $inst->calProm();

      //var_dump($result);

?>