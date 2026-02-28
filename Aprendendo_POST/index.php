<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Formulário</h1>

    <form action="destino.php" method="POST">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder = "Digite seu e-mail" required>

        <label for="color">Cor:</label>
        <input type="color" name="color" id="color">

        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>


</body>
</html>