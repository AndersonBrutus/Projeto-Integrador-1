<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listagem de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ac46d08977.js" crossorigin="anonymous"></script>

</head>
<body>

<div class="container" style="margin-top: 40px">

<div style="text-align: right;">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</div>

<h3>Lista de Produtos</h3>
<br>

<form action="" method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Digite o termo de busca" name="termo" autocomplete="off"> <!--Campo de busca-->
        <button class="btn btn-outline-secondary" type="submit">Buscar</button> <!--Botão de Buscar-->
    </div>
</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Aplicação</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Valor</th>
      <th scope="col">Garantia</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
      
        <?php
            include 'conexao.php';
            // Verifica se foi feita uma busca
            if(isset($_GET['termo'])){
                $termo = $_GET['termo'];
                // Query para buscar os produtos que contenham o termo digitado
                $sql = "SELECT * FROM `estoque` WHERE `produto` LIKE '%$termo%'";
            } else {
                // Se não foi feita busca, exibe todos os produtos
                $sql = "SELECT * FROM `estoque`";
            }
            $busca = mysqli_query($conexao,$sql);

            while($array = mysqli_fetch_array($busca)) {

                $id_estoque = $array['id_estoque'];
                $codigo = $array['codigo'];
                $produto = $array['produto'];
                $categoria = $array['categoria'];
                $fornecedor = $array['fornecedor'];
                $aplicacao = $array['aplicacao'];
                $quantidade = $array['quantidade'];
                $valor = $array['valor'];
                $garantia = $array['garantia'];

        ?>
    <tr>

        <td><?php echo $codigo ?></td>

        <td><?php echo $produto ?></td>

        <td><?php echo $categoria ?></td>

        <td><?php echo $fornecedor ?></td>

        <td><?php echo $aplicacao ?></td>

        <td><?php echo $quantidade ?></td>

        <td><?php echo $valor ?></td>

        <td><?php echo $garantia ?></td>

        <td><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-regular fa-trash-can"></i>&nbsp;Excluir</a>

        </td>
        

    <?php } ?>
     
    </tr>
  
</table>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</body>
</html>
