connection: <?php
$host= "localhost";
$user="root";
$pass="";
$db="demo";
$con=mysqli_connect($host,$user,$pass,$db); 
if($con)
{
    echo "ok";
}
else{
    echo "DB not created"  . mysqli_connect_error();
}
?>