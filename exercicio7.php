<?php

#Faça um algoritmo que leia três números e mostre o maior e o menor deles. 

print "Digite um número: ";
$numero_1 = (float)fgets(STDIN);

print "Digite o segundo número: ";
$numero_2 = (float)fgets(STDIN);

print "Digite o terceiro número: ";
$numero_3 = (float)fgets(STDIN);

      #MAIOR NÚMERO

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
                        print "Os dois primeiros números são iguais e maiores que o terceiro, maior número é o $numero_1";
                    }
          
                        elseif ($numero_2==$numero_3 && $numero_2>$numero_1) {
                            print "Os dois últimos números são iguais e maiores que o primeiro, maior número é o $numero_2";
                        }

                            elseif ($numero_1==$numero_3 && $numero_1>$numero_2) {
                                print "O primeiro e o terceiro número são iguais e maiores que o segundo, maior número é o $numero_3";
                            }


                        #MENOR NÚMERO
    
    If ($numero_1<$numero_2 && $numero_1<$numero_3){
       print "\nO menor número é o $numero_1";
    }
                        
            elseif ($numero_2<$numero_1 && $numero_2<$numero_3) {
             print "\nO menor número é o $numero_2";
            }
                        
                elseif ($numero_3<$numero_1 && $numero_3<$numero_2) {
                 print "\nO menor número é o $numero_3";
                }
                                
                   elseif ($numero_1==$numero_2 && $numero_1<$numero_3) {
                        print "\nOs dois primeiros números são iguais e menores que o terceiro, menor número é o $numero_1";
                      }
                                  
                        elseif ($numero_2==$numero_3 && $numero_2<$numero_1) {
                            print "\nOs dois últimos números são iguais e menores que o primeiro, menor número é o $numero_2";
                        }

                            elseif ($numero_1==$numero_3 && $numero_1<$numero_2) {
                                print "\nO primeiro e o terceiro número são iguais e menores que o segundo, menor número é o $numero_3";
                            }
                        

                        
