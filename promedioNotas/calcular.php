<?php

class promedio{
	public $num1;
	public $num2;
	public $num3;
	public $nombre;	
	public $definitiva;


   /*
    Un constructor sirve para inicializar el objeto y establecer sus propiedades y valores predeterminados.
   */
	public function __construct(){}//El constructor vacio Simplemente inicializa los miembros de datos de la clase //con sus valores predeterminados.

	public function calProm(){

		if (is_numeric($this->num1) && is_numeric($this->num2) && is_numeric($this->num3)) {
			if (is_numeric($this->nombre)){
				return "Ingrese solo letras";
			}
			$definitiva = ($this->num1 + $this->num2 + $this->num3)/3;
			
			return $this->nombre." Su promedio es: ".$definitiva;
		} else{
			return "Ingrese solo numero";
		}


	}
}

?>