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
			<?php
				require('classes_php/TratamentoAdministrador.php');
				require('classes_php/ValidadeAdministrador.php');
				require('classes_php/CadastroBanco.php');
				require('banco.php');
				require('classes_php/ConsultasBanco.php');

				if (!empty($_POST)) {
					$tratamento = new Tratamento_Administrador;
					$validade = new Validade_Administrador;
					$cadastro = new CadastroBanco;
					$consultas = new ConsultasBanco;

					if (!empty($_POST['nome']) && $_POST['nome'] != "") {
						$nome = $_POST['nome'] ?? "";
						$nome = $tratamento->tratarNome($nome);
						$validade_campos['nome'] = $validade->validarNome($nome);
					} else {
						$validade_campos['nome'] = "Nome vazio ou não definido";
					}

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

					if (!empty($_POST['celular']) && $_POST['celular'] != "") {
						$celular = $_POST['celular'] ?? "";
						$celular = $tratamento->tratarCelular($celular);
						$validade_campos['celular'] = $validade->validarCelular($celular);
					} else {
						$validade_campos['celular'] = "Celular vazio ou não inserido";
					}

					if (!empty($_POST['telefone']) && $_POST['telefone'] != "") {
						$telefone = $_POST['telefone'] ?? "";
						$telefone = $tratamento->tratarTelefone($telefone);
						$validade_campos['telefone'] = $validade->validarTelefone($telefone);
					} else {
						$validade_campos['telefone'] = "Telefone vazio ou não inserido";
					}

					if (!empty($_POST['cargo']) && $_POST['cargo'] != "") {
						$cargo = $_POST['cargo'] ?? "";
						$cargo = $tratamento->tratarCargo($cargo);
						$validade_campos['cargo'] = $validade->validarCargo($cargo);					
					} else {
						$validade_campos['cargo'] = "Cargo vazio ou não inserido";
					}
				}

				if (!empty($validade_campos) && is_array($validade_campos)) {
					$mensagemErro = $validade->verificarCamposInvalidos($validade_campos);
					if($mensagemErro == false){
						if ($consultas->AdministradorExiste($connection, $email)) {
							echo "Administrador já cadastrado";
						}else{	
							$resultado = $cadastro->CadastroAdministrador($connection, $nome, $email, $senha, $celular, $telefone, $cargo);
							echo $resultado;
						}
					}else{
						print($mensagemErro);
					}
				}
			?>
			<br><br>
			<a href="cadastro_administrador.php" style="border-style: solid; border-color: #ffffff; background-color: #ffffff; color: #000000;">Retorne para a página de cadastro</a>
		</section>                
	</main>
</body>
</html>