<?php


    //. Faça um programa que leia 5 números e informe o maior número

   print "Digite 5 números:\n";
   
    print "Primeiro número:";
    $n1  = fgets (STDIN);
 
    print "Segundo número:";
    $n2  = fgets (STDIN);
 
    print "Terceiro número:";
    $n3  = fgets (STDIN);

    print "Quarto número:";
    $n4  = fgets (STDIN);

    print "Quinto número:";
    $n5  = fgets (STDIN);

    if      ($n1 > $n2 and $n1 > $n3 and $n1 > $n4 and $n1 > $n5){
        print "O primeiro número digitado ($n1) é o maior";
    }

    elseif  ($n2 > $n1 and $n2 > $n3 and $n2 > $n4 and $n2 > $n5){
        print "O segundo número digitado ($n2) é o maior";
    }

    elseif  ($n3 > $n1 and $n3 > $n2 and $n3 > $n4 and $n3 > $n5){
        print "O terceiro número digitado ($n3) é o maior";
    }

    elseif  ($n4 > $n1 and $n4 > $n2 and $n4 > $n3 and $n4 > $n5){
        print "O quarto número digitado ($n4) é o maior";
    }

    elseif  ($n5 > $n1 and $n5 > $n2 and $n5 > $n3 and $n5 > $n4){
        print "O quinto número digitado ($n5) é o maior";
    }


