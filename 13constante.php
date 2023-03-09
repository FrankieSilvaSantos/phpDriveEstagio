<?php

define("min", 17); // constante de nome "min" e com valor 17
define("max",45);

$idade = 25;

echo "Min: " . min . "\n";
echo "Max: " . max . "\n";
echo "Idade: " . $idade . "\n \n";


if ($idade >= min && $idade <= max) {
    echo "Acesso liberado";
    
} else {
    echo "Acesso negado";
}


?>