<?php

        $serie = 10;
        $num1 = 0;
        $num2 = 1;
        $suma = 1;
 
        echo "$num1 ";
         
        for ($i = 1; $i < $serie; $i++) {
             
            echo "$suma ";
            $suma = $num1 + $num2;
            $num1 = $num2;
            $num2 = $suma;
            
        }
    
?>