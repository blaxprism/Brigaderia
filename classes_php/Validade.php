<?php
class Validade{
	public function validarNome($nome) {
		// Verifica se o nome contém apenas letras, espaços, apóstrofos e hífens
		if (!preg_match("/^[\p{L}\s'-]+$/u", $nome)) {
			return false;
		} else {
			// Verifica se o nome possui no máximo 255 caracteres
			if (strlen($nome) > 255) {
				return false;
			}else{
				return true;
			}
		}
	}

	public function validarEmail($email) {


		// Verifica se o email possui um formato válido
		if (!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email)) {
			return false;
		} else {
			// Verifica se o email possui no máximo 255 caracteres
			if (strlen($email) > 255) {
				return false;
			}else{   
				return true;
			}
		}
	}

	public function validarSenha($senha) {
		// Verifica se a senha possui pelo menos 8 caracteres
		if (strlen($senha) < 8) {
			return false;
		}

		// Verifica se a senha contém pelo menos uma letra maiúscula, uma letra minúscula e um número
		if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/", $senha)) {
			return false;
		}

		return true;
	}

	public function validarCelular($celular) {
		// Verifica se o celular possui um formato válido (DDD + número de 9 dígitos)
		if (!preg_match("/^\d{2}9\d{8}$/", $celular)) {
			return false;
		} else {
			return true;
		}
	}

	public function validarTelefone($telefone) {
		// Verifica se o telefone possui um formato válido (10 dígitos)
		if (!preg_match("/^\d{10}$/", $telefone)) {
			return false;
		} else {
			return true;
		}
	}

	public function verificarCamposInvalidos($validade_campos) {
		$campos_invalidos = [];
		foreach ($validade_campos as $campo => $valido) {
			if (!$valido) {
				switch ($campo) {
					case 'nome':
						$campos_invalidos[] = "O nome inserido é inválido.";
						break;
					case 'email':
						$campos_invalidos[] = "O email inserido é inválido.";
						break;
					case 'senha':
						$campos_invalidos[] = "A senha inserida é inválida.";
						break;
					case 'celular':
						$campos_invalidos[] = "O número de celular inserido é inválido.";
						break;
					case 'telefone':
						$campos_invalidos[] = "O número de telefone inserido é inválido.";
						break;
					case 'cargo':
						$campos_invalidos[] = "O cargo inserido é inválido.";
						break;
					default:
						$campos_invalidos[] = "Campo inválido: " . ucfirst($campo);
				}
			}
		}
		if (!empty($campos_invalidos)) {
			return implode("<br>", $campos_invalidos);
		}else{
			return false;
		}
	}
}
?>
