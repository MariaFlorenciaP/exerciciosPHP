<?php
	$capitais = [ "Florianópolis" => 477000, 
				"São Paulo" => 12100000,
				"João Pessoa" => 720950,
				"Salvador" => 2670000,
				"Porto Alegre" => 1480000
				
							];
?>

<!DOCTYPE html>
	<html lang="pt-BR">
		<head>
			<meta charset="utf-8">
			<title>Vetores - Lista de exercicios 2 </title>
			<link rel="stylesheet" href="exe02.css">
		</head>

	<body>
		<h1>PHP na prática: resolução da lista de exercício L2, exercício 2 </h1>
		<fieldset>
			<legend>Capitais e sua população</legend>
			<form action = "exe02vet.php" method = "post">
				<label>Selecione uma capital:</label><br><br>
			
				<?php
					foreach($capitais as $capital => $habitantes){
					echo "<input type='radio' name='nome-capital' value='$capital'>$capital<br>";
					}
				?>
	
<br>
				<label class="alinha">Forneça o nome da capital a ser pesquisada:</label>
				<input type="text" name="outra-capital"/><br><br>
		</fieldset>

		<fieldset>
			<legend>Operações</legend>
			<label class="alinha">Selecione uma operação:</label>
				<select name='operacao'>
					<option name="operacao" value="Selecione uma opção">Selecione uma opção:</option>
					<option name="operacao" value='1'> Mostrar a população da capital</option>
					<option name="operacao" value='2'> Mostrar a relação das capitais e suas populações em ordem crescente pela capital</option>
					<option name="operacao" value='3'> Mostrar a relação das capitais e suas populações em ordem decrescente pela população</option>
					<option name="operacao" value='4'> Mostrar a população da capital escrita na caixa de texto</option>
					<option name="operacao" value='5'> Calcular a média populacional</option>
					<option name="operacao" value='6'> Capitais abaixo da média</option>
					<option name="operacao" value='7'> Mostrar a maior população e sua capital</option>
					<option name="operacao" value='8'> Converter vetor em string</option>
					<option name="operacao" value='9'> Vetor final com capitais adicionadas</option>
				</select>	


		</fieldset>

					<button type="submit" name="enviar">Executar operação selecionada</button>
</form>
</body>
</html>
