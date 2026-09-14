<?php
$vlhora = 30;
$hora = 8;
$dias = 30;
$salario = $vlhora * $hora * $dias;
$desfgts = $salario - (11/100)*$salario;
$dessind = $desfgts - (3/100)*$desfgts;

if($dessind <= 900){
    echo " bruto $salario\n desconto do fgts 11% e o do sindicato 35%\n salario final $dessind";
}elseif($dessind > 900 and $dessind >= 1500){
    echo " bruto $salario\n desconto do fgts 11% e o do sindicato 35%\n salario final $dessind";
}elseif($dessind > 1500 and $dessind >= 2500){
    echo " bruto $salario\n desconto do fgts 11% e o do sindicato 35%\n salario final $dessind";
}elseif($dessind <= 900){
    echo " bruto $salario\n desconto do fgts 11% e o do sindicato 35%\n salario final $dessind";
}









?>