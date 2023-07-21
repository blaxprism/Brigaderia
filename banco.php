<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "brigaderia";
	
	$connection = new mysqli($servername, $username, $password, $database);

	if ($connection->connect_error) {
		die("Erro na conexão com o banco de dados: " . $connection->connect_error);
	}
?>