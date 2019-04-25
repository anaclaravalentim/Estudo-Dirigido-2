<?php

    // Faça um programa que peça dois números, base e expoente, calcule e mostre o primeiro número
    // elevado ao segundo número. Não utilize a função de potência da linguagem. 

    print "Digite números para serem transformados em potência\n";
    
    print "Digite um número para a base:";
    $base      = fgets (STDIN);

    print "Digite um número para ser expoente:";
    $expoente  = fgets (STDIN);

    print  "O números digitado foi $base elevado a $expoente\n";

    $potencia = pow ($base, $expoente);

    print "O resultado é $potencia";