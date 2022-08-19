<?php

$numero = 5;
$numero2 = 10;
function esPrimoRelativo ($numeroUno, $numeroDos) {

$esPrimoRelativo = true;

if($numeroUno % $numeroDos == 0 || $numeroDos%$numeroUno == 0)
$esPrimoRelativo = false;

else

for ($i=2; $i <$numeroUno && $esPrimoRelativo; $i++) { 
    if ($numeroUno % $i == 0 && $numeroDos % $i == 0)
    $esPrimoRelativo = false;
   
}

return $esPrimoRelativo;

}

echo var_export(esPrimoRelativo($numero,$numero2));
?>