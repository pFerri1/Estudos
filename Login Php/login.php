<?php
session_start();
include('config.php');
if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);

$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select user, senha from usuarios where user = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['user'] = $usuario;
    header('Location: painel.php');
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}
