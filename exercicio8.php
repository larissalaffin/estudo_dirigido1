<?php

    print "Você fuma a quantos anos? ";
    $anosf = (int) fgets (STDIN);

    print "Você fuma quantos cigarros por dia? ";
    $cigdia = (int) fgets (STDIN);

    $cig= $cigdia * 365 * $anosf;
    $minperdidos = $cig * 10;
    $hperdidas = $minperdidos /60;
    $dperdidos = round ($hperdidas/24);
 
    print "Você vai morrer $dperdidos dias mais cedo.";