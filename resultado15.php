<?php
$preco = $_POST["preco"];
$desconto = $_POST["desconto"] / 100;
$precoFinal = $preco - ($preco * $desconto);
echo "O preço final é: R$ $precoFinal";

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