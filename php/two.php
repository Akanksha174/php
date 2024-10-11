<?php
// function is_prime($num) {
//     if ($num <= 1) {
//         return false;
//     }
//     for ($i = 2; $i <= sqrt($num); $i++) {
//         if ($num % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }

// function print_prime_numbers($start, $end) {
//     echo "Prime numbers between $start and $end are: ";
//     for ($num = $start; $num <= $end; $num++) {
//         if (is_prime($num)) {
//             echo $num . " ";
//         }
//     }
//     echo "\n";
// }

// // Taking input from the user
// $start = (int)readline("Enter the starting integer: ");
// $end = (int)readline("Enter the ending integer: ");

// print_prime_numbers($start, $end);
?>



//PHP PROGRAM TO MULTIPLY MATRICES BY PASSING IT TO A FUNC
<?php
func_mul(&$mat1, &$mat2, &$res){
    $N = 2;
    for($i = 0; $i<$N; $i++){
        for($j = 0; $j<$N; $j++){
            $res[$i][$j] = 0;
            for($k = 0; $k <$N; $k++){
                $res[$i][$j] += $mat1[$i][$j]*$mat2[$i][$j];
            }
        }
    }
    $mat1 = array(array(1,1),
                array(2,2),
                array(3,3),
                array(4,4));
    $mat2 = array(array(1,1),
    array(2,2),
    array(3,3),
    array(4,4));

    multiply($mat1, $mat2, $res);
    $N = 2;
    echo ("Result matrix is: ");
    for($i = 0; $i<$N; $i++){
        for($j = 0; $j<$N; $j++){
            echo($res[$i][$j]);
            echo(" ")
        }
    }
}