<?php

    print "Digite um número:";
    $numero1 = fgets (STDIN);

    if ($numero1 < 0){
        print "$numero1 é negativo";
    }
    else {
        print "$numero1 é positivo";
    }
?>