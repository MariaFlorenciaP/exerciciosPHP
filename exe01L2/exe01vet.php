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

//o usuario selecionou o botao com value 2

if($operacao == 2){

	$aluno = $_POST["outro-aluno"];

	//antes de acesar o conteudo do vetor devemos testar se o nome do aluno digitado pelo usuario no formulario esta correto e existe como indice do vetor. Para tanto, usamos o comando array_key_exists()

	$encontrou = array_key_exists($aluno, $alunos);

	//fazendo o PHP testar se a funcao acima encontrou ou nao o nome do aluno fornecido no vetor

		if($encontrou == true){  // poderia ser if($encontrou) {} pq php siempre compara com true

			$nota = $alunos[$aluno];
			$notaFormatada = number_format($nota,2,',','.');

			echo "<p>  Alunx <span> $aluno </span> obteve a nota <span> $notaFormatada </span>. </p>";

		}
		else{

			echo "<p> Alunx <span>$aluno</span> não encontrado no sistema. Tente novamente.</p>";

		}
}


//testar se o PHP selecionou a operação 3
if($operacao == 3){

	krsort($alunos); //ordena o vetor por meio do indice de forma decrecente

	/*echo "<pre>";
	print_r($alunos);
	echo "</pre>";*/

	//vamos criar o cabecalho da tabela

	echo "<table>
			<caption> Relação de alunos e notas em ordem decrecente de nome dxs alunxs</caption>
				<tr> 

					<th> Alunx </th>
					<th> Nota  </th>

				</tr>"; //tr e table row

				//agora laço para percorrer o vetor e jogar os dados dentro da tabela(corpo da tabela)

			foreach($alunos as $nomeDoAluno => $notaDoAluno){
					
					echo "<tr>
							<td> $nomeDoAluno </td>
							<td> $notaDoAluno </td>

						  </tr>";
			}

	echo "</table>"; //fechar a tabela depois do laço
}

if($operacao == 4){

	asort($alunos); //ordena o vetor por meio do conteudo de forma crecente
	echo "<table>
			<caption> Relação de alunos e notas em ordem decrecente de nome dxs alunxs</caption>
				<tr> 

					<th> Alunx </th>
					<th> Nota  </th>

				</tr>"; //tr e table row

				//agora laço para percorrer o vetor e jogar os dados dentro da tabela(corpo da tabela)

			foreach($alunos as $nomeDoAluno => $notaDoAluno){
					
					echo "<tr>
							<td> $nomeDoAluno </td>
							<td> $notaDoAluno </td>

						  </tr>";
			}

	echo "</table>"; //fechar a tabela depois do laço
}

	
if($operacao == 5){
	
	$media = array_sum($alunos)/count($alunos);
	$mediaFormatada = number_format($media,2,',','.');
	
	echo "<p> A média de nota dos alunos cadastrados no vetor é $mediaFormatada.";
}

if($operacao == 6){
	$media = array_sum($alunos)/count($alunos);
	
	//criar um contador para sumar os alunos que tem nota maior que a meia
	
	$quantos = 0;
	
	foreach($alunos as $aluno => $nota){
		
		if($nota > $media){
			$quantos++;
		}
		
	}
	$mediaFormatada = number_format($media,2,',','.');
 echo "<p> A média geral da turma é $mediaFormatada e o número de alunos com nota acima da média é $quantos.</p>";
	}
	
	if($operacao == 7){
		
		$menorNota = min($alunos);
		
		$alunoMenor = array_search($menorNota,$alunos);
		
		echo "<p> A menor nota obtida é $menorNota e o nome do aluno é $alunoMenor.</p>";
	}
	
	if($operacao == 8){
		
		$stringVetor =   implode(" - " , $alunos);
		
		echo "<p> O conteúdo do vetor é $stringVetor</p>";
	}
	
	if($operacao == 9){
		
		
		$alunos["Tereza de Souza"] = 7.6;
		$alunos["Silvio de Castro"] = 5.6;
 		
		echo "<table>
			<caption> Novo vetor gerado </caption>
				<tr> 

					<th> Alunx </th>
					<th> Nota  </th>

				</tr>"; 

				//agora laço para percorrer o vetor e jogar os dados dentro da tabela(corpo da tabela)

			foreach($alunos as $nomeDoAluno => $notaDoAluno){
					
					echo "<tr>
							<td> $nomeDoAluno </td>
							<td> $notaDoAluno </td>

						  </tr>";
			}

	echo "</table>"; //fechar a tabela depois do laço
										
										}
	
	


?>
	
</body>
</html>
