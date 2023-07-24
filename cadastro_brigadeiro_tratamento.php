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
			<?php
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

					if (!empty($_POST['nome']) && $_POST['nome'] != "") {
						$nome = $_POST['nome'] ?? "";
						$nome = $tratamento->tratarNome($nome);
						$validade_campos['nome'] = $validade->validarNome($nome);
					} else {
						$validade_campos['nome'] = "Nome vazio ou não definido";
					}

					if (!empty($_POST['massa']) && $_POST['massa'] != "") {
						$massa = $_POST['massa'] ?? "";
						$massa = $tratamento->tratarNome($massa);
						$validade_campos['massa'] = $validade->validarNome($massa);
					} else {
						$validade_campos['massa'] = "Nome vazio ou não definido";
					}

					if (!empty($_POST['cobertura']) && $_POST['cobertura'] != "") {
						$cobertura = $_POST['cobertura'] ?? "";
						$cobertura = $tratamento->tratarNome($cobertura);
						$validade_campos['cobertura'] = $validade->validarNome($cobertura);
					} else {
						$validade_campos['cobertura'] = "Nome vazio ou não definido";
					}

				}

				if (!empty($validade_campos) && is_array($validade_campos)) {
					$mensagemErro = $validade->verificarCamposInvalidos($validade_campos);
					if($mensagemErro == false){
						if ($consultas->BrigadeiroExiste($connection, $nome)) {
							echo "Brigadeiro já cadastrado";
						}else{	
							$resultado = $cadastro->CadastroBrigadeiro($connection, $nome, $massa, $cobertura);
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