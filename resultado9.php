<?php

$largura = $_POST["largura"];
$altura = $_POST["altura"];
$perimetro = ($largura * 2) + ($altura * 2);
echo "O perímetro do retângulo mede $perimetro";

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