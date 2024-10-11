<?php include 'connection.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
        <label for="ID">ID: </label>
        <input type="number" name="ID" placeholder="ID" required> <br><br>

            <label for="Fname">First name: </label>
            <input type="text" name="Fname" placeholder="First Name" required> <br><br>
            
            <label for="Lname">Last name: </label>
            <input type="text" name="Lname" placeholder="Last Name" required> <br><br>

            <label for="age">Age: </label>
            <input type="number" name="age" placeholder="age" required> <br><br>

            <input type="submit" name="save_btn" value="Save" >
            <button ><a href="view.php">View</a></button>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['save_btn'])){
        $ID = $_POST['ID'];
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $age = $_POST['age'];

        $query = "INSERT INTO student (ID, Fname, Lname, age) VALUE ('$ID','$Fname','$Lname','$age')";
        $data = mysqli_query($con,$query);
        if($data){
            echo "Enter data is save Sucessfully";
        }
        else{
            echo "Again save data";
        }
    }
?>