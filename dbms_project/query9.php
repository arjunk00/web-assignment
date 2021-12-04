<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query 9</title>
</head>

<body>

    <?php
    $retire_no = $_POST["retire_no"];
    echo "Here are the next $retire_no employees who will be retiring<br><br>";
    $sql_statement = "SELECT employee_name as 'Employee Name',
    DATE_ADD(date_of_birth, INTERVAL 60 YEAR) as 'Retirement Date'
    FROM employee
    ORDER BY date_of_birth
    LIMIT $retire_no";

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