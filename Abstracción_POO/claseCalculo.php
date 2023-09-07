<?php

class calculadora
{
	public function calcularDatos($val1, $val2, $opcion)
	{
		switch ($opcion) {
			case 'suma':
				return $val1 + $val2;
				break;
			case 'resta':
				return $val1 - $val2;
				break;
			case 'multiplicacion':
				return	$val1 * $val2;
				break;
			case 'division':
				if ($val2 != 0) {
					return  $val1 / $val2;
				} else {
					echo "La Division por cero no esta definida";
				}

				break;
			default:
				echo "No se puede realizar la operacion";
				break;
		}
	}
}
