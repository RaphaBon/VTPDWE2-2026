<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Destino</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Destino</h1>
<hr>

<h3>Dados da requisição:</h3>

<div class="dados">

<pre>
<?php
var_dump($_POST["interesses"]);
?>
</pre>

</div>

<h3>Interesses selecionados (em ordem alfabética)</h3>

<ul>

<?php

$interesses = $_POST["interesses"];

sort($interesses);

$total = count($interesses);

for($i=0; $i < $total && $i < 3; $i++){
echo "<li>".$interesses[$i]."</li>";
}

if($total > 3){
echo "<li>...</li>";
}

?>

</ul>

<br>

<a href="index.php">Voltar para o formulário</a>

</body>
</html>