<?php

#Faça um programa que peça 10 números inteiros, calcule e mostre a quantidade de números pares e a
#quantidade de números impares.


$cont = 0;
$num_impar = 0;
$num_par = 0;

    while ( $cont < 10 ) {
        $cont = $cont + 1;
    
            print " Digite um número: ";
            $numero1 = (int) fgets(STDIN);
                if ( ( $numero1 % 2 ) == 0 and $numero1 != 0 ) {
                $num_par = $num_par + 1;
                }
   
                 elseif ( ( $numero1 % 2 ) != 0 and $numero1 != 0 ) {
                $num_impar = $num_impar + 1;
                }
    }

    print "\nForam digitados: $num_par número(s) par(es) e $num_impar número(s) impar(es)";



    

   

    

