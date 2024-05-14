<!DOCTYPE html>
<html>
<head>
	<img src="logo_spark.png" alt="Logo Spark" style="width: 100px;"> <!--Esse trecho de código coloquei o logo, mas preciso diminuir o tamanho dele-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container" style="width: 400px; margin-top: 40px">
	<div style="text-align: right">
		<a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
	</div>

	<h4>Cadastro de Usuário</h4>
	<form action="_insert_usuario.php" method="post">
		<div class="form-group">
			<label>Nome do Usuário</label>
			<input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
		</div>
</br>
		<div class="form-group">
			<label>E-mail</label>
			<input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Seu e-mail">
		</div>
</br>
		<div class="form-group">
			<label>Senha do Usuário</label>
			<input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
		</div>
</br>
		<div class="form-group">
			<label>Repetir Senha</label>
			<input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)">
			<small>Precisa ser igual a senha digitada acima.</small>
		</div>
</br>		
	<div class="form-group">
		<label>Nível de Acesso</label>
		<select name="nivelusuario" class="form-select">
			
				<option value="1">Administrador</option>
				<option value="2">Estoquista</option>
				<option value="3">Instalador</option>
			
		</select>
	</div>
</br>
	<div style="text-align: right">
	<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
	</div>

	</form>

</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	
	<!--https://ideone.com/doOGX--SCRIPT VALIDADOR DE SENHA-->
	<script>
	function validaSenha (input){ 
		if (input.value != document.getElementById('txtSenha').value) {
    	input.setCustomValidity('Repita a senha corretamente');
  	} else {
    	input.setCustomValidity('');
  	}
} 
	</script>
<style>
    .rodape {
        text-align: center;
        margin-top: 60px;
    }
</style>

<div class="rodape">
        <p>Spark Peças e Acessórios</p>
        <p>CNPJ: 15.791.970/0001-20</p>
</div>


</body>
</html>