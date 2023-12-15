<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
  
    body{
        right: 50px;
    background-image: url(body_bg.jpg);
        background-position: center;
        background-attachment: fixed;

}
h3{
  text-decoration:underline;
  text-align: center;
}

footer{
  font-size:18px;
      bottom: 0px;
      width: 100%;
      padding: 20px 0;

}
.map {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh; 
    }
    .map iframe {
      width: 60%; 
      height: 80%; 
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
             <li><a href="login.php">Form</a></li>
             <li><a href="login.php">Login</a></li>
         </ul>
     </div>
     <br>

     <div class="card border-info mb-3 mx-auto" style="width:30%;">
  <div class="card-header bg-info"><h4>Office Address</div>
  <div class="card-body text-dark">
    <h5 class="card-title"></h5>
    <p class="card-text">Bangladesh Road Transport Authority(BRTA)<br>
Head Office, BRTA Bhaban<br>
Chairmanbari, New Airport Road<br>
Banani, Dhaka-1212,<br>
Bangladesh.<br>
Email: info@brta.gov.bd<h4>
</p>
  </div>
</div>

<h3> Location Map<h3>
  <div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d116829.8273110866!2d90.399759!3d23.785432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75ee859f471%3A0x9ec933908d265de7!2sBangladesh%20Road%20Transport%20Authority%20(BRTA)!5e0!3m2!1sen!2sbd!4v1701838232088!5m2!1sen!2sbd" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<br>



    <footer>
      Made with &hearts; by BRTA <br>
      &#169; contact: 09988***, BRTA.in,Inc.
      <br> 
  </footer>  
</body>
</html>