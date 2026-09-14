<?php
$not1 = 8;
$not2 = 4;
$media = ($not1+$not2)/2;

if($media == 10 and $media>=9 ){
    echo "suas notas são $not1 e $not2, a media foi $media, o conceito foi A, e você está APROVADO";
}elseif($media<9 and $media>=7.5 ){
    echo "suas notas são $not1 e $not2, a media foi $media, o conceito foi B, e você está APROVADO";
}elseif($media<7.5 and $media>=6 ){
    echo "suas notas são $not1 e $not2, a media foi $media, o conceito foi C, e você está APROVADO";
}elseif($media<6 and $media>=4 ){
    echo "suas notas são $not1 e $not2, a media foi $media, o conceito foi D, e você está REPROVADO";
}elseif($media<4 and $media>=0 ){
    echo "suas notas são $not1 e $not2, a media foi $media, o conceito foi E, e você está REPROVADO";
}

?>