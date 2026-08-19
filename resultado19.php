<?php
$distancia = $_POST["distancia"];
$tempo = $_POST["tempo"];
$velocidade_media = $distancia / $tempo;
echo "A velocidade média é: $velocidade_media km/h";

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