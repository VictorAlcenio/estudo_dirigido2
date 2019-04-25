<?php

#Faça um algoritmo que verifique se uma letra digitada é vogal ou consoante. 

print "Digite uma letra: ";
$letra = (string) fgetc(STDIN);

    if ($letra=="a" or $letra=="A"){
        print "A letra '$letra' é uma vogal";
    }

        elseif ($letra=="e" or $letra=="E"){
            print "A letra '$letra' é uma vogal";
        }

            elseif ($letra=="i" or $letra=="I"){
                print "A letra '$letra' é uma vogal";
            }

                elseif ($letra=="o" or $letra=="O"){
                    print "A letra '$letra' é uma vogal";
                }

                    elseif ($letra=="u" or $letra=="U"){
                        print "A letra '$letra' é uma vogal";
                    }

                        else {
                            print "A letra '$letra' é uma consoante";
                        }
