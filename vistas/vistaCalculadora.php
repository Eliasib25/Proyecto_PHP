<?php

include "../controladores/controladorCalculadora.php|";

$controladorCalculadora = new ControladorCalculadora();

echo $controladorCalculadora->sumar(34,45);

?>