<?php
$dias = $_POST['dias'];
$horas = $dias * 24;
$minutos = $horas * 60;
$segundos = $minutos * 60;
echo "$dias dias equivalem a $horas horas, $minutos minutos e $segundos segundos.";
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