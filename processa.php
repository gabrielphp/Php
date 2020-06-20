<?php 
session_start();
include 'conecta.php';

$email = $_POST['username'];
$senha = $_POST['pass'];
$consulta = "SELECT * from clientes where email = '$email' and senha = '$senha'";
$resultado = $conexao->query($consulta);
$registros = $resultado->num_rows;
$resultado_usuario = mysqli_fetch_assoc($resultado);

if ($registros != 0){
	$_SESSION['id'] = $resultado_usuario['id'];
	$_SESSION['nome'] = $resultado_usuario['nome'];
	$_SESSION['email'] = $resultado_usuario['email'];
	header('location:restrito.php');
} else {
	header('location:index.html'); 
}
?>