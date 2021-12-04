<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query 11</title>
</head>

<body>

    <?php

    require('php_error.php');
    \php_error\reportErrors();

    $servername = "localhost";
    $username = "newuser";
    $password = "password";

    $e_id = $_POST["e_id"];
    $empname = $_POST["empname"];
    $j_date = $_POST["j_date"];
    $designation = $_POST["designation"];
    $salary = $_POST["salary"];
    $role = $_POST["role"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $h_no = $_POST["h_no"];
    $st_no = $_POST["st_no"];
    $locality = $_POST["locality"];
    $city = $_POST["city"];
    $country = $_POST["country"];

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "USE airline_db";
    $conn->query($sql);

    $sql_statement = "INSERT INTO
    employee(employee_id, employee_name, joining_date, designation, salary, role, date_of_birth, gender)
    VALUES('$e_id', '$empname', '$j_date', '$designation', $salary, '$role', '$dob', '$gender')";

    $conn->query($sql_statement);
    

    $sql_statement = "INSERT INTO
    employee_email(employee_id, email)
    VALUES('$e_id', '$email')";

    $conn->query($sql_statement);
    

    $sql_statement = "INSERT INTO
employee_phone_no(employee_id, phone_no)
VALUES('$e_id', $phone)";

    $conn->query($sql_statement);



    $sql_statement = "INSERT INTO
employee_address(employee_id, house_no, street, locality, city, country)
VALUES('$e_id', $h_no, $st_no, '$locality', '$city', '$country')";

    $conn->query($sql_statement);
    
    echo "Employee data added";
    ?>
</body>

</html>