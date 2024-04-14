<?php

include 'conexao.php';


$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO fornecedor (nome_form) values ('$fornecedor')";
$inserir = mysqli_query($conexao,$sql);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container" style="width: 400 px">
	<center>
		<h3>Cadastrado com sucesso!</h3>
		<div style="mardin-top: 10px">
			<a href="adicionar_fornecedor.php" class="btn btn-sm btn-danger" style="color:#fff">Voltar</a>
		</div>

	</center>


</div>