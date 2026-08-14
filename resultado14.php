<?php
$peso = $_POST["peso"];
$altura = $_POST["altura"];
$imc = $peso / ($altura ** 2);
echo "Seu IMC é $imc";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="index.php">RETORNAR AO INÍCIO</a>
</body>
</html>