<?php

#A série de Fibonacci é formada pela sequência 0,1,1,2,3,5,8,13,21,34,55, [...] Faça um programa que
#gere a série até que o valor seja maior que 500.

$n1 = 0;
$n2 = 1;
$n3 = 0;

    print $n1;
    print -$n2;

        while($n3<=500) {
            $n3 = $n1+$n2;
            print -$n3;

                $n1 = $n2;
                $n2 = $n3;

        }
