<?php
	require('Validade.php');
	class Validade_Administrador extends Validade
	{
		public function validarCargo($cargo) {
			$cargosValidos = ['dono', 'moderador', 'testador'];

			// Verifica se o cargo está presente na lista de cargos válidos
			if (!in_array($cargo, $cargosValidos)) {
				return false;
			} else {
				// Verifica se o cargo possui no máximo 255 caracteres
				if (strlen($cargo) > 255) {
					return false;
				}else{
					return true;
				}
			}
		}
	}

?>
