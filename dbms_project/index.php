<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    input{
      width:200px;
      height: 13px;
      border-radius: 7%;
      border-style: solid green;
      padding: 2px 2px 2px 2px;
    }
  </style>
</head>

<body>
  <center>
  <!-- query 1 -->
  <form action="query1.php" method="POST">
    Enter the number of highest transaction you want to see =<br><br>
    <input type="text" name="count" required><br><br>
    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>

  <!-- query 2 -->
  <form action="query2.php" method="POST">
    Enter booking ID of which you want to see details =<br><br>
    <input type="text" name="b_id" required><br><br>
    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>

  <!-- query 3 -->
  <form action="query3.php" method="POST">
    Enter n longest flights of which you want to see capacity =<br><br>
    <input type="text" name="f_count" required><br><br>
    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>
  ****************************************************************************************************
  <!-- query 4 does this query need any input also? -->
  <form action="query4.php" method="POST">
    find name of customer who has booked flight for more than n passenger<br><br>
    <input type="text" name="n_count" required><br><br>
    <button type="submit">Execute Query</button>
  </form>


  <br><br><br><br><br>

  <!-- query 5 -->
  <form action="query5.php" method="POST">
    Enter the month for which you want to see the busiest airport<br><br>
    <input type="text" name="month" required><br><br>
    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>

  <!-- query 6 -->
  <form action="query6.php" method="POST">
    Enter the day for which you want to see unused planes<br><br>
    <input type="text" name="day" placeholder="yyyy-mm-dd" required><br><br>
    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>

  <!-- query 7 -->
  <form action="query7.php" method="POST">
    Enter the payment method for which you want to see the customers<br><br>
    <input type="text" name="pay_mode" required><br><br>
    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>

  <!-- query 8 -->
  <form action="query8.php" method="POST">
    Enter the month for which you want to see the busiest airport<br><br>
    <input type="text" name="month" required><br><br>
    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>

  <!-- query 9 -->
  <form action="query9.php" method="POST">
    Enter number of employees you want to see who are to retire in line<br><br>
    <input type="text" name="retire_no" required><br><br>
    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>

  <!-- query 10 -->
  <form action="query10.php" method="POST">
    Enter the username<br>
    <input type="text" name="uname" required><br><br>
    Enter the password<br><br>
    <input type="password" name="password" required><br><br>
    Enter the full name<br><br>
    <input type="text" name="custname" required><br><br>
    Enter the gender<br><br>
    <input type="text" name="gender" required><br><br>
    Enter the date of birth<br><br>
    <input type="text" placeholder="yyyy-mm-dd" name="dob" required><br><br>
    Enter the phone number<br><br>
    <input type="text" name="phone" required><br><br>
    Enter the email<br><br>
    <input type="text" name="email" required><br><br>
    Enter the house number<br><br>
    <input type="text" name="h_no" required><br><br>
    Enter the street number<br><br>
    <input type="text" name="st_no" required><br><br>
    Enter the locality<br><br>
    <input type="text" name="locality" required><br><br>
    Enter the city<br><br>
    <input type="text" name="city" required><br><br>
    Enter the country<br><br>
    <input type="text" name="country" required><br><br>

    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>

  <!-- query 11 -->
  <form action="query11.php" method="POST">
    Enter the employee_id<br><br>
    <input type="text" name="e_id" required><br><br>
    Enter the full name<br><br>
    <input type="text" name="empname" required><br><br>
    Enter the joining date<br><br>
    <input type="text" name="j_date" placeholder="yyyy-mm-dd" required><br><br>
    Enter the designation<br><br>
    <input type="text" name="designation" required><br><br>
    Enter the salary<br><br>
    <input type="text" name="salary" required><br><br>
    Enter the role<br><br>
    <input type="text" name="role" required><br><br>
    Enter the phone number<br><br>
    <input type="text" name="phone" required><br><br>
    Enter the email<br><br>
    <input type="text" name="email" required><br><br>
    Enter the date of birth<br><br>
    <input type="text" placeholder="yyyy-mm-dd" name="dob" required><br><br>
    Enter the gender<br><br>
    <input type="text" name="gender" required><br><br>
    Enter the house number<br><br>
    <input type="text" name="h_no" required><br><br>
    Enter the street number<br><br>
    <input type="text" name="st_no" required><br><br>
    Enter the locality<br><br>
    <input type="text" name="locality" required><br><br>
    Enter the city<br><br>
    <input type="text" name="city" required><br><br>
    Enter the country<br><br>
    <input type="text" name="country" required><br><br>

    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>

  <!-- query 12 -->
  <form action="query12.php" method="POST">
    Enter city of which you want to see arrival details<br><br>
    <input type="text" name="arr_city" required><br><br>
    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>

  <!-- query 13 -->
  <form action="query13.php" method="POST">
    Enter city for which you want to see departure details<br><br>
    <input type="text" name="dep_city" required><br><br>
    <button type="submit">Execute Query</button>
  </form>

  <br><br><br><br><br>

  <!-- query 14 -->
  <form action="query14.php" method="POST">
    Enter booking id for new booking<br><br>
    <input type="text" name="booking_id" required><br><br>
    Enter username for booking<br><br>
    <input type="text" name="u_name" required><br><br>
    Enter booking date<br><br>
    <input type="date" name="book_date" required><br><br>
    Enter flight number<br><br>
    <input type="text" name="flight_no" required><br><br>
    Enter travel date<br><br>
    <input type="date" name="board_date" required><br><br>
    Enter passenger name<br><br>
    <input type="date" name="p_name" required><br><br>
    Enter transaction id<br><br>
    <input type="date" name="tran_id" required><br><br>
    Enter transaction mode<br><br>
    <input type="date" name="tran_mode" required><br><br>
    Enter transaction amount<br><br>
    <input type="date" name="tran_amount" required><br><br>
    <button type="submit">Execute Query</button>
  </form>

    <!-- query 14
    <label>Choose how many seats you want to book from this list:
    <input type="list" list="seats" id="member" name="member" value="">
    <datalist id="seats">
    <option value="1">
    <option value="2">
    <option value="3">
    <option value="4">
    <option value="5">
    <option value="6">
  </datalist><br>
    <a href="#" id="filldetails" onclick="addFields()">Fill Details</a>
    <div id="container"></div>
    </center>

    <script type='text/javascript'>
        function addFields(){
            // Number of inputs to create
            var number = document.getElementById("member").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("container");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=0;i<number;i++){
                // Append a node with a random text
                container.appendChild(document.createTextNode("Passenger " + (i+1) + " Name"));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "member" + i;
                container.appendChild(input);
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
        }
    </script> -->
</body>

</html>