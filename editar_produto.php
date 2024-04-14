<?php

include 'conexao.php';


$id = $_GET['id'];


?>

<!DOCTYPE html>
<html>

<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Spark - Projeto Inegrador I</title>
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style type="text/css">

        #tamanhoContainer {
            width: 500px; <!-- Essa funçao serve para reduzir a largura do container -->
        }

        #botao {
            background-color: #CA0700; /*cor de fundo */
            color: #ffffff; /*cor da letra */
            font-weight: bold;
        }

    </style>

</head>
<body>

        <div class="container" id="tamanhoContainer" style="margin-top: 40px">
            <h4> Cadastro de Produtos</h4>

            <form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
            	<?php

            	$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            	$buscar = mysqli_query($conexao, $sql);
            	while ($array = mysqli_fetch_array($buscar)) {

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

            	<div class="form-group">
                <label>Código</label>
                <input type="number" class="form-control" name="codigo" value="<?php echo $codigo ?>" disabled>
                <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
                  </div>

                <div style="padding-top: 20px">

              <div class="form-group">
                <label>Produto</label>
                <input type="text" class="form-control" name="produto" value="<?php echo $produto ?>" >
                  </div>

                <div style="padding-top: 20px">

            <label>Categoria</label>
                <select class="form-select" name="categoria" aria-label="Categoria">
                        <option selected>Selecione a categoria</option>
                        <option value="Peça">Peça</option>
                        <option value="Acessório">Acessório</option>
                        <option value="Lubrificantes">Lubrificante</option>
                        <option value="Bateria">Bateria</option>

            </select>

                <div style="padding-top: 20px">

            <div class="form-group">
                <label>Fornecedor</label>
                <input type="text" class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
                  </div>

                <div style="padding-top: 20px">

            <div class="form-group">
                <label>Aplicação</label>
                <input type="text" class="form-control" name="aplicacao" value="<?php echo $aplicacao ?>">
                  </div>

                <div style="padding-top: 20px">

            
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
                  </div>

                <div style="padding-top: 20px">

            <div class="form-group">
                <label>Valor</label>
                <input type="number" class="form-control" name="valor" value="<?php echo $valor ?>">
                  </div>

                <div style="padding-top: 20px">

            <label>Garantia</label>
            <select class="form-select" name="garantia" aria-label="garantia">
                  <option selected>Selecione o tempo de garantia</option>
                  <option value="3 meses">3 meses</option>
                  <option value="6 meses">6 meses</option>
                  <option value="12 meses">12 meses</option>
                  <option value="24 meses">24 meses</option>
                  <option value="Indeterminado">Indeterminado</option>

                </select>

                <div style="padding-top: 20px">
                    
            <div style="text-align: right;"> <!-- Deixar o botão cadastrar do lado direito -->
                <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
            </div>

            	<?php } ?>

            </form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script type="text/javascript" src="js/bootsrap.js" ></script>
</body>

</html>