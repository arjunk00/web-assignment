<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query 6</title>
</head>

<body>

    <?php
    $day = $_POST["day"];
    echo "Following planes are free on $day<br><br>";
    $sql_statement = "SELECT
    plane_no as 'Plane No.',
    model as 'Model' 
    FROM fleet
    WHERE fleet.plane_no NOT IN 
    ( SELECT DISTINCT plane_no FROM flight_plan WHERE 
     (departure_time  BETWEEN '$day 00:00:00' AND '$day 23:59:59') AND 
     (arrival_time  BETWEEN '$day 00:00:00' AND '$day 23:59:59') 
    ); ";

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
        while ($row = $result->fetch_assoc()) {
            if ($result->num_rows < 1) {
                die("No matching records found");
            }

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