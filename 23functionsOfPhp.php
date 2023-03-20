<?php

$nome = "Franzie Yoogan";

echo substr($nome,0,4);

echo strtolower("\n SHEEESH! \n");

echo strtoupper($nome);

$msg = "<h1 style='color:red;'> Olá me consagrade </h1> <br> <a href='www.google.com.br'>LINK </a> <br>";

echo $msg;

$string = "maça,uva,laranja,banana";

$alterar = str_replace("maça","tangerina",$string);

echo "\n {$alterar} \n";

$nome2 = "Frankie Yoogan";

if(strlen($nome2) <= 22) {
    echo " <br> O nome e: {$nome2}";
} else {
    echo " <br> nome invalido!!";
}

?>