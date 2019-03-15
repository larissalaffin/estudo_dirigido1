<?php

print "Informe o valor que será pago: ";
$valor = (int) fgets (STDIN);

print "Informe a porcentagem de desconto: ";
$desc = (int) fgets (STDIN);

$valordesc = ($valor* $desc) /100;
$valfinal = $valor - $valordesc;

print "Total do desconto: $valordesc\n";

print "Valor do produto com desconto: $valfinal";