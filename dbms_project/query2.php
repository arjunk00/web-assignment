<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query 2</title>
</head>

<body>

    <?php
    $b_id = $_POST["b_id"];
    echo "Details of booking id $b_id<br><br>";
    $sql_statement = "SELECT 
    booking_id as 'Booking ID',
    user_name as 'User Name',
    booking_date as 'Booking Date',
    flight_no as 'Flight No.',
    no_of_passengers as 'Passenger Count',
    board_date as 'Board Date',
    transaction_id as 'Transaction ID'
    FROM booking WHERE booking_id='$b_id';";

    $servername = "localhost";
    $username = "newuser";
    $password = "password";

    $conn = new mysqli($servername, $username, $password);

    
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "USE airline_db";
    $conn->query($sql);
    
    echo "<table>";
    echo "<thead><tr>";
    if ($result = $conn->query($sql_statement)) {
        if ($result->num_rows < 1) {die("No matching records found");}
        while ($row = $result->fetch_assoc()) {
            foreach ($row as $k => $r) {
                echo "<td>$k</td>";
            }
            break;
        }
        echo "</thead></tr>";
        $result =  $conn->query($sql_statement);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $k => $r) {
                echo "<td>$r</td>";
            }
            echo "</tr>";
        }
        $result->free_result();
    }
    echo "</tr></thead>";
    echo "</table>";
    echo "<br>";


    echo "Passenger List <br><br>";

    $sql_statement = "SELECT passenger_name as Passengers FROM passenger_names WHERE booking_id='$b_id'";

    echo "<table>";
    echo "<thead><tr>";
    if ($result = $conn->query($sql_statement)) {
        while ($row = $result->fetch_assoc()) {
            foreach ($row as $k => $r) {
                echo "<td>$k</td>";
            }
            break;
        }
        echo "</thead></tr>";
        $result =  $conn->query($sql_statement);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $k => $r) {
                echo "<td>$r</td>";
            }
            echo "</tr>";
        }
        $result->free_result();
    }
    echo "</tr></thead>";
    echo "</table>";
    echo "<br>";


    ?>
</body>

</html>