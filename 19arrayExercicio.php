<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="slProfessores" id="slProfessores">
        <?php
        
$arrayNomes = ["Frankie","Franzie","Franks","Fran"];
        for($i = 0; $i < count($arrayNomes);$i++) {

   
        ?>
    <option value="<?= $i; ?>"><?= $arrayNomes[$i]; ?></option>
    <?php
}
?>
</select>
<button onclick="alert(document.getElementById('slProfessores').value);">Selecionar</button>
</body>
</html>