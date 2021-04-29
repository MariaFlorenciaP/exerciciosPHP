<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Lista de exercicios 1 - Programação WEB - Prof. Herval</title>
</head>

<body>
	
<h1>Exercicio 12 - Lista 1</h1>
<?php
$distancia = $_POST['distancia'];
$consumo = $_POST['consumo'];
$preço = $_POST['preço'];

$litrosQueConsumira = $distancia / $consumo;

$valorAPagar = $litrosQueConsumira * $preço;

echo "<p> O consumo que terá seua carro pela distancia percorrida será de $litrosQueConsumira litros e o valor de dito consumo será de R$ $valorAPagar</p>";
	


?>
</body>
</html>