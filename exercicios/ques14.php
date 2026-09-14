<?php
$vh = 10;
$horas = 45;

if($horas >= 1 and $horas <= 40){
      $salario = $horas * $vh;
echo " seu salario final é de $salario";
}elseif ($horas > 40 and $horas<=60){
    $salario = $horas * $vh;
    $bonus1 = ($salario * 50) / 100;
    $sfinal = $salario + $bonus1;
echo " seu salario é de $sfinal";
}elseif ($horas >60 ){
    $salario = $horas * $vh;
    $bonus2 = ($salario * 100) / 100;
    $sfinal = $salario + $bonus2;
echo " seu salario é de $sfinal";
}
?>