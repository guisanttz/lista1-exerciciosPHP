<?php
$tempCelsius = $_POST["tempCelsius"];
$tempFahr = ($tempCelsius * 9 / 5) + 32;
echo "$tempCelsius C em Fahrenheit é: $tempFahr F";
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