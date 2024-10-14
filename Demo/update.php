<?php include 'connection.php'; 
$ID=$_GET['ID'];
$select="SELECT * FROM student WHERE ID='0'";//Now put the value 8 where data is already deleted.
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
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