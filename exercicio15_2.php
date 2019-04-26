<?php
#Faça um programa que leia 5 números e informe o maior número.

$mnum=0;
for($i = 0; $i < 5; $i++ ){
    print "Digite um número: ";
    $num = (float)fgets(STDIN);

If($num>$mnum){
    $mnum=$num; 
}

}

print "\nO maior número é $mnum";

   
