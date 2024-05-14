<?php session_start(); ?>

<?php

include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

$sql = "SELECT mail_usuario, senha_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($buscar);

if($total === 0) {

	header('Location: erro.php');
		} 


		if ($total === 1) {
			$linha = mysqli_fetch_array($buscar);
			$mail = $linha['mail_usuario'];
			$senha = $linha['senha_usuario'];
			
			

			$usuario;
			$senhacodificada = sha1($senhausuario);

			if ($mail === $usuario) {
				$_SESSION['usuario'] = $mail;

				if ($senha === substr($senhacodificada,0,15)) {
					$_SESSION['senha'] = $senha;
					header('Location: menu.php');

				} else {
					header('Location: erro.php');
				}
				} else {
					header('Location: erro.php');
				}

		} 

	 
?>