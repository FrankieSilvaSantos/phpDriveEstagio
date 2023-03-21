<?php

$arrayNome = ["Franzie","Frankie","Franks","Fran"];
$nome = "";
$email = "";
$funcionario = "";

if(isset($_POST["txtNome"])) { #isset verifica se a variavel existe
    $nome = $_POST["txtNome"];
}

if(isset($_POST["txtEmail"])) {
    $email = $_POST["txtEmail"];
}

if(isset($_POST["slfuncionario"])) {
    $funcionario = $arrayNome[$_POST["slfuncionario"]];
}

 


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
    <form method="post">
    <ul>
        <li>Nome <input type="text" name="txtNome"></li>
        <li>E-mail <input type="text" name="txtEmail"></li>
        <li>Funcionarios
            <select name="slfuncionario">
                <?php

                for($i= 0; $i< count($arrayNome); $i++) {
                    ?>

                    
                    <option value="<?= $i; ?>"> <?= $arrayNome[$i]; ?> </option>
                    <?php
                }
                ?>
                </select>
                </li>
                <li><input type="submit" name="btnSubmit" value="cadastrar"></li>
       
    </ul>
    </form>
   
    <br>
    <p>Nome: <?=$nome; ?></p>
    <p>Email: <?=$email; ?></p>
    <p>Funcionario: <?=$funcionario; ?></p>
</body>
</html>