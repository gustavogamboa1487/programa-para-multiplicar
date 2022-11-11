<?php

class calculadora {

    var $oper1;
    var $oper2;
    var $res;

    function sumar($valor1,$valor2) {
        $this->oper1= $valor1 + $valor2;
        echo "su suma es" . " ".$this->oper1." "."<br>";

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
#$inst1->sumar ($valor1=$_POST["valor1"],$valor2=$_POST["valor2"]);
$inst1->multiplicar ($valor1=$_POST["valor1"],$valor2=$_POST["valor2"]);
#$inst1->resultado();


?>
<br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./formulario.php"> <input type="button" value="volver"> </a> 
</body>
</html>