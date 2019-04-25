<?php

#Faça um algoritmo que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c. O
#programa deverá pedir os valores de a, b e c e fazer as consistências, informando ao usuário nas
#seguintes situações:
#Se o usuário informar o valor de A igual a zero, a equação não é do segundo grau e o programa não deve
#pedir os demais valores, sendo encerrado;
#Se o delta calculado for negativo, a equação não possui raizes reais. Informe ao usuário e encerre o
#programa;
#Se o delta calculado for igual a zero a equação possui apenas uma raiz real; informe-a ao usuário;
#Se o delta for positivo, a equação possui duas raízes reais; informe-as ao usuário; 

print "Digite o valor de 'A': ";
$valor_a = (float)fgets(STDIN);

            If($valor_a==0){
                print "A equação não é de segundo grau, pois A é igual a 0";
                
            }

            else{

print "Digite o valor de 'B': ";
$valor_b = (float)fgets(STDIN);

print "Digite o valor de 'C': ";
$valor_c = (float)fgets(STDIN);
            


//Delta= B ao quadrado, menos 4, vezes A, vezes C
            $delta=  pow($valor_b,2)-4*$valor_a*$valor_c;
            
            

            If ($delta<0){
                print "\nA equação não possui raízes reais, pois delta é negativo";
            }


            $valor_x1= (-$valor_b-sqrt($delta))/(2*$valor_a);
            
       
            $valor_x2= (-$valor_b+sqrt($delta))/(2*$valor_a);
            

            
            if ($delta==0){
                print "\nA equação possui apenas uma raiz real. Sendo essa x = $valor_x1";
            }
                
            if ($delta>0) {

                print "\nPossui duas raizes reais, são elas ";

                print "\nx1=$valor_x1";
                print "\nx2=$valor_x2";
            }
        }
                
