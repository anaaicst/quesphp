<?php
$peg1 = "SIM";
$peg2 = "NÃO";
$peg3 = "SIM";
$peg4 = "NÃO";
$peg5 = "SIM";
$res = 0;
if($peg1 == "SIM" ){
    $res +1;
}if($peg2 == "SIM" ){
    $res +1;
}if($peg3 == "SIM" ){
    $res +1;
}if($peg4 == "SIM" ){
    $res +1;
}if($peg5 == "SIM" ){
    $res +1;
}if( $res == 2){
    echo "suspeito";
}if( $res == 2 and $res == 3){
    echo "cómplice";
}if( $res == 5){
    echo "assassino";
}if ($res == 1 and $res == 0){
    echo "inocente";
}
    

?>