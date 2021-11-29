<?php

    $edad=7;

    $resultado = match(true){
        $edad >= 60 => "Eres de la tercera edad",
        $edad >= 30 => "Eres adulto",
        $edad >= 18 => "Eres adulto joven",
        default => "Eres un niño"
    };

    echo $resultado;