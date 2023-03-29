<?php

$s = sha1("Olá sou a franzie");
echo $s;
echo "<br>";

$m = md5("Criptografias franzie");
echo $m;

echo "<br>";

$b = base64_encode("Criptograficas Franzie");
echo $b;
echo "<br> <br>";

echo base64_decode($b);

?>