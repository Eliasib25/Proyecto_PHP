<?php

$contenidoArchivo = file_get_contents("../recursos/test.json");

$datosjson = json_decode($contenidoArchivo,true);

echo $datosjson["fechanacimiento"];

?>