<?php 
class CadastroBanco{
	public function CadastroAdministrador($conexao, $nome, $email, $senha, $celular, $telefone, $cargo){
		// Executar a consulta SQL de inserção de um novo administrador
        $consulta = "INSERT INTO `administradores`(`nome`, `email`, `senha`, `celular`, `telefone`, `cargo`) VALUES ('$nome','$email','$senha','$celular','$telefone','$cargo')";
        $resultado = mysqli_query($conexao, $consulta);

		// Verificar se a inserção foi bem-sucedida
        if ($resultado) {
            return "Administrador cadastrado com sucesso!";
        } else {
            return "Erro ao cadastrar o administrador";
        }
	}

	public function CadastroUsuario($conexao, $nome, $email, $senha, $celular, $telefone){
		// Executar a consulta SQL de inserção de um novo administrador
        $consulta = "INSERT INTO `usuarios`(`nome`, `email`, `senha`, `celular`, `telefone`) VALUES ('$nome','$email','$senha','$celular','$telefone')";
        $resultado = mysqli_query($conexao, $consulta);

		// Verificar se a inserção foi bem-sucedida
        if ($resultado) {
            return "Usuário cadastrado com sucesso!";
        } else {
            return "Erro ao cadastrar o usuário";
        }
	}
}


?>