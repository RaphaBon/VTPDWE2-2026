<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Destino GET</h1>

    <?php
        //A função filter_input serve para obter a variável externa pelo nome e opcionalmente a filtra.
        $nome = filter_input(INPUT_GET, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor = filter_input(INPUT_GET, "color", FILTER_SANITIZE_SPECIAL_CHARS);         

        echo "<p>Nome informado: $nome<br>Email: $email</p>";
    ?>

    <p>
        <a href="destino.php?name=Raphael&email=raphael@gmail.com">Enviar dados do Raphael</a>
    </p>
    <p>
        <a href="destino.php?name=Larissa&email=snlarrisa@gmail.com">Segundo Dados</a>
    </p>

    <style>
        body{
            background_color: <?php echo $cor ?>;
        }
    </style>
</body>
</html>