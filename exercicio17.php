<?php

#Faça um programa que peça dois números, base e expoente, calcule e mostre o primeiro número elevado
#ao segundo número. Não utilize a função de potência da linguagem.

print "Digite um número: ";
$numero1 = (float)fgets(STDIN);

print "Digite outro número: ";
$numero2 = (float)fgets(STDIN);

  $resultado = pow($numero2,$numero1);
  print "O resultado é $resultado";
