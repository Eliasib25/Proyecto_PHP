<?php

$arrayNumeros = array(45,32,47,2448);
$tamañoCicloUno = count($arrayNumeros)-1;
$numero = 5;
$numero2 = 10;

for ($i=0;  $i <$tamañoCicloUno ; $i++) { 
    for ($j=$i+1; $j<count($arrayNumeros) ; $j++) { 
        $numeroUno = $arrayNumeros[$i];
        $numeroDos = $arrayNumeros[$j]; 

        if(esPrimoRelativo($numeroUno,$numeroDos))
        echo $numeroUno.' y '.$numeroDos.' son primos relativos <br>';

    }
}
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