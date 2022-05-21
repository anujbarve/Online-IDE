<?php 

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

$username = $_POST['username']; 
$title = $_POST['title']; 
$description = $_POST['description']; 
$scode = $_POST['lang']; 


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO `user_posts`(`title`, `username`, `description`, `scode`) VALUES ('$title','$username','$description','$scode')";

if ($conn->query($sql) === TRUE) {
  header("location: ../online_compiler.php?message=new_post_uploaded_successfully");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>