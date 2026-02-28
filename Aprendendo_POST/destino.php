<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Destino</h1>
    
    <!-- O array global $_post é onde as requisições do tipo post são guardadas --> 
    
    <?php
        $nome = $_POST["name"];
        $email = $_POST["email"];
        $cor = $_POST["color"];

        echo "<p>Nome: $nome <br>Email: $email</p>";
    ?>

    <p><a href="index.php">Voltar para o formulário</a></p>

    <style>
        body{
            background-color: <?php echo $cor;?>;
        }
    </style>

</body>
</html>