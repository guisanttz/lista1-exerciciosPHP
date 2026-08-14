<?php

$base = $_POST["base"];
$expoente = $_POST["expoente"];
$resultado = $base ** $expoente;
echo "$base elevado a $expoente é: $resultado";

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