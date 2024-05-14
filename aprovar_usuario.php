<!DOCTYPE html>
<html>
<head>
    <img src="logo_spark.png" alt="Logo Spark" style="width: 100px;"> <!--Esse trecho de código coloquei o logo, mas preciso diminuir o tamanho dele-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aprovar usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ac46d08977.js" crossorigin="anonymous"></script>

</head>
<body>

<div class="container" style="margin-top: 40px;">

<div style="text-align: right;">
        <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</div>
<h3> Lista de Usuários</h3>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Nível</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>

        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM usuarios WHERE status = 'Inativo'";
            $busca = mysqli_query($conexao,$sql);

            while ($array = mysqli_fetch_array($busca)) {
            
                $id_usuario = $array['id_usuario'];
                $nome_usuario = $array['nome_usuario'];
                $mail = $array['mail_usuario'];
                $nivel = $array['nivel_usuario'];
            
        ?>

    <tr>
        <td><?php echo $nome_usuario ?></td>
        <td><?php echo $mail ?></td>
        <td><?php echo $nivel ?></td>

        <td>
            <a class="btn btn-success btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button"><i class="fa-solid fa-check"></i></i>&nbsp;Administrador</a>
            <a class="btn btn-warning btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button"><i class="fa-solid fa-check"></i></i>&nbsp;Atendente</a>
            <a class="btn btn-dark btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button"><i class="fa-solid fa-check"></i></i>&nbsp;Instalador</a>
            <a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>

            <!--<i class="fa-solid fa-check"> é o tick do icone-->
        </td>
        
    </tr>

<?php } ?>

</tbody>
</table>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>
