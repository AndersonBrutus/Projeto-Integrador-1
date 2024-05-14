<?php

include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];

if ($nivel == 1) {

	$update = "UPDATE usuarios SET status= 'Ativo', nivel_usuario = 1 WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao,$update);
	echo "<div style='text-align: center; font-weight: bold;'>ADMINISTRADOR APROVADO!</div>";
}

if ($nivel == 2) {

	$update = "UPDATE usuarios SET status= 'Ativo', nivel_usuario = 2 WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao,$update);
	echo "<div style='text-align: center; font-weight: bold;'>ATENDENTE APROVADO!</div>";
}

if ($nivel == 3) {

	$update = "UPDATE usuarios SET status= 'Ativo', nivel_usuario = 3 WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao,$update);
	echo "<div style='text-align: center; font-weight: bold;'>INSTALADOR APROVADO!</div>";
}

header("Location: aprovar_usuario.php"); //esse comando redireciona para a página de aprovação

?>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container" style="width: 400 px">
	<center>
		<h3>Cadastrado com sucesso!</h3>
		<div style="mardin-top: 10px">
			<a href="adicionar_categoria.php" class="btn btn-sm btn-danger" style="color:#fff">Voltar</a>
		</div>

	</center>


</div> */ -->