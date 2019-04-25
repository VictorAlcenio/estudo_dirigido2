<?php

#Faça um algoritmo que peça dois números e imprima o maior deles. 

print "Escreva um número: ";
$numero1 = (float)fgets(STDIN);

print "Escreva o segundo número: ";
$numero2 = (float)fgets(STDIN);

    If($numero1>$numero2) {
        print "O primeiro número digitado é o maior ";
    }

        If($numero1<$numero2) {
            print "O segundo número digitado é o maior ";
        }

            If($numero1==$numero2) {
                print "Os dois números são iguais";
            }
