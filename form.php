<?php

@include 'config.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $id = $_POST['id'];
  $vehicle_no = $_POST['vehicle_no'];
  $chess_no = $_POST['chess_no'];
  $present_address = $_POST['present_address'];
  $permanent_address = $_POST['permanent_address'];

  $photo = $_FILES['photo']['name'];
  $nid_copy = $_FILES['nid_copy']['name'];

  move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/" . $photo);
  move_uploaded_file($_FILES['nid_copy']['tmp_name'], "uploads/" . $nid_copy);


  $sql = "INSERT INTO user_info (name, email, id, vehicle_no, chess_no, photo, nid_copy, present_address, permanent_address)
  VALUES ('$name', '$email', '$id', '$vehicle_no', '$chess_no', '$photo', '$nid_copy', '$present_address', '$permanent_address')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="stylesheet.css">
<style>

body{
  background-image: url(body_bg.jpg);
 
        background-position: center;
        background-attachment: fixed;
}
</style>
</head>
<body>
<section id="Home">
       
       <div class="header">
         <img src="brta-logo-new.png" height="50px" width="50px">
   
         <ul class="nav-links">
             <li><a href="index.html">Home</a></li>
             <li><a href="About Us.html">About Us</a></li>
             <li><a href="#">Services</a></li>
             <li><a href="login.php">Logout</a></li>
             <li><a href="Contact us.html">Contact Us</a></li>
         </ul>
     </div>
     <br>
  <div class="container">
    <h2>Registration Form</h2>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="text" name="name" placeholder="Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="id" placeholder="ID" required>
      <input type="text" name="vehicle_no" placeholder="Vehicle No" required>
      <input type="text" name="chess_no" placeholder="Chess No" required>
      <input type="file" name="photo" required>
      <input type="file" name="nid_copy" required>
      <textarea name="present_address" placeholder="Present Address" required></textarea>
      <textarea name="permanent_address" placeholder="Permanent Address" required></textarea>
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
  <footer>
      Made with &hearts; by BRTA <br>
      &#169; contact: 09988***, BRTA.in,Inc.
      <br> 
  </footer>
</body>
</html>

