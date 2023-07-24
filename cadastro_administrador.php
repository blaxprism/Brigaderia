<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/png" href="https://img.freepik.com/icones-gratis/bombom_318-797825.jpg?w=2000">
	<title>Cadastro de administrador</title>
	<link rel="stylesheet" href="estilos/style.css"> 
</head>
<body>
	<main>
		<?php include('header.php');?>
		<section>
			<form action="cadastro_administrador_tratamento.php" method="POST"> 
				<fieldset>
					<h1>Cadastro de Administrador</h1>
					<label for="nome">Nome:</label>
					<input type="text" name="nome" id="nome" maxlength="255" placeholder="Digite seu nome" required><br><br> 
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" maxlength="255" placeholder="Digite seu Email" required><br><br> 
					<label for="senha">Senha:</label>
					<input type="password" name="senha" id="senha" minlength="8" maxlength="255" placeholder="Digite sua senha" required><br><br> 
					<label for="celular">Celular(somente números):</label>
					<input type="text" name="celular" id="celular"  minlength="11" maxlength="11" placeholder="Digite seu número de celular" required><br><br> 
					<label for="telefone">Telefone(somente números):</label>
					<input type="text" name="telefone" id="telefone" minlength="10" maxlength="10" placeholder="Digite seu número de telefone" required><br><br>
					Cargo: <br>
					<input type="radio" name="cargo" id="cargo1" value="dono" required>
					<label for="cargo1">dono</label><br> 
					<input type="radio" name="cargo" id="cargo2" value="moderador" required>
					<label for="cargo2">moderador</label><br> 
					<input type="radio" name="cargo" id="cargo3" value="testador" required>
					<label for="cargo3">testador</label> 
					
					<input type="submit" value="Cadastrar"> 
				</fieldset>
			</form>
		</section>                
	</main>
</body>
</html>
