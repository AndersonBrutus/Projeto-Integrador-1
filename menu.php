<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<style>
        body {
            background-image: url('fund.jpg'); /* Caminho relativo para a imagem de fundo */
            background-size: cover; /* Ajusta o tamanho da imagem para cobrir todo o corpo */
            background-position: center; /* Centraliza a imagem */

             .titulo {
            text-align: center;
            margin-top: -150px; /* Ajuste conforme necessário */
            font-weight: bold;
            color: white; /* Cor branca */
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Sombra com deslocamento horizontal 2px, deslocamento vertical 2px e desfoque 4px */
    
        }

          .sair {
              position: fixed;
              top: 50px;
              right: 100px;
              z-index: 9999; /* Garante que o botão esteja sempre acima de outros elementos */
        }
    </style>


</head>

<div>

  <div class="logo">
        <img src="logo_spark.png" alt="Logo Spark">
  </div>

  <div class="titulo">
        <h1>MÓDULO CADASTRO</h1>            
  </div>

<title>Sua Página</title>
    <style>
        .titulo {
            text-align: center;
            margin-top: 0px; /* Ajuste conforme necessário */
            font-weight: bold;
        }
    </style>

    <style>
        /* Estilo para o rodapé */
        .rodape {
            text-align: center;
            margin-top: 120px; /* Ajuste conforme necessário */
            color: #888; /* Cor cinza claro */
        }
    </style>

</div>


<body>

  <div class="sair">
        <a href="index.php" class="btn btn-sm btn-primary"><i class="bi bi-door-open"></i>Sair</a>
  </div>

<?php

$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])) {
  header('Location: index.php');

}


include 'conexao.php';

$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel_usuario'];

?>

<div class="container" style="margin-top: 100px">

<div class="row">

<?php

if(($nivel == 1)||($nivel == 2)) {

?>

  <div class="col-sm-6 mb-3 mb-sm-0" style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Produto</h5>
        <p class="card-text">Clique aqui para acessar o formulário de preenchimento de cadastro de produtos.</p>
        <a href="adicionar_produto.php" class="btn btn-danger">Produto</a>
      </div>
    </div>
  </div>

<?php } ?>

  <div class="col-sm-6 mb-3 mb-sm-0" style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Clique aqui para visualisar a lista, editar e excluir produtos.</p>
        <a href="listar_produtos.php" class="btn btn-danger">Lista de Produtos</a>
      </div>
    </div>
  </div>

<?php

if(($nivel == 1)||($nivel == 2)) {

?>

   <div class="col-sm-6 mb-3 mb-sm-0" style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Categoria</h5>
        <p class="card-text">Clique aqui para adicionar nova categoria de produto.</p>
        <a href="adicionar_categoria.php" class="btn btn-success">Cadastrar Categoria</a>
      </div>
    </div>
  </div>
  
<?php } ?>

<?php

if(($nivel == 1)||($nivel == 2)) {

?>

  <div class="col-sm-6"style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Fornecedor</h5>
        <p class="card-text">Clique aqui para cadastrar novo fornecedor.</p>
        <a href="adicionar_fornecedor.php" class="btn btn-warning">Cadastrar Fornecedor</a>
      </div>
    </div>
  </div>
  
<?php } ?>

<?php

if($nivel == 1) {

?>

  <div class="col-sm-6"style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar usuário</h5>
        <p class="card-text">Aprovar usuário cadastrado.</p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar usuário</a>
      </div>
    </div>
  </div>

<?php } ?>

<?php

if($nivel == 1) {

?>
  <div class="col-sm-6"style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar usuário</h5>
        <p class="card-text">Cadastrar usuário.</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuário</a>
      </div>
    </div>
  </div>

<?php } ?>
   

</div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<div class="rodape">
        <p>Spark Peças e Acessórios</p>
        <p>CNPJ: 15.791.970/0001-20</p>
</div>


</body>
</html>