<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $registration_type = isset($_POST['registration_type']) ? $_POST['registration_type'] : [];

    echo "<h2>Form Data</h2>";
    echo "First Name: " . htmlspecialchars($first_name) . "<br>";
    echo "Last Name: " . htmlspecialchars($last_name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Phone: " . htmlspecialchars($phone) . "<br>";

    if (!empty($registration_type)) {
        echo "Registration Type(s): " . implode(", ", $registration_type) . "<br>";
    } else {
        echo "No registration type selected.<br>";
    }
}
?>
