<?php

class clase1{
    public $result;

    public function elMetodo($V1, $V2){
        $this->result = $V1 + $V2;
        return $this->result;
    }
}

$obj = new clase1();
echo "resultado:".$obj->elMetodo(4,5);
?>