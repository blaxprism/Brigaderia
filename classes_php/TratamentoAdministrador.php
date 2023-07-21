<?php
require('Tratamento.php');

class Tratamento_Administrador extends Tratamento
{
	public function tratarCargo($cargo){
		$cargo = trim($cargo); // Remove espaços em branco no início e no final do cargo
		$cargo = htmlspecialchars($cargo); // Converte caracteres especiais em entidades HTML
		return $cargo;
	}
}



?>