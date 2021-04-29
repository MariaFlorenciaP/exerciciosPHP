<?php
//retirando os dados da tabela e fazendo o PHP crira o vetor

	$alunos = [ "Maria das Graças" => 6.5, 
				"Paulo de Almeida" => 7.8,
				"Rogério da Silva" => 4.2,
				"Jerusa Fontes" => 8.5,
				"Alicia Marques" => 9.0,
				"Zenon Mendes" => 4.1
	];
	/*para exibir o conteudo do vetor 
	echo "<pre>";
	print_r($alunos);
	echo "</pre>";*/
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Minha 1º aplicação em PHP - lista 2 </title>
	<link rel="stylesheet" href="exe01.css">
</head>
<body>
	<h1>PHP na prática: resolução da lista de exercício L2, exercício 1 </h1>

<?php
//receber o botao de radio que foi escolhido pelo usuario no formulario primeiro botao
$operacao = $_POST["operacao"];

//testar qual botao do radio foi selecionado

if($operacao == 1){

	//receber o nome do aluno escolhido no select
	$aluno = $_POST["aluno"];
	//acesar o vetor localizando o nome do aluno no indice salvando o conteudo da celula

	$nota = $alunos[$aluno];
	$notaFormatada = number_format($nota,2,',','.');

	echo "<p>  Alunx <span> $aluno </span> obteve a nota <span> $notaFormatada </span>. </p>";
}

?>
	
</body>
</html>
