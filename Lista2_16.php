<?php

//Faça um programa que leia 5 números e informe a soma e a média dos números. 

print "Digite 5 números para sua soma e média:\n\n";
   
    print "Primeiro número:";
    $n1    = fgets (STDIN);
 
    print "Segundo número:";
    $n2    = fgets (STDIN);
 
    print "Terceiro número:";
    $n3    = fgets (STDIN);

    print "Quarto número:";
    $n4    = fgets (STDIN);

    print "Quinto número:";
    $n5    = fgets (STDIN);

    $soma  =  $n1 + $n2 + $n3 + $n4 + $n5;
    
    $media =  ($n1 + $n2 + $n3 + $n4 + $n5) / 5;

    print "A soma dos números é de $soma \n";
    print "A média dos números é de $media \n";