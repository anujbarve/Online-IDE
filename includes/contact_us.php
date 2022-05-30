<?php 

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

$name = $_POST['name']; 
$email = $_POST['email']; 
$subject = $_POST['subject']; 
$message = mysqli_real_escape_string($conn,$_POST['message']);


if(isset($_POST['submit'])){
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
  
  if ($conn->query($sql) === TRUE) {
    header("location: ../contact_us.php?message=query_success");
  } else {
    header("location: ../contact_us.php?message=query_failed");
  }
  
  $conn->close();
}

?>
