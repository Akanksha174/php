<?php
include 'connection.php';
 
$query = "TRUNCATE TABLE student";
$data = mysqli_query($con, $query);

if($data){
    echo "Table truncated successfully (all data deleted).";
}else{
    echo "Failed to truncate table.";
}
?>
