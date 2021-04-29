<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Lista de exercicios 1 - Programação WEB - Prof. Herval</title>
</head>

<body>
	
<h1>Exercicio 13 - Lista 1</h1>
<?php

$valorTotal = $_POST['valortotal'];

$desconto = ($valorTotal * 10)/100;
$icms = ($valorTotal * 12)/100;
$comissao  = ($valorTotal * 5)/100;

echo "<p>Valor do desconto: R$ $desconto<br>
		Valor do ICMS: R$ $icms<br>
		Comissão do vendedor: R$ $comissao</p>"

?>




</body>
</html>