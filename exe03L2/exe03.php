<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Minha 1º aplicação em PHP - lista 2 </title>
	<link rel="stylesheet" href="exe03.css">
</head>
<body>
	<h1>PHP na prática: resolução da lista de exercício L2, exercício 3 </h1>
	<form action="exe03.php" method="post">
		<fieldset>
		<legend>Dados do funcionario 1</legend>
		<label class="alinha"> Matrícula 1: </label>
		<input type="text" name="matric1" autofocus> <br>

		<label class="alinha"> Salário 1: </label>
		<input type="number" name="sal1" min="0" step="0.01"> <br>
		</fieldset>

		<fieldset>
		<legend>Dados do funcionario 2</legend>
		<label class="alinha"> Matrícula 2: </label>
		<input type="text" name="matric2"> <br>

		<label class="alinha"> Salário 2: </label>
		<input type="number" name="sal2" min="0" step="0.01"> <br>
		</fieldset>

		<fieldset>
		<legend>Dados do funcionario 3</legend>
		<label class="alinha"> Matrícula 3: </label>
		<input type="text" name="matric3"> <br>

		<label class="alinha"> Salário 3: </label>
		<input type="number" name="sal3" min="0" step="0.01"> <br>
		</fieldset>

		<button type="submit" name="enviar">Processar dados dos funcionarios</button>

		</form>	

<?php

//Sempre que misturamos num unico arquivo o formulario html com o processamento de dados de este formulario em PHP devemos fazer com que o codigo dependa dos dados inseridos pelo usuario no form seja somente executado apos o PHP detetar o clique do botão submit

if (isset($_POST['enviar'])) {
	echo"<p> Este texto aqui so deverá ser  mostrado pelo navegador, isto é, enviado pelo PHP ao cliente, APÓS o usuario clicar no botão submit.</p>";

$matric1= $_POST['matric1'];
$matric2= $_POST['matric2'];
$matric3= $_POST['matric3'];

$sal1=$_POST['sal1'];
$sal2=$_POST['sal2'];
$sal3=$_POST['sal3'];

//criando o vetor a partir das 6 variaveis simples

$funcionarios=[$matric1 => $sal1, $matric2 => $sal2, $matric3 => $sal3];//[$_POST['matric1']=>$_POST['sal1'],]poderia declarar asssim tambem e nao fazer variaveis simples

	/*echo "<pre>";
	print_r($funcionarios);
	echo "</pre>";*/

	//mostrar no formato tabular matricula e salario dos funcionarios que ganham menos de 998R

	//criando vetor auxiliar para guardar os funcionarios que ganham menos de 998

	$vetorTemp=[];

	foreach ($funcionarios as $matric => $sal) {
		if ($sal < 998) {
			
			$vetorTemp[$matric]	= $sal;
		}
	}

//agora testamos se o vetor temporario e nulo ou nao. 


	if (empty($vetorTemp)) {
		
		echo"<p>Nenhum dos funcionários cadastrados no vetor tem salário abaixo de R$998,00. </p>";
	}

	else{

		echo" <table>
			<caption> Relação de funcionários com salário abaixo de R$ 998,00</caption>
			<tr>
				<th> Matrícula </th>
				<th> Salário </th>
			</tr>";	

			foreach($vetorTemp as $matric => $sal){
					
					echo "<tr>
							<td> $matric </td>
							<td> $sal </td>

						  </tr>";
			}


		echo "</table>";

	}

}


?>

</body>
</html>