<?php

	$clientes  [ "1010-X1"]= ["Joana de Almeida",6800.00]; 
	$clientes  [ "1010-X2"]= ["Genésio de Ataíde",15300.00]; 
	$clientes  [ "1010-X3"]= ["Maria das Graças",4100.12]; 
	$clientes  [ "1010-X4"]= ["Caroline Prado",2300.76];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Lista 2 - Vetores e matrizes - Exercicio 6 </title>
	<link rel="stylesheet" href="exe06.css">
</head>
<body>
	<h1>PHP na prática: resolução da lista de exercício L2, exercício 6 </h1>
	<form action="exe06.php" method="post">
		<fieldset class="acima">
			<legend>Indique os dados solicitados:</legend>
				<label class="alinha"> Número de conta: </label>
				<input type="text" name="conta" autofocus> <br>

				<label class="alinha"> Valor em reais: </label>
				<input type="number" name="valor" min="0" step="0.01"> <br>
			
				<label>Escolha uma operação</label><br><br>
				<input type="radio" name="operacao" value="1">Depósito<br> 
				<input type="radio" name="operacao" value="2">Saque<br>
		

				<label class="alinha">Selecione uma operação:</label>
				<select name='operacao2'>
					<option value="Selecione uma opção">Selecione uma opção:</option>
					<option value='1'> Mostrar dados da operação</option>
					<option value='2'> Mostrar o cliente com maior saldo</option>
					<option value='3'> Mostrar em formato tabular a matriz atualizada</option>
				</select>	
		</fieldset>

		<button type="submit" name="enviar">Executar operação selecionada</button>
	</form>

<?php
if (isset($_POST["enviar"])) {
	
	
	$operacao2 = $_POST["operacao2"];
	
	 
	if($operacao2 == "1"){
		
		$conta = $_POST["conta"];
		$valor = $_POST["valor"];
		$operacaoBancaria = $_POST["operacao"];
		
		$encontrou = array_key_exists($conta, $clientes);
		
		
		if ($encontrou == true) { 
				
			if ($operacaoBancaria == "1") {
				$saldo = $clientes[$conta][1];
				$novoSaldo = $saldo + $valor;

			  $clientes[$conta][1] = $novoSaldo;
			  $transacao = "Depósito";
			}
			
			else{ 

				$saldo = $clientes[$conta][1];
				$novoSaldo = $saldo - $valor;

				$clientes[$conta][1] = $novoSaldo;
				$transacao = "Saque";				
			}
			
				echo "<p> Tipo de operação: $transacao<br>
						  Nro de conta: $conta <br>
						  Nome do cliente: {$clientes[$conta][0]}<br>
						  Valor: $valor<br>
						  Saldo inicial:$saldo<br>
						  Saldo atualizado: $novoSaldo<p>";			
		} 
		else{
			echo"<p>O número da conta fornecido esta errado. Confira e forneça novamente.</p>";
		}
	} 

	
		if ($operacao2 == "2") {
			
			$maiorSaldo=0;

			foreach($clientes as $conta => $vetorInterno){
					if($vetorInterno[1] > $maiorSaldo){
    					 $maiorSaldo = $vetorInterno[1];
    					 $maiorConta = $conta;
    					 $maiorNome = $vetorInterno[0];

    				 }
			}
			
			
			echo"<p> Cliente com o maior saldo:<br>
								Nome: $maiorNome<br>
								Nro de Conta: $maiorConta<br>
								Saldo: $maiorSaldo.</p>";	
		
		}
		
		
		if($operacao2 == "3")
		{
			
			$clientes["1010-X5"] = ["Florencia Pimentel",76338077.00]; 
			$clientes["1010-X6"] = ["Herval Daminelli",9926770.00];
		
			echo "<table>
								<caption> Conteúdo da matriz atualizada </caption>
										<tr>
											<th> Número de cuenta </th>
											<th> Nome </th>
											<th> Saldo </th>	
										</tr>";
						

						foreach ($clientes as $conta => $vetorInterno) {
									echo "<tr>
											<td> $conta </td>
											<td> $vetorInterno[0] </td>
											<td> $vetorInterno[1] </td>
										  </tr>";
								}	
						echo"</table>";	
			}
		}
?> 
</body>
</html>
