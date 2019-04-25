<?php

    print "Digite um número:";
    $numero1 = fgets (STDIN);

    print "Digite outro número:";
    $numero2 = fgets (STDIN);

    if ($numero1 < $numero2){
        print " O maior número é  $numero1";
    }
    else {
        print " O maior número é $numero2";
    }
?>