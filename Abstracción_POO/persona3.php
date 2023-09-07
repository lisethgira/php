 <?php
  class persona3{ //Clase padre
      public $nombre;
      public $apellido;
      public $edad;
      public $direccion;  	
  
  function DatosPersonas($nombre,$apellido,$edad,$direccion){
   $this->nombre = $nombre;
   $this->apellido = $apellido;
   $this->edad = $edad;
   $this->direccion = $direccion;
  }


  }

  $obj1 = new persona3();
 
?>