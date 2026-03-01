<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body>

    <?php
        //filter_input é uma função que pega os dados com uma certa segurança. Onde passamos o tipo, paramentro e filtro
        $nome = filter_input(INPUT_GET,"name",FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET,"email",FILTER_SANITIZE_SPECIAL_CHARS);
        $cor = filter_input(INPUT_GET,"color");

        //Se não tiver cor, a página fica branca, pois background-color: ; é inválido.
        if(!$cor){
            $cor = "#ffffff";
        }
    ?>

    

    <h1>Destino GET</h1>

    <?php
        //Se vier o nome e o email, ai mostramos.
        if($nome || $email)
        {
        echo "<p>";
        echo "Nome informado: $nome <br>";
        echo "Email informado: $email";
        echo "</p>";
        }
    ?>


    <p>
        <a href="index.php?name=Raphael&email=raphael@gmail.com&color=<?php echo urlencode($cor) ?>">
            Enviar dados do Raphael
        </a>
    </p>

    <p>
        <a href="index.php?name=Larissa&email=larissa@gmail.com&color=<?php echo urlencode($cor) ?>">
            Enviar dados da Larissa
        </a>
    </p>


    <p>
        <a href="index.php">
            Limpar tudo
        </a>
    </p>

    <div class="colors">

        <a class="red" href="index.php?name=<?php echo $nome ?>&email=<?php echo $email ?>&color=%23f28b82">
        </a>

        <a class="blue" href="index.php?name=<?php echo $nome ?>&email=<?php echo $email ?>&color=%23a7c7e7">
        </a>

        <a class="green" href="index.php?name=<?php echo $nome ?>&email=<?php echo $email ?>&color=%23b7e4c7">
        </a>
    </div>

    <style>
        body{
            background-color: <?php echo $cor?>;
        }
        
        .colors{
            display: flex;
            justify-content: center;
            gap: 10vh;
        }

        .colors a{
            padding: 15vh;
            display:inline-block;
            text-decoration:none;
            border:1px solid black;
        }

        .red{
            background: red;
        }

        .blue{
            background: blue;
        }

        .green{
            background: green;
        }

    </style>


</body>
</html>