
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">

    <style>
         .user-table-container {
            width: 80%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the container */
        }
        .user-table {
            border-collapse: collapse;
            width: 100%;
        }

        .user-table th{
            background-color:#e7cbef ;
        }


        .user-table th, .user-table td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            
        }
        .delete-btn {
            background-color:brown;
            color: white;
            border: none;
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            cursor: pointer;
        }
        footer{
            position: fixed;
        }
        
        .delete-btn:hover {
            background-color:black
        }

     h3{
         text-align: center;
            }
        </style>
</head>
<body>
<div class="header">
      <img src="brta-logo-new.png" height="50px" width="50px">

      <ul class="nav-links">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="login.php">Form</a></li>
          <li><a href="admin_page.php">My Profile</a></li>
          <li><a href="contact.php">Contact Us</a></li>
      </ul>
  </div>
 
  <h3>Admin Details</h3>
</body>
</html>
<br>
<br>
<br>

<?php
@include 'config.php';


if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $delete_sql = "DELETE FROM user_form WHERE id = $delete_id";
    if ($conn->query($delete_sql) === TRUE) {
        echo "<p style='color: green;'>Record deleted successfully</p>";
    } else {
        echo "<p style='color: red;'>Error deleting record: " . $conn->error . "</p>";
    }
}



// Query to select data where user_type is admin
$sql = "SELECT * FROM user_form WHERE user_type = 'admin'";
$result = $conn->query($sql);

// Display the results in a table format
if ($result->num_rows > 0) {
    echo "<div class='user-table-container'><table class='user-table'><tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>User Type</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td><td>" . $row["user_type"] . "</td><td><form method='post'><input type='hidden' name='delete_id' value='" . $row["id"] . "'><input type='submit' class='delete-btn' value='Delete'></form></td></tr>";
    }
    echo "</table></div>";
} else {
    echo "0 results";
}
// Close the connection
$conn->close();
?>
<br>
<br>
<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<footer>
      Made with &hearts; by BRTA <br>
      &#169; contact: 09988***, BRTA.in,Inc.
      <br> 
  </footer>
    
</body>
</html>