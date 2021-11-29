<?php

$total=100;

if($total>100):
    $total=$total-($total*0.20);
endif;

echo "El total a pagar es de: $".$total;