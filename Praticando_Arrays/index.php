<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Formulário</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Formulário</h1>
<hr>

<form action="destino.php" method="post">

<p>Escolha alguns interesses:</p>

<div class="grid">

<label><input type="checkbox" name="interesses[]" value="Esportes"> Esportes</label>
<label><input type="checkbox" name="interesses[]" value="Futebol"> Futebol</label>
<label><input type="checkbox" name="interesses[]" value="Basquete"> Basquete</label>
<label><input type="checkbox" name="interesses[]" value="Tênis"> Tênis</label>
<label><input type="checkbox" name="interesses[]" value="Taekwondo"> Taekwondo</label>
<label><input type="checkbox" name="interesses[]" value="Tecnologia"> Tecnologia</label>

<label><input type="checkbox" name="interesses[]" value="Smartphones"> Smartphones</label>
<label><input type="checkbox" name="interesses[]" value="Computadores e hardware"> Computadores e hardware</label>
<label><input type="checkbox" name="interesses[]" value="Desktop gamers"> Desktop gamers</label>
<label><input type="checkbox" name="interesses[]" value="Notebooks"> Notebooks</label>
<label><input type="checkbox" name="interesses[]" value="Veículos"> Veículos</label>
<label><input type="checkbox" name="interesses[]" value="Escritório"> Escritório</label>

<label><input type="checkbox" name="interesses[]" value="Vestuário"> Vestuário</label>
<label><input type="checkbox" name="interesses[]" value="Perfumes"> Perfumes</label>
<label><input type="checkbox" name="interesses[]" value="Economia"> Economia</label>
<label><input type="checkbox" name="interesses[]" value="Comidas"> Comidas</label>
<label><input type="checkbox" name="interesses[]" value="Bebidas"> Bebidas</label>
<label><input type="checkbox" name="interesses[]" value="Imóveis"> Imóveis</label>

<label><input type="checkbox" name="interesses[]" value="Calçados"> Calçados</label>
<label><input type="checkbox" name="interesses[]" value="Hotéis"> Hotéis</label>
<label><input type="checkbox" name="interesses[]" value="Pousadas"> Pousadas</label>
<label><input type="checkbox" name="interesses[]" value="Cinema"> Cinema</label>
<label><input type="checkbox" name="interesses[]" value="Filmes"> Filmes</label>
<label><input type="checkbox" name="interesses[]" value="Séries"> Séries</label>

</div>

<br>

<button class="btn-enviar" type="submit">Enviar</button>
<button class="btn-limpar" type="reset">Limpar</button>

</form>

</body>
</html>