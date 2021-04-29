 <?php
//retirando os dados da tabela e fazendo o PHP crira o vetor

	$alunos = [ "Maria das Graças" => 6.5, 
				"Paulo de Almeida" => 7.8,
				"Rogério da Silva" => 4.2,
				"Jerusa Fontes" => 8.5,
				"Alicia Marques" => 9.0,
				"Zenon Mendes" => 4.1
	];
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
	<fieldset class="acima">
		<legend>Vetores e matrizes com PHP</legend>
		<form action = "exe01vet.php" method = "post">
			<label class="alinha">Selecione um aluno:</label>
			<select name="aluno">
				<option value="Escolha um nome">Escolha um nome</option>
				<?php
					//Gerando, automaticamente, os elementos do select a partir do vetor.
					foreach($alunos as $nome => $nota){
					echo "<option>$nome</option>";
					}
				?>
			</select><br><br>
			<label class="alinha">Forneça o nome de um aluno a ser pesquisado:</label>
			<input type="text" name="outro-aluno"/><br><br>
			<label>Selecione uma operação:</label><br><br>
			<input type="radio" name="operacao" value="1">Mostrar a nota do aluno escolhido no select<br>
			<input type="radio" name="operacao" value="2">Receber um nome de um aluno na caixa de texto e mostrar sua nota
	</fieldset>

	<fieldset class="embaixo">
		<legend>Outras operações do PHP sobre o vetor</legend>
			<input type="radio" name="operacao" value="3">Mostrar dados no formato tabular, ordenando os alunos por ordem decrescente do nome<br>
			<input type="radio" name="operacao" value="4">Mostrar dados no formato tabular, ordenando os alunos por ordem crescente de nota<br>
			<input type="radio" name="operacao" value="5">Mostar média de nota dos alunos<br>
			<input type="radio" name="operacao" value="6">Mostar número de alunos com nota acima da média<br>
			<input type="radio" name="operacao" value="7">Mostar menor nota e o nome do aluno<br>
			<input type="radio" name="operacao" value="8">Converter o vetor em string<br>
			<input type="radio" name="operacao" value="9">Inserir alguns alunos no vetor e mostrar no formato tabular <br>
	</fieldset>
	<button type="submit" name="enviar">Executar operação selecionada</button>
		</form>
</body>
</html>
