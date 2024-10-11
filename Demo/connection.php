<?php
$host = "localhost";
$user = "root";
$pass ="";
$db ="Demo";
$con = mysqli_connect($host,$user,$pass,$db);
if($con){
    echo "Connection established";
}else{
    echo "DB NOT CREATED";
}
?>
