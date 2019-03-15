<?php

print "Quantos graus quer converter para Fahrenheit: ";
$c = (int) fgets (STDIN);

$f = 9*$c/5 + 32;

print "A temperatura em Fahrenheit é: $f";