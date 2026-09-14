<?php
$peso =50;
$altura = 1.50;
$imc = $peso/ ($altura ** 2);

if($imc<18.5){
    echo "abaixo do peso";
}elseif($imc>=18.5 and $imc <25){
    echo "peso normal";
}else if($imc>=25 and $imc <30){
    echo "acima do peso";
}else if($imc>=30 and $imc <40){
    echo "obeso";
}else if($imc>=40){
    echo "obesidade grave";
}

?>