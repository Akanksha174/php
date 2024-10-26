<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Reservation Form</title>
</head>
<body>

<h2>Railway Reservation Form</h2>

<form action="" method="POST">

    <label>Your Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="contact">Contact Number: (10 digits)</label><br>
    <input type="tel" id="contact" name="contact" required><br><br>

    <label for="departure">Departure Station:</label><br>
    <input type="text" id="departure" name="departure" required><br><br>

    <label for="destination">Destination Station:</label><br>
    <input type="text" id="destination" name="destination" required><br><br>

    <label for="journey-date">Date of Journey:</label><br>
    <input type="date" id="journey-date" name="journey_date" required><br><br>

    <label for="class">Class:</label><br>
    <select id="class" name="class" required>
        <option value="">Select Class</option>
        <option value="Sleeper">Sleeper</option>
        <option value="1st AC">1st AC</option>
        <option value="2nd AC">2nd AC</option>
        <option value="3rd AC">3rd AC</option>
    </select><br><br>

    <label for="passanger">Number of Passengers:</label><br>
    <input type="number" id="passanger" name="passanger" required><br><br>

    <label for="payment">Payment Method:</label><br><br>
    <input type="radio" id="credit" name="payment" value="Credit Card" required>
    <label for="credit">Credit Card</label><br>
    <input type="radio" id="debit" name="payment" value="Debit Card">
    <label for="debit">Debit Card</label><br>
    <input type="radio" id="netbanking" name="payment" value="Net Banking">
    <label for="netbanking">Net Banking</label><br>
    <input type="radio" id="upi" name="payment" value="UPI">
    <label for="upi">UPI</label><br><br>

    <input type="submit" name="book_ticket" value="Book Ticket">
</form>

<?php
if (isset($_POST['book_ticket'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $journey_date = $_POST['journey_date'];
    $class = $_POST['class'];
    $passanger = $_POST['passanger'];
    $payment_method = $_POST['payment']; 

    $query = "INSERT INTO railway_reservation (name, email, contact, departure, destination, journey_date, class, passanger, payment_method)
              VALUES ('$name', '$email', '$contact', '$departure', '$destination', '$journey_date', '$class', '$passanger', '$payment_method')";
    $data = mysqli_query($con, $query);

    if ($data) {
        echo "Ticket booked successfully";
    } else {
        echo "Ticket booking failed";
    }
}
?>
</body>
</html>
