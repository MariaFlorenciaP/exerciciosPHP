<!DOCTYPE html>
	<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Programação WEB - lista  de exercícios 2 </title>
		<link rel="stylesheet" href="exe04.css">
	</head>
	<body>
		<h1>PHP na prática: resolução da lista de exercício L2, exercício 4 </h1>
		<form action="exe04.php" method="post">
			<fieldset>
				<legend>Dados da 1ra pessoa</legend>
				<label class="alinha"> Nome: </label>
				<input type="text" name="nome1" autofocus> <br>

				<label class="alinha"> Idade: </label>
				<input type="number" name="idade1" min="0"> <br>
			</fieldset>

			<fieldset>
				<legend>Dados da 2da pessoa</legend>
				<label class="alinha"> Nome: </label>
				<input type="text" name="nome2"> <br>

				<label class="alinha"> Idade: </label>
				<input type="number" name="idade2" min="0"> <br>
			</fieldset>

				<button type="submit" name="enviar">Processar dados</button>

		</form>	

<?php

if (isset($_POST['enviar'])) {
	

			$nome1= $_POST['nome1'];
			$nome2= $_POST['nome2'];

			$idade1=$_POST['idade1'];
			$idade2=$_POST['idade2'];
//criando o vetor 
			$pessoas=[$nome1 => $idade1, $nome2 => $idade2];
	
			echo" <table>
					<caption> Dados do vetor</caption>
							<tr>
								<th> Nome </th>
								<th> Idade </th>
							</tr>";	

			foreach($pessoas as $nome => $idade){
					
			echo "			<tr>
								<td> $nome </td>
								<td> $idade </td>

						    </tr>";
												}


			echo "</table>";

//criando vetor auxiliar 

			$vetorTemp=[];

			foreach ($pessoas as $nome => $idade) {
				if ($idade < 18) {
			
					$vetorTemp[$nome] = $idade;
								 }
												  }


	if (empty($vetorTemp)) {
		echo"<p>Nenhuma das pessoas cadastradas no vetor tem menos de 18 anos. </p>";
							}

	else{
		echo" <table>
				<caption> Pessoas menores de 18 anos</caption>
						<tr>
							<th> Nome </th>
							<th> Idade </th>
						</tr>";	

			foreach($vetorTemp as $nome => $idade){
					
					echo "<tr>
							<td> $nome </td>
							<td> $idade </td>

						  </tr>";
												   }


		echo "</table>";
	  }



		$maisVelho = max($pessoas);
		
		$pessoaMaior = array_search($maisVelho,$pessoas);
		
		echo "<p> A pessoa mais velha é $pessoaMaior e a sua idade é $maisVelho.</p>";
	
									}


?>

</body>
</html>