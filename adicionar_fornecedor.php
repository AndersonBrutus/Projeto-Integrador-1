<!DOCTYPE html>
<html>
<head>
	<div class="logo">
        <img src="logo_spark.png" alt="Logo Spark" style="width: 100px;"> <!--Esse trecho de código coloquei o logo, mas preciso diminuir o tamanho dele-->
  	</div>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<style type="text/css">
		#botao {
            background-color: #CA0700; /*cor de fundo */
            color: #ffffff; /*cor da letra */
            font-weight: bold;
        }

	</style>

</head>
<body>

<div class="container" style="margin-top:40px; widht: 500px">
	<div style="text-align: right">
                <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>

	<h4>Cadastro de Fornededor</h4>
	</br>
	<form action="_inserir_fornecedor.php" method="post">
		
		<label>Fornecedor</label>		
		<div class="form-group">
			
			<input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do Fornecedor" autocomplete="off">
		</div>
		</br>
		<div style="text-align: right">
		<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
	</div>
	</form>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>