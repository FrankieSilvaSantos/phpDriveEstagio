<?php

$idade = 18;
$acesso = true;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if($idade >=18 && $acesso== true) {
    ?>
     <h1 style="color:green">Autorizado </h1>  
    <?php
} else {
    ?>
    <h1 style="color:red">Negado</h1>
    <?php
}
?>


</body>
</html>