<?php

#Faça um algoritmo que imprima as seguintes figuras geométricas:
#* * * * * * * *
#* * * * * * * *
#* * * * * * * *
#* * * * * * * *
#* * * * * * * *
#* * * * * * * *
#* * * * * * * *
#* * * * * * * *

                        #*
                        #* *
                        #* * *
                        #* * * *
                        #* * * * *
                        #* * * * * *
                        #* * * * * * *
                        #* * * * * * * *

                                                       
                                                    # obs: falta uma 
    
    
         for ($t=1; $t <= 8; $t++ ) { 
       
            #
         for ($i=1; $i <= 8 ; $i++) { 
                                                             
        print "*  ";
         }
        print "\n";
        }
    
    
    
    print "\n\n";
    
#---------------------------------------------------
    
    for ($t=1; $t <= 8; $t++) { 
       
     for ($i=1; $i <= $t ; $i++) { 
                                                             
        print "*  ";
        }
        print "\n";
        }

        
        print "\n\n";
    
#-------------------------------------------------    
        
         for ($i=0; $i<=8; $i++){ 
    
         for($h=0; $h<=8-$i; $h++){
             print "  ";
         }
         for($h=0; $h<$i; $h++){
             print "* ";
         }
         
         print "\n";
     }
    
