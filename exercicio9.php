<?php

#Faça um algoritmo que leia três números e mostre-os em ordem decrescente

print "Digite um número: ";
$numero_1 = (float)fgets(STDIN);

print "Digite um segundo número: ";
$numero_2 = (float)fgets(STDIN);

print "Digite um terceiro número: ";
$numero_3 = (float)fgets(STDIN);

    $numeros = ["$numero_1","$numero_2","$numero_3"];

    rsort ($numeros); #comando para deixar os números da lista em ordem decrescente

        print "$numeros[0]-";
        print "$numeros[1]-";
        print "$numeros[2]";
