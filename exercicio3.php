<?php

#Faça um algoritmo que verifique se uma letra digitada é "F" ou "M". Conforme a letra escrever: F -
#Feminino, M - Masculino, Sexo Inválido.



print "digite uma letra (F ou M): ";
$sexo = (String)fgetc(STDIN);

         If ($sexo=="F" or $sexo=="f" ){
            print "O sexo é feminino ";
         }
        
            elseif($sexo=="M" or $sexo=="m"){
                print "O sexo é masculino ";
            }

                else  {
                    print "Sexo invalido";
                }
