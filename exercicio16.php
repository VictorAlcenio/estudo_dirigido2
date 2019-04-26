<?php

#Faça um programa que leia 5 números e informe a soma e a média dos números.

print "Digite o primeiro número: ";
$numero_1 = (float)fgets(STDIN);

print "Digite o segundo número: ";
$numero_2 = (float)fgets(STDIN);

print "Digite o terceiro número: ";
$numero_3 = (float)fgets(STDIN);

print "Digite o quarto número: ";
$numero_4 = (float)fgets(STDIN);

print "Digite o quinto número: ";
$numero_5 = (float)fgets(STDIN);

        $soma = ($numero_1+$numero_2+$numero_3+$numero_4+$numero_5);
        print "\nA soma dos números é $soma";

        $media = $soma/5;
        print "\nA média dos números é $media";
