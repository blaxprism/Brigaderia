<?php
class Tratamento{
	public function tratarNome($nome){
		// Código para tratar o nome
		$nome = trim($nome); // Remove espaços em branco no início e no final do nome
		$nome = htmlspecialchars($nome); // Converte caracteres especiais em entidades HTML
		return $nome;
	}

	public function tratarEmail($email){
		// Código para tratar o email
		$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Filtra e remove caracteres inválidos do email
		return $email;
	}

	public function tratarSenha($senha) {
		// Código para tratar a senha
		$senha = md5($senha); // Aplica uma função de hash (MD5) à senha para maior segurança
		return $senha;
	}

	public function tratarCelular($celular){
		// Remove quaisquer caracteres não numéricos do número de celular
		$celular = preg_replace("/[^0-9]/", "", $celular);
		return $celular;
	}

	public function tratarTelefone($telefone){
		// Remove quaisquer caracteres não numéricos do número de telefone
		$telefone = preg_replace("/[^0-9]/", "", $telefone);
		return $telefone;
	}
}
?>
