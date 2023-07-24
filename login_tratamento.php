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
			<?php
				session_start();
				if (!empty($_SESSION['logged'])) {
					if ($_SESSION['logged']) {
						echo" Você já está logado<br><br>";
						echo "<a href='index.php' style='border-style: solid; border-color: #ffffff; background-color: #ffffff; color: #000000;'>Retorne para a página de cadastro</a> </section>";
						exit;	
					}
				}
				require('classes_php/Tratamento.php');
				require('classes_php/Validade.php');
				require('classes_php/CadastroBanco.php');
				require('banco.php');
				require('classes_php/ConsultasBanco.php');

				if (!empty($_POST)) {
					$tratamento = new Tratamento;
					$validade = new Validade;
					$cadastro = new CadastroBanco;
					$consultas = new ConsultasBanco;

					if (!empty($_POST['email']) && $_POST['email'] != "") {
						$email = $_POST['email'] ?? "";
						$email = $tratamento->tratarEmail($email);
						$validade_campos['email'] = $validade->validarEmail($email);
					} else {
						$validade_campos['email'] = "Email vazio ou não inserido";
					}

					if (!empty($_POST['senha']) && $_POST['senha'] != "") {
						$senha = $_POST['senha'] ?? "";
						$validade_campos['senha'] = $validade->validarSenha($senha);
						$senha = $tratamento->tratarSenha($senha);
					} else {
						$validade_campos['senha'] = "Senha vazia ou não inserida";
					}
				}

				if (!empty($validade_campos) && is_array($validade_campos)) {
					$mensagemErro = $validade->verificarCamposInvalidos($validade_campos);
					if($mensagemErro == false){
						if ($consultas->Login($connection, $email, $senha)) {
							echo "Login realizado com sucesso";
							$_SESSION['logged'] = True;
						}else{	
							echo "Usuário e/ou senha inválidos";
						}
					}else{
						print($mensagemErro);
					}
				}
			?>
			<br><br>
			<a href="login.php" style="border-style: solid; border-color: #ffffff; background-color: #ffffff; color: #000000;">Retorne para a página de cadastro</a>
		</section>                
	</main>
</body>
</html>