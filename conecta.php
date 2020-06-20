<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "uninove";

	$conexao = new MySQLi("$host", "$usuario", "$senha","$banco");
	if ($conexao -> connect_error){
		echo "Erro";
	} else{
		echo "Conectado";
	}
	
?>