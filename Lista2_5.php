<?php

   print "Digite a primeira nota:";
   $nota1  = fgets (STDIN);

   print "Digite a segunda nota:";
   $nota2  = fgets (STDIN);

   print "Digite a terceira nota:";
   $nota3  = fgets (STDIN);

   $media = ($nota1 + $nota2 + $nota3) / 3;

   if ($media == 10){
       print "Aprovado com Distinção! Parabéns.";
   }

   elseif ($media > 7){
       print "Aprovado";
   }

   else {
       print "Reprovado";
   }
