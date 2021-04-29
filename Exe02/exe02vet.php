<?php
//retirando os dados da tabela e fazendo o PHP criar o vetor

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
	<title>Vetores - lista 2 </title>
	<link rel="stylesheet" href="exe02.css">
</head>

<body>
	<h1>Exercicio 2 - Lista 2 </h1>

<?php

$operacao = $_POST["operacao"];


if($operacao == 1){
	
	$capital = $_POST["nome-capital"];	

	$populacao = $capitais[$capital];	

	echo "<p>  A capital selecionada é <span> $capital </span> e sua população é <span> $populacao </span>. </p>";
                 }



if($operacao == 2){

	ksort($capitais); 

	echo "<table>
			<caption> Relação de capitais e suas populações em ordem crecente de capital</caption>
				<tr> 

					<th> Capital </th>
					<th> População  </th>

				</tr>"; 

				
			foreach($capitais as $capital => $populacao){
					
					echo "<tr>
							<td> $capital </td>
							<td> $populacao </td>

						  </tr>";
														}

	echo "</table>"; 
					}




if($operacao == 3){

	arsort($capitais); 
	echo "<table>
			<caption> Relação de capitais e suas populações em orden decrescente pela população</caption>
				<tr> 

					<th> Capital </th>
					<th> População  </th>

				</tr>"; 

				

			foreach($capitais as $capital => $populacao){
					
					echo "<tr>
							<td> $capital </td>
							<td> $populacao </td>

						  </tr>";
														}

	echo "</table>"; 
					}


if($operacao == 4){

	$capital = $_POST["outra-capital"];

	$encontrou = array_key_exists($capital, $capitais);

	
		if($encontrou == true){  

			$populacao = $capitais[$capital];
			
			echo "<p>  A cidade de <span> $capital </span> tem uma população de <span> $populacao </span>. </p>";

							}

		else{ echo "<p> A cidade <span>$capital</span> não encontrada no sistema. Tente novamente.</p>";

			}
				}


if($operacao == 5){
	
	$media = array_sum($capitais)/count($capitais);
	$mediaFormatada = number_format($media,2,',','.');
	
	echo "<p> A média populacional é $mediaFormatada.";
				 }



if($operacao == 6){
	$media = array_sum($capitais)/count($capitais);
	
	
	
	$quantos = 0;
	
	foreach($capitais as $capital => $populacao){
		
		if($populacao < $media){
			$quantos++;
							   }
		
												}

	$mediaFormatada = number_format($media,2,',','.');
 	echo "<p> A média populacional é $mediaFormatada e o número de capitais com população abaixo da média é $quantos.</p>";
				 }


if($operacao == 7){
		
		$maiorPopulacao = max($capitais);
		
		$capitalMaior = array_search($maiorPopulacao,$capitais);
		
		echo "<p> A capital com maior população é $capitalMaior e sua população $maiorPopulacao.</p>";
				 }


if($operacao == 8){
		
		$stringVetor =   implode(" - " , $capitais);
		
		echo "<p> O conteúdo do vetor é $stringVetor</p>";
				  }

	
if($operacao == 9){
		
		
		$capitais["Brasilia"] = 2481000;
		$capitais["Salvador de Bahia"] = 2677000;
 		
		echo "<table>
			<caption> Novo vetor gerado </caption>
				<tr> 

					<th> Capital </th>
					<th> População  </th>

				</tr>"; 

				

			foreach($capitais as $capital => $populacao){
					
					echo "<tr>
							<td> $capital </td>
							<td> $populacao </td>

						  </tr>";
														}

	echo "</table>"; 
										
				 }


?>
	
</body>
</html>
