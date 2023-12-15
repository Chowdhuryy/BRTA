<?php
@include 'config.php';
// Connect to the database (assuming $conn is your database connection)

// Fetch student data
$applicants_query = mysqli_query($conn, "SELECT * FROM user_info");

// Display students in a table
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - View Applicants</title>
    <link rel="stylesheet" href="stylesheet.css">

    <style>

    
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color:#e7cbef;
           

        }
        h2 {
            text-align: center;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: black
            width: 100%;
            position: absolute;
            bottom: 0;
        }


     
    </style>
</head>
<body>
<div class="header">
      <img src="brta-logo-new.png" height="50px" width="50px">

      <ul class="nav-links">
          <li><a href="index.html">Home</a></li>
          <li><a href="subscribe.php">About Us</a></li>
          <li><a href="login.php">Form</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="contact.php">Contact Us</a></li>
      </ul>
  </div>
  <br>
  <br>

    <h2>Registered Applicants</h2>
    <br>
    <br>

    <table>
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Email</th>
                <th>Id</th>
                <th>Vehicle_no</th>
                <th>chess_no</th>
                <th>photo</th>
                <th>nid_copy</th>
                <th>present_address</th>
                <th>permanent_address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($applicants_query)) {
                echo "<tr>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['vehicle_no']}</td>";
                echo "<td>{$row['chess_no']}</td>";

                echo "<td>{$row['photo']}</td>";
                echo "<td>{$row['nid_copy']}</td>";
                echo "<td>{$row['present_address']}</td>";
                echo "<td>{$row['permanent_address']}</td>";
                echo "</tr>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
   
    <footer>
      Made with &hearts; by BRTA <br>
      &#169; contact: 09988***, BRTA.in,Inc.
      <br> 
  </footer>
</body>
</html>
