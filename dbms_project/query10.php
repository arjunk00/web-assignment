<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query 10</title>
</head>

<body>

    <?php

    $servername = "localhost";
    $_username = "newuser";
    $_password = "password";

    $uname = $_POST["uname"];
    $password = $_POST["password"];
    $custname = $_POST["custname"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $h_no = $_POST["h_no"];
    $st_no = $_POST["st_no"];
    $locality = $_POST["locality"];
    $city = $_POST["city"];
    $country = $_POST["country"];

    $conn = new mysqli($servername, $_username, $_password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "USE airline_db";
    $conn->query($sql);

    $sql_statement = "INSERT INTO
    customer(user_name, password, cust_name, gender, date_of_birth)
    VALUES('$uname', '$password', '$custname', '$gender', '$dob')";

    $conn->query($sql_statement);
    
    $sql_statement = "INSERT INTO
    customer_email(user_name, email)
    VALUES('$uname', '$email')";

    $conn->query($sql_statement);
    
    $sql_statement = "INSERT INTO
customer_phone_no(user_name, phone_no)
VALUES('$uname', '$phone')";

    $conn->query($sql_statement);
    

    $sql_statement = "INSERT INTO
customer_address(user_name, house_no, street, locality, city, country)
VALUES('$uname', $h_no, $st_no, '$locality', '$city', '$country')";

    $conn->query($sql_statement);
    
    echo "Customer data added";
    ?>
</body>

</html>