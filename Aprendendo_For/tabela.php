<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Praticando 4 - Gerador de Tabela</h1>

    <form action="tabelaDestino.php" method="post">

        <label for="row">Linhas:</label>
        <input type="number" name="row" id="row">

        <label for="col">Colunas:</label>
        <input type="number" name="col" id="col">

        <label for="style">Estilo:</label>
        <select name="style" id="style">
            <option value="table-primary">table-primary</option>
            <option value="table-secondary">table-secondary</option>
            <option value="table-success">table-success</option>
            <option value="table-warning"">table-warning</option>           
        </select>

        <div class="bts">
            <button type="submit">Enviar</button>
            <a href="tabela.php">Limpar</a>
        </div>   

    </form>

    <div style="margin-top: 20px;">
        <a href="index.php">Voltar</a>
    </div>

    
</body>
</html>