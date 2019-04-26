<?php

#Faça um programa que leia 5 números e informe o maior número.

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

        If($numero_1>$numero_2 and $numero_1>$numero_3 and $numero_1>$numero_4 and $numero_1>$numero_5){
            print "O primeiro número é o maior.";       
        }

        If($numero_2>$numero_1 and $numero_2>$numero_3 and $numero_2>$numero_4 and $numero_2>$numero_5){
            print "O segundo número é o maior.";       
        }

        If($numero_3>$numero_1 and $numero_3>$numero_2 and $numero_3>$numero_4 and $numero_3>$numero_5){
            print "O terceiro número é o maior.";       
        }

        If($numero_4>$numero_1 and $numero_4>$numero_2 and $numero_4>$numero_3 and $numero_4>$numero_5){
            print "O quarto número é o maior.";       
        }

        If($numero_5>$numero_1 and $numero_5>$numero_2 and $numero_5>$numero_3 and $numero_5>$numero_4){
            print "O quinto número é o maior.";       
        }
