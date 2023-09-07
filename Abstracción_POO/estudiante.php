<?php

 /**
 * 
 */
 include('persona3.php');
class estudiante extends persona3
{
	public $asignatura;
	public $cod_est;

	public function DatosEstudiante($asignatura,$cod_est){
    $this->asignatura = $asignatura;
    $this->cod_est = $cod_est;
	}
}


$obj = new estudiante();

echo $obj->DatosPersonas("harold","zapata",29,"Manizales");
echo $obj->DatosEstudiante("Programacion",101010);

echo "<h3>Datos del estudiante</h3>";
echo "Nombre: ".$obj->nombre."<br>";
echo "Apellido:".$obj->apellido."<br>";
echo "Edad: ".$obj->edad."<br>";
echo "Direccion: ".$obj->direccion."<br>";
echo "Asignatura: ".$obj->asignatura."<br>";
echo "Codigo: ".$obj->cod_est;

?>