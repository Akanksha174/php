<?php include 'connection.php'?>
<?php

    if(isset($_POST['submit'])){
        $name1 = $_POST['name1'];
        $name2 = $_POST['name2'];
        $institute = $_POST['inst'];
        $email = $_POST['email'];
        $txt = $_POST['area'];
    }

    echo "Full name : {$name1} {$name2} <br>";
    echo "Institute : {$institute}<br>";
    echo "Email : {$email}<br>";
    echo "Name of the organization : {$txt} <br>";

?>