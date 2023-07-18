<?php
/*$anoNascimento=1990;

$anoCompleto=""; */
//NA LINHA DEBAIXO TEMOS UMA VARIAVEL COM NUMERO NO NOME
$nome1="Joao";

$sobrenome = "ferri";

// usa o '.' para fazer a concatenacao 
$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;



echo $nome1;

echo "<br/>";

//destruir uma variavel
//unset($nome1);

//isset = saber se ela existe
if(isset($nome1)){
    echo $nome1;
}


?>