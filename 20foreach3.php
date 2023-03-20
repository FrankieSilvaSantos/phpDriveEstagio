<?php


$arrayNotas = [


    "aluno1" => [
        "nome" => "Lelouch",
        "nota" => 10
    ],

    "aluno2" => [
        "nome" => "Vash",
        "nota" => 9
    ],

    "aluno3" => [
        "nome" => "Death THe Kid",
        "nota" => 6
    ],


];
 
foreach($arrayNotas as $aluno){
    foreach($aluno as $key => $value) {
        echo "{$key} = {$value} \n";
    }
}

?>