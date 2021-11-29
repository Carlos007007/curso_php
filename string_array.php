<?php

$fecha_1="2021/11/29";
$fecha_2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros,-2);

echo $array_numeros[4];