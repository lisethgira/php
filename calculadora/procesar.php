<?php 

$operacion = $_POST['operacion'];

if(isset($_POST['valor1']) && !empty($_POST['valor1'])&&
isset($_POST['valor2']) && !empty($_POST['valor2'])&&
isset($_POST['valor3']) && !empty($_POST['valor3'])){
    switch ($_POST['operacion']) {
        case 'suma':
            $result= $_POST['valor1']+$_POST['valor2']+$_POST['valor3'];
            echo "<h4>La suma de los valores es: ".$result."</h4>";
            break;
        case 'resta':
            $result= $_POST['valor1']-$_POST['valor2']-$_POST['valor3'];
            echo "<h4>La resta de los valores es: ".$result."</h4>";
            break;
        case 'multiplicación':
            $result= $_POST['valor1']*$_POST['valor2']*$_POST['valor3'];
            echo "<h4>El producto de los valores es: ".$result."</h4>";
            break;
        case 'división':
            if($_POST['valor2']==0 || $_POST['valor3']==0){
            echo "<h4>No se puede dividir entre cero, por favor ingrese un valor diferente.</h4>";
            }else{
            $result= $_POST['valor1']/$_POST['valor2']/$_POST['valor3'];
            echo "<h4>El cociente de los valores es: ".$result."</h4>";}
            break;
            default:
            echo "No se puede realizar la operación";
            break;
            }
};
?>