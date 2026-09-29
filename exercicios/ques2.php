<?php
$num1 = 7;
$num2 = 46;
$num3 = 67;

if($num1<$num2 and $num2<$num3){
    echo "o menor numero é: $num1. o maior numero é: $num3";

} elseif($num3<$num2 and $num2<$num1){
    echo "o menor numero é: $num3. o maior numero é: $num1";

} elseif($num2<$num1 and $num1<$num3){
    echo "o menor numero é: $num2. o maior numero é: $num3";

} elseif($num3<$num1 and $num1<$num2){
    echo "o menor numero é: $num3. o maior numero é: $num2";

} elseif($num1<$num3 and $num3<$num2){
    echo "o menor numero é: $num1. o maior numero é: $num2";

} else{
    echo "o menor numero é: $num2. o maior numero é: $num1";
}
?>