<?php

class calculadora {

    var $oper1;
    var $oper2;
    var $res;

    function sumar($valor1,$valor2) {
        $this->oper1= $valor1 + $valor2;
        echo $this->oper1." "."<br>";

    }

    function multiplicar($valor1,$valor2) {
        $this->oper2= $valor1 * $valor2;
        echo $this->oper2." "."<br>";

    }

    function resultado(){
        $this->res= $this->oper1 + $this->oper2;
        echo $this->res;

    }
}
$inst1= new calculadora;
$inst1->sumar (3,3);
$inst1->multiplicar (5,6);
$inst1->resultado();


?>