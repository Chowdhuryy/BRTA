<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];

   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "brta";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   // Prepare and execute SQL query
   $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
   $stmt->bind_param("s", $email);

   if ($stmt->execute()) {
       $message = "Successfully subscribed ! Thank you.";
      
   } else {
       $message = "Failed to subscribe. Please try again later.";
   }

   // Close connections
   $stmt->close();
   $conn->close();
}
?>
<p><?php echo $message; ?></p>
    