<?php

# Array de tipo escalar
$estudiantes=["Carlos","Jose","Vanessa","Katy"];

# Array de tipo asociativo
$tutor=[
    "nombre"=>"Carlos",
    "apellido"=>"Alfaro",
    "edad"=>27
];

# Array de multiples dimensiones
$tutor_2=[
    "nombre"=>"Vanessa",
    "apellido"=>"Calles",
    "edad"=>20,
    "cursos"=>["PHP","Python","CSS"]
];

echo count($tutor_2,COUNT_RECURSIVE);