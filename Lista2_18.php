<?php

    // Faça um programa que peça 10 números inteiros
    // calcule e mostre a quantidade de números pares e a quantidade de números impares. 

    
   
    print "Digite 10 números :\n";
   
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

    print "Sexto número:";
    $n6  = fgets (STDIN);
 
    print "Sétimo número:";
    $n7  = fgets (STDIN);
 
    print "Oitavo número:";
    $n8  = fgets (STDIN);

    print "Nono número:";
    $n9  = fgets (STDIN);

    print "Décimo número:";
    $n10  = fgets (STDIN);

    $contpar = 0;
    $contimp  = 0;
    
    
    //Primeiro número
    if ($n1 % 2 == 0){
        print "$n1 é par\n";
        $contpar = $contpar + 1;
    }
    else {
        print "$n1 é impar\n";
        $contimp = $contimp +1;
    }
     
    //Segundo número
    if ($n2 % 2 == 0){
        print "$n2 é par\n";
        $contpar = $contpar + 1;
    }
    else {
        print "$n2 é impar\n";
        $contimp = $contimp +1;
    }

    //Terceiro número
    if ($n3 % 2 == 0){
        print "$n3 é par\n";
        $contpar = $contpar + 1;
    }
    else {
        print "$n3 é impar\n";
        $contimp = $contimp +1;
    }

    //Quarto número
    if ($n4 % 2 == 0){
        print "$n4 é par\n";
        $contpar = $contpar + 1;
    }
    else {
        print "$n4 é impar\n";
        $contimp = $contimp +1;
    }

    //Quinto número
    if ($n5 % 2 == 0){
        print "$n5 é par\n";
        $contpar = $contpar + 1;
    }
    else {
        print "$n5 é impar\n";
        $contimp = $contimp +1;
    }

    //Sexto número
    if ($n6 % 2 == 0){
        print "$n6 é par\n";
        $contpar = $contpar + 1;
    }
    else {
        print "$n6 é impar\n";
        $contimp = $contimp +1;
    }

    //Sétimo número
    if ($n7 % 2 == 0){
        print "$n7 é par\n";
        $contpar = $contpar + 1;
    }
    else {
        print "$n7 é impar\n";
        $contimp = $contimp +1;
    }

     //Oitavo número
     if ($n8 % 2 == 0){
        print "$n8 é par\n";
        $contpar = $contpar + 1;
    }
    else {
        print "$n8 é impar\n";
        $contimp = $contimp +1;
    }

     //Nono número
     if ($n9 % 2 == 0){
        print "$n9 é par\n";
        $contpar = $contpar + 1;
    }
    else {
        print "$n9 é impar\n";
        $contimp = $contimp +1;
    }

     //Décimo número
     if ($n10 % 2 == 0){
        print "$n10 é par\n";
        $contpar = $contpar + 1;
    }
    else {
        print "$n10 é impar\n";
        $contimp = $contimp +1;
    }

     
    print "Total de numeros pares é $contpar\n\n";
    print "Total de numeros impares é $contimp\n\n";

    


