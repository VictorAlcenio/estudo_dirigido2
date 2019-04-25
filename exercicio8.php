<?php

#Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar,
#sabendo que a decisão é sempre pelo mais barato. 

print "Qual o preço do primeiro produto?($) ";
$preco_1 = (float)fgets(STDIN);

print "Qual o preço do segundo produto?($) ";
$preco_2 = (float)fgets(STDIN);

print "Qual o preço do terceiro produto?($) ";
$preco_3 = (float)fgets(STDIN);

        If ($preco_1<$preco_2 && $preco_1<$preco_3){
            print "Voce deve comprar o primeiro produto.";
        }

                elseif ($preco_2<$preco_1 && $preco_2<$preco_3){
                    print "Voce deve comprar o segundo produto.";
                }

                        elseif ($preco_3<$preco_1 && $preco_3<$preco_2){
                            print "Voce deve comprar o terceiro produto.";
                        }
