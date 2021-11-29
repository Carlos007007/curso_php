<?php

$i=1;
while($i<=10){
    if($i==3){
        $i++;
        continue;
    }
    echo $i."<br>";
    $i++;
}