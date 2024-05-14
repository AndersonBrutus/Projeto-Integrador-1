<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable" />
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style type="text/css">
        body {
            background-image: url('fund2.jpg'); /* Caminho relativo para a imagem de fundo */
            background-size: cover; /* Ajusta o tamanho da imagem para cobrir todo o corpo */
            background-position: center; /* Centraliza a imagem */
            margin: 0; /* Remove a margem padrão do corpo */
            padding: 0; /* Remove o preenchimento padrão do corpo */
            height: 50vh; /* Define a altura do corpo como 100% da altura da tela */
        }

        #tamanho {
            width: 350px;
            margin-top: 150px;
            border-radius: 10px;
            border: 0px solid #f3f3f3;
            background-color: #fff33;
            padding: 50px; <!--Esse comando eu deixo a tela Stática-->
            position: relative; /* Adicionado para posicionar os logotipos */
        }

        .logo-univesp {
            position: absolute;
            top: 40px;
            right: 40px;
        }

        .logo-spark {
            position: absolute;
            top: 40px;
            left: 40px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .btn-entrar {
            float: right;
        }
    </style>

</head>
<body>

    <div class="container" id="tamanho">
        <img src="logo_univesp.png" class="logo-univesp" width="100px" height="100px">
        <img src="logo_spark.png" class="logo-spark" width="100px" height="100px">
        <form action="index1.php" method="post">
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
            </div>

            <button type="submit" class="btn btn-sm btn-success btn-entrar">Entrar</button>
    </div>
    </form>
    
    <div style="margin-top: 10px">
        <center>
            <small style="color: white">Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php">  aqui</a></small> 
        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="rodape" style="margin-top: 400px; text-align: center;">
    <p style="color: grey;">by Spark Peças e Acessórios, Brazil, 2024</p>
</div>


</body>
</html>
