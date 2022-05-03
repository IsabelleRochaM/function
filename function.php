<?php
    $val1 = 250; 
    $val2 = 500; 
    $op = "+"; 
    
            function Adi($arg1, $arg2){ 
                $resultado = $arg1 + $arg2; 
                return $resultado; 
            } 
            function Sub($arg1, $arg2){ 
                $resultado = $arg1 - $arg2; 
                return $resultado; 
            }
            function Multi($arg1, $arg2){ 
                $resultado = $arg1 * $arg2; 
                return $resultado;
            } 
            function Div($arg1, $arg2){ 
                $resultado = $arg1 / $arg2; 
                return $resultado; 
            } 
    
                
            if ("+" == $op){ 
                $resultado = Adi($val1, $val2); 
                echo $resultado; 
            } 
    
    
            if ("-" == $op){ 
                $resultado = Sub($val1, $val2); 
                echo $resultado; 
            } 
        
            
            if ("*" == $op){ 
                $resultado = Multi($val1, $val2); 
                echo $resultado; 
            } 
                
           
            if ("/" == $op){ 
                $resultado = Div($val1, $val2); 
                echo $resultado; 
            } 
?>