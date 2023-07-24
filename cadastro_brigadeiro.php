<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/png" href="https://img.freepik.com/icones-gratis/bombom_318-797825.jpg?w=2000">
	<title>Cadastro de brigadeiros</title>
	<link rel="stylesheet" href="estilos/style.css"> 
</head>
<body>
	<main>
		<?php include('header.php');?>
		<section>
			<form action="cadastro_brigadeiro_tratamento.php" method="POST"> 
				<fieldset>
					<h1>Cadastro de brigadeiros</h1>
					<label for="nome">Nome:</label>
					<input type="text" name="nome" id="nome" maxlength="255" placeholder="Digite o nome do brigadeiro" required><br><br> 
					<label for="massa">Massa:</label>
					<input type="text" name="massa" id="massa" maxlength="255" placeholder="Digite a sabor da massa do brigadeiro" required><br><br> 
					<label for="cobertura">Cobertura:</label>
					<input type="text" name="cobertura" id="cobertura" maxlength="255" placeholder="Digite qual vai ser a cobertuda do brigadeiro" required><br><br> 
					<input type="submit" value="Cadastrar"> 
				</fieldset>
			</form>
		</section>                
	</main>
</body>
</html>
