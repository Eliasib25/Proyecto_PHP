<?php

include "../controladores/controladorCalculadora.php";

$controladorCalculadora = new ControladorCalculadora();

$operadorUno = $_POST['operadorUno'];
$operadorDos = $_POST['operadorDos'];
$operacion = $_POST['operacion'];

echo $controladorCalculadora->sumar(34,45);

switch ($operacion) {
    case '+':
        $resultado = $controladorCalculadora->sumar($operadorUno, $operadorDos);
        break;
    case "-":
    $resultado = $controladorCalculadora->restar($operadorUno, $operadorDos);
    case '*':
    $resultado = $controladorCalculadora->multiplicar($operadorUno, $operadorDos);
    case '/':
    $resultado = $controladorCalculadora->division($operadorUno, $operadorDos);
    default:
        $resultado = 'Error';
        break;
}

echo 'El resultado de la multiplicación es: '.$resultado;
?>