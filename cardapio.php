<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/png" href="https://img.freepik.com/icones-gratis/bombom_318-797825.jpg?w=2000">
	<title>Cardápio</title>
	<link rel="stylesheet" href="estilos/style.css">
</head>
<body>
	<main>
		<?php include('header.php');?>
		
		<section>
			<div id="cardapio">
				<h1>Cardápio</h1>
				<ol>
					<?php 
						//incluindo arquivos
						require('banco.php');
						require('classes_php/ConsultasBanco.php');

						//instanciando classes
						$consultas = new ConsultasBanco;
						$cardapio = $consultas->Cardapio($connection);

						$linha = mysqli_fetch_assoc($cardapio);
						// calcula quantos dados retornaram
						$total = mysqli_num_rows($cardapio);
						// se o número de resultados for maior que zero, mostra os dados
						if($total > 0) {
							// inicia o loop que vai mostrar todos os dados
							do {
								echo "<li>Sabor: " . $linha['nome'] . "</li>";
								echo "<ul>";
								echo "<li>Massa: " . $linha['massa'] . "</li>"; 
								echo "<li>Cobertura: " . $linha['cobertura'] . "</li>";
								echo "</ul>";
							// finaliza o loop que vai mostrar os dados
							}while($linha = mysqli_fetch_assoc($cardapio));
						// fim do if
						}

						//var_dump($cardapio);
					?>
					
				</ol>
			</div>
		</section>
	</main>
</body>
</html>
