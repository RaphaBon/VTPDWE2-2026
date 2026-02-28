<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>
<body>

    <form action="destino.php" method="POST">

        <label for="title">Título da página:</label>
        <input type="text" name="title" required autofocus>

        <label for="body">Corpo:</label>
        <textarea name="body" id="body" required></textarea>

        <script>
        const textarea = document.getElementById("body");

        function autoResize() {
            textarea.style.height = "auto";
            textarea.style.height = textarea.scrollHeight + "px";
        }

        textarea.addEventListener("input", autoResize);

        autoResize(); // ajusta na carga
        </script>

        <label for="color">Cor texto:</label>
        <input type="color" name="color" required>

        <label for="img">URL da imagem:</label>
        <input type="url" name="img">

        <label for="link">URL do link:</label>
        <input type="url" name="link">

        <label for="backgroundColor">Cor de plano de fundo:</label>
        <input type="color" name="backgroundColor">

        <div class="button">
            <button type="submit" class="submit" >Enviar</button>
            <button type="reset" class="reset" >Limpar</button>
        </div>

    </form>

    
</body>
</html>