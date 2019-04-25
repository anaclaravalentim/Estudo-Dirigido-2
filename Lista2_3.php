<?php

   print "Digite a letra inial correspondente ao seu sexo:";
   $sexo = fgetc (STDIN);

    if ($sexo == 'F'){
       print "Sexo Feminino";
   }
    elseif ($sexo == 'M'){
      print "Sexo Masculino";
  }   

    else {
      print "Sexo inválido";
    }
   