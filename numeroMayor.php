<?php 

$numeroUno=21;
$numeroDos=22;
$numeroTres=24;

if ($numeroUno >= $numeroDos && $numeroUno >= $numeroTres)
echo "<h1>El número mayor es:".$numeroUno."</h1>";

elseif ($numeroDos>= $numeroUno && $numeroDos>= $numeroTres) {
	echo "<h1>El número mayor es:".$numeroDos."</h1>";

}else {
	echo "<h1>El número mayor es:".$numeroTres."</h1>";
}

 ?>