<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contador</h1>

    <form action="contadorDestino.php" method="post">
        <label for="start">Início:</label>
        <input type="number" name="start" id="start">

        <label for="end">Final:</label>
        <input type="number" name="end" id="end">

        <label for="increment">Incremento:</label>
        <input type="number" name="increment" id="increment">

        <div class="bts">
            <button type="submit">Enviar</button>
            <a href="contador.php">Limpar</a>
        </div>       
    </form>

    <div style="margin-top: 20px;">
        <a href="index.php">Voltar</a>
    </div>

</body>
</html>