<?php
@include 'config.php';

// Fetch applicants in descending order
$sql = "SELECT * FROM user_info ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>List of Applicants</title>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        .applicant-list {
            text-align: center;
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
           
<div class="header">
      <img src="brta-logo-new.png" height="50px" width="50px">

      <ul class="nav-links">
          <li><a href="index.html">Home</a></li>
          <li><a href="subscribe.php">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="admin_page.php">My Profile</a></li>
          <li><a href="Contact us.html">Contact Us</a></li>
      </ul>
  </div>
    <div class="applicant-list">
        <h2 >List of Applicants</h2>
        <br>
        <br>
        <ul>
            <?php
            // Display applicants in a list with links to their details
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li><a href='applicant_details.php?id={$row['id']}'>{$row['name']}</a></li>";
                }
            } else {
                echo "No applicants found";
            }
            ?>
        </ul>
    </div>

  </body>
  </html>
