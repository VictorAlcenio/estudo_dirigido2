<?php

#Faça um algoritmo que peça um valor e mostre na tela se o valor é positivo ou negativo. 

print "Escreva um valor: ";
$valor = (float)fgets(STDIN);

    If ($valor>0){
        print "O valor é positivo";
    }

        If ($valor<0){
            print "O valor é negativo";
        }

            If ($valor==0){
                print "O valor é nulo";
            }
