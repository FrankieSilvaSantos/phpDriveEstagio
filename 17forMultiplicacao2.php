


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

for ($i = 1; $i<11; $i++) {
   for($j =0; $j<11; $j++) {

   


?>
    <ul>
        <li> <?= $i, " x ", $j, " = "; ?>  <?= $i * $j; ?> </li>

    </ul>
    <?php

    }
    print "=======================";
}
?>
</body>
</html>