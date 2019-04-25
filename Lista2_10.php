<?php

//Faça um algoritmo que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c.
//O programa deverá pedir os valores de a, b e c e fazer as consistências, informando ao usuário nas seguintes situações:
//Se o usuário informar o valor de A igual a zero, a equação não é do segundo grau e o programa não deve pedir os demais valores, sendo encerrado;
//Se o delta calculado for negativo, a equação não possui raizes reais. Informe ao usuário e encerre o programa;  
//Se o delta calculado for igual a zero a equação possui apenas uma raiz real; informe-a ao usuário;
//Se o delta for positivo, a equação possui duas raízes reais; informe-as ao usuário;  

    print "Digite os valores de a, b e c para realização da conta:\n";
    print "Digite o valor de a:";
    $a = fgets (STDIN);

    print "Digite o valor de b:";
    $b = fgets (STDIN);

    print "Digite o valor de c:";
    $c = fgets (STDIN);

    $delta = pow ($b,2) - 4* $a * $c;

    if ($a == 0){
        print "A equação não é do segundo grau";
    }
    elseif ($delta == 0){
        $x1 = -$b +sqrt ($delta) / (2*$a);
        print "A equação possui apenas uma raiz real, que é $x1";
    }
    elseif ($delta > 0){
        $x2 = -$b +sqrt ($delta) / (2*$a);
        $x3 = -$b -sqrt ($delta) / (2*$a);

        print "A equação possui duas raízes reais\n";
        print "Que são $x2 e $x3";
    }
    else{
        print "A equação não possui raizes reais.";
    }
