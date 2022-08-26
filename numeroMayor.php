<?php 
$numeroUno = $_GET['numeroUno'];
$numeroDos = $_GET['numeroDos'];
$numeroTres = $_GET['numeroTres'];

if ($numeroUno >= $numeroDos && $numeroUno >= $numeroTres)
echo "<h1>El número mayor es:".$numeroUno."</h1>";

elseif ($numeroDos>= $numeroUno && $numeroDos>= $numeroTres) {
	echo "<h1>El número mayor es:".$numeroDos."</h1>";

}else {
	echo "<h1>El número mayor es:".$numeroTres."</h1>";
}

 ?>