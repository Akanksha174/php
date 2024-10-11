<?php include 'connection.php'; 
$ID=$_GET['ID'];
$query="DELETE FROM student WHERE ID='12'";
$data=mysqli_query($con,$query);
if($data)
{
echo "deleted";
}
else
{
    echo "not deleted";
}
?>