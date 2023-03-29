<?php

echo "Usuario: ", filter_input(INPUT_POST, "txtUsuario",FILTER_SANITIZE_STRING);
echo "<br>";

echo "Senha: ", md5(filter_input(INPUT_POST, "txtSenha",FILTER_SANITIZE_STRING));


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
    <form action="" method="post">
        <style>
            ul {
                list-style: none;
            }
            input,select{
                padding: 5px;
                margin-top:10px;
            }
        </style>


<ul>
    <li>Usuario: <input type="text" name="txtUsuario" id=""></li>
    <li>Senha: <input type="password" name="txtSenha" id=""></li>
    <li><input type="submit" value="Cadastrar" name="btnSubmit"></li>
    <a href="http://localhost/phpDriveAlessandro/29criptografia2.php">Refresh</a>
</ul>


    </form>
</body>
</html>