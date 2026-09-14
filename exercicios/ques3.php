<?php

$num1 = 7;
$num2 = 46;
$num3 = 67;
// 123 321 213 312 231 132
if($num1>$num2 and $num2>$num3){
    echo "$num1, $num2, $num3";

} elseif($num3>$num2 and $num2>$num1){
    echo "$num3, $num2, $num1";

} elseif($num2>$num1 and $num1>$num3){
    echo "$num2, $num1, $num3";

} elseif($num3>$num1 and $num1>$num2){
    echo "$num3, $num1, $num2";

} elseif($num1>$num3 and $num3>$num2){
    echo "$num1, $num3, $num2";

} else{
    echo "$num2, $num3, $num1";
}

?>