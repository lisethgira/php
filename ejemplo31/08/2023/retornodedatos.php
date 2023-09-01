<?php 
class muestraDatos{

    public  function retornarunstring($edad){
        if ($edad > 18 ){
            echo "es mayor de edad";
        }  else
        {
            "es menor de edad";
        }      
    }

    public function retornarunEntero($valor){
        if ($valor > 0){
            return 1;
        }else{
            return 0;
        }
    }


    public function retornarunArreglodeDatos($ciclosArreglo){
        $datos = array();
        for($i=0; $i < $ciclosArreglo ; $i++){
            $datos[$i] = $i;
            echo $datos[$i];
        }
    }

    public function retornarunJson(){
     $arr = array(
        "hdd" => 500,
        "pantalla" => 21,
        "ram" => 8,
     );
     return json_encode($arr);
    }
}


$cadena = new muestraDatos();
echo $cadana -> retornarunstring(11);
echo "<br>";
echo $cadena -> retornarunEntero(-5);
echo "<br>";
echo $cadena -> retornarunArreglodeDatos(5);
echo "<br>";
echo $cadena -> retornarunJson();

?>