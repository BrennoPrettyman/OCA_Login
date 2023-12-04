<?php
$servidor = 'localhost';
$login = 'root';
$senha = 'root';
$banco = 'db_sistema';

$conexao = mysqli_connect($servidor, $login, $senha, $banco);

$nome = $_POST['user'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$insert = "INSERT INTO `tb_user` (`id_user`, `nm_user`, `login`, `senha`)
            VALUES (NULL, '$nome', '$email', '$senha')";

$sql = mysqli_query($conexao, $insert);
?>