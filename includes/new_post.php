<?php 

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

$username = $_POST['username']; 
$title = mysqli_real_escape_string($conn,$_POST['title']);
$description = mysqli_real_escape_string($conn,$_POST['description']); 
$scode = mysqli_real_escape_string($conn,$_POST['lang']); 
$filename = mysqli_real_escape_string($conn,$_POST['fname']);
$id = $_POST['id'];


if(isset($_POST['submit'])){
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO `user_posts`(`title`, `username`, `description`, `scode`,`fname`) VALUES ('$title','$username','$description','$scode','$filename')";
  
  if ($conn->query($sql) === TRUE) {
    header("location: ../online_compiler.php?message=new_post_uploaded_successfully");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}elseif(isset($_POST['update'])){
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "UPDATE `user_posts` SET `title`='$title',`description`='$description',`scode`='$scode',`fname`='$filename' WHERE `id` = $id";
  
  if ($conn->query($sql) === TRUE) {
    header("location: ../user_feed.php?message=post_updated_successfully");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}elseif(isset($_POST['update_admin'])){
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "UPDATE `user_posts` SET `title`='$title',`description`='$description',`scode`='$scode',`fname`='$filename' WHERE `id` = $id";
  
  if ($conn->query($sql) === TRUE) {
    header("location: ../admin/admin-feed.php?message=post_updated_successfully");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}

?>
