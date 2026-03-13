<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>

        .box-verde{
            border: 2px solid green;
            background-color: #b9e3c6;
            padding: 8px 12px;
            font-weight: bold;
            font-size: 22px;
            margin: 5px;
        }

        .box-vermelha{
            border: 2px solid red;
            background-color: #f2c6c6;
            padding: 8px 12px;
            font-weight: bold;
            font-size: 22px;
            margin: 5px;
        }

        .resultado{
            margin-top: 40px;
        }

    </style>

    <h1> Praticando 3 - Números Primos</h1>

    <div class="links">
            <a href="primos.php?num=1">Número 1</a>
            <a href="primos.php?num=2">Número 2</a>
            <a href="primos.php?num=3">Número 3</a>
            <a href="primos.php?num=5">Número 5</a>
            <a href="primos.php?num=20">Número 20</a>
            <a href="primos.php?num=32">Número 32</a>
            <a href="primos.php?num=37">Número 37</a>
    </div>


    <?php
     
        $num = $_GET["num"];

        $divisores = 0;

        // Divide o número informado por todos os seus antecessores.
        for($i = 1; $i <= $num; $i++){
            if($num % $i == 0){
                $divisores++;
            }
        }

        // Se for primo
        if($divisores == 2){
            $classe = "box-verde";
            $texto = "é";
        }else{
            $classe = "box-vermelha";
            $texto = "não é";
        }
    ?>

    <div class="resultado">


    <?php
        if (!empty($_GET)) {
            echo "O número <span class='$classe'>$num</span> ";
            echo "<span class='$classe'>$texto</span> um número ";
            echo "<span class='$classe'>PRIMO</span>.";

            echo "<br><br>Além disso ele é um número ";

            if($num % 2 == 0){
                echo "<span class='$classe'>PAR</span>";
            }else{
                echo "<span class='$classe'>ÍMPAR</span>";
        }
        }
    ?>

    <div style="margin-top: 20px;">
        <a href="index.php">Voltar</a>
    </div>

    </div>


    
</body>
</html>