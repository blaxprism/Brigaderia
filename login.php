<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/png" href="https://img.freepik.com/icones-gratis/bombom_318-797825.jpg?w=2000">
	<title>Login</title>
	<link rel="stylesheet" href="estilos/style.css"> 
</head>
<body>
	<main>
		<?php include('header.php');?>
		<section>
			<form action="login_tratamento.php" method="POST"> 
				<fieldset>
					<h1>Login</h1>
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" maxlength="255" placeholder="Digite seu Email" required><br><br> 

					<label for="senha">Senha:</label>
					<input type="password" name="senha" id="senha" minlength="8" maxlength="255" placeholder="Digite sua senha" required><br><br>
					
					<input type="submit" value="Entrar"> 
				</fieldset>
			</form>
		</section>                
	</main>
</body>
</html>