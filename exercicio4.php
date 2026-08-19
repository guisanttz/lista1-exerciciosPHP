<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <h1>Exercício 4 - MÉDIA DAS NOTAS</h1>
    <form action="resultado4.php" method="post">
        <label for="valor1">Informe a primeira nota: </label>
        <input type="number" name="nota1" id="nota1" required>
        <br><br>
        <label for="valor2">Informe a segunda nota: </label>
        <input type="number" name="nota2" id="nota2" required>
        <br><br>
        <label for="valor3">Informe a terceira nota: </label>
        <input type="number" name="nota3" id="nota3" required>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>