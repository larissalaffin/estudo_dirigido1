<?php

print "Quantos quilômetros você ira viajar?: ";
$km= (int) fgets (STDIN);

print "Qual a velocidade média que irá percorrer?: ";
$v = (int) fgets (STDIN);

$t = round ($km / $v) ;
print "O tempo de viagem será de: $t horas";