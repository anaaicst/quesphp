<?php
$lado1 =7;
$lado2 =6;
$lado3 =3;
 
if($lado1 == $lado2 and $lado2== $lado3){
    echo"triângulo equilatero";
}elseif($lado1 == $lado2 and $lado1 != $lado3 ){
    echo"triângulo isósceles";
}elseif($lado1 == $lado3 and $lado1 != $lado2 ){
    echo"triângulo isósceles";
}elseif($lado3 == $lado2 and $lado2 != $lado1 ){
    echo"triângulo isósceles";
}elseif($lado1 != $lado2 and $lado1 != $lado3){
    echo"triângulo escaleno";
}


?>