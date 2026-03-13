<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabuada</h1>

    <form action="" method="post">
        <label for="num">Número:</label>
        <input type="number" name="num" id="num" require>

        <div class="bts">
            <button type="submit">Enviar</button>
            <a href="tabuada.php">Limpar</a>
        </div>
    </form>


    <?php
        if(isset($_POST["num"])){

            $num = $_POST["num"];
            echo "<h2>Tabuada do $num</h2>";
            for($i = 1; $i <= 10; $i++){
                $res = $num * $i;
                echo "<p>$num X $i = $res</p>";
            }
        }

    ?>

    <div style="margin-top: 20px;">
        <a href="index.php">Voltar</a>
    </div>

</body>
</html>