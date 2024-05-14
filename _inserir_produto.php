<?php

include 'conexao.php';

    $codigo = $_POST['codigo']; // recebe o valor do atributo
    $produto = $_POST['produto'];
    $categoria = $_POST['categoria'];
    $fornecedor = $_POST['fornecedor'];
    $aplicacao = $_POST['aplicacao'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];
    $garantia = $_POST['garantia'];


/*echo*/ $sql = "INSERT INTO `estoque`( `codigo`, `produto`, `categoria`, `fornecedor`, `aplicacao`, `quantidade`, `valor`, `garantia`) VALUES ($codigo,'$produto','$categoria','$fornecedor','$aplicacao',$quantidade,$valor,'$garantia')";


/*echo $produto;*/

$inserir = mysqli_query($conexao,$sql);

?> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px" >

	<center>
		<h4> Produto cadastrado com sucesso!</h4>
	</center>	
	<div style="padding-top: 20px">
		<center>
		<a href="menu.php" role="button" class=" btn ntn-sm btn-primary">Retornar ao menu!</a>
		</center>

	</div>

</div>
