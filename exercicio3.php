<?php

print "Informe o seu sálario: ";
$sal = (int) fgets (STDIN);

print "Informe qual a porcentagem do aumento do seu salário: ";
$aum = (int) fgets (STDIN);

$valaum = $sal*$aum/100;
$salfinal  =  $sal + $valaum;

print "Seu salário final vai ser: $salfinal ";