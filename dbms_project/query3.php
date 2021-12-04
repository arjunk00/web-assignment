<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query 3</title>
</head>

<body>

    <?php
    $f_count = $_POST["f_count"];
    echo "Following are the capacities of $f_count longest flights<br><br>";
    $sql_statement = "SELECT 
    flight_plan.plane_no as 'Plane No.',
    timediff(flight_plan.arrival_time,flight_plan.departure_time)
    as 'Time',
    plane_capacity.capacity as 'Capacity'
    FROM flight_plan,fleet,plane_capacity
    where flight_plan.plane_no=fleet.plane_no
    and fleet.model=plane_capacity.plane_model
    ORDER BY timediff(flight_plan.arrival_time,flight_plan.departure_time) desc
    LIMIT $f_count";

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