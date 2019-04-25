<?php

print "Digite uma letra:";
$letra = fgetc (STDIN);

if ($letra == 'a' or $letra == 'e' or $letra == 'i' or $letra == 'o' or $letra == 'u' ){
    print "É uma VOGAL";
}
else {
    print "É uma CONSOANTE";
}
?>