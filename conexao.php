<?php
$servername = "localhost"; //padrão - server local
$database = "projeto_cadastro"; // nome do banco de dados, se alterar o nome do banco de dados, tem que alterar
$username = "root"; //padrão - root
$password = "Ptt@5866"; // senha de conexão do banco de dados

//Criar conexão

$conexao = mysqli_connect($servername, $username, $password, $database);

?>