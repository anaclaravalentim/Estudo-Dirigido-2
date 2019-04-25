<?php

    print "Informe o valor de três produtos\n";

    print "Informe o primeiro valor:";
    $valor1  = fgets (STDIN);

    print "Informe o segundo valor:";
    $valor2  = fgets (STDIN);

    print "Informe o terceiro valor:";
    $valor3  = fgets (STDIN);

    if ($valor1 < $valor2 and $valor1 < $valor3){
        print "Compre o primeiro produto, é mais barato.";
    }
 
    elseif ($valor2 < $valor1 and $valor2 < $valor3){
        print "Compre o segundo produto, é mais barato.";
    }
 
    else {
        print "Compre o terceiro procuto, é mais barato.";
    }
 


