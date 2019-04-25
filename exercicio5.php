<?php

# Faça um algoritmo para a leitura de duas notas parciais de um aluno. O programa deve calcular a média
#alcançada por aluno e apresentar:
#A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
#A mensagem "Reprovado", se a média for menor do que sete;
#A mensagem "Aprovado com Distinção", se a média for igual a dez. 

print "Digite a primeira nota: ";
$nota1 = (float)fgets(STDIN);

print "Digite a segunda nota: ";
$nota2 = (float)fgets(STDIN);

$media = ($nota1+$nota2)/2;
print "A média do aluno é $media ";

        If ($media==10) {
            print"\n*************************************";
            print "\nO aluno foi aprovado com distinção";
            print"\n*************************************";
        }

            elseif ($media>=7) {
                print "\nO aluno foi aprovado";
            }

                else {
                    print "\nO aluno foi reprovado";
                }
