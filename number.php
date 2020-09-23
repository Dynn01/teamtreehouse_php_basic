<?php

$number=1;
$float=3.1;
$int_float=(int)$float;
$str_float=(string)$float;
$str_boolean=(bool)$float;

var_dump($str_boolean);

function kali(int $satu, int $dua):int
{
    return $satu*$dua;
}

/**
 * operator 
 * substract (-)
 * addition (+)
 * multiply (*)
 * divide (/)
 * modulus (%)
 * increment (++)
 * decrement (--)
 */

 $angka=1;
 $angka++; //2
 $angka--; //1
 $angka+=9; //10
 $angka/=5; //2
 $angka.=7; //27

 echo "\n".$angka;

 var_dump(--$angka);


