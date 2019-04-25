<?php

    // A série de Fibonacci é formada pela sequência 0,1,1,2,3,5,8,13,21,34,55, [...] 
    //Faça um programa que gere a série até que o valor seja maior que 500. 

    $anterior = 0;
    $cont  = 1;


    while ($cont < 500){
    $cont = $cont + $anterior;
    $anterior = $cont - $anterior; 
    print "$cont \n";
    
    sleep (1);
 }
