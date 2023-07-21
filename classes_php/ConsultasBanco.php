<?php 
class ConsultasBanco{
	public function AdministradorExiste($conexao, $email){
		// Executar a consulta SQL de seleção da tabela administradores para verificas se um email já é cadastrado
        $consulta = "SELECT * FROM `administradores` WHERE email = '$email';";
        $resultado = mysqli_query($conexao, $consulta);

		return (mysqli_num_rows($resultado) == 1);
	}	

	public function UsuarioExiste($conexao, $email){
		// Executar a consulta SQL de seleção da tabela administradores para verificas se um email já é cadastrado
        $consulta = "SELECT * FROM `usuarios` WHERE email = '$email';";
        $resultado = mysqli_query($conexao, $consulta);

		return (mysqli_num_rows($resultado) == 1);
	}	
}
?>