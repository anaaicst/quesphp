<?php
$forca = 8;
$inteligencia = 50000000;
$agilidade = 8;
 
if($forca > $inteligencia and $forca > $agilidade){
    $classe = "guerreiro";
    echo " força\n inteligencia\n agilidade\n a sua classe é $classe";
}elseif($inteligencia > $forca and $inteligencia > $agilidade){
    $classe = "mago";
    echo " força\n inteligencia\n agilidade\n a sua classe é $classe";
}elseif($agilidade > $forca and $agilidade > $inteligencia){
    $classe = "arqueiro";
    echo " força\n inteligencia\n agilidade\n a sua classe é $classe";
}elseif ($forca == $inteligencia or $forca == $agilidade){
    $classe = "classe hibrida";
    echo " força\n inteligencia\n agilidade\n a sua classe é $classe";
}
?>