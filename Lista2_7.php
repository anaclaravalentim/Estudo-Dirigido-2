<?php

    print "Digite o primeiro numero:";
    $numero1  = fgets (STDIN);

    print "Digite o segundo numero:";
    $numero2  = fgets (STDIN);

    print "Digite o terceiro numero:";
    $numero3  = fgets (STDIN);

    if     ($numero1 > $numero2 and $numero2 > $numero3){
    print "$numero1 é o maior numero\n $numero3 é o menor";
}
    elseif ($numero1 > $numero2 and $numero3 > $numero2){
    print "$numero1 é o maior numero\n $numero2 é o menor";
}
    elseif ($numero2 > $numero1 and $numero1 > $numero3){
    print "$numero2 é o maior numero\n $numero3 é o menor";
}
    elseif ($numero2 > $numero1 and $numero3 > $numero1){
    print "$numero2 é o maior numero\n $numero1 é o menor";
}
    elseif ($numero3 > $numero1 and $numero2 > $numero1){
    print "$numero3 é o maior numero\n $numero1 é o menor";
}
    else  {
    print "$numero3 é o maior numero\n $numero2 é o menor";
}
    
