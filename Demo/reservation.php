<?php include 'connection.php'; ?>

<h2>Railway Reservation Records</h2>

<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Departure Station</th>
        <th>Destination Station</th>
        <th>Date of Journey</th>
        <th>Class</th>
        <th>Number of Passengers</th>
        <th>Payment Method</th>
    </tr>
    <?php 
    $query = "SELECT * FROM railway_reservation";
    $data = mysqli_query($con, $query);  
    $result = mysqli_num_rows($data);  

    if ($result > 0) {
        while ($row = mysqli_fetch_array($data)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['contact']) . "</td>";
            echo "<td>" . htmlspecialchars($row['departure']) . "</td>";
            echo "<td>" . htmlspecialchars($row['destination']) . "</td>";
            echo "<td>" . htmlspecialchars($row['journey_date']) . "</td>";
            echo "<td>" . htmlspecialchars($row['class']) . "</td>";
            echo "<td>" . htmlspecialchars($row['passengers']) . "</td>";
            echo "<td>" . htmlspecialchars($row['payment_method']) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='11'>No records found</td></tr>";
    }
    ?>
</table>
