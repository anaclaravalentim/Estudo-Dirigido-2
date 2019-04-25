<?php

   print "Digite o primeiro numero:";
   $numero1  = fgets (STDIN);

   print "Digite o segundo numero:";
   $numero2  = fgets (STDIN);

   print "Digite o terceiro numero:";
   $numero3  = fgets (STDIN);

   if ($numero1 > $numero2 and $numero1 > $numero3){
       print "$numero1 é o maior numero.";
   }

   elseif ($numero2 > $numero1 and $numero2 > $numero3){
       print "$numero2 é o maior numero.";
   }

   else {
       print "$numero3 é o maior numero.";
   }
