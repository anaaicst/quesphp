<?php
$atual = 800;

if($atual<=280){
    $calculo = $atual * 20/100;
    $total = $atual + $calculo;
    Echo "seu salario anterior era de valor $atual, teve um aumento de 20%, seu aumento foi de $calculo e seu novo salario é de $total";

}elseif($atual>280 and $atual>=700){
    $calculo = $atual * 15/100;
    $total = $atual + $calculo;
    Echo "seu salario anterior era de valor $atual, teve um aumento de 15%, seu aumento foi de $calculo e seu novo salario é de $total";

}elseif($atual>700 and $atual>=1500){
    $calculo = $atual * 10/100;
    $total = $atual + $calculo;
    Echo "seu salario anterior era de valor $atual, teve um aumento de 10%, seu aumento foi de $calculo e seu novo salario é de $total";

}elseif($atual>1500 ){
    $calculo = $atual * 5/100;
    $total = $atual + $calculo;
    Echo "seu salario anterior era de valor $atual, teve um aumento de 5%, seu aumento foi de $calculo e seu novo salario é de $total";

}

?>