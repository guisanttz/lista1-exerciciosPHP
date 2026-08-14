<?php
$tempFahr = $_POST["tempFahr"];
$tempCelsius = ($tempFahr - 32) * (5/9);
echo "$tempFahr F para Celsius é $tempCelsius C";

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