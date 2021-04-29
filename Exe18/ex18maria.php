<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Lista de exercicios 1 - Programação WEB - Prof. Herval</title>
</head>

<body>
	
<h1>Exercicio 18 - Lista 1</h1>
<?php

$valorTotal = $_GET['valortotal'];
$pagamento = $_GET['pagamento'];


if ($pagamento == "sim" ){
	$desconto = $valorTotal*0.05;
	$valorTotal = $valorTotal - $desconto;
	}

$checkboxMarcado = isset($_GET['entrega']);

if ($checkboxMarcado == true){
	$acrecimo = $valorTotal*0.02;
	$valorTotal = $valorTotal + $acrecimo;	
}






echo "<p> O valor final da compra é R$$valorTotal </p>";
	


?>
</body>
</html>