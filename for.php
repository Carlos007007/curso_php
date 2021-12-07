<?php

    $numero=$_POST['numero'];
    for($i=12; $i>=1; $i--){
        echo $numero." X ".$i." = ".$i*$numero."<br>";
    }