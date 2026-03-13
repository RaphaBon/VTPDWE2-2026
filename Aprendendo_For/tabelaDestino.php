<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Praticando 4 - Gerador de Tabela</h1>

    <?php
        $row = $_POST["row"];
        $col = $_POST["col"];
        $style = $_POST["style"];

        echo "<h3>Tabela $row X $col</h3>";
    ?>

    <table class="table <?php echo $style; ?>">
        <?php
            for($i = 0; $i < $row; $i++){
                echo "<tr>";
                for($j = 0; $j < $col; $j++){
                    echo "<td>-</td>";
                }

                echo "</tr>";
            }
        ?>
    </table>

    <div style="margin-top: 20px;">
        <a href="index.php">Voltar</a>
    </div>

    


</body>
</html>