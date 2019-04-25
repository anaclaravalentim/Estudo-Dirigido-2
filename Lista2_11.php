<?php

    print "Digite um número menor que 1000:";
    $num = fgets (STDIN);

    $unidade = $num % 10;
    $num     = ($num - $unidade) / 10;
    $dezena = $num % 10;
    $num     = ($num - $dezena) / 10;
    $centena = $num % 10;

    print "$centena  centena(s), $dezena dezena(s), $unidade unidade(s)";
 
