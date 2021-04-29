<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Lista de exercicios 1 - Programação WEB - Prof. Herval</title>
</head>

<body>
	
<h1>Exercicio 15 - Lista 1</h1>
<?php
$n = $_GET['n'];

$r = sqrt($n);
$p = pow($n,3);



echo "<p> A raíz quadrada de $n é $r<br>
		O cubo de $n é $p </p>";
	


?>
</body>
</html>