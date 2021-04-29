<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Lista de exercicios 1 - Programação WEB - Prof. Herval</title>
</head>

<body>
	
<h1>Exercicio 11 - Lista 1</h1>
<?php
$nome = $_POST['nome'];
$n1 = $_POST['nota1'];
$p1 = $_POST['peso1'];
$n2 = $_POST['nota2'];
$p2 = $_POST['peso2'];

$sp = $p1 + $p2;
$m = ($n1 * $p1 + $n2 * $p2)/$sp;

echo "<p> Carx alunx $nome, de acordo com os dados forneçidos, sua média na unidade Programação para Web é $m </p>";
	


?>
</body>
</html>