<?php

include 'conexao.php';
include 'script/password.php';


$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';


$sql = "INSERT INTO usuarios (nome_usuario,mail_usuario,senha_usuario,nivel_usuario,status) values ('$nomeusuario','$mail',sha1('$senha'),$nivel,'$status')";

$inserir = mysqli_query($conexao, $sql);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container" style="width: 400 px">
	<center>
		<h3>Usuário cadastrado com sucesso!</h3>
		<div style="mardin-top: 10px">
			<a href="cadastro_usuario.php" class="btn btn-sm btn-danger" style="color:#fff">Voltar</a>
		</div>

	</center>

</div>