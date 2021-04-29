<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP  </title> 
</head> 

<body> 
<h1> Fundamentos do PHP - Exercicio 9 da listaL1 - Resposta do servidor </h1>
<?php

$a = $_POST['valor1'];
$b = $_POST['valor2'];
$c = $_POST['valor3'];
$r= ($a - $b) * $c;

echo "<p> Valor 1:$a<br>
	Valor 2:$b<br>
Valor 3:$c</p><br>";

echo "<p> Resultado do cálculo : $r</p>";




?>


    
</body> 
</html> 