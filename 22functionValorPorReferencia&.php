<?php

$salario = 1567.76;
$valorAjuste = 0;

function ajustarSalario($salario, &$valorAjuste) {
$valorAjuste = 300;
return ($salario + $valorAjuste);
}

$valorFinal = ajustarSalario($salario,$valorAjuste);

echo "valor ajustado: {$valorFinal} e o valor do ajuste e: {$valorAjuste}"

?>