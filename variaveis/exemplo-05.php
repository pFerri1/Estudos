<?php

$nome = "pedro";
function teste(){
    //usa global para mostrar que e a msm variavel que a de fora
    global $nome;
    echo $nome;

}
function teste2(){
    
    $nome="joao";
    echo $nome." agora no teste 2";

}
teste();
teste2();
?>