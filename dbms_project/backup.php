<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DBMS Project</title>

  <style>
    table {
      /* border: 2px dashed red; */
      border-collapse: collapse;
    }

    th,
    thead,
    td {
      border: 2px solid red;
      padding: 8px 8px 8px 8px;

    }

    thead>tr {
      font-weight: bold;
    }
  </style>

</head>

<body>

  <?php
  $servername = "localhost";
  $username = "newuser";
  $password = "password";

  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";

  $sql = "USE airline_db";
  $conn->query($sql);

  $sql_statement = "SELECT * FROM booking";

  // /////////////////////////////////
  // generic
  // /////////////////////////////////
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
  // /////////////////////////////////
  // generic
  // /////////////////////////////////


  $sql_statement = "SELECT * FROM customer";

  // /////////////////////////////////
  // generic
  // /////////////////////////////////
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


  // /////////////////////////////////
  // generic
  // /////////////////////////////////


  $conn->close();
  ?>

</body>

</html>