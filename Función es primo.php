<?php 


function esPrimo ($numero){
for ($i=2; $i <$numero ; $i++) { 
	if ($numero % $i == 0){
	return false; 
}else
	return true; 
}
}
$num = 7; 

$primo=esPrimo(num);

if ($primo == true){
	echo "<h1>No es primo</h1>";
}else
echo "<h1>Es primo</h1>";


 ?>

