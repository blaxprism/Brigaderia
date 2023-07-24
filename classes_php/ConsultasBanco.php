<?php 
class ConsultasBanco{
	public function AdministradorExiste($conexao, $email){
		// Executar a consulta SQL de seleção da tabela administradores para verificar se o usuario existe
        $consulta = "SELECT * FROM `administradores` WHERE email = '$email';";
        $resultado = mysqli_query($conexao, $consulta);

		return (mysqli_num_rows($resultado) == 1);
	}	

	public function UsuarioExiste($conexao, $email){
		// Executar a consulta SQL de seleção da tabela usuarios para verificar se o usuario existe
        $consulta = "SELECT * FROM `usuarios` WHERE email = '$email';";
        $resultado = mysqli_query($conexao, $consulta);

		return (mysqli_num_rows($resultado) == 1);
	}

	public function Login($conexao, $email, $senha) {
		// Executar a consulta SQL de seleção da tabela usuarios para verificar se o email e senha estão certos
        $consulta = "SELECT * FROM `usuarios` WHERE email = '$email' AND senha = '$senha';";
        $resultado_usuario = mysqli_query($conexao, $consulta);
		$consulta = "SELECT * FROM `administradores` WHERE email = '$email' AND senha = '$senha';";
		$resultado_administrador = mysqli_query($conexao, $consulta);

		return ((mysqli_num_rows($resultado_usuario) == 1) || (mysqli_num_rows($resultado_administrador) == 1));
	}

	public function BrigadeiroExiste($conexao, $nome){
		// Executar a consulta SQL de seleção da tabela brigadeiros para verificar se o brigadeiro existe
        $consulta = "SELECT * FROM `brigadeiros` WHERE nome = '$nome';";
        $resultado = mysqli_query($conexao, $consulta);

		return (mysqli_num_rows($resultado) == 1);
	}

	public function Cardapio($conexao) {
		// Executar a consulta SQL de seleção da tabela usuarios para verificar se o email e senha estão certos
        $consulta = "SELECT nome, massa, cobertura FROM `brigadeiros`;";
        $resultado = mysqli_query($conexao, $consulta);
		
		return $resultado;
	}
}
?>