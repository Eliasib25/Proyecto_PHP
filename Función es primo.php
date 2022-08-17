<?php 


function esPrimo ($numero){
for ($i=2; $i <$numero ; $i++) { 
	if ($numero % $i == 0){
	return = false; 
}else
	return = true; 
}
}
$num = 7; 
$primo=esPrimo(num);

if ($primo== true){
	echo "<h1>".esPrimo($num)."</h1>";
}


 ?>

