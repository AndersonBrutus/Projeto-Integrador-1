<?php


include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql)


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container" style="width: 400 px">
	<center>
		<h3>Deletado com sucesso!</h3>
		<div style="mardin-top: 10px">
			<a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
		</div>

	</center>


</div>