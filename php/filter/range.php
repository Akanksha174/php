<?php
$var = 23;
var_dump(filter_var($var, FILTER_VALIDATE_INT));

$options = array(
    "options" => array("min_range" => 20, "max_range" => 40)
);

if (filter_var($var, FILTER_VALIDATE_INT, $options)) {
    echo "<br> variable is in the range";
} else {
    echo "<br> $var is out of the range";
}
?>
