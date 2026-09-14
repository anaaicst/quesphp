<?php
$fileduplo = 4;
$alcatra =5;
$picanha =9;
$cartao = "sim";
$desconto = 5/100;
$total= 0;
if ($fileduplo<=5){
    $va1 = $total += $fileduplo * 4.90;
    echo "$va1";
    if($fileduplo>5){
        $va2 = $total += $fileduplo * 5.80;
        echo "$va2";
    }
}elseif($alcatra<=5){
    $va3 = $total += $alcatra * 5.90;
    echo "$va3";
    if($alcatra>5){
        $va4 = $total += $alcatra * 6.80;
        echo "$va4";
    }
}elseif($picanha<=5){
    $va5 = $total += $picanha * 6.90;
    echo "$va5";
    if($picanha>5){
        $va6=$total += $picanha * 7.80;
        echo "$va6";
    }
}elseif($cartao=="sim"){
    $variavel = $total - $desconto;
    echo"$variavel";
}
    
?>