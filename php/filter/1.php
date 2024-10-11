<?php
 $var =99;
 var_dump(filter_var($var, FILTER_VALIDATE_INT));
 if(filter_var($var, FILTER_VALIDATE_INT)){
    echo "<br> variable is integer";
 }
 else{
    echo "<br> $var is not Integer";
 }
 ?>