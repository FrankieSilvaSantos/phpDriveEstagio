<?php


function gravar(string $texto, string $arquivo) {
    $fp = fopen($arquivo, "a+");
    fwrite($fp, "{$texto} <br>\r\n");
    fclose($fp);
}
gravar(date("d/m/y h:i:s"),"file.txt");

function leitura(string $arquivo) {
    $fp = fopen($arquivo, "r");
    $texto = fread($fp, filesize($arquivo));
    fclose($fp);
    return $texto;
}

echo leitura("file.txt");
?>