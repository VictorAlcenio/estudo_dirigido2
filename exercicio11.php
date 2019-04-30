<?php

#Faça um Programa que leia um número inteiro menor que 1000 e imprima a quantidade de centenas,
#dezenas e unidades do mesmo, observando os termos no plural a colocação do "e", da vírgula entre
#outros. Exemplo:
#326 = 3 centenas, 2 dezenas e 6 unidades
#12 = 1 dezena e 2 unidades


print "Digite um número menor que 1000: ";
$num = (int) fgets(STDIN);

if ($num < 1000) {
    $qnt_num = strlen($num) ; 
    $centena = floor($num / 100);
        $num = $num - ($centena * 100);
        $dezena = floor($num/10);
        $num = $num - ($dezena * 10);
        
            if ($centena > 1) {
                $centena = $centena . " centenas";
            }
                else {
                    $centena = $centena . " centena";
                }
            if ($dezena > 1) {
                $dezena = $dezena . " dezenas";
            }
                else {
                    $dezena = $dezena . " dezena";
                }
            if ($numero > 1) {
                $numero = $numero . " unidades";
            }
                else {
                    $num = $num . " unidade";
                }
    
            if ($qnt_num == 3) {
            print "\nO número que voce digitou possui $centena, $dezena e $num.\n";
            }
                elseif ($qnt_num == 2) {
                    echo "\nO número que voce digitou possui $dezena e $num. \n";
                    }
                else {
                    echo "\nO número que voce digitou possui $num. \n";
                    }

    }

else {
        print "\nO número que voce digitou é maior que 1000.";
    }



