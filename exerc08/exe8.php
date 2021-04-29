<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Lista 2 - Vetores e matrizes - Exercicio 7 </title>
	<link rel="stylesheet" href="exe08.css">
</head>
<body>
	<h1>PHP na prática: resolução da lista de exercício L2, exercício 8 </h1>
	<form action="exe8.php" method="post">
	
		<fieldset class="acima">
			<legend>Dados do cliente 1:</legend>
				<label class="alinha"> CPF: </label>
				<input type="text" name="cpf1" autofocus> <br>

				<label class="alinha"> Nome: </label>
				<input type="text" name="nome1"> <br>
				
				<label class="alinha"> Valor da compra: </label>
				<input type="number" name="valor1" min="0" step="0.01"> <br><br>

				<label class="alinha">Forma de pagamento:</label><br>
				<input type="radio" name="pagamento1" value="1">Dinheiro<br>
				<input type="radio" name="pagamento1" value="2">Cartão<br>
				<input type="radio" name="pagamento1" value="3">Outro<br>
			
		</fieldset>

		<fieldset class="acima">
			<legend>Dados do cliente 2:</legend>
				<label class="alinha"> CPF: </label>
				<input type="text" name="cpf2" autofocus> <br>

				<label class="alinha"> Nome: </label>
				<input type="text" name="nome2"> <br>
				
				<label class="alinha"> Valor da compra: </label>
				<input type="number" name="valor2" min="0" step="0.01"> <br><br>

				<label class="alinha">Forma de pagamento:</label><br>
				<input type="radio" name="pagamento2" value="1">Dinheiro<br>
				<input type="radio" name="pagamento2" value="2">Cartão<br>
				<input type="radio" name="pagamento2" value="3">Outro<br>
			
		</fieldset>

		<fieldset class="acima">
			<legend>Dados do cliente 3:</legend>
				<label class="alinha"> CPF: </label>
				<input type="text" name="cpf3" autofocus> <br>

				<label class="alinha"> Nome: </label>
				<input type="text" name="nome3"> <br>
				
				<label class="alinha"> Valor da compra: </label>
				<input type="number" name="valor3" min="0" step="0.01"> <br><br>

				<label class="alinha">Forma de pagamento:</label><br>
				<input type="radio" name="pagamento3" value="1">Dinheiro<br>
				<input type="radio" name="pagamento3" value="2">Cartão<br>
				<input type="radio" name="pagamento3" value="3">Outro<br>
			
		</fieldset>

		<fieldset class="acima">
			<legend>Dados do cliente 4:</legend>
				<label class="alinha"> CPF: </label>
				<input type="text" name="cpf4" autofocus> <br>

				<label class="alinha"> Nome: </label>
				<input type="text" name="nome4"> <br>
				
				<label class="alinha"> Valor da compra: </label>
				<input type="number" name="valor4" min="0" step="0.01"> <br><br>

				<label class="alinha">Forma de pagamento:</label><br>
				<input type="radio" name="pagamento4" value="1">Dinheiro<br>
				<input type="radio" name="pagamento4" value="2">Cartão<br>
				<input type="radio" name="pagamento4" value="3">Outro<br>
			
		</fieldset>

	
		
		<button type="submit" name="enviar">Calcular</button>
	</form>
	<?php
	if (isset($_POST["enviar"])) {


						$cpf1 = $_POST["cpf1"];
						$cpf2 = $_POST["cpf2"];
						$cpf3 = $_POST["cpf3"];
						$cpf4 = $_POST["cpf4"];

						$nome1 = $_POST["nome1"];
						$nome2 = $_POST["nome2"];
						$nome3 = $_POST["nome3"];
						$nome4 = $_POST["nome4"];

						$valor1 = $_POST["valor1"];
						$valor2 = $_POST["valor2"];
						$valor3 = $_POST["valor3"];
						$valor4 = $_POST["valor4"];

						$pagamento1=$_POST["pagamento1"];
						$pagamento2=$_POST["pagamento2"];
						$pagamento3=$_POST["pagamento3"];
						$pagamento4=$_POST["pagamento4"];

						$clientes [$cpf1] = [$nome1,$valor1,$pagamento1];
						$clientes [$cpf2] = [$nome2,$valor2,$pagamento2];
						$clientes [$cpf3] = [$nome3,$valor3,$pagamento3];
						$clientes [$cpf4] = [$nome4,$valor4,$pagamento4];


								echo "<p><span>*** Dados dos clientes cadastrados ***</span><br>";//item a

						foreach ($clientes as $cpf => $vetorInterno) {
									echo "<p> 
											 CPF: $cpf<br>
											 Nome: $vetorInterno[0]<br>
											 Valor da compra:$vetorInterno[1]<br> 
											</p>";

											
						}
											
					$vetorTemp = [];
					foreach($clientes as $cpf => $vetorInterno){
									
									if($vetorInterno[1] > 0){
									$vetorTemp[$vetorInterno[0]] = $vetorInterno[1];    //item b
									}
					}

								
					if(empty($vetorTemp)){
									echo "<p>Erro, confira e tente novamente</p>";
					}				
					else{
									$menorValor = min($vetorTemp);
									$menorNome = array_search($menorValor, $vetorTemp);
									
									echo"<p>A menor compra efetuada foi $menorValor feita pelo cliente $menorNome </p>";
						}			
										
					
		




echo "<table>
			<caption> Clientes que efetuaram pagamento com cartão de crédito ou dinheiro</caption>  
			<tr>
				<th>CPF</th>
				<th>Nome</th>
				<th>Valor</th>
				
			</tr>";
	foreach($clientes as $cpf => $vetorInterno){
		if($vetorInterno[2] == 1 || $vetorInterno[2] == 2){				//item c
		
				
					echo "<tr>
							<td> $cpf </td>
							<td> $vetorInterno[0] </td>
							<td> $vetorInterno[1] </td>
							
						</tr>";

			}
	}			

			echo"</table>";
				
	



echo "<table>
			<caption> Cantidad de DOTZ </caption>  
			<tr>
				<th>CPF</th>
				<th>Nome</th>
				<th>DOTZ</th>
				
			</tr>";
			foreach ($clientes as $cpf => $vetorInterno) {
			if ($vetorInterno[2] == 1 || $vetorInterno[2] == 2) {
							
																			//item d
			$vetorInterno[1] = $vetorInterno[1]/2;
			
				echo "<tr>
							<td> $cpf </td>
							<td> $vetorInterno[0] </td>
							<td> $vetorInterno[1] </td>
							
						</tr>";
			}

			else {$vetorInterno[1] = $vetorInterno[1]/4;
			
				echo "<tr>
							<td> $cpf </td>
							<td> $vetorInterno[0] </td>
							<td> $vetorInterno[1] </td>
							
						</tr>"; 
				}
				
			
			

	
}
echo"</table>";

}


	?>
</body>
</html>