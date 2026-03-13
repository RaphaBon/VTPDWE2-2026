<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contador</h1>

    <h2>Paramentros Informados:</h2>

    <?php
        $start = $_POST["start"];
        $end = $_POST["end"];
        $increment = $_POST["increment"];

        if(isset($_POST["start"]) && isset($_POST["end"]) && isset($_POST["increment"]) ){

            echo "<p>Início: $start</p>";
            echo "<p>Final: $end</p>";
            echo "<p>Incremento: $increment</p>";

            if($end > $start){
                for($i = $start; $i <= $end; $i += $increment){
                    echo "   $i";
                }
            }

            if ($start > $end) {
                for($i = $start; $i >= $end; $i -= $increment){
                    echo "   $i";
                }                
            }


        }

    ?>

    <div style="margin-top: 20px;">
        <a href="index.php">Voltar</a>
    </div>

</body>
</html>