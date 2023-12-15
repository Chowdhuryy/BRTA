<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="login.css">
   <link rel="stylesheet" href="stylesheet.css">
<style>
  
footer{
   width: 100%;
}
.rounded-div {
  width: 150px; 
  height: 150px; 
  background-image: url('admin.png'); 
  background-size: cover;
  background-position: center; 
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}


</style>

</head>
<body>
<section id="Home">
       
       <div class="header">
         <img src="brta-logo-new.png" height="50px" width="50px">
   
         <ul class="nav-links">
             <li><a href="index.html">Home</a></li>
             <li><a href="about.php">About Us</a></li>
             <li><a href="form.php">Form</a></li>
             <li><a href="contact.php">Contact Us</a></li>
         </ul>
     </div>
   

<div class="container">
   <div class="content">

   <div class="rounded-div"></div>

      <h3>hey,<span>Admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <br>
      <a href="register.php" class="btn">Add new Admin</a>
 
      <a href="admin_details.php" class="btn">See Admin Details</a>
      <a href="admin.php" class="btn">See Applicant Details</a>
      <a href="login.php" class="btn">logout</a>


   </div>

</div>
<footer>
      Made with &hearts; by BRTA <br>
      &#169; contact: 09988***, BRTA.in,Inc.
      <br> 
  </footer>

</body>
</html>