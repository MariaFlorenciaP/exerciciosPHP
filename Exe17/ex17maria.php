<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Lista de exercicios 1 - Programação WEB - Prof. Herval</title>
</head>

<body>
	
<h1>Exercicio 17 - Lista 1</h1>
<?php
$valor = $_POST['valor'];
$comissao = $_POST['comissao'];

$comissao = $valor * $comissao/100;

/*Para que o resultado de saida nao tenha tantas casas*/
$celsiusFormatado = number_format($celsius, 2, ',', '.');


echo "<p> O resultado em graus Celsius e: $celsiusFormatado </p>";
	


?>
</body>
</html>