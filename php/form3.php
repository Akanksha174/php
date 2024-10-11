<!DOCTYPE html>
<html>
<head>
    <title>Form Validation Example</title>
</head>
<style>
    body{
        background-color: olive;
    }
    </style>
<body>
    <?php
    
    $nameError = $emailError = "";
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        if (empty($_POST["name"])) {
            $nameError = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            
        }

        // Validate email
        if (empty($_POST["email"])) {
            $emailError = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format";
            }
        }
    }

   
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name">
        <span style="color: red;"><?php echo $nameError; ?></span><br>

        Email: <input type="text" name="email">
        <span style="color: red;"><?php echo $emailError; ?></span><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Display submitted data if validation passes
    if ($name && $email) {
        echo "<h3>Submitted Data:</h3>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
    }
    ?>
</body>
</html>