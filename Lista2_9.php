<?php

    print "Digite um numero:";
    $numero1  = fgets (STDIN);
    
    print "Digite outro numero:";
    $numero2  = fgets (STDIN);

    print "Mais um numero:";
    $numero3  = fgets (STDIN);

    if      ($numero1 > $numero2 and $numero2 > $numero3){
        print "$numero1\n $numero2\n $numero3";
    }

    elseif  ($numero1 > $numero2 and $numero3 > $numero2){
        print "$numero1\n $numero3\n $numero2";
    }

    elseif  ($numero2 > $numero1 and $numero1 > $numero3){
        print "$numero2\n $numero1\n $numero3";
    }

    elseif ($numero2 > $numero1 and $numero3 > $numero1){
        print "$numero2\n $numero3\n $numero1";
    }

    elseif ($numero3 > $numero1 and $numero1 > $numero2){
        print "$numero3\n $numero1\n $numero2";
    }

    else{
        print "$numero3\n $numero2\n $numero1";
    }