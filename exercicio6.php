<?php

#Faça um algoritmo que leia três números e mostre o maior deles. 

print "Digite um número: ";
$numero_1 = (float)fgets(STDIN);

print "Digite o segundo número: ";
$numero_2 = (float)fgets(STDIN);

print "Digite o terceiro número: ";
$numero_3 = (float)fgets(STDIN);

If ($numero_1>$numero_2 && $numero_1>$numero_3){
    print "O maior número é o $numero_1";
}

    elseif ($numero_2>$numero_1 && $numero_2>$numero_3) {
        print "O maior número é o $numero_2";
    }

        elseif ($numero_3>$numero_1 && $numero_3>$numero_2) {
            print "O maior número é o $numero_3";
        }
        
            elseif ($numero_1==$numero_2 && $numero_1==$numero_3){
                print "Eles são iguais";
            } 

                    elseif ($numero_1==$numero_2 && $numero_1>$numero_3) {
                        print "Os dois primeiros números são iguais e maiores que o terceiro";
                    }
          
                        elseif ($numero_2==$numero_3 && $numero_2>$numero_1) {
                            print "Os dois últimos números são iguais e maiores que o primeiro";
                        }

