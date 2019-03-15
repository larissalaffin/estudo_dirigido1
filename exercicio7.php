<?php

print "Quantos quilômetros você percorreu com o carro?: ";
$km = (int) fgets (STDIN);

print "Quantos dias você ficou com o carro?: ";
$dias = (int) fgets(STDIN);

$valkm = $km * 0.15;
$valdias = $dias * 60;
$valfinal = round($valkm + $valdias);

print "Você irá pagar: $valfinal reais pelo carro.";