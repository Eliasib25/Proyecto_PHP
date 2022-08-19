<?php

$palabras = array("patilla", "Mango", "Manzana");

for ($i=0; $i < count($palabras) ; $i++) { 
    print $palabras[$i]."<br>";
}

foreach ($palabras as $palabra) {
    echo $palabra."<br>";
}
?>