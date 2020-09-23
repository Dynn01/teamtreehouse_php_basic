<?php   

$tanya=readline("pilih siapa (aku/dia/lainnya) ? ");

if($tanya=="kamu")
{
    echo "kamu memilihku!";
}elseif($tanya=="dia"){
    echo "yaudah";
}else{
    echo "ga boleh yg lain";
}

echo PHP_EOL;

$menu=readline("pilih angka 1 - 3  ");

switch($menu)
{
    case 1:
    echo "anda memilih angka 1";
break;
case 2:
    echo "anda memilih angka 2";
break;
case 3:
    echo "anda memilih angka 3";
break;
default:
echo "anda tidak memilih plihan yg tersedia";
}