<?php include 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form{
        border: 2px solid black;
        margin: auto;
        display: table;
        padding: 10px;
    }
    .hello{
        margin-top: 3px;
    }
</style>
<body>
    <form action="./emailvalid.php" method="post" class="form">
    <h2 class="h2">Medicine Symposium
        Registration Form
    </h2>

    <label class="tt" for="">Full Name</label><br>
    <input class="hello" type="text" name="name1" placeholder="First" required> <input type="text" name="name2" placeholder="Last" required> <br><br>

    <label class="tt" for="">Institution</label><br>
    <input class="hello" type="text" name="inst" required><br><br>

    <label class="tt" for="email">Email</label><br>
    <input class="hello" type="email" name="email" required><br><br>

    <label class="tt" for="">Name of the organizers</label><br>
   <textarea class="hello" name="area" id="" required></textarea><br><br>

    <input class="btn" type="submit" name="submit">
    </form>
</body>
</html>

