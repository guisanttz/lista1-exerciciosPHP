<?php
$capital = $_POST['capital'];
$taxa = $_POST['taxa'];
$periodo = $_POST['periodo'];
$montante = $capital * (1 + ($taxa / 100)) ** $periodo;
echo "O valor do montante com juros compostos é: R$ $montante";
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