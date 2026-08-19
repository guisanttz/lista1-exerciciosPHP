<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EXERCÍCIO 17 - JUROS COMPOSTOS</h1>
    <form action="resultado17.php" method="post">
        <label for="capital">Insira o capital:</label>
        <input type="number" name="capital" id="capital" required>
        <br><br>
        <label for="taxa">Insira a taxa de juros (%): </label>
        <input type="number" name="taxa" id="taxa" required>
        <br><br>
        <label for="periodo">Insira o período (em meses): </label>
        <input type="number" name="periodo" id="periodo" required>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>