<?php

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {

  $id = $_POST["userID"];
  $fname = $_POST["fname"];
  $gitlink =  mysqli_real_escape_string($conn, $_POST["gitlink"]);
  $lnlink =  mysqli_real_escape_string($conn, $_POST["lnlink"]);
  $description = mysqli_real_escape_string($conn, $_POST["description"]);
  $image = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "../user-data/profile-photos/" . $image;


  $sql = "UPDATE users SET `user_ln`='$lnlink',`user_gh`='$gitlink',`userName`='$fname',`user_desc`='$description',`user_photo` = '$image' WHERE `users`.`userID` = $id";

  mysqli_query($conn, $sql);

  if (move_uploaded_file($tempname, $folder)) {
    $msg = "Image uploaded successfully";
  } else {
    $msg = "Failed to upload image";
  }

  // header("location: ../user_dash.php?error=none");
  exit();
} else {
  header("location: ../user_dash.php?error");
}
