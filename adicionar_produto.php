<!DOCTYPE html>
<html>

<head>

    <div class="logo">
        <img src="logo_spark.png" alt="Logo Spark" style="width: 100px;"> <!--Esse trecho de código coloquei o logo, mas preciso diminuir o tamanho dele-->
    </div>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Spark - Projeto Inegrador I</title>
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style type="text/css">

        #tamanhoContainer {
            width: 500px;
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

            <div style="text-align: right">
                <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
            </div>

            <h4> Cadastro de Produtos</h4>

            <form action="_inserir_produto.php" method="post" style="margin-top: 20px">

            	<div class="form-group">
                <label>Código</label>
                <input type="number" class="form-control" name="codigo" placeholder="Insira o código do produto" autocomplete="off" required>
                  </div>

                <div style="padding-top: 20px">

              <div class="form-group">
                <label>Produto</label>
                <input type="text" class="form-control" name="produto"  placeholder="Insira o nome do produto" autocomplete="off" required >
                  </div>

            <div style="padding-top: 20px">
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-select" name="categoria" aria-label="Categoria">

                        <?php
                        include 'conexao.php';
                        $sql = "SELECT * FROM categoria order by categoria ASC";
                        $buscar = mysqli_query($conexao,$sql);

                        while ($array = mysqli_fetch_array($buscar)) {

                            $id_categoria = $array['id_categoria'];
                            $nome_categoria = $array['categoria'];
                        ?>

                        <option><?php echo $nome_categoria ?></option>

                        <?php } ?>
                      
                    </select>
                </div>

            <div style="padding-top: 20px">

                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-select" name="fornecedor" aria-label="Fornecedor">
                    <?php
                    include 'conexao.php';
                    $sql2 = "SELECT * FROM fornecedor order by nome_form ASC";
                    $buscar2 = mysqli_query($conexao, $sql2);

                    while ($array2 = mysqli_fetch_array($buscar2)) {
                        $id_fornecedor = $array2['id_form'];
                        $nome_fornecedor = $array2['nome_form'];
                    ?>

                        <option><?php echo $nome_fornecedor?></option>


                    <?php } ?>

                    </select>
                </div>
                

            <div style="padding-top: 20px">

            <div class="form-group">
                <label>Aplicação</label>
                <input type="text" class="form-control" name="aplicacao" placeholder="Qual aplicação?" required>
                  </div>

                <div style="padding-top: 20px">

            
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade de produto" required>
                  </div>

                <div style="padding-top: 20px">

            <div class="form-group">
                <label>Valor</label>
                <input type="number" class="form-control" name="valor" placeholder="Valor unitário" required autocomplete="off">
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
                
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
            </form>
    
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script type="text/javascript" src="js/bootsrap.js" ></script>
</body>

</html>