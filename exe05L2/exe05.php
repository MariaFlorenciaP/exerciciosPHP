 <?php

	$alunos  [ "1010-X1"]= ["Joana de Almeida",6,5.5]; 
	$alunos  [ "1010-X2"]= ["Joao de Ataíde",7.5,7.8]; 
	$alunos  [ "1010-X3"]= ["Maria das Graças",8.3,9.6]; 
	$alunos  [ "1010-X4"]= ["Caroline Prado",4.2,6.1];
	/*para exibir o conteudo da matriz 
	echo "<pre>";
	print_r($alunos);
	echo "</pre>";*/
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Lista de exercicios 2 - Vetores e matrizes </title>
	<link rel="stylesheet" href="exe05.css">
</head>
<body>
	<h1>PHP na prática: resolução da lista de exercício L2, exercício 5 </h1>
	<fieldset class="acima">
		<legend>Rendimento semestral do aluno</legend>
		<form action = "exe05.php" method = "post">
			<label class="alinha">Selecione a matricula do aluno: </label>
			<select name="numero-matricula">
				<?php
					//Gerando, dinamicamente, os elementos do select a partir da matriz.
					foreach($alunos as $matricula => $vetorInterno){
					echo"<option>$matricula</option>"; //a matricula aparecera no select
					}
				?>
			</select><br><br>
			
		<label>Escolha uma operação</label><br><br>
			<input type="radio" name="operacao" value="1">Mostrar as informações do aluno e sua média final<br> <!-- esta opcao depende da escolha do select -->

			<input type="radio" name="operacao" value="2">Mostrar, no formato tabular, os dados dos alunos aprovados<br>
			<input type="radio" name="operacao" value="3">Mostar os dados do aluno - destaque<br>
			<!-- estas duas opcoes nao dependen do select -->
	</fieldset>
	<button type="submit" name="enviar">Executar operação selecionada</button>
		</form>

<?php
if (isset($_POST["enviar"])) {
//receber o value do botao de radio selecionado pelo usuario

		$operacao= $_POST["operacao"];

		if ($operacao == 1) {
		//recebemos a matricula do select
			$matric = $_POST['numero-matricula'];

		//calculo da media final
			$mediaProvas = $alunos[$matric][1];
			$mediaExercicios = $alunos[$matric][2];

			$mediaFinal = ($mediaProvas * 7 + $mediaExercicios * 3) / 10;

			$nomeAluno = $alunos[$matric][0];	

			echo"<p> <span> Desempenho do aluno: <br>
			Nome = <span> $nomeAluno </span> <br>   
			Matrícula = <span> $matric </span> <br>
			Média das provas = <span> $mediaProvas <br> </span>
			Média dos exercicios = <span> $mediaExercicios<br> </span>
			Média Final = <span> $mediaFinal </span></p>";

			//poderia ir direto mas com chaves Nome: <span>{$alunos[$matric][0]}</span>
		}

		elseif ($operacao == 2) {
		//matriz auxiliar para armazenar os alunos com media final maior ou igual a 6
			$matrizAuxiliar = [];

			foreach($alunos as $matric => $vetorInterno){
				$mediaProvas = $vetorInterno[1];
				$mediaExercicios = $vetorInterno[2];
				$mediaFinal = ($mediaProvas * 7 + $mediaExercicios * 3) / 10;
				$nomeAluno = $vetorInterno[0];

				if ($mediaFinal >= 6){

					$matrizAuxiliar[$matric] = [$nomeAluno, $mediaFinal];
				
				}

			}

			if (empty($matrizAuxiliar)) {
				echo"<p>Nenhum dos alunos teve média final acima de 6. </p>";
			}

			else{
				echo"<table>
						<caption> Relação de alunos aprovados </caption>
						<tr>
							<th> Matrícula </th>
							<th> Aluno </th>
							<th> Média Final </th>
						</tr>";
						
					foreach ($matrizAuxiliar as $matric => $vetorInterno){
						$nomeAluno = $vetorInterno[0];
						$mediaFinal = $vetorInterno[1];


						echo "<tr>
							<td> $matric </td>
							<td> $nomeAluno </td>
							<td> $mediaFinal </td>

						  </tr>";
					}
					echo "</table>";		
			}
		}

		

		elseif ($operacao == 3) {
		//para ter a maior media final criamos um vetor temporario que armazena a media final e a matricula(indice) de cada um dos alunos. usando a funcao max
		
					$vetorAuxiliar = [];
					foreach($alunos as $matric => $vetorInterno){
					
					$mediaFinal = ($vetorInterno[1] *7 + $vetorInterno[2] * 3)/10;
					//guardamos a media no vetor auxiliar usando a matricula como indice
					
					$vetorAuxiliar[$matric]= $mediaFinal;
			
					}
					
					//chamamos a funcao max sobre o vetor auxiliar
					
					$maiorMediaFinal = max($vetorAuxiliar);
					
					//usamos a funcao array_search para fazer com que o PHP pesquise no vetor auxiliar a maior media final e retorne a matricula do aluno que e seu indice
					
					$matriculaAlunoDestaque = array_search($maiorMediaFinal,$vetorAuxiliar);
					
					//com a matricula pegamos o nome do aluno da matriz original
					
					$nomeAlunoDestaque = $alunos[$matriculaAlunoDestaque][0];
					
					echo "<p> Dados do melhor aluno da clase: <br>
										Matrícula = <span>$matriculaAlunoDestaque</span><br>
										Nome = <span> $nomeAlunoDestaque</span><br>
										Média Final = <span> $maiorMediaFinal</span></p>";
				
		}
}

?>
</body>
</html>
