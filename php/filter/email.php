<form method = "POST" action="">
Enter your email: <input type="email" name="email" required>
<input type="submit" value="submit"/>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "The email address '$email' is valid";
}
else{
    echo "The email address '$email' is not valid";
}
}
?>
