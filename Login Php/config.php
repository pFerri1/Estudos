<?php
    define('HOST', '127.0.0.1');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('DB', 'login');
    

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Nao foi possivel conectar');
    if($conexao->connect_errno){
        echo "falha ao conectar:(" . $conexao->connect_errno . ")" . $conexao->connect_errno;
    } else 
    echo "Conectado ao bando de dados";
?>