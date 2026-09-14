<?php
// $num1 = 45;
// $num2 = 30;
// $num3 = 42;
// echo "o maior numero entre $num1,$num2,$num3 é:";
// if ($num1>$num2 and $num2>$num3){
//     echo "o maior numero é $num1";
// } elseif ($num2>$num3 and $num3>$num1){
//     echo "o maior numero é $num2";
// } elseif ($num3>$num2 and $num2>$num1){
//     echo "o maior numero é $num3";
// } 
// echo "o menor numero entre $num1,$num2,$num3 é:";
// if ($num1<$num2 and $num2<$num3){
//     echo "o menor numero é $num1";
// } elseif ($num2<$num1 and $num1<$num3){
//     echo "o menor numero é $num2";
// } elseif ($num3<$num2 and $num2<$num3){

// }


$num1 = 7;
$num2 = 46;
$num3 = 67;
// 123 321 213 312 231 132
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