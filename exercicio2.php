<?php 

print "Digite uma quantidade de dias:";
$dias = (float) fgets (STDIN);

print "Digite uma quantidade de horas:";
$horas = (float) fgets (STDIN);

print "Digite uma quantidade de minutos:";
$min = (float) fgets (STDIN);

print "Digite uma quantidade de segundos:";
$seg = (float) fgets (STDIN);

$diaseg = $dias*86400:
$hseg = $horas*3600;
$minseg = $min*60;
$segt = $diaseg + $hseg + $minseg + $seg;

print "\n A quantidade total de segundos é de: $segt";
