<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Minha 6º aplicação em PHP - lista 2 </title>
	<link rel="stylesheet" href="css/form-array.css">
</head>
<body>
	<h1>PHP na prática: resolução da lista de exercício L2, exercício 8</h1>
	<form method = "post" action="index.php">
	<fieldset>
		<legend> Forneça os dados do 1º cliente: </legend>
			<label class="alinha" >CPF </label>
			<input type="text" name="cpf-cliente1" placeholder="Ex.: 000.000.000-00" maxlength="14" required>
			<label class="alinha" >Nome </label>
			<input type="text" name="nome-cliente1" autofocus required><br>
			<label class="alinha" >Valor </label>
			<input type="number" name="valor-cliente1" min="0" step="0.01" required><br><br>

			<label >Selecione a forma de pagamento</label><br><br>
			<input type="radio" name="pagamento-cliente1" value="1">
			<label for="dinheiro"> Dinheiro </label><br>
			<input type="radio" name="pagamento-cliente1" value="2">
			<label for="cartao">Cartão</label><br>
			<input type="radio" name="pagamento-cliente1" value="3">
			<label for="outro">Outro</label><br><br>
	</fieldset>
	<fieldset>
		<legend> Forneça os dados do 2º cliente: </legend>
			<label class="alinha" >CPF </label>
			<input type="text" name="cpf-cliente2" placeholder="Ex.: 000.000.000-00" maxlength="14" required>
			<label class="alinha" >Nome </label>
			<input type="text" name="nome-cliente2" autofocus required><br>
			<label class="alinha" >Valor </label>
			<input type="number" name="valor-cliente2" min="0" step="0.01" required><br><br>

			<label >Selecione a forma de pagamento</label><br><br>
			<input type="radio" name="pagamento-cliente2" value="1">
			<label for="dinheiro"> Dinheiro </label><br>
			<input type="radio" name="pagamento-cliente2" value="2">
			<label for="cartao">Cartão</label><br>
			<input type="radio" name="pagamento-cliente2" value="3">
			<label for="outro">Outro</label><br><br>
	</fieldset>
	<fieldset>
		<legend> Forneça os dados do 3º cliente: </legend>
			<label class="alinha" >CPF </label>
			<input type="text" name="cpf-cliente3" placeholder="Ex.: 000.000.000-00" maxlength="14" required>
			<label class="alinha" >Nome </label>
			<input type="text" name="nome-cliente3" autofocus required><br>
			<label class="alinha" >Valor </label>
			<input type="number" name="valor-cliente3" min="0" step="0.01" required><br><br>

			<label >Selecione a forma de pagamento</label><br><br>
			<input type="radio" name="pagamento-cliente3" value="1">
			<label for="dinheiro"> Dinheiro </label><br>
			<input type="radio" name="pagamento-cliente3" value="2">
			<label for="cartao">Cartão</label><br>
			<input type="radio" name="pagamento-cliente3" value="3">
			<label for="outro">Outro</label><br><br>
	</fieldset>
	<fieldset>
		<legend> Forneça os dados do 4º cliente: </legend>
			<label class="alinha" >CPF </label>
			<input type="text" name="cpf-cliente4" placeholder="Ex.: 000.000.000-00" maxlength="14" required>
			<label class="alinha" >Nome </label>
			<input type="text" name="nome-cliente4" autofocus required><br>
			<label class="alinha" >Valor </label>
			<input type="number" name="valor-cliente4" min="0" step="0.01" required><br><br>

			<label >Selecione a forma de pagamento</label><br><br>
			<input type="radio" id="dinheiro" name="pagamento-cliente4" value="1">
			<label for="dinheiro"> Dinheiro </label><br>
			<input type="radio" id="cartao" name="pagamento-cliente4" value="2">
			<label for="cartao">Cartão</label><br>
			<input type="radio" id="outro" name="pagamento-cliente4" value="3">
			<label for="outro">Outro</label><br><br><br>

		<button type="submite" name="enviar">Finalizar e Enviar</button>
	</fieldset>
