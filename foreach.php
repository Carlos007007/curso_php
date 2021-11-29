<?php

$productos = [
    ["codigo" => "A0001", "descripcion" => "Mouse"],
    ["codigo" => "A0002", "descripcion" => "Teclado"],
    ["codigo" => "A0003", "descripcion" => "Monitor"],
    ["codigo" => "A0004", "descripcion" => "Impresor"]
];

foreach($productos as $prod){
    echo $prod["codigo"]." - ".$prod["descripcion"]."<br>";
}