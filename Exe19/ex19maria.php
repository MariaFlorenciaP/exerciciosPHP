<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Lista de exercicios 1 - Programação WEB - Prof. Herval</title>
</head>

<body>
	
<h1>Exercicio 19 - Lista 1</h1>
<?php

$valor = $_GET['valor'];
$pagamento = $_GET['pagamento'];


if ($pagamento == "avista" ){
	$desconto = $valor*0.05;
	$valor = $valor - $desconto;
	}
	
else {$acrescimo = $valor*0.02;
			$valor = $valor + $acrescimo;

}	



$checkboxMarcado = isset($_GET['visa']);

if ($checkboxMarcado == true){
	echo "<p> Parabéns! Voce está concorrendo ao sorteio de um automóvel!</p>";	
}


echo "<p> O valor total da compra é R$$valor</p>"




	


?>
</body>
</html>