<?php
if(isset($_POST["enviar"])){
	$cadClientes[$_POST["cpf-cliente1"]]=[$_POST["nome-cliente1"], $_POST["valor-cliente1"], $_POST["pagamento-cliente1"]];
	$cadClientes[$_POST["cpf-cliente2"]]=[$_POST["nome-cliente2"], $_POST["valor-cliente2"], $_POST["pagamento-cliente2"]];
	$cadClientes[$_POST["cpf-cliente3"]]=[$_POST["nome-cliente3"], $_POST["valor-cliente3"], $_POST["pagamento-cliente3"]];
	$cadClientes[$_POST["cpf-cliente4"]]=[$_POST["nome-cliente4"], $_POST["valor-cliente4"], $_POST["pagamento-cliente4"]];

/*	echo "<pre>";
	print_r($cadClientes);
	echo "</pre>";*/
	
	//Mostrar nome e o valor menor compra
	$vetorTemp = [];
	foreach($cadClientes as $cpf => $vetorInterno):
		if($vetorInterno[1] > 0):
			$vetorTemp[$vetorInterno[0]] = $vetorInterno[1];
	endif;
	endforeach;

	if(empty($vetorTemp)):
		echo "<p>Nenhum valor foi cadastro, tente novamente!</p>";
	else:
		$valorMenor = min($vetorTemp);
		$nomeMenor = array_search($valorMenor, $vetorTemp);
		echo "<p>
				<span>Cliente com menor valor de compra</span><br>
				Nome: $nomeMenor<br>
				Valor: $valorMenor</p>";
	endif;
	
	//Mostrar na página web, todos os dados dos clientes que efetuaram pagamento
	//com cartão de crédito ou em dinheiro.
	echo "<table>
			<caption> Clientes, pagamentos com cartão de crédito ou dinheiro</caption>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
				<th>Valor</th>
				<th>Tipo de pagamento</th>
			</tr>";
	foreach($cadClientes as $cpf => $vetorInterno):
		if(isset($vetorInterno[2])):
			if($vetorInterno[2] == 1 || $vetorInterno[2] == 2):
				if($vetorInterno[2] == 1):
					echo "<tr>
							<td> $vetorInterno[0] </td>
							<td> $cpf </td>
							<td>R$ $vetorInterno[1] </td>
							<td> Dinheiro </td>
						</tr>";
				elseif($vetorInterno[2] == 2):
					echo "<tr>
							<td> $vetorInterno[0] </td>
							<td> $cpf </td>
							<td>R$ $vetorInterno[1] </td>
							<td> Cartão </td>
						</tr>";
				endif;
			endif;
		endif;
	endforeach;
	echo "</table>";

//Convertendo cada valor de compra em seu respectivo número de dotz
	echo "<table>
			<caption> Dotz clientes </caption>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
				<th>Valor R$</th>
				<th> Dotz </th>
				<th>Tipo de pagamento</th>
			</tr>";
	foreach($cadClientes as $cpf => $vetorInterno):
		if(isset($vetorInterno[2])):
			if($vetorInterno[2] == 1 || $vetorInterno[2] == 2):
				$valorDotz = $vetorInterno[1]/2;
				$valorDotz = floor($valorDotz);
				echo "<tr>
						<td> $vetorInterno[0]</td>
						<td> $cpf </td>
						<td> $vetorInterno[1] </td>
						<td> $valorDotz </td>
						<td> Dinheiro/Cartão </td>
					</tr>";
			elseif($vetorInterno[2]==3):
				$valorDotz = $vetorInterno[1]/4;
				$valorDotz = floor($valorDotz);
				echo "<tr>
						<td> $vetorInterno[0]</td>
						<td> $cpf </td>
						<td> $vetorInterno[1] </td>
						<td> $valorDotz </td>
						<td> Outro </td>
					</tr>";
			endif;
		endif;
	endforeach;
	echo "</table>";
}
?>
</body>
</html>
