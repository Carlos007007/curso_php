<?php
    $calificacion_1=6;
    $calificacion_2=5;
    $calificacion_3=4;

    $promedio=($calificacion_1+$calificacion_2+$calificacion_3)/3;

    if($promedio>=7):
        echo "Estudiante aprobado con calificacion: ".$promedio;
    else:
        echo "Estudiante reprobado con calificacion: ".$promedio;
    endif;