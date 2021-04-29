<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Minha 9º aplicação em PHP</title>
</head>

<body>
<h1>PHP na prática: resolução da lista de exercício L1, exercício 9 - Resposta do servidor</h1>
<?php
	//fazendo o PHP  receber os dados do formúlario
	$numero1 = $_POST['valor1'];
	$numero2 = $_POST['valor2'];
	$numero3 = $_POST['valor3'];

	$resultado = ($numero1 - $numero2) * $numero3;
	echo "<p>Número 1 = $numero1<br>
		Número 2 = $numero2<br>
		Número 3 = $numero3</p><br>";
	echo "<p>Resultado: $resultado</p>";
?>
</body>
</html>
