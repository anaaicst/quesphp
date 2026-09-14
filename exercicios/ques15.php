<?php
$quantidade = 104;

if($quantidade >= 1 and $quantidade <= 100){
    $valorkwh = 0.50;
    $total = $quantidade*$valorkwh;
echo "seu consumo fi de $quantidade, o valor do kwh é de $valorkwh, o valor a pagar é $total";
}elseif($quantidade >= 101 and $quantidade <= 200){
    $valorkwh2 = 0.70;
    $total = $quantidade*$valorkwh2;
echo "seu consumo foi de $quantidade, o valor do kwh é de $valorkwh2, o valor a pagar é $total";
}elseif($quantidade >= 201 and $quantidade <= 300){
    $valorkwh3 = 0.90;
    $total = $quantidade*$valorkwh3;
echo "seu consumo foi de $quantidade, o valor do kwh é de $valorkwh3, o valor a pagar é $total";
}elseif($quantidade >= 301){
    $valorkwh4 = 1.10;
    $total = $quantidade*$valorkwh4;
echo "seu consumo foi de $quantidade, o valor do kwh é de $valorkwh4, o valor a pagar é $total";
}
?>