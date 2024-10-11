<?php
function swap(&$a, &$b, &$c) {
     $temp = $a;  
     $a = $c;    
     $c = $b;     
     $b = $temp; 
 } 

 $a = 1;
 $b = 2;
 $c = 3;
 echo "before swapping: a = $a, b = $b, c= $c \n";
 swap($a, $b, $c);
 echo "After swapping: a = $a, b = $b, c= $c";
?>