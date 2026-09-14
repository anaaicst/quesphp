<?php
$produto = 100;
$tipo1 = "pagamento a vista";
$tipo2 = "a vista no cartão";
$tipo3 = "a vista de 3 vezes";
$tipo4 = "a 6 vezes com juros de 10%";
$escolha = $tipo4;
if ($escolha == $tipo1){
    $vista = 10/100;
    $porcentagem = $produto * $vista;
    echo $produto - $porcentagem;
}elseif ($escolha == $tipo2){
    $cartao = 5/100;
    $porcenta = $produto * $cartao;
    echo $produto - $porcenta;
}elseif ($escolha == $tipo3){
    $des = 3;
    echo $produto / $des;
}elseif ($escolha == $tipo4){
    $num = 6;
    $car = $produto / $num;
    $juros = 10/100;
    $por= $juros * $produto;
    echo $car + $por;
}





?>